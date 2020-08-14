@extends('pages.layout.master')

@section('title', 'Booking - Step 3')

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
                    <div class="flightProgress active">
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
                    <div class="col-lg-9">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="section-header color-blue">
                                    <h3>
                                        <i class="fa fa-suitcase" aria-hidden="true"></i>
                                        Extra service
                                    </h3>
                                </div>
                            </div>

                            {{--item_extra_service--}}
                            @foreach($extraServices as $extraService)
                                <div class="row mt-5 shadow">
                                    <div class="item_extra_service select-wrapper w-100">
                                        <div class="row extra-header-row">

                                            <label for="extra_service_{{ $extraService->extra_service_id }}"
                                                   class="col-2 col-sm-1 my_label">
                                                <input name="extra_service_ids[]" type="checkbox"
                                                       value="{{ $extraService->extra_service_id }}"
                                                       id="extra_service_{{ $extraService->extra_service_id }}"
                                                       class="extra-checkbox" data-extras="seats"
                                                       price="{{ $extraService->price }}"
                                                       onclick="setValueExtraService()">
                                            </label>

                                            <div class="col-10 col-sm-11" style="background-color: white">

                                                <div class="row intro-services">

                                                    <div class="col-4 intro">
                                                        <div class="column-inner color-blue">
                                                            <h5 class="mt-3">
                                                                <i class="fa fa-star-o mr-2" aria-hidden="true"></i>
                                                                {{ number_format($extraService->price, 0, ',', '.') }}
                                                                VND
                                                            </h5>
                                                            <h4>{{ $extraService->name }}</h4>
                                                        </div>
                                                    </div>

                                                    <div class="col-4 description">
                                                        <div class="column-inner">
                                                            {!! $extraService->description !!}
                                                        </div>
                                                    </div>

                                                    <div class="col-4">
                                                        <img src="img/extra_service/{{ $extraService->image }}"
                                                             class="rounded mx-auto d-block" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- ./ item_extra_service--}}

                        </div>
                    </div>

                    {{-- cart_info bên phải --}}
                    <div class=" col-lg-3 mt-5">
                        <div class="card cart-info  w-100" style="width: 18rem;">
                            <img class="card-img-top" src="img/airport/{{ $booking_session['flightSchedule']->airportTo->image }}"
                                 alt="Card image cap">
                            <div class="card-body text-center" style="position: sticky; top:0;z-index: 10">
                                <h4><span>{{ $booking_session['flightSchedule']->airportFrom->name }}</span>
                                    ({{ $booking_session['flightSchedule']->airportFrom->code }})</h4>
                                <h4>to</h4>
                                <h4><span>{{ $booking_session['flightSchedule']->airportTo->name }}</span>
                                    ({{ $booking_session['flightSchedule']->airportTo->code }})</h4>
                                <p class="card-text">{{--One-way | --}}{{ $booking_session['passenger_count']['total'] }}
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
                                        {{ number_format($booking_session['seat_price'], 0, ',', '.') }}
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
                                    <span id="total_price" style="font-size: 22px">
                                        {{ number_format($booking_session['seat_price'] * $booking_session['passenger_count']['total'], 0, ',', '.') }}
                                    </span>
                                    VND
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <h4 style=""><span
                                        style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>
                                    ({{ $booking_session['flightSchedule']->airportFrom->code }}) to
                                    <span
                                        style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>({{ $booking_session['flightSchedule']->airportTo->code }}
                                    )
                                </h4>

                                <p class="card-text">{{ date('l, F d, Y', strtotime($booking_session['flightSchedule']->departure_at)) }}</p>
                                <hr>

                                <p class="card-text">Adults: {{ $booking_session['passenger_count']['adults'] }} *
                                    <span
                                        class="sub_total">{{ number_format($booking_session['seat_price'], 0, ',', '.') }}</span>
                                    = <span
                                        id="total_price_adults">{{ number_format($booking_session['passenger_count']['adults'] * $booking_session['seat_price'], 0, ',', '.') }}</span>
                                </p>
                                <p class="card-text">Children: {{ $booking_session['passenger_count']['children'] }} *
                                    <span
                                        class="sub_total">{{ number_format($booking_session['seat_price'], 0, ',', '.') }}</span>
                                    = <span
                                        id="total_price_children">{{ number_format($booking_session['passenger_count']['children'] * $booking_session['seat_price'], 0, ',', '.') }}</span>
                                </p>
                                <p class="card-text">Infant: {{ $booking_session['passenger_count']['infant'] }} *
                                    <span
                                        class="sub_total">{{ number_format($booking_session['seat_price'], 0, ',', '.') }}</span>
                                    = <span
                                        id="total_price_infant">{{ number_format($booking_session['passenger_count']['infant'] * $booking_session['seat_price'], 0, ',', '.') }}</span>
                                </p>
                                <hr>

                                <p class="card-text">
                                    Total fee extra service:
                                    <span id="extraService_total_price">0</span> VND
                                </p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-3 w-100 position-sticky continue">
                            Continue <span><i class="fa fa-angle-right"></i></span>
                        </button>
                    </div>
                </div>
                @csrf
                <input type="hidden" name="extraService_total_price" value="0">
            </form>
        </div>
    </div>

    <script>
        function setValueExtraService() {
            preloaderActive();

            const extra_service_ids = document.getElementsByName('extra_service_ids[]');
            let extraService_total_price = 0;

            for (const extra_service_id of extra_service_ids) {
                if (extra_service_id.checked) {
                    extraService_total_price += Number.parseInt(extra_service_id.getAttribute("price"));
                }
            }

            const total_price_booking_session = {{ $booking_session['seat_price'] * $booking_session['passenger_count']['total'] }};
            document.getElementsByName('extraService_total_price')[0].value = extraService_total_price;
            document.getElementById('extraService_total_price').innerText = extraService_total_price.toLocaleString("vi-vn");
            document.getElementById('total_price').innerText = (extraService_total_price + total_price_booking_session).toLocaleString("vi-vn");
        }
    </script>

@endsection
@section('script')
    <script type="text/javascript" src="js/custom.js"></script>
@endsection
