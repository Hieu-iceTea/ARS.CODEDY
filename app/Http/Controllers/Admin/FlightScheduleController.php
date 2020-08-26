<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Airport;
use App\Model\FlightSchedule;
use App\Model\Plane;
use App\Model\PriceSeatType;
use http\Url;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class FlightScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        if ($keyword != null) {
            $flightSchedules = FlightSchedule
                //join các bảng (leftJoin để lấy tất cả record của bảng chính "flight_schedule")
                ::leftJoin('airport as airportFrom', 'flight_schedule.airport_from_id', '=', 'airportFrom.airport_id')
                ->leftJoin('airport as airportTo', 'flight_schedule.airport_to_id', '=', 'airportTo.airport_id')
                ->leftJoin('plane', 'flight_schedule.plane_id', '=', 'plane.plane_id')
                //Table flight_schedule:
                ->orWhere('flight_schedule.code', '=', $keyword)
                ->orWhere('flight_schedule.departure_at', 'like', '%' . $keyword . '%')
                ->orWhere('flight_schedule.arrival_at', 'like', '%' . $keyword . '%')
                //Table airportFrom:
                ->orWhere('airportFrom.location', 'like', '%' . $keyword . '%')
                ->orWhere('airportFrom.code', 'like', '%' . $keyword . '%')
                ->orWhere('airportFrom.name', 'like', '%' . $keyword . '%')
                //Table airportTo:
                ->orWhere('airportTo.location', 'like', '%' . $keyword . '%')
                ->orWhere('airportTo.code', 'like', '%' . $keyword . '%')
                ->orWhere('airportTo.name', 'like', '%' . $keyword . '%')
                //Table plane:
                ->orWhere('plane.code', 'like', '%' . $keyword . '%')
                ->orWhere('plane.name', 'like', '%' . $keyword . '%')
                //Hoàn thiện: sắp xếp, phân trang
                ->Where('flight_schedule.deleted', '=', false)
                ->orderBy('departure_at', 'desc')
                ->paginate();

            //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
            $flightSchedules->appends(['search' => $keyword]);
        } else {
            $flightSchedules = FlightSchedule::Where('deleted', '=', false)
                ->orderBy('departure_at', 'desc')
                ->paginate();
        }

        return view('admin.flight-schedule.index', compact('flightSchedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //Lấy dữ liệu cho các <Selection>
        $airports = Airport::all();
        $planes = Plane::all();

        return view('admin.flight-schedule.create-edit', compact('airports', 'planes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        //Get data from request [01] schedule, airport, plane.
        $airport_from_id = $request->get('airport_from_id');
        $airport_to_id = $request->get('airport_to_id');
        $plane_id = $request->get('plane_id');
        $code = $request->get('code');
        $departure_at = $request->get('departure_at');
        $arrival_at = $request->get('arrival_at');
        $status = $request->get('status');
        $description = $request->get('description');

        //Get data from request [02] price of seat types.
        $eco_price = $request->get('eco_price');
        $eco_qty_remain = $request->get('eco_qty_remain');
        $eco_qty_total = $request->get('eco_qty_total');
        $plus_price = $request->get('plus_price');
        $plus_qty_remain = $request->get('plus_qty_remain');
        $plus_qty_total = $request->get('plus_qty_total');
        $business_price = $request->get('business_price');
        $business_qty_remain = $request->get('business_qty_remain');
        $business_qty_total = $request->get('business_qty_total');

        //Chuẩn hóa tiền nhập vào (định dạng khi nhập vào [5,599,000.00 ₫] | định dạng mong muốn: [5599000.00])
        $eco_price = str_replace([' ₫', '.'], '', $eco_price);
        $eco_price = str_replace([','], '.', $eco_price);
        $plus_price = str_replace([' ₫', '.'], '', $plus_price);
        $plus_price = str_replace([','], '.', $plus_price);
        $business_price = str_replace([' ₫', '.'], '', $business_price);
        $business_price = str_replace([','], '.', $business_price);

        //[01] Insert into table price_seat_type
        $price_seat_type = new PriceSeatType();
        $price_seat_type->eco_price = $eco_price;
        $price_seat_type->eco_qty_remain = $eco_qty_remain;
        $price_seat_type->eco_qty_total = $eco_qty_total;
        $price_seat_type->plus_price = $plus_price;
        $price_seat_type->plus_qty_remain = $plus_qty_remain;
        $price_seat_type->plus_qty_total = $plus_qty_total;
        $price_seat_type->business_price = $business_price;
        $price_seat_type->business_qty_remain = $business_qty_remain;
        $price_seat_type->business_qty_total = $business_qty_total;
        $price_seat_type->save();

        //[02] Insert into table flight_schedule
        $flight_schedule = new FlightSchedule();
        $flight_schedule->airport_from_id = $airport_from_id;
        $flight_schedule->airport_to_id = $airport_to_id;
        $flight_schedule->plane_id = $plane_id;
        $flight_schedule->price_seat_type_id = $price_seat_type->price_seat_type_id; //Lấy từ record vừa mới Insert vào bảng price_seat_type
        $flight_schedule->code = $code;
        $flight_schedule->departure_at = $departure_at;
        $flight_schedule->arrival_at = $arrival_at;
        $flight_schedule->status = $status;
        $flight_schedule->description = $description;
        $flight_schedule->save();

        //Final
        if ($flight_schedule->flight_schedule_id != null && $price_seat_type->price_seat_type_id != null) {
            return redirect('admin/flight-schedule/' . $flight_schedule->flight_schedule_id)
                ->with('notification', 'Created successfully!');
        } else {
            return redirect()->back()
                ->withErrors('Created failed!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|RedirectResponse|View
     */
    public function show($id)
    {
        $flightSchedule = FlightSchedule::all()->where('flight_schedule_id', $id)->first();

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($flightSchedule) {
            return view('admin.flight-schedule.show', compact('flightSchedule'));
        } else {
            return redirect('admin/flight-schedule')->withErrors('The record does not exist or has been deleted');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        //Lấy dữ liệu cho các <Selection>
        $airports = Airport::all();
        $planes = Plane::all();

        $flightSchedule = FlightSchedule::all()->where('flight_schedule_id', $id)->first();

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($flightSchedule) {
            return view('admin.flight-schedule.create-edit', compact('airports', 'planes', 'flightSchedule'));
        } else {
            return redirect('admin/flight-schedule')->withErrors('The record does not exist or has been deleted');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        //Get data from request [01] schedule, airport, plane.
        $airport_from_id = $request->get('airport_from_id');
        $airport_to_id = $request->get('airport_to_id');
        $plane_id = $request->get('plane_id');
        $code = $request->get('code');
        $departure_at = $request->get('departure_at');
        $arrival_at = $request->get('arrival_at');
        $status = $request->get('status');
        $description = $request->get('description');

        //Get data from request [02] price of seat types.
        $eco_price = $request->get('eco_price');
        $eco_qty_remain = $request->get('eco_qty_remain');
        $eco_qty_total = $request->get('eco_qty_total');
        $plus_price = $request->get('plus_price');
        $plus_qty_remain = $request->get('plus_qty_remain');
        $plus_qty_total = $request->get('plus_qty_total');
        $business_price = $request->get('business_price');
        $business_qty_remain = $request->get('business_qty_remain');
        $business_qty_total = $request->get('business_qty_total');

        //Chuẩn hóa tiền nhập vào (định dạng khi nhập vào [5,599,000.00 ₫] | định dạng mong muốn: [5599000.00])
        $eco_price = str_replace([' ₫', '.'], '', $eco_price);
        $eco_price = str_replace([','], '.', $eco_price);
        $plus_price = str_replace([' ₫', '.'], '', $plus_price);
        $plus_price = str_replace([','], '.', $plus_price);
        $business_price = str_replace([' ₫', '.'], '', $business_price);
        $business_price = str_replace([','], '.', $business_price);

        //[01] Update table flight_schedule
        $flight_schedule = FlightSchedule::where('flight_schedule_id', $id)->update([
            'airport_from_id' => $airport_from_id,
            'airport_to_id' => $airport_to_id,
            'plane_id' => $plane_id,
            'code' => $code,
            'departure_at' => $departure_at,
            'arrival_at' => $arrival_at,
            'status' => $status,
            'description' => $description,
        ]);

        //[02] Update table price_seat_type
        $price_seat_type_id = FlightSchedule::where('flight_schedule_id', $id)->first()->price_seat_type_id;
        $price_seat_type = PriceSeatType::where('price_seat_type_id', $price_seat_type_id)->update([
            'eco_price' => $eco_price,
            'eco_qty_remain' => $eco_qty_remain,
            'eco_qty_total' => $eco_qty_total,
            'plus_price' => $plus_price,
            'plus_qty_remain' => $plus_qty_remain,
            'plus_qty_total' => $plus_qty_total,
            'business_price' => $business_price,
            'business_qty_remain' => $business_qty_remain,
            'business_qty_total' => $business_qty_total,
        ]);

        //Final
        if ($flight_schedule == true && $price_seat_type == true) {
            $flight_schedule_id = FlightSchedule::where('flight_schedule_id', $id)->first()->flight_schedule_id;
            return redirect('admin/flight-schedule/' . $flight_schedule_id)
                ->with('notification', 'Update successfully!');
        } else {
            return redirect()->back()
                ->withErrors('Update failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        FlightSchedule::where('flight_schedule_id', $id)->update([
            'deleted' => true,
        ]);

        if (url()->previous() != url()->current()) {
            return redirect()->back()->with('notification', 'Deleted successfully!');
        } else {
            //Nếu trang trước giống trang hiện tại thì chuyển hướng về trang chủ
            //(tức là ở trang detail, ấn nút xóa. xóa xong redirect()->back() sẽ quay lại trang detail để hiện thị item đã xóa gây ra lỗi)
            return redirect('admin/flight-schedule')->with('notification', 'Deleted successfully!');
        }
    }
}
