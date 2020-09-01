<?php

namespace App\Http\Controllers;

use App\Model\FlightSchedule;
use App\Model\Passenger;
use App\Model\Ticket;
use App\Model\Airport;
use App\Utilities\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        //Lấy dữ liệu cho form tìm kiếm
        $addressAirports = Airport::select('name', 'airport_id', 'location', 'code')->get();

        //Lấy dữ liệu từ form tìm kiếm
        $ticket_code = $request->get('code');
        $airport_from_id = $request->get('from');
        $airport_to_id = $request->get('to');
        $departure_at = $request->get('departure');

        //Truy vấn dữ liệu từ DataBase
        $tickets = Ticket::leftJoin('flight_schedule', 'ticket.flight_schedule_id', '=', 'flight_schedule.flight_schedule_id')
            ->where(function ($query) use ($departure_at, $airport_to_id, $airport_from_id, $ticket_code) {
                if (isset($ticket_code)) {
                    $query->where('ticket.code', '=', $ticket_code);
                }

                if (isset($airport_from_id)) {
                    $query->where('flight_schedule.airport_from_id', '=', $airport_from_id);
                }

                if (isset($airport_to_id)) {
                    $query->where('flight_schedule.airport_to_id', '=', $airport_to_id);
                }

                if (isset($departure_at)) {
                    $query->where('flight_schedule.departure_at', 'like', '%' . $departure_at . '%');
                }
            })
            //Chỉ lấy vé của user đang đăng nhập:
            ->currentUser()
            //Chỉ các thông tin của bảng "ticket" (bỏ qua bảng "flight_schedule"):
            ->select(['ticket.*'])
            ->orderBy('ticket_id', 'desc')
            //Phân trang theo config mặc định đã cài đặt trong Model:
            ->paginate()
            //Giúp chuyển trang page sẽ đính kèm từ khóa search của người dùng:
            ->appends([
                'code' => $ticket_code,
                'from' => $airport_from_id,
                'to' => $airport_to_id,
                'departure' => $departure_at,
            ]);

        return view('pages.ticket.index', compact('addressAirports', 'tickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function detail($id)
    {

        $ticket = Ticket::all()->where('ticket_id', $id)->first();

        return view('pages.ticket.detail', compact('ticket'));
    }

    /**
     * Show the form for editing the schedule.
     *
     * @param int $id
     */
    public function editSchedule($id, Request $request)
    {
        $ticket = Ticket::all()->where('ticket_id', $id)->first();
        if ($ticket->status == Utility::ticket_status_Finish || $ticket->status == Utility::ticket_status_Cancel) {
            return redirect()->back()->withErrors('Invalid action')->with('preloader', 'none');
        }

        //lấy dữ liệu khi chưa tìm kiếm
        $addressAirports = Airport::select('name', 'airport_id', 'location', 'code')->get();

        //lấy dữ liệu khi đã tìm kiếm

        if ($request->get('search') == true) {
            //Get data from request:
            $airport_from_id = $request->get('from');
            $airport_to_id = $request->get('to');
            $departure_at = $request->get('departure');

            $ticket = Ticket::all()->where('ticket_id', $id)->first();
            $passengers = $ticket->passenger;


            $adults = count($passengers->where('passenger_type', 1));
            $children = count($passengers->where('passenger_type', 2));
            $infant = count($passengers->where('passenger_type', 3));
            $totalPassenger = $adults + $children + $infant;

            //get data of Airport from DataBase:
            $airport_from = Airport::all()->where('airport_id', $airport_from_id)->first();
            $airport_to = Airport::all()->where('airport_id', $airport_to_id)->first();

            $searchInput = [
                'airport_from_name' => $airport_from->name,
                'airport_from_code' => $airport_from->code,
                'airport_to_name' => $airport_to->name,
                'airport_to_code' => $airport_to->code,
                'departure_at' => $departure_at,
                'adults' => $adults,
                'children' => $children,
                'infant' => $infant,
                'totalPassenger' => $totalPassenger,
            ];

            //get data Flight-Schedules from DataBase:
            $flightSchedules = FlightSchedule::where('airport_from_id', $airport_from_id)
                ->where('airport_to_id', $airport_to_id)
                ->where('departure_at', 'like', '%' . $departure_at . '%')
                ->get();

            return view('pages.ticket.edit-schedule', compact('addressAirports', 'flightSchedules', 'searchInput', 'airport_to'));
        }

        return view('pages.ticket.edit-schedule', compact('addressAirports'));
    }

    /**
     * Update the schedule in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function updateSchedule(Request $request, $id)
    {
        //lấy dữ liệu từ request
        $seat_type_price = $request->get('seat_type_price');
        $seat_type = $request->get('seat_type');
        $flight_schedule_id = $request->get('flight_schedule_id');

        $ticket = Ticket::all()->where('ticket_id', $id)->first();

        //tính tổng số khách hàng trong 1 vé máy bay
        $passengers = $ticket->passenger;
        $adults = count($passengers->where('passenger_type', 1));
        $children = count($passengers->where('passenger_type', 2));
        $infant = count($passengers->where('passenger_type', 3));
        $total_passenger = $adults + $children + $infant;

        //tính tổng số tiền dịch vụ đi kèm khách hàng mua thêm
        $total_extra_service = 0;
        $extra_services = $ticket->extraServices();
        foreach ($extra_services as $extra_service) {
            $price = $extra_service->price;
            $total_extra_service += $price;
        }

        //tổng số tiền mà khách hàng phải trả (500.000 là phí dịch vụ)
        $total_price = ($seat_type_price * $total_passenger) + $total_extra_service + 500000;

        //cập nhật dữ liệu lên database
        Ticket::where('ticket_id', $id)->update([
            'seat_type' => $seat_type,
            'flight_schedule_id' => $flight_schedule_id,
            'total_price' => $total_price,
            'status' => Utility::ticket_status_Unverified,
        ]);

        //điều hướng cho người dùng
        return redirect('ticket/detail/' . $id)->with('notification', 'Update successful');
    }

    /**
     * Show the form for editing the passenger.
     *
     * @param int $id
     */
    public function editPassenger($id)
    {
        $ticket = Ticket::all()->where('ticket_id', $id)->first();
        if ($ticket->status == Utility::ticket_status_Finish || $ticket->status == Utility::ticket_status_Cancel) {
            return redirect()->back()->withErrors('Invalid action')->with('preloader', 'none');
        }
        $passengers = $ticket->passenger;

        return view('pages.ticket.edit-passenger', compact('passengers', 'ticket'));
    }

    /**
     * Update the passenger in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function updatePassenger(Request $request, $id)
    {
        //get data from Request & Update to DataBase
        foreach ($request->passengers as $passenger) {
            //passenger_type == 3 là trẻ sơ sinh
            if ($passenger['passenger_type'] == 3) {
                $with_passenger = $passenger['with_passenger'];

            } else {
                $with_passenger = '';
            }

            Passenger::where('passenger_id', $passenger['passenger_id'])->update([
                'gender' => $passenger['gender'],
                'first_name' => $passenger['first_name'],
                'last_name' => $passenger['last_name'],
                'dob' => $passenger['dob'],
                'with_passenger' => $with_passenger,
            ]);
        }


        return redirect()->to('ticket/detail/' . $id)
            ->with('notification', 'Update successful')
            ->with('preloader', 'none');
    }

    /**
     * Complete payment.
     *
     * @param int $id
     */
    public function payment($id)
    {
        return view('pages.ticket.payment');
    }
}
