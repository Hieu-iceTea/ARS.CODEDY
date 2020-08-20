<?php

namespace App\Http\Controllers;

use App\Model\Passenger;
use App\Model\Ticket;
use App\Model\Airport;
use App\Utilities\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)

    {
        $code = $request->get('code');

        $tickets = Ticket::all()->where('user_id', Auth::user()->user_id);
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
        $ticket = Ticket::all()->where('ticket_id', $id)->first();
        $passengers = $ticket->passenger;

        return view('pages.ticket.edit-passenger', compact('passengers','ticket'));
    }

    /**
     * Update the passenger in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function updatePassenger(Request $request, $id)
    {
        //get data from Request & Update to DataBase
        foreach ($request->passengers as $passenger) {
            //passenger_type == 3 là trẻ sơ sinh
            if ($passenger['passenger_type'] == 3) {
                $with_passenger = $passenger['with_passenger'];
            } else {
                $with_passenger = '';
            }

            Passenger::where('passenger_id', $passenger['passenger_id'])->update([
                'gender' => $passenger['gender'],
                'first_name' => $passenger['first_name'],
                'last_name' => $passenger['last_name'],
                'dob' => $passenger['dob'],
                'with_passenger' => $with_passenger,
            ]);
        }


        return redirect()->to('ticket/detail/' . $id)
            ->with('notification', 'Update successful')
            ->with('preloader', 'none');
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
