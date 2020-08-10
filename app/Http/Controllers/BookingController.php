<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Show the form for Booking/Step-1.
     *
     */
    public function getStep1()
    {
        return view('pages.booking.step-1');
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
