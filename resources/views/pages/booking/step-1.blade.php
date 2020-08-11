@extends('pages.layout.master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home home_booking">
        <div class="background_image"
             style="background-image:url({{ asset('img/destinations.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title mt-5"><h2>Get your flight</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Body -->
    <div class="body_booking container-fluid">
        <div class="container">
            <!-- Flight booking process -->
            <div class="row flight_progress_row">
                <div class="col-3 col-sm-3">
                    <div class="flightProgress active">
                        <div class="step_number">1</div>
                        <div class="step_description">Flights</div>
                    </div>
                </div>
                <div class="col-3 col-sm-3">
                    <div class="flightProgress">
                        <div class="step_number">2</div>
                        <div class="step_description">Passenger details</div>
                    </div>
                </div>
                <div class="col-3 col-sm-3">
                    <div class="flightProgress">
                        <div class="step_number">3</div>
                        <div class="step_description">Extras</div>
                    </div>
                </div>
                <div class="col-3 col-sm-3">
                    <div class="flightProgress">
                        <div class="step_number">4</div>
                        <div class="step_description">Payment</div>
                    </div>
                </div>
            </div>

            <form action="step-2" method="get">
                <div class="row">
                    {{-- form main --}}
                    <div class="col-lg-9 col-sm-12 mt-5">

                        <div class="locale-vi row">
                            <div class="media">
                                <img class="logo mr-3 mt-2" src="{{ asset('img/iconfight.png') }}"
                                     style="width: 40px;height: 40px" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0" style="">Choose your flight</h5>
                                    <h4><span>Ho Chi Minh</span> (SGN) to <span>Ha Noi</span>(HAN)</h4>
                                </div>
                            </div>
                        </div>
                        <h5 class="row title_session mt-4">Thursday, July 30, 2020</h5>

                        <div class="title row mt-4">
                            <div class="col-3 "></div>
                            <div class="col-3 pl-4 eco">ARS Eco</div>
                            <div class="col-3 pl-3 plus">ARS Plus</div>
                            <div class="col-3 pl-3 business">ARS Business</div>
                        </div>

                        {{-- Row data select flight --}}
                        @foreach($flightSchedules as $flightSchedule)
                            <div class="content-step1 row mt-3">
                                <div class="col-3">
                                    <ul class="date-fly w-100">
                                        <li class="mr-3 w-25">
                                            <ul class="text-center">
                                                <li>{{ date('H:i', strtotime($flightSchedule->departure_at)) }}</li>
                                                <li>{{ $flightSchedule->airportFrom->code }}</li>
                                            </ul>
                                        </li>
                                        <li class="mr-1 w-75 ">
                                            <ul class="text-center">
                                                <li>{{ date('H\\h:i\\m', strtotime($flightSchedule->arrival_at) - strtotime($flightSchedule->departure_at)) }}</li>
                                                <li style="font-size: 14px;">{{ $flightSchedule->code }}</li>
                                                <li style="font-size: 10px;">{{ $flightSchedule->plane->name }}</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="text-center">
                                                <li>{{ date('H:i', strtotime($flightSchedule->arrival_at)) }}</li>
                                                <li>{{ $flightSchedule->airportTo->code }}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-4 text-right ">
                                            <label for="check_eco_{{ $flightSchedule->flight_schedule_id }}">
                                                <div class="check eco">
                                                    <span>Select flight</span>
                                                    <input id="check_eco_{{ $flightSchedule->flight_schedule_id }}"
                                                           class="ml-1" name="select_flight" value="eco" type="radio"
                                                           required
                                                           onclick="setValue({{ $flightSchedule->flight_schedule_id }}, this.value, {{ $flightSchedule->priceSeatType->eco_price }})">
                                                    <p>{{ number_format($flightSchedule->priceSeatType->eco_price, 0, ',', '.') }}
                                                        VND</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-4 text-right">
                                            <label for="check_plus_{{ $flightSchedule->flight_schedule_id }}">
                                                <div class="check plus">
                                                    <span>Select flight </span>
                                                    <input id="check_plus_{{ $flightSchedule->flight_schedule_id }}"
                                                           class="ml-1" name="select_flight" value="plus" type="radio"
                                                           required
                                                           onclick="setValue({{ $flightSchedule->flight_schedule_id }}, this.value, {{ $flightSchedule->priceSeatType->plus_price }})">
                                                    <p>{{ number_format($flightSchedule->priceSeatType->plus_price, 0, ',', '.') }}
                                                        VND</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-4 text-right">
                                            <label for="check_business_{{ $flightSchedule->flight_schedule_id }}">
                                                <div class="check business">
                                                    <span>Select flight </span>
                                                    <input id="check_business_{{ $flightSchedule->flight_schedule_id }}"
                                                           class="ml-1" name="select_flight" value="business"
                                                           type="radio" required
                                                           onclick="setValue({{ $flightSchedule->flight_schedule_id }}, this.value, {{ $flightSchedule->priceSeatType->business_price }})">
                                                    <p>{{ number_format($flightSchedule->priceSeatType->business_price, 0, ',', '.') }}
                                                        VND</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- ./ Row data select flight --}}

                    </div>

                    {{-- cart_info bên phải --}}
                    <div class=" col-lg-3 mt-5">
                        <div class="card cart-info  w-100" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('img/destination_5.jpg') }}"
                                 alt="Card image cap">
                            <div class="card-body text-center" style="position: sticky; top:0;z-index: 10">
                                <h4><span>Ho Chi Minh</span> (SGN)</h4>
                                <h4>to</h4>
                                <h4><span>Ha Noi </span>(HAN)</h4>
                                <p class="card-text">One-way | 1 Passenger</p>
                            </div>
                        </div>
                        {{--                        <div class="card-Clearfix card mt-3  w-100" style="width: 18rem;">--}}
                        {{--                            <div class="card-body text-center">--}}
                        {{--                                <h5 class="card-title">--}}
                        {{--                                    <span style="font-size: 20px;color: #33597C;font-weight: 600">Total Money--}}
                        {{--                                    </span> :--}}
                        {{--                                    3000.000.000 vnđ--}}
                        {{--                                </h5>--}}
                        {{--                                <h6 class="card-subtitle mb-2 text-muted"></h6>--}}
                        {{--                                <p class="card-text">Includes minnows and service fees</p>--}}

                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="card mt-3 cart-content w-100" style="width: 18rem;">--}}
                        {{--                            <div class="card-body text-center">--}}
                        {{--                                <h5 class="card-title" style="">--}}
                        {{--                                    <span style="font-size: 20px;color: #33597C;font-weight: 600">Total Money</span> :--}}
                        {{--                                    3000.000.000 vnđ</h5>--}}
                        {{--                                <h6 class="card-subtitle mb-2 text-muted"></h6>--}}
                        {{--                                <h4 style=""><span--}}
                        {{--                                        style="font-family: 'Oswald', sans-serif;font-weight: bold"></span> (SGN) go--}}
                        {{--                                    <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>(HAN)--}}
                        {{--                                </h4>--}}
                        {{--                                <p class="card-text">CN 02/08/2020 | 19:25 - 20:30</p>--}}
                        {{--                                <p class="card-text">Adults 1 * 2.500.000 = <span>2.500.000</span></p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <button type="submit" class="btn mt-3 w-100 position-sticky continue">Continue
                            <span><i class="fa fa-angle-right"></i></span></button>
                    </div>
                </div>
                <input type="hidden" name="flight_schedule_id" value="">
                <input type="hidden" name="seat_type" value="">
                <input type="hidden" name="seat_price" value="">
                @csrf
            </form>
        </div>
    </div>

    <script type="text/javascript">
        function setValue(flight_schedule_id, seat_type, seat_price) {
            alert('Bạn chọn: ' + flight_schedule_id + seat_type + seat_price)
        }
    </script>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection
