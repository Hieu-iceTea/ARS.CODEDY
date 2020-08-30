@extends('pages.layout.master')

@section('title', 'Edit Ticket')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/my_styles">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home Background Header-->
    <div class="home page_ticket my_home">

        <div class="background_image" style="background-image:url(img/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Ticket information </h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mt-4 mb-5">
        <div class="row  pl-3 pr-2">
            <div class="col-8">
                <div class="row mb-4 booking2_color_logo">
                    <div class="media">
                        <i class="fa fa-plane" aria-hidden="true" style="font-size: 400%"></i>
                        <div class="media-body ml-4">
                            <h5 class="mt-0">Journey details</h5>
                            <h4>Your current reservation</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 ticket_detail_fontfamily ticket_detail_fontsize text-right">
                <p class="ticket_detail_fontfamily ticket_detail_fontsize">
                    Ticket code:
                    <a href="#">
                        <span class="ticket_detail_coloredit" style="font-weight: 500; font-size: 23px">
                            {{ $ticket->code }}
                        </span>
                    </a>
                </p>
                <a href="">Cancel</a>
                |
                <a href="">Pay</a>
            </div>
        </div>
        <div class="card w-100">
            <h5 class="card-header booking2_color_title tiket_detail_title">Flight Information</h5>
            <div class="container mt-3 mb-0 pl-4 pr-4">
                <div class="row">
                    <div class="col-6">
                        <p class="ticket_detail_fontfamily ticket_detail_fontsize">Flight to go <span
                                class="ticket_detail_coloredit"><strong>{{ date('l, F d, Y', strtotime($ticket->flightSchedule->departure_at)) }}.</strong></span>
                            From <span>{{ $ticket->flightSchedule->airportFrom->location}}</span>
                            to <span>{{ $ticket->flightSchedule->airportTo->location }}</span></p>
                    </div>
                    <div class="col-6 text-right">
                        <p class=" ticket_detail_fontsize ticket_detail_fontfamily">Time remaining before takeoff:
                            <span class="ticket_detail_coloredit" style="font-weight: 500">
                            {{ date_diff(date_create($ticket->flightSchedule->arrival_at), date_create(\Carbon\Carbon::now()->toDateTimeString()))->format('%M month, %D day, %Hh:%Im') }}
                        </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card mx-4 mb-4 mt-3 ticket_detail_fontsize ticket_detail_fontfamily">
                <div class="row">
                    <div class="col-2 ml-4">
                        <p class=" ticket_detail_fontsize ticket_detail_fontfamily ticket_detail_coloredit">
                            <span>{{ date('H:i', strtotime($ticket->flightSchedule->departure_at)) }}</span></p>
                        <p class="ticket_detail_fontfamily tiket_detail_add ticket_detail_coloredit">
                            <span>{{ $ticket->flightSchedule->airportFrom->location}}</span>
                        </p>
                    </div>
                    <div class="col-1 tiket_detail_mode">
                        <p class="ticket_detail_fontfamily ticket_detail_coloredit"> > </p>
                    </div>
                    <div class="col-2">
                        <p class="ticket_detail_fontfamily ticket_detail_fontsize ticket_detail_coloredit">
                            <span>{{ date('H:i', strtotime($ticket->flightSchedule->arrival_at)) }}</span></p>
                        <p class="ticket_detail_fontfamily tiket_detail_add ticket_detail_coloredit">
                            <span>{{ $ticket->flightSchedule->airportTo->location }}</span></p>
                    </div>
                    <div class="col-2 mt-3">
                        <p class="ticket_detail_fontfamily ticket_detail_fontsize ticket_detail_coloredit">
                            <span>{{ $ticket->flightSchedule->plane->code }}</span></p>
                    </div>
                    <div class="col-2 ticket_arsplus mt-3">
                        <p class="ticket_detail_fontfamily">
                            ARS {{ \App\Utilities\Utility::$seat_type[$ticket->seat_type] }}</p>
                    </div>
                    <div class="col-3 my-3 text-right">
                        <a href="ticket/edit-schedule/{{$ticket->ticket_id}}"
                           class="btn btn-outline-primary tiket_detail_continue position-sticky continue">
                            Change flight schedules
                            <span><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card w-100 mt-5 ">
            <h5 class="card-header tiket_detail_title">Passenger Information</h5>
            <div class="row mt-3">
                <div class="card w-100 my-4 mx-5">
                    <table class="table w-100">
                        <thead class="ticket_detail_table">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Function</th>
                        </tr>
                        </thead>
                        <tbody class="ticket_detail_table">

                        @php($count = 1)

                        @foreach($ticket->passenger as $key => $passenger)
                            <tr>
                                <th scope="row">{{ ++$key}}</th>
                                @if($passenger->gender == 1)
                                    <td>Made</td>
                                @else
                                    <td>Female</td>
                                @endif
                                <td>{{ $passenger->last_name.' '.$passenger->first_name }}</td>
                                @if($passenger->passenger_type == 1)
                                    <td>Adults</td>
                                @elseif($passenger->passenger_type == 2)
                                    <td>Children</td>
                                @elseif($passenger->passenger_type == 3)
                                    <td>Baby</td>
                                @endif

                                <td><a style="" href="ticket/edit-passenger/{{$ticket->ticket_id}}">Change passenger
                                        information ></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card w-100 mt-5">
            <h5 class="card-header tiket_detail_title">Payment Details</h5>
            <div class="row mt-3">
                <div class="card w-100 my-4 mx-5">
                    <table class="table w-100">
                        <thead class="ticket_detail_table">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Payment Type</th>
                            <th scope="col">Amount of money</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody class="ticket_detail_table">
                        <tr>
                            <th scope="row">{{$count = 1}}</th>
                            <td>{{ $ticket->payType->name }}</td>
                            <td>{{ number_format($ticket->total_price, 0, ',', '.') }}
                                VND
                            </td>
                            <td>{{ \App\Utilities\Utility::$ticket_status[$ticket->status] }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card w-100 mt-5">
            <h5 class="card-header tiket_detail_title">Additional Service</h5>
            <div class="row mt-3">
                <div class="card w-100 my-4 mx-5">
                    <table class="table w-100 ticket_detail_table">
                        <thead class="ticket_detail_table">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody class="ticket_detail_table">
                        {{--{{ $count = 1 }}--}}
                        @foreach($ticket->extraServices() as $key => $extraService)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $extraService->name}}</td>
                                <td>{!! $extraService->description !!}</td>
                                <td>{{ $extraService->price}} VND</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/custom.js"></script>
@endsection
