<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Ticket;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        if ($keyword != null) {
            $tickets = Ticket
                //join các bảng (leftJoin để lấy tất cả record của bảng chính)
                ::leftJoin('flight_schedule', 'ticket.flight_schedule_id', '=', 'flight_schedule.flight_schedule_id')
                ->leftJoin('airport as airportFrom', 'flight_schedule.airport_from_id', '=', 'airportFrom.airport_id')
                ->leftJoin('airport as airportTo', 'flight_schedule.airport_to_id', '=', 'airportTo.airport_id')
                ->leftJoin('pay_type', 'ticket.pay_type_id', '=', 'pay_type.pay_type_id')
                //Table ticket (Bảng chính):
                ->where('ticket.code', '=', $keyword)
                ->orWhere('contact_first_name', 'like', '%' . $keyword . '%')
                ->orWhere('contact_last_name', 'like', '%' . $keyword . '%')
                ->orWhere('contact_email', 'like', '%' . $keyword . '%')
                ->orWhere('contact_phone', 'like', '%' . $keyword . '%')
                //Table flight_schedule:
                ->orWhere('flight_schedule.departure_at', 'like', '%' . $keyword . '%')
                //Table airportFrom:
                ->orWhere('airportFrom.location', 'like', '%' . $keyword . '%')
                ->orWhere('airportFrom.code', 'like', '%' . $keyword . '%')
                ->orWhere('airportFrom.name', 'like', '%' . $keyword . '%')
                //Table airportTo:
                ->orWhere('airportTo.location', 'like', '%' . $keyword . '%')
                ->orWhere('airportTo.code', 'like', '%' . $keyword . '%')
                ->orWhere('airportTo.name', 'like', '%' . $keyword . '%')
                //Table pay_type:
                ->orWhere('pay_type.name', 'like', '%' . $keyword . '%')
                //
                ->select(['*', 'ticket.code as code', 'ticket.status as status']) //Những cột nào có ở nhiều bảng, thì phải chỉ định rõ muốn lấy ở bảng nào.
                ->orderBy('ticket.ticket_id', 'desc')
                ->paginate();

            //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
            $tickets->appends(['search' => $keyword]);
        } else {
            $tickets = Ticket::orderBy('ticket_id', 'desc')
                ->paginate();
        }

        return view('admin.ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse
     */
    public function create()
    {
        return redirect()->back()
            ->with('notification', 'This feature is not yet supported. But dont worry, we will update it soon!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);

        return view('admin.ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function edit($id)
    {
        return redirect()->back()
            ->with('notification', 'This feature is not yet supported. But dont worry, we will update it soon!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        return redirect()->back()
            ->with('notification', 'This feature is not yet supported. But dont worry, we will update it soon!');
    }
}
