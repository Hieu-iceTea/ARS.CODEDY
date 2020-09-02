<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FlightSchedule;
use  App\Model\Airport;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {

        $code = $request->get('code');

        $fs = new FlightSchedule();
        $flightSchedules = $fs->getFlightScheduleByCode($code);

        return view('pages.schedule.index', compact('flightSchedules'));
    }
}
