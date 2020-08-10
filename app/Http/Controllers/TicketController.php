<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('pages.ticket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function detail($id)
    {
        return view('pages.ticket.detail');
    }

    /**
     * Show the form for editing the schedule.
     *
     * @param int $id
     */
    public function editSchedule($id)
    {
        return view('pages.ticket.edit-schedule');
    }

    /**
     * Update the schedule in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function updateSchedule(Request $request, $id)
    {
        //
        return redirect('ticket/detail/' . $id)->with('notification', 'Update successful');
    }

    /**
     * Show the form for editing the passenger.
     *
     * @param int $id
     */
    public function editPassenger($id)
    {
        return view('pages.ticket.edit-passenger');
    }

    /**
     * Update the passenger in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function updatePassenger(Request $request, $id)
    {
        //
        return redirect('ticket/detail/' . $id)->with('notification', 'Update successful');
    }

    /**
     * Complete payment.
     *
     * @param int $id
     */
    public function payment($id)
    {
        return view('pages.ticket.payment');
    }
}
