<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    //Index trong Ticket
    public function index(){
        return view('pages.ticket.index');
    }

    //Detaill của Ticket
    public function detail($id){
        return view('pages.ticket.detail');
    }

    //Edit shedule của Ticket
    public function editSchedule($id){
        return view('pages.ticket.edit-ticket');
    }

    //Update shedule của Ticket
    public function updateSchedule(Request $request, $id){

    }
    //Edit passenger của Ticket
    public function editPassenger($id){
        return view('pages.ticket.edit-passenger');
    }

    //Update passenger của Ticket
    public function updatePassenger(Request $request, $id){

    }

    //Payment của Ticket
    public function payment($id){
        return view('pages.ticket.payment');
    }

}
