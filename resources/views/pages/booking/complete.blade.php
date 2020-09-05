@extends('pages.layout.master')

@section('title', 'Booking - Complete')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
@endsection

<!-- Content Home -->
@section('Content')

    <div class="home home_booking">
        <div class="background_image"
             style="background-image:url({{ asset('img/destinations.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title mt-5"><h2>Complete</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Body -->
    <div class="body_booking container-fluid">
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-6 p-0">
                    <img style="border-radius: 4px; width: 82%"
                         src="img/airport/{{ $ticket->flightSchedule->airportTo->image }}" alt="">
                    <p class="ml-3">
                        <b>{{ $ticket->flightSchedule->airportTo->location }}</b>
                    </p>
                </div>
                <div class="col-lg-6 p-0">
                    <h2 style="color: #00305B">
                        <i class="fa fa-plane"></i>
                    </h2>
                    <h1 style="font-size: 48px; color: #00305B" class="mb-0">
                        <b>Booking completed.</b>
                        <br>
                        Have a good trip to {{ $ticket->flightSchedule->airportTo->location }}!
                        <br>
                        <span style="font-size: 15px; color: black">Please check your email for flight confirmation!
                        </span>
                    </h1>
                    <a href="ticket/detail/query?ticketCode={{ $ticket->code }}&email={{ $ticket->contact_email }}&phone={{ $ticket->contact_phone }}" style="display:block; max-width: 300px">
                        <div style="font-size: 20px; padding: 20px; border: 1px solid #B1B3B6; border-radius: 4px"
                             class="text-center mt-3">
                            Your Booking Code is
                            <br>
                            <b>{{ $ticket->code }}</b>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection
