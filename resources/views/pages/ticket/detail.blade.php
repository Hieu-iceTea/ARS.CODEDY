@extends('pages.layout.master')

@section('title', 'Ticket Detail')

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

    {{-- Query form --}}
    @if(request()->segment(3) == 'query')
        <div class="container mt-4 mb-5">
            <div class="row ticket_query bg-light">
                <div class="col">
                    <div class="newsletter p-5">
                        <div class="newsletter_title_container text-center">
                            <div class="newsletter_title mb-5">
                                To look up the reservation, please enter 3 following items exactly:
                            </div>
                        </div>
                        <div class="">
                            <form method="get"
                                  class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                                <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                    <div style="width: 32%">
                                        <input type="text" id="ticketCode" name="ticketCode" autocomplete="off"
                                               value="{{ request('ticketCode') }}"
                                               class="newsletter_input" placeholder="Ticket code" required>
                                        <div class="input_border"></div>
                                    </div>
                                    <div style="width: 32%">
                                        <input type="email" id="email" name="email" autocomplete="off"
                                               value="{{ request('email') }}"
                                               class="newsletter_input" placeholder="Your e-mail" required>
                                        <div class="input_border"></div>
                                    </div>
                                    <div style="width: 32%">
                                        <input type="tel" id="phone" name="phone" autocomplete="off"
                                               value="{{ request('phone') }}"
                                               class="newsletter_input" placeholder="Your phone" required>
                                        <div class="input_border"></div>
                                    </div>
                                </div>
                                <div>
                                    <button class="newsletter_button">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Data --}}
    @if($ticket != null)
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
                        <a href="{{ request()->fullUrl() }}#">
                            <span class="ticket_detail_coloredit" style="font-weight: 500; font-size: 23px">
                                {{ $ticket->code }}
                            </span>
                        </a>
                    </p>
                    @if(\Illuminate\Support\Facades\Auth::id() == $ticket->user_id)
                        <form class="d-inline" method="post" action="{{ 'ticket/detail/' . $ticket->ticket_id }}">
                            @csrf
                            @method('DELETE')
                            <button class="border-0 btn btn-sm btn-outline-danger" type="submit"
                                    data-toggle="tooltip" title="Cancel" data-placement="bottom"
                                    onclick="return confirm('Do you really want to cancel this ticket?')">
                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                        <i class="fa fa-times fa-w-20"></i>
                                    </span>
                                <span>Cancel</span>
                            </button>
                        </form>
                        |
                        <a href="" class="border-0 btn btn-sm btn-outline-primary">
                            <span class="btn-icon-wrapper pr-1 opacity-8">
                                        <i class="fa fa-paypal fa-w-20"></i>
                                    </span>
                            <span>Pay now</span>
                        </a>
                    @endif
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
                        @if(\Illuminate\Support\Facades\Auth::id() == $ticket->user_id)
                            <div class="col-3 my-3 text-right">
                                <a href="ticket/edit-schedule/{{$ticket->ticket_id}}"
                                   class="btn btn-outline-primary tiket_detail_continue position-sticky continue">
                                    Change flight schedules
                                    <span><i class="fa fa-angle-right"></i></span>
                                </a>
                            </div>
                        @endif
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
                                @if(\Illuminate\Support\Facades\Auth::id() == $ticket->user_id)
                                    <th scope="col">Function</th>
                                @endif
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

                                    @if(\Illuminate\Support\Facades\Auth::id() == $ticket->user_id)
                                        <td>
                                            <a style="" href="ticket/edit-passenger/{{$ticket->ticket_id}}">
                                                Change passenger information >
                                            </a>
                                        </td>
                                    @endif
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
    @elseif(request('email') != null && request('phone') != null)
        <div class="container mt-3 mb-5">
            <div class="row ticket_query">
                <div class="col">
                    <div class="newsletter p-0">
                        <div class="newsletter_title_container text-center">
                            <div class="newsletter_title" style="font-size: 30px">
                                No data found 🙄
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('script')
    <script type="text/javascript" src="js/custom.js"></script>
@endsection
