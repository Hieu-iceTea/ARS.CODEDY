<?php

namespace App\Http\Controllers;
use App\Model\Ticket;
use App\Model\Airport;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)

    {
        $code = $request->get('code');

        $tickets = Ticket::all()->where('user_id', 1);
        $addressAirports = Airport::select('name', 'airport_id', 'location', 'code')->get();

        return view('pages.ticket.index', compact('tickets', 'addressAirports'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function detail($id)
    {


        $ticket = Ticket::all()->where('ticket_id', $id)->first();

        return view('pages.ticket.detail', compact('ticket'));
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
