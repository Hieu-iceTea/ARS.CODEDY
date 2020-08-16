<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Model\Airport;
use App\Model\ExtraService;
use App\Model\FlightSchedule;
use App\Model\Passenger;
use App\Model\PayType;
use App\Model\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    /**
     * Show the form for Booking/Step-1.
     *
     * @param BookingRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function getStep1(Request $request)
    {
        //Kiểm tra dữ liệu nhập vào có null không? Nếu null thì quay về trang chủ và báo lỗi
        if ($request->get('from') == '') {
            return redirect('/')
                ->with('notification', 'Please search for your flight first!')
                ->with('preloader', 'none');
        }

        //Get data from request:
        $airport_from_id = $request->get('from');
        $airport_to_id = $request->get('to');
        $departure_at = $request->get('departure');

        $adults = $request->get('adults');
        $children = $request->get('children');
        $infant = $request->get('infant');
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

        if (count($flightSchedules) > 0) {
            return view('pages.booking.step-1', compact('flightSchedules', 'searchInput', 'airport_to'));
        } else {
            return redirect('/')
                ->with('notification', "Sorry, we don't have any flights yet with your chosen information!")
                ->with('preloader', 'none');
        }
    }

    /**
     * Receive data and redirect to the next page.
     *
     * @param BookingRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postStep1(BookingRequest $request)
    {
        $flight_schedule_id = $request->get('flight_schedule_id');
        if ($flight_schedule_id == '') {
            return redirect()->back()->withInput()->withErrors('Please choose flight');
        }

        //get data from form (in hidden-field)
        $booking_session = [
            'flight_schedule_id' => $request->get('flight_schedule_id'),
            'flightSchedule' => FlightSchedule::find($request->get('flight_schedule_id')),
            'seat_type' => $request->get('seat_type'),
            'seat_price' => $request->get('seat_price'),

            'passenger_count' => $request->get('passenger_count'),
        ];

        //put to session
        $this->updateSession('booking_session', $booking_session);

        return redirect('booking/step-2');
    }

    /**
     * Show the form for Booking/Step-2.
     *
     * @param Request $request
     */
    public function getStep2(Request $request)
    {
        //Kiểm tra phiên session còn tồn tại không? Nếu không thì quay về trang chủ và báo lỗi
        if (!Session::has('booking_session') || Session::get('booking_session') === null) {
            return redirect('/')
                ->withErrors('Session expires. <br> please search again for your flight')
                ->with('preloader', 'none');
        }

        //get data from Session:
        $booking_session = Session::get('booking_session');

        $passenger_count = $booking_session['passenger_count'];

        return view('pages.booking.step-2', compact('passenger_count', 'booking_session'));
    }

    /**
     * Receive data and redirect to the next page.
     *
     * @param BookingRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postStep2(BookingRequest $request)
    {
        //get data from request:
        $new_data = [
            'passengers' => $request->get('passengers'),
            'contact' => $request->get('contact'),
        ];

        //update booking_session:
        $this->updateSession('booking_session', $new_data);

        return redirect('booking/step-3');
    }

    /**
     * Show the form for Booking/Step-3.
     *
     */
    public function getStep3()
    {
        //Kiểm tra phiên session còn tồn tại không? Nếu không thì quay về trang chủ và báo lỗi
        if (!Session::has('booking_session') || Session::get('booking_session') === null) {
            return redirect('/')
                ->withErrors('Session expires! <br> please search again for your flight')
                ->with('preloader', 'none');
        }

        $booking_session = Session::get('booking_session');
        $extraServices = ExtraService::all();

        return view('pages.booking.step-3', compact('extraServices', 'booking_session'));
    }

    /**
     * Receive data and redirect to the next page.
     *
     * @param BookingRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postStep3(BookingRequest $request)
    {
        //get data from request:
        $new_data = [
            'extra_service_ids' => $request->get('extra_service_ids'),
            'extraService_total_price' => $request->get('extraService_total_price'),
        ];

        //update booking_session:
        $this->updateSession('booking_session', $new_data);

        return redirect('booking/step-4');
    }

    /**
     * Show the form for Booking/Step-4.
     *
     */
    public function getStep4()
    {
        //Kiểm tra phiên session còn tồn tại không? Nếu không thì quay về trang chủ và báo lỗi
        if (!Session::has('booking_session') || Session::get('booking_session') === null) {
            return redirect('/')
                ->withErrors('Session expires! <br> please search again for your flight')
                ->with('preloader', 'none');
        }

        $booking_session = Session::get('booking_session');
        $payTypes = PayType::all();

        $data = array_merge($booking_session, ['payTypes' => $payTypes]);

        return view('pages.booking.step-4', $data);
    }

    /**
     * Receive data and redirect to the completed page.
     *
     * @param BookingRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postStep4(BookingRequest $request)
    {
        $pay_type = $request->get('pay_type');

        if ($pay_type != 1) {
            return back()
                ->withInput()
                ->setTargetUrl('#payment_details')
                ->withErrors('Currently, we do not support online payments. <br> Please choose "Pay Later" in the payment methods section.')
                ->with('preloader', 'none');
        }
        //Get data from Session & Request:
        $booking_session = Session::get('booking_session');
        $pay_type = $request->get('pay_type');

        //Insert to Ticket:
        $ticket = new Ticket();
        $ticket->user_id = Auth::user()->user_id ?? null;
        $ticket->flight_schedule_id = $booking_session['flight_schedule_id'];
        //$ticket->promotion_id = 'promotion_id';
        $ticket->pay_type_id = $booking_session['seat_type'];
        $ticket->extra_service_ids = implode(',', $booking_session['extra_service_ids'] ?? []);
        $ticket->seat_type = $booking_session['seat_type'];
        //$ticket->status = 'status'; //đã đặt mặc định là 1 trong DB
        $ticket->code = Str::upper(Str::random(6));
        $ticket->contact_gender = $booking_session['contact']['contact_gender'];
        $ticket->contact_first_name = $booking_session['contact']['contact_firstname'];
        $ticket->contact_last_name = $booking_session['contact']['contact_lastname'];
        $ticket->contact_email = $booking_session['contact']['contact_email'];
        $ticket->contact_phone = $booking_session['contact']['contact_phone'];
        $ticket->contact_address = $booking_session['contact']['contact_address'];
        $ticket->total_price = $booking_session['passenger_count']['total'] * $booking_session['seat_price'] + $booking_session['extraService_total_price'] + 500000;
        $ticket->total_passenger = $booking_session['passenger_count']['total'];
        //$ticket->description = 'description';
        $ticket->save();
        if ($ticket->ticket_id == '') {
            return back()->withErrors('Cannot add data to table: [Ticket]')->with('preloader', 'none');
        }

        //Insert to Passenger:
        $passengers = $booking_session['passengers'];
        foreach ($passengers as $item) {
            $passenger = new Passenger();
            $passenger->ticket_id = $ticket->ticket_id;
            $passenger->gender = $item['gender'];
            $passenger->passenger_type = $item['passenger_type'];
            $passenger->first_name = $item['first_name'];
            $passenger->last_name = $item['last_name'];
            $passenger->dob = $item['dob'];
            $passenger->with_passenger = $item['with_passenger'] ?? null;
            $passenger->save();
            if ($passenger->passenger_id == '') {
                return back()->withErrors('Cannot add data to table: [Passenger]')->with('preloader', 'none');
            }
        }

        //Send email:
        $email_to = $ticket->contact_email;
        Mail::send('pages.booking.email', compact('ticket'), function ($message) use ($email_to) {
            $message->from('ars.codedy@gmail.com', 'ARS.CODEDY');
            $message->to($email_to, $email_to);
            //$message->cc('', ''); //gửi cho chủ cửa hàng
            $message->subject('Your Reservation Details');
        });

        return redirect('booking/complete/' . $ticket->ticket_id);
    }

    public function complete($id)
    {
        //Xóa session liên quan đến booking
        Session::forget('booking_session');

        //get code from DataBase by ticket_id
        $ticket = Ticket::find($id);

        return view('pages.booking.complete', compact('ticket'));
    }

    // = = = = = = = = = = = = = = = = = = = = Common method = = = = = = = = = = = = = = = = = = = = //

    /**
     * Cập nhật session.
     * Thêm $data mới vào session hiện tại theo $key.
     * Nếu data mới trùng tên có sẵn trong session đang gọi thì ghi đè nó.
     *
     * @param $key
     * @param $data
     */
    private function updateSession($key, $data)
    {
        //get data from Session:
        $session = Session::get($key) ?? [];

        //update $session:
        $session = array_merge($session, $data);

        //put new data to session:
        Session::put($key, $session);
    }
}
