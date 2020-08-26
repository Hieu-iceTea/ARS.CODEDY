<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Airport;
use App\Model\FlightSchedule;
use App\Model\Plane;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
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
        $airports = Airport::all();
        $planes = Plane::all();

        return view('admin.flight-schedule.create-edit', compact('airports', 'planes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $airports = Airport::all();
        $planes = Plane::all();

        $flightSchedule = FlightSchedule::all()->where('flight_schedule_id', $id)->first();

        return view('admin.flight-schedule.create-edit', compact('airports', 'planes', 'flightSchedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
