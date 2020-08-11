<?php

namespace App\Http\Controllers;

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

        $flightSchedules = FlightSchedule::where('airport_from_id', $airport_from_id)
            ->where('airport_to_id', $airport_to_id)->get();

        $data = ['flightSchedules' => $flightSchedules];

        return view('pages.booking.step-1', $data);
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
