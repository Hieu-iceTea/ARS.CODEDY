@extends('pages.layout.master')

@section('title', 'Services')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

@endsection

<!-- Content Home -->
@section('Content')

    <!-- Home Background Header-->
    <div class="home">
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(img/home_slider.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2>Danh sách dịch vụ</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection

@section('script')
   endsection
