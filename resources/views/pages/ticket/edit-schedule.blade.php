@extends('pages.layout.master')

@section('title', 'Ticket - Edit Schedule')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
@endsection

<!-- Content Home -->
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
                            <div class="home_title"><h2>Change flight schedules</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Search -->
    <div class="home_search search_flight">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container mt-5">
                        <div class="home_search_title">Re-search for your flight</div>
                        <div class="home_search_content">
                            <form method="get" class="home_search_form"
                                  onsubmit="preloaderActive(9999)"
                                  id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    {{--Hiện thị tên các sân bay đi--}}
                                    <select class="search_input search_input_1" id="from" name="from"
                                            required="required" style="width: 300px">
                                        <option selected value="">-- From --</option>
                                        @foreach($addressAirports as $addressAirport)
                                            <option
                                                {{ request('from') == $addressAirport->airport_id ? 'selected' : '' }} value= {{ $addressAirport->airport_id }}>{{ $addressAirport->location }}
                                                | {{ $addressAirport->name }} ( {{ $addressAirport->code }} )
                                            </option>
                                        @endforeach
                                    </select>

                                    {{--Hiện thị tên các sân bay đến--}}
                                    <select class="search_input search_input_2" id="to" name="to"
                                            required="required" style="width: 300px">
                                        <option selected value="">-- To --</option>
                                        @foreach($addressAirports as $addressAirport)
                                            <option
                                                {{ request('to') == $addressAirport->airport_id ? 'selected' : '' }} value= {{ $addressAirport->airport_id }}>{{ $addressAirport->location }}
                                                | {{ $addressAirport->name }} ( {{ $addressAirport->code }} )
                                            </option>
                                        @endforeach
                                    </select>

                                    <input type="date" id="departure" name="departure"
                                           value="{{ request('departure') }}" required
                                           class="search_input search_input_3" style="width: 170px">

                                    <button class="home_search_button" type="submit" name="search" value=true>
                                        search
                                    </button>
                                </div>
                                <input type="hidden" id="total_passenger" name="total_passenger">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <span id="target_when_failedValidation"></span>

    <!-- Body -->
    @if(request('search') == true)
        <div class="body_booking container-fluid pt-4">
            <div class="container">

                <form method="post" onsubmit="preloaderActive(9999)">
                    <div class="row">
                        {{-- form main --}}
                        <div class="col-lg-9 col-sm-12">

                            <div class="locale-vi row">
                                <div class="media">
                                    <img class="logo mr-3 mt-2" src="{{ asset('img/iconfight.png') }}"
                                         style="width: 40px;height: 40px" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0" style="">Choose your flight</h5>
                                        <h4>
                                            <span>{{  $searchInput['airport_from_name'] }}</span>
                                            ({{ $searchInput['airport_from_code'] }}) to
                                            <span>{{ $searchInput['airport_to_name'] }}</span>
                                            ({{ $searchInput['airport_to_code'] }})
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <h5 class="row title_session mt-4">{{ date('l, F d, Y', strtotime($searchInput['departure_at'])) }}</h5>

                            @if(count($flightSchedules) > 0)
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
                                                            <input onchange="preloaderActive()"
                                                                   id="check_eco_{{ $flightSchedule->flight_schedule_id }}"
                                                                   class="ml-1" name="seat_type" value="1" type="radio"
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
                                                            <input onchange="preloaderActive()"
                                                                   id="check_plus_{{ $flightSchedule->flight_schedule_id }}"
                                                                   class="ml-1" name="seat_type" value="2" type="radio"
                                                                   onclick="setValue({{ $flightSchedule->flight_schedule_id }}, this.value, {{ $flightSchedule->priceSeatType->plus_price }})">
                                                            <p>{{ number_format($flightSchedule->priceSeatType->plus_price, 0, ',', '.') }}
                                                                VND</p>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <label
                                                        for="check_business_{{ $flightSchedule->flight_schedule_id }}">
                                                        <div class="check business">
                                                            <span>Select flight </span>
                                                            <input onchange="preloaderActive()"
                                                                   id="check_business_{{ $flightSchedule->flight_schedule_id }}"
                                                                   class="ml-1" name="seat_type" value="3" type="radio"
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
                            @else
                                <div class="content-step1 row mt-3">
                                    <div class="col-12">
                                        <div class="row">
                                            <h5>Sorry, we don't have any flights yet with your chosen information!</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>

                        {{-- cart_info bên phải --}}
                        <div class=" col-lg-3">
                            <div class="card cart-info  w-100" style="width: 18rem;">
                                <img class="card-img-top" src="img/airport/{{ $airport_to->image }}"
                                     alt="Card image cap">
                                <div class="card-body text-center" style="position: sticky; top:0;z-index: 10">
                                    <h4><span>{{ $searchInput['airport_from_name'] }}</span>
                                        ({{ $searchInput['airport_from_code'] }})</h4>
                                    <h4>to</h4>
                                    <h4><span>{{ $searchInput['airport_to_name'] }}</span>
                                        ({{ $searchInput['airport_to_code'] }})</h4>
                                    <p class="card-text">{{--One-way | --}}{{ $searchInput['totalPassenger'] }}
                                        Passenger</p>
                                </div>
                            </div>
                            <div class="card-Clearfix card mt-3  w-100" style="width: 18rem;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">
                                    <span
                                        style="font-size: 20px;color: #33597C;font-weight: 600">Sub Total
                                    </span> :
                                        <span class="sub_total">
                                        0
                                    </span> VND
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                                    <p class="card-text">Includes minnows and service fees</p>

                                </div>
                            </div>
                            <div class="card mt-3 cart-content w-100" style="width: 18rem;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="">
                                        <span style="font-size: 20px;color: #33597C;font-weight: 600">Total</span> :
                                        <span id="total_price">
                                        0
                                    </span>
                                        VND
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                                    <h4 style=""><span
                                            style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>
                                        ({{ $searchInput['airport_from_code'] }}) to
                                        <span
                                            style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>({{ $searchInput['airport_to_code'] }}
                                        )
                                    </h4>

                                    <p class="card-text">{{ date('l, F d, Y', strtotime($searchInput['departure_at'])) }}</p>
                                    <hr>

                                    <p class="card-text">Adults: {{ $searchInput['adults'] }} * <span
                                            class="sub_total">0</span> = <span id="total_price_adults">0</span></p>
                                    <p class="card-text">Children: {{ $searchInput['children'] }} * <span
                                            class="sub_total">0</span> = <span id="total_price_children">0</span></p>
                                    <p class="card-text">Infant: {{ $searchInput['infant'] }} * <span
                                            class="sub_total">0</span> = <span id="total_price_infant">0</span></p>
                                </div>
                            </div>

                            <button type="submit" class="btn mt-3 w-100 position-sticky continue"
                                    onclick="return confirm('Are you sure to change to this new flight?')"
                                    @if(count($flightSchedules) == 0) disabled @endif>
                                Change
                                <i class="fa fa-angle-right ml-1"></i>
                            </button>
                        </div>
                    </div>

                    <input type="hidden" id="flight_schedule_id" name="flight_schedule_id" value="">
                    <input type="hidden" id="seat_type" name="seat_type" value="">
                    <input type="hidden" id="seat_type_price" name="seat_type_price" value="">

                    @csrf
                </form>
            </div>
        </div>
    @endif

    <script type="text/javascript">
        function setValue(flight_schedule_id, seat_type, seat_type_price) {

            //set value to hidden-field input
            document.getElementById('flight_schedule_id').value = flight_schedule_id;
            document.getElementById('seat_type').value = seat_type;
            document.getElementById('seat_type_price').value = seat_type_price;

        }
    </script>
@endsection

@section('script')
    <script src="js/custom.js"></script>

@endsection
