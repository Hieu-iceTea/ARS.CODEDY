<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //Index của Schedule
    public function index(){
        return view('pages.schedule.index');
    }
}
