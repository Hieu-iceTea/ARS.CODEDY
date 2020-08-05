@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations_responsive.css') }}">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home home_booking">
        <div class="background_image"
             style="background-image:url({{ asset('/source/images/destinations.jpg') }})"></div>
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
            <!-- Flight Progress -->
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

            <form action="2" method="get">
                <div class="row">
                    <div class="col-lg-9 col-sm-12 mt-5">

                        <div class="locale-vi row">
                            <div class="media">
                                <img class="logo mr-3 mt-2" src="{{ asset('source/images/iconfight.png') }}"
                                     style="width: 40px;height: 40px" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0" style="">Choose your flight</h5>
                                    <h4><span>Ho Chi Minh</span> (SGN) to <span>Ha Noi</span>(HAN)</h4>
                                </div>
                            </div>
                        </div>
                        <div class="Active-date row mt-4">
                            <div class="col">
                                <p>Thursday, July 30, 2020</p>
                            </div>
                        </div>

                        <div class="title row mt-4">
                            <div class="col-3 "></div>
                            <div class="col-3 pl-4 eco">ARS Eco</div>
                            <div class="col-3 pl-3 plus">ARS Plus</div>
                            <div class="col-3 pl-3 business">ARS Business</div>
                        </div>

                        {{--Row data select flight--}}

                        <div class="content-step1 row mt-3">
                            <div class="col-3">
                                <ul class="date-fly w-100">
                                    <li class="mr-3 w-25">
                                        <ul class="text-center">
                                            <li>19:25</li>
                                            <li>DLI</li>
                                        </ul>
                                    </li>
                                    <li class="mr-1 w-75 ">
                                        <ul class="text-center">
                                            <li>01h:55m</li>
                                            <li style="font-size: 14px;">QH 1424</li>
                                            <li style="font-size: 10px;">Airbus A320t</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="text-center">
                                            <li>21:20</li>
                                            <li>HAN</li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-9">
                                <div class="row">
                                    <div class="col-4 text-right ">
                                        <label for="check_eco_flight_schedule_id1">
                                            <div class="check eco">
                                                <span>Select flight</span>

                                                <input class="ml-1" type="radio" id="check_eco_flight_schedule_id1"
                                                       name="select_flight" required
                                                       value="{'flight_schedule_id':1,'seat_type':'eco','price':'599000'}">
                                                <p style="">599,000 VND</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-4 text-right">
                                        <label for="check_eco_flight_schedule_id2">
                                            <div class="check plus">
                                                <span>Select flight </span>
                                                <input class="ml-1" type="radio" id="check_eco_flight_schedule_id2"
                                                       name="select_flight"
                                                       value="{'flight_schedule_id':1,'seat_type':'plus','price':'599000'}">
                                                <p>599,000 VND</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-4 text-right">
                                        <label for="check_eco_flight_schedule_id3">
                                            <div class="check business">
                                                <span>Select flight </span>
                                                <input class="ml-1" type="radio" id="check_eco_flight_schedule_id3"
                                                       name="select_flight"
                                                       value="{'flight_schedule_id':1,'seat_type':'business','price':'599000'}">
                                                <p>599,000 VND</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--Row data select flight--}}

                        <div class="content-step1 row mt-3">
                            <div class="col-3">
                                <ul class="date-fly w-100">
                                    <li class="mr-3 w-25">
                                        <ul class="text-center">
                                            <li>19:25</li>
                                            <li>DLI</li>
                                        </ul>
                                    </li>
                                    <li class="mr-1 w-75 ">
                                        <ul class="text-center">
                                            <li>01h:55m</li>
                                            <li style="font-size: 14px;">QH 1424</li>
                                            <li style="font-size: 10px;">Airbus A320t</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="text-center">
                                            <li>21:20</li>
                                            <li>HAN</li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-9">
                                <div class="row">
                                    <div class="col-4 text-right ">
                                        <label for="check_eco_flight_schedule_id4">
                                            <div class="check eco">
                                                <span>Select flight</span>

                                                <input class="ml-1" type="radio" id="check_eco_flight_schedule_id4"
                                                       name="select_flight"
                                                       value="{'flight_schedule_id':1,'seat_type':'eco','price':'599000'}">
                                                <p style="">599,000 VND</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-4 text-right">
                                        <label for="check_eco_flight_schedule_id5">
                                            <div class="check plus">
                                                <span>Select flight </span>
                                                <input class="ml-1" type="radio" id="check_eco_flight_schedule_id5"
                                                       name="select_flight"
                                                       value="{'flight_schedule_id':1,'seat_type':'plus','price':'599000'}">
                                                <p>599,000 VND</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-4 text-right">
                                        <label for="check_eco_flight_schedule_id6">
                                            <div class="check business">
                                                <span>Select flight </span>
                                                <input class="ml-1" type="radio" id="check_eco_flight_schedule_id6"
                                                       name="select_flight"
                                                       value="{'flight_schedule_id':1,'seat_type':'business','price':'599000'}">
                                                <p>599,000 VND</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=" col-lg-3 mt-5">
                        <div class="card cart-info  w-100" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('source/images/destination_5.jpg') }}"
                                 alt="Card image cap">
                            <div class="card-body text-center" style="position: sticky; top:0;z-index: 10">
                                <h4><span>Ho Chi Minh</span> (SGN) go <span>Ha Noi </span>(HAN)</h4>
                                <p class="card-text">One-way | 1 Adults</p>
                                <p class="card-text-link"><a href="" style="text-decoration: none">Change flight
                                        schedules</a></p>
                            </div>
                        </div>
                        <div class="card-Clearfix card mt-3  w-100" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    <span style="font-size: 20px;color: #33597C;font-weight: 600">Total Money
                                    </span> :
                                    3000.000.000 vnđ
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <p class="card-text">Includes minnows and service fees</p>

                            </div>
                        </div>
                        <div class="card mt-3 cart-content w-100" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title" style="">
                                    <span style="font-size: 20px;color: #33597C;font-weight: 600">Total Money</span> :
                                    3000.000.000 vnđ</h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <h4 style=""><span
                                        style="font-family: 'Oswald', sans-serif;font-weight: bold"></span> (SGN) go
                                    <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>(HAN)
                                </h4>
                                <p class="card-text">CN 02/08/2020 | 19:25 - 20:30</p>
                                <p class="card-text">Adults 1 * 2.500.000 = <span>2.500.000</span></p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-3 w-100 position-sticky continue">Continue
                            <span><i class="fa fa-angle-right"></i></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection
