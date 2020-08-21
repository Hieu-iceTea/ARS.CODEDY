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
             style="background-image:url({{ asset('img/destinations.jpg') }})"></div>
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
                                           placeholder="enter code" value="{{ $code ?? '' }}">
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
            <div class="row ">
                <div class="title-flight">
                    @if($code == null)
                        <h4> Recent Flight</h4>
                    @else
                        <h4>Result Research ({{ count($flightSchedules) }})</h4>
                    @endif
                </div>
            </div>
            @if(count($flightSchedules) != 0)
                <div class="row">
                    <table class="table">
                        <thead class="heade-table text-uppercase">
                        <tr>
                            <th scope="col">CODE</th>
                            <th scope="col">TO</th>
                            <th scope="col">FROM</th>
                            <th scope="col">Departure At</th>
                            <th scope="col">Arrival At</th>
                        </tr>
                        </thead>
                        <tbody class="active ">
                        @foreach($flightSchedules as $flightSchedule)
                            <tr class="">
                                <th scope="row">{{ $flightSchedule->code }}</th>
                                <td>{{ $flightSchedule->airportFrom->name }}</td>
                                <td>{{ $flightSchedule->airportTo->name }}</td>
                                <td>{{ $flightSchedule->departure_at }}</td>
                                <td>{{ $flightSchedule->arrival_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class ="pagination-lg mb-5">
                        {{ $flightSchedules->links()  }}
                    </div>
                </div>
            @else
                <div class="row">
                    <div class=" col resultSearch" style="height: 200px;">
                        <p class="text-black-50 bg-light"
                           style="padding: 30px;width: 100%; height: 100px;box-shadow: 5px 10px 8px #dcdcdc;font-size: 22px;font-weight: bold; font-family: 'Oswald', sans-serif;">
                            Your flight was not found</p>
                    </div>

                </div>
            @endif
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection
