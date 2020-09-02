@extends('pages.layout.master')

@section('title', 'Ticket')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home page_ticket">

        <div class="background_image" style="background-image:url(img/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Manage your tickets</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Search -->
    <div class="home_search page_ticket">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Search for your ticket</div>
                        <div class="home_search_content">
                            <form action="ticket" method="get" class="home_search_form" id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    <input type="search" id="code" name="code" value="{{ request('code') }}"
                                           placeholder="Code"
                                           class="search_input search_input_1">

                                    <select class="search_input search_input_2" id="from" name="from">
                                        <option selected value="">-- From --</option>
                                        @foreach($addressAirports as $addressAirport)
                                            <option value="{{ $addressAirport->airport_id }}"
                                                {{ request('from') == $addressAirport->airport_id ? 'selected' : '' }}>
                                                {{ $addressAirport->location }} | {{ $addressAirport->name }}
                                                ({{ $addressAirport->code }})
                                            </option>
                                        @endforeach
                                    </select>

                                    <select class="search_input search_input_3" id="to" name="to">
                                        <option selected value="">-- To --</option>
                                        @foreach($addressAirports as $addressAirport)
                                            <option value= {{ $addressAirport->airport_id }}
                                                {{ request('to') == $addressAirport->airport_id ? 'selected' : '' }}>
                                                {{ $addressAirport->location }} | {{ $addressAirport->name }}
                                                ({{ $addressAirport->code }})
                                            </option>
                                        @endforeach
                                    </select>

                                    <input type="date" id="departure" name="departure"
                                           value="{{ request('departure') }}"
                                           class="search_input search_input_4">
                                    <button class="home_search_button" type="submit">search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Destinations -->

    <div class="ticket_list page_ticket" id="">
        <div class="container">
            <div class="row mt-4 mb-3">
                <div class="col pl-0">
                    <div class="table_title">
                        @if(request('code') == null && request('from') == null && request('to') == null && request('departure') == null)
                            <h4>Your ticket list</h4>
                        @else
                            <h4>Result Research</h4>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <table class="table table-info-tickets table-hover ">
                    <thead class="table-top">
                    <tr>
                        <th scope="col">#Code</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Departure At</th>
                        <th scope="col">Passenger</th>
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody class="active">
                    @foreach($tickets as $ticket)
                        <tr>
                            <th scope="row">#{{ $ticket->code }}</th>
                            <td style=" text-transform: capitalize;">{{ $ticket->flightSchedule->airportFrom->location }} ({{ $ticket->flightSchedule->airportFrom->name }})</td>
                            <td style=" text-transform: capitalize;">{{ $ticket->flightSchedule->airportTo->location }} ({{ $ticket->flightSchedule->airportTo->name }})</td>
                            <td>{{ date('H\hi d/m/Y', strtotime($ticket->flightSchedule->departure_at)) }}</td>
                            <td>{{ count($ticket->passenger->where('ticket_id',$ticket->ticket_id)) }}
                                (Adult: {{count($ticket->passenger->where('passenger_type',1))}},
                                Children:{{count($ticket->passenger->where('passenger_type',2))}},
                                Baby: {{count($ticket->passenger->where('passenger_type',3))}})
                            </td>
                            <td>
                                <a href="{{ Route('detail',$ticket->ticket_id) }}">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination my_pagination mb-5">
                    {{ $tickets->links()  }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection
