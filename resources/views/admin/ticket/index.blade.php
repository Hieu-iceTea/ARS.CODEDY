@extends('admin.layout.master')

@section('title', 'Ticket')

@section('main')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Ticket Management
                        <div class="page-title-subheading">
                            View, create, update, delete and manage ticket.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="{{ url()->current() . '/create' }}"
                       class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        New Ticket
                    </a>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-header">

                        <form>
                            <div class="input-group">
                                <input type="search" name="search" value="{{ request('search') }}"
                                       placeholder="Search everything"
                                       class="form-control">
                                <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search"></i>&nbsp;
                                            Search
                                        </button>
                                    </span>
                            </div>
                        </form>

                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="active btn btn-focus">This week</button>
                                <button class="btn btn-focus">Anytime</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#CODE</th>
                                <th>Ticket Overview</th>
                                <th class="text-center">Schedule</th>
                                <th class="text-center">Payment</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($tickets as $ticket)
                                <tr>
                                    <td class="text-center text-muted">#{{ $ticket->code }}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img style="width: 45px;" class="rounded-circle"
                                                             src="../img/favicon.gif" alt="">
                                                        {{--<img style="height: 60px;" class=""
                                                             src="../img/airport/{{ $ticket->flightSchedule->airportTo->image }}"
                                                             alt="image of arrival airport"
                                                             data-toggle="tooltip" title="image of arrival airport"
                                                             data-placement="bottom">--}}
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div
                                                        class="widget-heading">{{ $ticket->contact_first_name . ' ' . $ticket->contact_last_name }}</div>
                                                    <div class="widget-subheading opacity-8">
                                                        <span
                                                            class="badge_seat_type {{ \App\Utilities\Utility::$seat_type[$ticket->seat_type] }}">{{ \App\Utilities\Utility::$seat_type[$ticket->seat_type] }}</span>
                                                        {{ ' | ' . count($ticket->passenger) . ' passengers' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div
                                                        class="widget-subheading opacity-10">{{ $ticket->flightSchedule->airportFrom->name . ' > ' . $ticket->flightSchedule->airportTo->name }}</div>
                                                    <div class="widget-subheading opacity-10">
                                                        {{ date('l, F d, Y H:i', strtotime($ticket->flightSchedule->departure_at)) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-subheading opacity-10">
                                                        <img style="height: 25px;" alt="" class="m-auto"
                                                             src="../img/pay_type/{{ $ticket->payType->image }}">
                                                    </div>
                                                    <div class="widget-subheading opacity-10">
                                                        {{ number_format($ticket->total_price, 0, ',', '.') }} ₫
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div
                                            class="badge badge-{{ \App\Utilities\Utility::$ticket_status_badge[$ticket->status] }} opacity-9 mt-2">
                                            {{ \App\Utilities\Utility::$ticket_status[$ticket->status] }}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url()->current() . '/' . $ticket->ticket_id }}"
                                           class="btn btn-primary btn-hover-shine btn-sm">
                                            Details
                                        </a>
                                        <a href="{{ url()->current() . '/' . $ticket->ticket_id . '/edit' }}"
                                           data-toggle="tooltip" title="Edit" data-placement="bottom"
                                           class="btn btn-warning btn-sm">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-edit fa-w-20"></i>
                                            </span>
                                        </a>
                                        <form class="d-inline"
                                              action="{{ url()->current() . '/' . $ticket->ticket_id }}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-hover-shine btn-sm" type="submit"
                                                    data-toggle="tooltip" title="Delete" data-placement="bottom"
                                                    onclick="return confirm('Do you really want to delete this item?')">
                                                    <span class="btn-icon-wrapper opacity-8">
                                                        <i class="fa fa-trash fa-w-20"></i>
                                                    </span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="d-block card-footer">
                        {{ $tickets->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
