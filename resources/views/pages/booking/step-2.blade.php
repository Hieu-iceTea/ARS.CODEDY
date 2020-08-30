@extends('pages.layout.master')

@section('title', 'Booking - Step 2')

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
                            <span id="target_when_failedValidation"></span>
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
                    <div class="flightProgress active">
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

            <form action="" method="post">
                <div class="row mt-5">
                    {{-- form main --}}
                    <div class="col-lg-9 col-sm-12">
                        <div class="row mb-4 booking2_color_logo">
                            <div class="media">
                                <i class="fa fa-users" aria-hidden="true" style="font-size: 380%"></i>
                                <div class="media-body ml-4">
                                    <h4 class="mt-0">Who will fly</h4>
                                    <h5>Your passenger data</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-1 booking2_color_logo">
                            <p>* Required fields</p>
                        </div>

                        <div style="display: none" class="row mb-5 booking2_color_logo">
                            <div class="card w-100">
                                <div class="row">
                                    <div class="col-6 my-4 ml-5">
                                        <div class="media">
                                            <i class="fa fa-address-book" aria-hidden="true"
                                               style="font-size: 400%"></i>
                                            <div class="media-body ml-4">
                                                <h5 class="mt-2">Đăng nhập và đặt chỗ nhanh hơn</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 ml-3">
                                        <div class="form-check">
                                            <input class="form-check-input mt-4" type="radio" name="checklogin"
                                                   value="1" id="defaultCheck1" style="width: 20px;height: 20px">
                                            <label class="form-check-label mt-3 ml-2" for="defaultCheck1"
                                                   style="font-size: 90%">
                                                Tôi muốn đăng nhập bằng tài khoản của Bamboo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input mt-3" type="radio" name="checklogin"
                                                   value="2" id="defaultCheck1" style="width: 20px;height: 20px">
                                            <label class="form-check-label mt-3 ml-2" for="defaultCheck1"
                                                   style="font-size: 90%">
                                                Tiếp tục mà không cần đăng nhập
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--Passenger--}}
                        @php($count = 1)

                        {{--Adults--}}
                        @for($i = 1; $i <= $passenger_count['adults']; ++$i)
                            <div class="row mb-4">
                                <div class="card w-100">
                                    <h5 class="card-header title_card">Passenger {{$count}} <span>(Adults)</span></h5>
                                    <input type="hidden" name="passengers[{{$count}}][passenger_type]" value=1>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div>Gender *</div>
                                                <div class="input-group">
                                                    <select name="passengers[{{$count}}][gender]" class="custom-select"
                                                            aria-label="select with button addon">
                                                        <option value="" selected>-- Gender --</option>
                                                        <option
                                                            {{ (old('passengers.' . $count . '.gender') ?? $count == 1 ? \Illuminate\Support\Facades\Auth::user()->gender ?? '' : '') == 1 ? 'selected' : '' }} value="1">
                                                            Male
                                                        </option>
                                                        <option
                                                            {{ (old('passengers.' . $count . '.gender') ?? $count == 1 ? \Illuminate\Support\Facades\Auth::user()->gender ?? '' : '') == 2 ? 'selected' : '' }} value="2">
                                                            female
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div>Middle and First/Given name *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][first_name]" type="text"
                                                           value="{{ old('passengers.' . $count . '.first_name') ?? $count == 1 ? \Illuminate\Support\Facades\Auth::user()->first_name ?? '' : '' }}"
                                                           class="form-control"
                                                           placeholder="Middle and First/Given name"
                                                           aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>Last/Family Name *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][last_name]" type="text"
                                                           value="{{ old('passengers.' . $count . '.last_name') ?? $count == 1 ? \Illuminate\Support\Facades\Auth::user()->last_name ?? '' : '' }}"
                                                           class="form-control"
                                                           placeholder="Last/Family Name"
                                                           aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="ml-3" style="font-size: 80%">
                                                Please enter your full name as it appears on your passport.
                                            </p>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <div>Date of birth *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][dob]" type="date"
                                                           value="{{ old('passengers.' . $count . '.dob') ?? $count == 1 ? \Illuminate\Support\Facades\Auth::user()->dob ?? '' : '' }}"
                                                           class="form-control w-75"
                                                           placeholder="Departure">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php($count++)
                        @endfor

                        {{--Children--}}
                        @for($i = 1; $i <= $passenger_count['children']; ++$i)
                            <div class="row mb-4">
                                <div class="card w-100">
                                    <h5 class="card-header title_card">Passenger {{$count}} <span>(Children)</span></h5>
                                    <input type="hidden" name="passengers[{{$count}}][passenger_type]" value=2>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div>Gender *</div>
                                                <div class="input-group">
                                                    <select name="passengers[{{$count}}][gender]" class="custom-select"
                                                            aria-label="select with button addon">
                                                        <option value="" selected>-- Gender --</option>
                                                        <option
                                                            {{ old('passengers.' . $count . '.gender') == 1 ? 'selected' : '' }} value="1">
                                                            Male
                                                        </option>
                                                        <option
                                                            {{ old('passengers.' . $count . '.gender') == 2 ? 'selected' : '' }} value="2">
                                                            female
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div>Middle and First/Given name *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][first_name]" type="text"
                                                           value="{{ old('passengers.' . $count . '.first_name') }}"
                                                           class="form-control"
                                                           placeholder="Middle and First/Given name"
                                                           aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>Last/Family Name *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][last_name]" type="text"
                                                           value="{{ old('passengers.' . $count . '.last_name') }}"
                                                           class="form-control"
                                                           placeholder="Last/Family Name"
                                                           aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="ml-3" style="font-size: 80%">
                                                Please enter your full name as it appears on your passport.
                                            </p>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <div>Date of birth *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][dob]" type="date"
                                                           value="{{ old('passengers.' . $count . '.dob') }}"
                                                           class="form-control w-75"
                                                           placeholder="Departure">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php($count++)
                        @endfor

                        {{--Infant--}}
                        @for($i = 1; $i <= $passenger_count['infant']; ++$i)
                            <div class="row mb-4">
                                <div class="card w-100">
                                    <h5 class="card-header title_card">Passenger {{$count}} <span>(Infant)</span></h5>
                                    <input type="hidden" name="passengers[{{$count}}][passenger_type]" value=3>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div>Gender *</div>
                                                <div class="input-group">
                                                    <select name="passengers[{{$count}}][gender]" class="custom-select"
                                                            aria-label="select with button addon">
                                                        <option value="" selected>-- Gender --</option>
                                                        <option
                                                            {{ old('passengers.' . $count . '.gender') == 1 ? 'selected' : '' }} value="1">
                                                            Male
                                                        </option>
                                                        <option
                                                            {{ old('passengers.' . $count . '.gender') == 2 ? 'selected' : '' }} value="2">
                                                            female
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div>Middle and First/Given name *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][first_name]" type="text"
                                                           value="{{ old('passengers.' . $count . '.first_name') }}"
                                                           class="form-control"
                                                           placeholder="Middle and First/Given name"
                                                           aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>Last/Family Name *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][last_name]" type="text"
                                                           value="{{ old('passengers.' . $count . '.last_name') }}"
                                                           class="form-control"
                                                           placeholder="Last/Family Name"
                                                           aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="ml-3" style="font-size: 80%">
                                                Please enter your full name as it appears on your passport.
                                            </p>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <div>Date of birth *</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][dob]" type="date"
                                                           value="{{ old('passengers.' . $count . '.dob') }}"
                                                           class="form-control w-75"
                                                           placeholder="Departure">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div>Come with the passengers</div>
                                                <div class="input-group">
                                                    <input name="passengers[{{$count}}][with_passenger]" type="text"
                                                           value="{{ old('passengers.' . $count . '.with_passenger') }}"
                                                           class="form-control"
                                                           placeholder=""
                                                           aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php($count++)
                        @endfor
                        {{--END Passenger--}}

                        {{-- Thông tin liên hệ --}}
                        <div class="row my-4 booking2_color_logo">
                            <div class="media">
                                <i class="fa fa-user" style="font-size: 400%"></i>
                                <div class="media-body ml-4">
                                    <h4 class="mt-0">Who is booking</h4>
                                    <h5>Your contact information</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card w-100">
                                <h5 class="card-header title_card ">Contact data</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div>Gender *</div>
                                            <div class="input-group">
                                                <select name="contact[contact_gender]" class="custom-select"
                                                        id="inputGroupSelect04"
                                                        aria-label="Example select with button addon">
                                                    <option value="" selected>-- Gender -</option>
                                                    <option
                                                        {{ (old('contact.contact_gender') ?? \Illuminate\Support\Facades\Auth::user()->gender ?? '') == 1 ? 'selected' : '' }} value="1">
                                                        Male
                                                    </option>
                                                    <option
                                                        {{ (old('contact.contact_gender') ?? \Illuminate\Support\Facades\Auth::user()->gender ?? '') == 2 ? 'selected' : '' }} value="2">
                                                        Female
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div>Middle and First/Given name *</div>
                                            <div class="input-group">
                                                <input name="contact[contact_firstname]" type="text"
                                                       value="{{ old('contact.contact_firstname') ?? \Illuminate\Support\Facades\Auth::user()->first_name ?? '' }}"
                                                       class="form-control"
                                                       placeholder="Middle and First/Given name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>Last/Family Name *</div>
                                            <div class="input-group">
                                                <input name="contact[contact_lastname]" type="text" class="form-control"
                                                       value="{{ old('contact.contact_lastname') ?? \Illuminate\Support\Facades\Auth::user()->last_name ?? '' }}"
                                                       placeholder="Last/Family Name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ml-3" style="font-size: 80%">Please enter your full name as it appears
                                            on your passport.</p>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div>Email*</div>
                                            <div class="input-group mb-3 width_input_prepend">

                                                <input name="contact[contact_email]" type="text" class="form-control"
                                                       value="{{ old('contact.contact_email') ?? \Illuminate\Support\Facades\Auth::user()->email ?? '' }}"
                                                       placeholder="Email"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>Phone *</div>
                                            <div class="input-group mb-3 width_input_prepend">

                                                <input name="contact[contact_phone]" type="text" class="form-control"
                                                       value="{{ old('contact.contact_phone') ?? \Illuminate\Support\Facades\Auth::user()->phone ?? '' }}"
                                                       placeholder="Phone"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-8">
                                            <p style="font-size: 80%">Note: We will contact you under the phone number
                                                stated above in case of flight irregularities or rebookings.</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div>Address *</div>
                                            <div class="input-group">
                                                <input name="contact[contact_address]" type="text" class="form-control"
                                                       value="{{ old('contact.contact_address') ?? \Illuminate\Support\Facades\Auth::user()->address ?? '' }}"
                                                       placeholder="Address "
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-2">
                                        <div class="col-12">
                                            <p style="font-size: 80%">(1) I hereby accept to get notifications via
                                                email: Please see our Customer privacy policy , Conditions for online
                                                booking and Conditions of website use for information regarding the
                                                processing of your personal data by Bamboo Airways.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end - Thông tin liên hệ --}}
                    </div>

                    {{-- cart_info bên phải --}}
                    <div class=" col-lg-3 mt-5">
                        <div class="card cart-info  w-100" style="width: 18rem;">
                            <img class="card-img-top"
                                 src="img/airport/{{ $booking_session['flightSchedule']->airportTo->image }}"
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
                                    <span id="total_price">
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
                            </div>
                        </div>

                        <button type="submit" class="btn mt-3 w-100 position-sticky continue">
                            Continue <span><i class="fa fa-angle-right"></i></span>
                        </button>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection
