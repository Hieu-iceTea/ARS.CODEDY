<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //Step 1 trong Booking
    public function getStep1(){
        return view('pages.booking.step1');
    }
    public function postStep1( Request $request){

    }
    //Step 2 trong Booking
    public function getStep2(){
        return view('pages.booking.step2');
    }
    public function postStep2( Request $request){

    }
    //Step 3 trong Booking
    public function getStep3(){
        return view('pages.booking.step3');
    }
    public function postStep3( Request $request){

    }
    //Step 4 trong Booking
    public function getStep4(){
        return view('pages.booking.step4');
    }
    public function postStep4( Request $request){

    }
}
