@extends('pages.layout.master')

@section('title', 'Booking - Step 4')

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
             style="background-image:url(img/destinations.jpg)"></div>
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
                    <div class="flightProgress">
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
                    <div class="flightProgress active">
                        <div class="step_number">4</div>
                        <div class="step_description">Payment</div>
                    </div>
                </div>
            </div>

            <form method="post">
                @csrf
                <div class="row">
                    {{-- form main --}}
                    <div class="col-lg-9 col w-100">
                        <!-- Review your trip -->
                        <div class="row mt-5 mb-4">
                            <div class="section-header color-blue">
                                <h3>
                                    <i class="fa fa-sun-o"></i>
                                    Review your trip
                                </h3>
                            </div>
                        </div>

                        <div class="fligh-step4 row">

                            <div class="card w-100">
                                <h5 class="card-header title_card">Flight</h5>

                                <div class="card-body">
                                    <h4>Outbound flight:
                                        {{ date('l, F d, Y', strtotime($flightSchedule->departure_at)) }}
                                    </h4>
                                    <table class="table table-borderless table-sm w-50 mb-1">
                                        <thead>
                                        <tr>
                                            <th scope="col"
                                                style="color: #636466">{{ date('H:i', strtotime($flightSchedule->departure_at)) }}</th>
                                            <td scope="col">{{ $flightSchedule->airportFrom->name }}</td>
                                            <td scope="col"></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row"
                                                style="color: #636466">{{ date('H:i', strtotime($flightSchedule->arrival_at)) }}</th>
                                            <td>{{ $flightSchedule->airportTo->name }}</td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: #00305B">
                                            <th scope="row"></th>
                                            <td>{{ $flightSchedule->code }}</td>
                                            <td>Travel time:
                                                {{ date_diff(date_create($flightSchedule->arrival_at), date_create($flightSchedule->departure_at))->format('%Hh %im') }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <strong>Selected fare:
                                        ARS {{ \App\Utilities\Utility::$seat_type[$seat_type] }}</strong>
                                </div>
                            </div>
                        </div>

                        <div class="customer-step4 row mt-4 ">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Passenger</h5>
                                <div class="card-body">
                                    <table class="table table-borderless table-sm w-75 mb-1">
                                        <thead>

                                        </thead>
                                        <tbody>
                                        @foreach($passengers as $key => $passenger)
                                            <tr>
                                                <th scope="row" style="color: #636466">{{ $key }}
                                                    . {{ $passenger['first_name'] . ' , ' . $passenger['last_name'] }}</th>
                                                <td style="color: #00305B">{{ \App\Utilities\Utility::$passenger_type[$passenger['passenger_type']] }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="customer-step4 row mt-4 ">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Extras</h5>
                                <div class="card-body">
                                    <table class="table table-borderless table-sm w-75 mb-1">
                                        <thead>

                                        </thead>
                                        <tbody>
                                        @if($extra_service_ids ?? false)
                                            @foreach($extra_service_ids as $key => $extra_service_id)
                                                <tr>
                                                    <th scope="row" style="color: #636466">{{ $key + 1 }}
                                                        . {{ \App\Model\ExtraService::find($extra_service_id)->name }}
                                                        Meal
                                                    </th>
                                                    <td style="color: #00305B">{{ number_format(\App\Model\ExtraService::find($extra_service_id)->price, 0, ',', '.') }}
                                                        VND
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <th scope="row" style="color: #636466">
                                                    Not included extra service.
                                                </th>

                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Payment details -->
                        <div class="row mt-5 mb-4" id="payment_details">
                            <div class="section-header color-blue">
                                <h3>
                                    <i class="fa fa-credit-card"></i>
                                    Payment details
                                </h3>
                            </div>
                        </div>
                        <div class="solutionpayment row  ">
                            <div class=" title card w-100">

                                <h5 class="card-header title_card">Payment methods</h5>
                                <div class="card-body ">
                                    <div class="row">
                                        <p class="ml-3 title">Choose your preferred payment method </p>
                                    </div>

                                    <div class="row">

                                        <!-- Pay Type Item -->
                                        @foreach($payTypes as $payType)
                                            <div class="pay_type_item col-md-4 mt-2 mb-2">
                                                <label for="pay_type_{{ $payType->pay_type_id }}"
                                                       style="display: inline; cursor: pointer">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                @if(isset($payType->image))
                                                                    <img
                                                                        src="img/pay_type/{{ $payType->image }}"
                                                                        height=45 alt="">
                                                                @else
                                                                    {{ $payType->name }}
                                                                @endif
                                                            </h5>
                                                            <input type="radio" name="pay_type"
                                                                   id="pay_type_{{ $payType->pay_type_id }}"
                                                                   value="{{ $payType->pay_type_id }}"
                                                                   {{ old('pay_type') == $payType->pay_type_id ? 'checked' : '' }}
                                                                   onchange="preloaderActive()">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ticket details -->
                        <div class="row mt-5 mb-4">
                            <div class="section-header color-blue">
                                <h3>
                                    <i class="fa fa-clipboard"></i>
                                    Ticket details
                                </h3>
                            </div>
                        </div>

                        <div class="info-ticker mt-4 row">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Outbound
                                    flight: {{ date('l, F d, Y', strtotime($flightSchedule->departure_at)) }}</h5>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <table class="table table-borderless table-sm w-50 mb-1">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col"
                                                            style="color: #636466">{{ date('H:i', strtotime($flightSchedule->departure_at)) }}</th>
                                                        <td scope="col">{{ $flightSchedule->airportFrom->name }}</td>
                                                        <td scope="col"></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row"
                                                            style="color: #636466">{{ date('H:i', strtotime($flightSchedule->arrival_at)) }}</th>
                                                        <td>{{ $flightSchedule->airportTo->name }}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style="color: #00305B">
                                                        <th scope="row"></th>
                                                        <td>{{ $flightSchedule->code }}</td>
                                                        <td>Travel time:
                                                            {{ date_diff(date_create($flightSchedule->arrival_at), date_create($flightSchedule->departure_at))->format('%Hh %im') }}
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <hr>

                                                <div>
                                                    <p class="card-text d-inline">Fare (Adults)</p>
                                                    <p class="card-text d-inline float-right">
                                                        {{ $passenger_count['adults'] }}
                                                        × {{ number_format($seat_price, 0, ',', '.') }}
                                                        = <b>
                                                            {{ number_format($seat_price * $passenger_count['adults'], 0, ',', '.') }}
                                                            VND
                                                        </b>
                                                    </p>
                                                </div>

                                                <div>
                                                    <p class="card-text d-inline">Fare (Children)</p>
                                                    <p class="card-text d-inline float-right">
                                                        {{ $passenger_count['children'] }}
                                                        × {{ number_format($seat_price, 0, ',', '.') }}
                                                        = <b>
                                                            {{ number_format($seat_price * $passenger_count['children'], 0, ',', '.') }}
                                                            VND
                                                        </b>
                                                    </p>
                                                </div>

                                                <div>
                                                    <p class="card-text d-inline">Fare (Infant)</p>
                                                    <p class="card-text d-inline float-right">
                                                        {{ $passenger_count['infant'] }}
                                                        × {{ number_format($seat_price, 0, ',', '.') }}
                                                        = <b>
                                                            {{ number_format($seat_price * $passenger_count['infant'], 0, ',', '.') }}
                                                            VND
                                                        </b>
                                                    </p>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="card-text d-inline">Total fee extra service</p>
                                                    <p class="card-text d-inline float-right">
                                                        <b>
                                                            {{ number_format($extraService_total_price, 0, ',', '.') }}
                                                            VND
                                                        </b>
                                                    </p>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="card-text d-inline">Airport security</p>
                                                    <p class="card-text d-inline float-right ">30.000 VND</p>
                                                </div>
                                                <div>
                                                    <p class="card-text d-inline">Passenger Service ChargePassenger
                                                        Service Charge</p>
                                                    <p class="card-text d-inline float-right ">100.000 VND</p>
                                                </div>
                                                <div>
                                                    <p class="card-text d-inline">Convenient payment</p>
                                                    <p class="card-text d-inline float-right ">50.000 VND</p>
                                                </div>
                                                <div>
                                                    <p class="card-text d-inline">System and Admin Surcharge</p>
                                                    <p class="card-text d-inline float-right ">320.000 VND</p>
                                                </div>
                                                <div class="mt-3">
                                                    <h4 class="card-text d-inline">Total Fare</h4>
                                                    <h4 class="card-text d-inline float-right ">
                                                        {{ number_format($seat_price * ($passenger_count['adults'] + $passenger_count['children'] + $passenger_count['infant']) + $extraService_total_price, 0, ',', '.') }}
                                                        VND</h4>
                                                </div>
                                                <div class="mt-2">
                                                    <h4 class="card-text d-inline">Total flight cost</h4>
                                                    <h4 class="card-text d-inline float-right text-black-50">
                                                        <b>
                                                            {{ number_format($seat_price * ($passenger_count['adults'] + $passenger_count['children'] + $passenger_count['infant']) + $extraService_total_price + 500000, 0, ',', '.') }}
                                                            VND
                                                        </b>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button submit -->
                        <button type="submit" class="btn mt-3 w-100 position-sticky continue"
                                onclick="preloaderActive(9999)">
                            Accept and pay immediately
                            <span><i class="fa fa-angle-right"></i></span>
                        </button>
                    </div>

                    {{-- cart_info bên phải --}}
                    <div class=" col-lg-3 mt-5">
                        <div class="card cart-info  w-100" style="width: 18rem;">
                            <img class="card-img-top" src="img/airport/{{ $flightSchedule->airportTo->image }}"
                                 alt="Card image cap">
                            <div class="card-body text-center" style="position: sticky; top:0;z-index: 10">
                                <h4><span>{{ $flightSchedule->airportFrom->name }}</span>
                                    ({{ $flightSchedule->airportFrom->code }})</h4>
                                <h4>to</h4>
                                <h4><span>{{ $flightSchedule->airportTo->name }}</span>
                                    ({{ $flightSchedule->airportTo->code }})</h4>
                                <p class="card-text">{{--One-way | --}}{{ $passenger_count['total'] }}
                                    Passenger</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection
