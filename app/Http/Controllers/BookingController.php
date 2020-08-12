<?php

namespace App\Http\Controllers;

use App\Model\Airport;
use App\Model\FlightSchedule;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Show the form for Booking/Step-1.
     *
     */
    public function getStep1(Request $request)
    {
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

        return view('pages.booking.step-1', compact('flightSchedules', 'searchInput'));

        //if (count($flightSchedules) > 0) {
        //    return view('pages.booking.step-1', compact('flightSchedules', 'searchInput'));
        //} else {
        //    return redirect('/')->with('notification', 'Không tìm thấy chuyến bay nào')->with('preloader', 'none');
        //}
    }

    /**
     * Receive data and redirect to the next page.
     *
     */
    public function postStep1(Request $request)
    {
        //
        return redirect('booking/step-2');
    }

    /**
     * Show the form for Booking/Step-2.
     *
     */
    public function getStep2()
    {
        return view('pages.booking.step-2');
    }

    /**
     * Receive data and redirect to the next page.
     *
     */
    public function postStep2(Request $request)
    {
        //
        return redirect('booking/step-3');
    }

    /**
     * Show the form for Booking/Step-3.
     *
     */
    public function getStep3()
    {
        return view('pages.booking.step-3');
    }

    /**
     * Receive data and redirect to the next page.
     *
     */
    public function postStep3(Request $request)
    {
        //
        return redirect('booking/step-4');
    }

    /**
     * Show the form for Booking/Step-4.
     *
     */
    public function getStep4()
    {
        return view('pages.booking.step-4');
    }

    /**
     * Receive data and redirect to the completed page.
     *
     */
    public function postStep4(Request $request)
    {
        //
        return redirect('booking/complete', 'complete')->with('status', 'complete');
    }

    public function complete()
    {
        return view('pages.booking.complete');
    }
}
