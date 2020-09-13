@extends('pages.layout.master')

@section('title', 'Schedule')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/my_styles">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home page_ticket">

        <div class="background_image"
             style="background-image:url({{ asset('img/about.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title "><h2>Flight Schedule</h2></div>
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
                        <div class="home_search_title">Search code Filght</div>
                        <div class="home_search_content">
                            <form action="schedule" method="get" class="home_search_form"
                                  id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    <input type="text" class="search_input search_input_1  w-75" id="code" name="code"
                                           placeholder="enter code" value="{{ request('code') }}">
                                    <button class="home_search_button ml-5" type="submit">search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule index -->
    <div class="schedule-index">
        <div class="container">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="title-flight mt-4 mb-3">
                        @if(request('code') == null)
                            <h4>Recent Flight</h4>
                        @else
                            <h4>Result Research</h4>
                        @endif
                    </div>
                </div>
            </div>
            @if(count($flightSchedules) > 0)
                <div class="row mb-5">
                    <div class="col-12">
                        <table class="table">
                            <thead class="heade-table">
                            <tr>
                                <th scope="col">#Code</th>
                                <th scope="col">To</th>
                                <th scope="col">From</th>
                                <th scope="col">Departure At</th>
                                <th scope="col">Arrival At</th>
                            </tr>
                            </thead>
                            <tbody class="active ">
                            @foreach($flightSchedules as $flightSchedule)
                                <tr class="">
                                    <th scope="row">#{{ $flightSchedule->code }}</th>
                                    <td>{{ $flightSchedule->airportFrom->location }}
                                        ({{ $flightSchedule->airportFrom->name }})
                                    </td>
                                    <td>{{ $flightSchedule->airportTo->location }}
                                        ({{ $flightSchedule->airportTo->name }})
                                    </td>
                                    <td>{{ date('H\hi, l, F d, Y', strtotime($flightSchedule->departure_at)) }}</td>
                                    <td>{{date('H\hi, l, F d, Y', strtotime($flightSchedule->arrival_at))  }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="my_pagination">
                            {{ $flightSchedules->links()  }}
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class=" col resultSearch" style="height: 200px;">
                        <p class="text-black-50 bg-light"
                           style="padding: 30px;width: 100%; height: 100px;box-shadow: 5px 10px 8px #dcdcdc;font-size: 22px;font-weight: bold; font-family: 'Oswald', sans-serif;">
                            Your flight was not found
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection
