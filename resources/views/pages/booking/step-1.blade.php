@extends('pages.layout.master')

@section('title', 'Booking' . (request()->segment(2) == 'step-1' ? ' - Step 1' : ''))

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
@endsection

<!-- Content Home -->
@section('Content')

    <!-- Modal Flight Search -->
    @include('pages.booking.components.modal_flight_search')

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
                            <span id="target_when_failedValidation"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Body -->
    @if(!isset($isShowModalFlightSearch))
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

                <form method="post">
                    <div class="row">
                        {{-- form main --}}
                        <div class="col-lg-9 col-sm-12 mt-5">

                            <div class="locale-vi row">
                                <div class="media">
                                    <img class="logo mr-3 mt-2" src="{{ asset('img/iconfight.png') }}"
                                         style="width: 40px;height: 40px" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0" style="">Choose your flight</h5>
                                        <h4>
                                            <span>{{ $searchInput['airport_from_name'] }}</span>
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
                                                        <li style="font-size: 18px">{{ date('H:i', strtotime($flightSchedule->departure_at)) }}</li>
                                                        <li>{{ $flightSchedule->airportFrom->code }}</li>
                                                    </ul>
                                                </li>
                                                <li class="mr-1 w-75 ">
                                                    <ul class="text-center">
                                                        <li style="margin-bottom: 3px">
                                                        <span
                                                            style="font-size: 13px; font-weight: 400; background-color: #B1B3B6; color: white; padding: 3px 6px; border-radius: 12px;">
                                                            {{ date_diff(date_create($flightSchedule->arrival_at), date_create($flightSchedule->departure_at))->format('%Hh %im') }}
                                                        </span>

                                                        </li>
                                                        <li style="font-size: 14px;">{{ $flightSchedule->code }}</li>
                                                        <li style="font-size: 10px;">{{ $flightSchedule->plane->name }}</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul class="text-center">
                                                        <li style="font-size: 18px">{{ date('H:i', strtotime($flightSchedule->arrival_at)) }}</li>
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
                                                            <input
                                                                id="check_eco_{{ $flightSchedule->flight_schedule_id }}"
                                                                class="ml-2" name="select_flight" value="1" type="radio"
                                                                {{ $flightSchedule->priceSeatType->eco_qty_remain == 0 || $flightSchedule->priceSeatType->eco_qty_remain < request('adults') + request('children') + request('infant') ? 'disabled' : '' }}
                                                                onchange="setValue({{ $flightSchedule->flight_schedule_id }}, this.value, {{ $flightSchedule->priceSeatType->eco_price }}, {{ $searchInput['adults'] }}, {{ $searchInput['children'] }}, {{ $searchInput['infant'] }})">
                                                            <p>{{ number_format($flightSchedule->priceSeatType->eco_price, 0, ',', '.') }}
                                                                VND</p>

                                                            @if($flightSchedule->priceSeatType->eco_qty_remain == 0)
                                                                <div class="seats-left">
                                                                    <span>Sold out</span>
                                                                </div>
                                                            @elseif($flightSchedule->priceSeatType->eco_qty_remain < 20)
                                                                <div class="seats-left">
                                                                    <span>Only {{ $flightSchedule->priceSeatType->eco_qty_remain }} seats left for this price</span>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <label for="check_plus_{{ $flightSchedule->flight_schedule_id }}">
                                                        <div class="check plus">
                                                            <span>Select flight </span>
                                                            <input
                                                                id="check_plus_{{ $flightSchedule->flight_schedule_id }}"
                                                                class="ml-2" name="select_flight" value="2" type="radio"
                                                                {{ $flightSchedule->priceSeatType->plus_qty_remain == 0 || $flightSchedule->priceSeatType->plus_qty_remain < request('adults') + request('children') + request('infant') ? 'disabled' : '' }}
                                                                onchange="setValue({{ $flightSchedule->flight_schedule_id }}, this.value, {{ $flightSchedule->priceSeatType->plus_price }}, {{ $searchInput['adults'] }}, {{ $searchInput['children'] }}, {{ $searchInput['infant'] }})">
                                                            <p>{{ number_format($flightSchedule->priceSeatType->plus_price, 0, ',', '.') }}
                                                                VND</p>

                                                            @if($flightSchedule->priceSeatType->plus_qty_remain == 0)
                                                                <div class="seats-left">
                                                                    <span>Sold out</span>
                                                                </div>
                                                            @elseif($flightSchedule->priceSeatType->plus_qty_remain < 20)
                                                                <div class="seats-left">
                                                                    <span>Only {{ $flightSchedule->priceSeatType->plus_qty_remain }} seats left for this price</span>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <label
                                                        for="check_business_{{ $flightSchedule->flight_schedule_id }}">
                                                        <div class="check business">
                                                            <span>Select flight </span>
                                                            <input
                                                                id="check_business_{{ $flightSchedule->flight_schedule_id }}"
                                                                class="ml-2" name="select_flight" value="3" type="radio"
                                                                {{ $flightSchedule->priceSeatType->business_qty_remain == 0 || $flightSchedule->priceSeatType->business_qty_remain < request('adults') + request('children') + request('infant') ? 'disabled' : '' }}
                                                                onchange="setValue({{ $flightSchedule->flight_schedule_id }}, this.value, {{ $flightSchedule->priceSeatType->business_price }}, {{ $searchInput['adults'] }}, {{ $searchInput['children'] }}, {{ $searchInput['infant'] }})">
                                                            <p>{{ number_format($flightSchedule->priceSeatType->business_price, 0, ',', '.') }}
                                                                VND</p>

                                                            @if($flightSchedule->priceSeatType->business_qty_remain == 0)
                                                                <div class="seats-left">
                                                                    <span>Sold out</span>
                                                                </div>
                                                            @elseif($flightSchedule->priceSeatType->business_qty_remain < 20)
                                                                <div class="seats-left">
                                                                    <span>Only {{ $flightSchedule->priceSeatType->business_qty_remain }} seats left for this price</span>
                                                                </div>
                                                            @endif
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
                                        <div class="row justify-content-center mt-3 mb-3">
                                            <h4>No flights Available</h4>
                                        </div>
                                        <div class="row justify-content-center mb-2">
                                            <h5>Sorry, we don't have any flights yet with your chosen information!</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>

                        {{-- cart_info bên phải --}}
                        <div class=" col-lg-3 mt-5">
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

                                    <!-- Button trigger modalFlightSearch -->
                                    <button type="button"
                                            class="btn btn-sm tiket_detail_continue btn-outline-primary mt-2 w-100"
                                            data-toggle="modal"
                                            style="font-weight: 500"
                                            data-target="#modalFlightSearch">
                                        <i class="fa fa-plane mr-2"
                                           style="position: relative; top: 2px; font-size: 150% !important;"></i>
                                        Change flight details
                                    </button>

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
                                    @if(count($flightSchedules) == 0) disabled @endif>
                                Continue <span><i class="fa fa-angle-right"></i></span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" id="flight_schedule_id" name="flight_schedule_id" value="">
                    <input type="hidden" id="seat_type" name="seat_type" value="">
                    <input type="hidden" id="seat_price" name="seat_price" value="">

                    <input type="hidden" id="adults" name="passenger_count[adults]" value="">
                    <input type="hidden" id="children" name="passenger_count[children]" value="">
                    <input type="hidden" id="infant" name="passenger_count[infant]" value="">
                    <input type="hidden" id="total_passenger" name="passenger_count[total]" value="">
                    @csrf
                </form>
            </div>
        </div>

        <script type="text/javascript">
            function setValue(flight_schedule_id, seat_type, seat_price, adults, children, infant) {
                preloaderActive();

                //set value to hidden-field input
                document.getElementById('flight_schedule_id').value = flight_schedule_id;
                document.getElementById('seat_type').value = seat_type;
                document.getElementById('seat_price').value = seat_price;
                document.getElementById('adults').value = adults;
                document.getElementById('children').value = children;
                document.getElementById('infant').value = infant;
                document.getElementById('total_passenger').value = adults + children + infant;

                //set value to label info
                // document.getElementById('sub_total').innerText = seat_price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
                const sub_totals = document.getElementsByClassName('sub_total');
                for (const sub_total of sub_totals) {
                    sub_total.innerText = seat_price.toLocaleString("vi-vn");
                }

                const total_price_adults = adults * seat_price;
                const total_price_children = children * seat_price;
                const total_price_infant = infant * seat_price;
                const total_price = total_price_adults + total_price_children + total_price_infant;
                document.getElementById('total_price_adults').innerText = total_price_adults.toLocaleString("vi-vn");
                document.getElementById('total_price_children').innerText = total_price_children.toLocaleString("vi-vn");
                document.getElementById('total_price_infant').innerText = total_price_infant.toLocaleString("vi-vn");
                document.getElementById('total_price').innerText = total_price.toLocaleString("vi-vn");
            }
        </script>
    @endif

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>

    @if(isset($isShowModalFlightSearch))
        {{-- Tắt preloader --}}

        {{-- Hiện thị form tìm kiếm --}}
        <script>
            $('#modalFlightSearch').modal('show');
        </script>
    @endif
@endsection
