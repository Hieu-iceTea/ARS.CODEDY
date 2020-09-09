@extends('pages.layout.master')

@section('title', 'Ticket Payment')

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
                            <div class="home_title"><h2>Pay now</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Data --}}
    <div class="container mt-4 mb-5">
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
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="js/custom.js"></script>
@endsection
