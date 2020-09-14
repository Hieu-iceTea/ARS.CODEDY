@extends('pages.layout.master')

@section('title', 'Home')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
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
                                        <div class="home_title"><h2>Let us take you away</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image"
                         style="background-image:url(img/home_slider/Passenger-airplane-flying-above-clouds.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2>Let your ideas fly high</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(img/home_slider/CauRongDaNang.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2>Wonders of the world</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="home_page_nav">
                <ul class="d-flex flex-column align-items-end justify-content-end">
                    <li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
                    <li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
                    <li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Search -->
    <div class="home_search search_flight">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Search for your flight</div>
                        <div class="home_search_content">
                            <form action="booking/step-1" method="get" class="home_search_form" id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    {{--Hiện thị tên các sân bay đi--}}
                                    <select class="search_input search_input_1" id="from" name="from"
                                            required="required">
                                        <option selected value="">-- From --</option>
                                        @foreach($addressAirports as $addressAirport)
                                            <option
                                                value= {{ $addressAirport->airport_id }}>{{ $addressAirport->location }}
                                                | {{ $addressAirport->name }} ( {{ $addressAirport->code }} )
                                            </option>
                                        @endforeach
                                    </select>

                                    {{--Hiện thị tên các sân bay đến--}}
                                    <select class="search_input search_input_2" id="to" name="to"
                                            required="required">
                                        <option selected value="">-- To --</option>
                                        @foreach($addressAirports as $addressAirport)
                                            <option
                                                value= {{ $addressAirport->airport_id }}>{{ $addressAirport->location }}
                                                | {{ $addressAirport->name }} ( {{ $addressAirport->code }} )
                                            </option>
                                        @endforeach

                                    </select>

                                    <input type="date"
                                           min="{{ date('Y-m-d', strtotime(\Carbon\Carbon::now()->toDateTimeString())) }}"
                                           class="search_input search_input_3" id="departure"
                                           name="departure" placeholder="Departure" required>


                                    <div class="search_input search_input_4">
                                        <div class="title">
                                            <p><a data-toggle="collapse" href="#multiCollapseExample1" role="button"
                                                  aria-expanded="false" aria-controls="multiCollapseExample1"> Passenger
                                                    <span class="mr-4" id="number-of-passenger"></span> <i
                                                        class="fa fa-angle-down rotate-icon "> </i> </a></p>
                                        </div>
                                        <div class="search_input_ssenger collapse "
                                             style="margin-top: -212px;margin-left: -20px" id="multiCollapseExample1">
                                            <div class="people ">
                                                <table class="table ">
                                                    <tr>
                                                        <td><p>Adults: </p></td>
                                                        <td>
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <span class="dec number"><i class="fa fa-minus"></i></span>
                                                                    <input type="text" name="adults" min="1"
                                                                           value="1">
                                                                    <span class="inc number"> <i class="fa fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Children: </p></td>
                                                        <td>
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <span class="dec number"><i class="fa fa-minus"></i></span>
                                                                    <input type="text" id="value1" name="children"
                                                                           value="0">
                                                                    <span class="inc number"> <i class="fa fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Infant: </p></td>
                                                        <td>
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <span class="dec number"><i class="fa fa-minus"></i></span>
                                                                    <input type="text" id="value1" name="infant"
                                                                           value="0">
                                                                    <span class="inc number"> <i class="fa fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>


                                            </div>


                                        </div>

                                    </div>
                                    <button class="home_search_button" type="submit">search</button>
                                </div>
                                <input type="hidden" id="total_passenger" name="total_passenger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Intro -->

    <div class="intro">
        <div class="intro_background mt-5" style="background-image:url(img/intro.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_container">
                        <div class="row">

                            <!-- Intro Item -->
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                    <div class="intro_icon"><img src="img/beach.svg" alt=""></div>
                                    <div class="intro_content">
                                        <div class="intro_title">Top Destinations</div>
                                        <div class="intro_subtitle"><p>ARS is always updating the most attractive places
                                                for you.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Intro Item -->
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                    <div class="intro_icon"><img src="img/wallet.svg" alt=""></div>
                                    <div class="intro_content">
                                        <div class="intro_title">The Best Prices</div>
                                        <div class="intro_subtitle"><p>ARS is committed to good prices for everyone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Intro Item -->
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                    <div class="intro_icon"><img src="img/suitcase.svg" alt=""></div>
                                    <div class="intro_content">
                                        <div class="intro_title">Amazing Services</div>
                                        <div class="intro_subtitle"><p>Experience the services that are only available
                                                at ARS.</p></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Destinations -->

    <div class="destinations" id="destinations">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">simply amazing places</div>
                    <div class="section_title"><h2>Popular Destinations</h2></div>
                </div>
            </div>
            <div class="row destinations_row">
                <div class="col">
                    <div class="destinations_container item_grid">

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination/HoChiMinh.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Ho Chi Minh City</a></div>
                                <div class="destination_subtitle"><p>City with French colonial landmarks like Notre-Dame
                                        Cathedral, War Remnants Museum & busy markets.</p></div>
                                <div class="destination_price">From 299,000 VND</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination/DaLat.png" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Da Lat</a></div>
                                <div class="destination_subtitle"><p>French colonial resort town with colonial landmarks
                                        like Đà Lạt Cathedral, lakes & Pongour Falls.</p></div>
                                <div class="destination_price">From 199,000 VND</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination/HaLongBay.jpg" alt="">
                                <div class="spec_offer text-center"><a href="#">Special Offer</a></div>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Ha Long Bay</a></div>
                                <div class="destination_subtitle"><p>Vietnamese bay of thousands of limestone islands,
                                        caves like Đầu Gỗ, junk boats & floating villages.</p></div>
                                <div class="destination_price">From 299,000 VND</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination/HoiAn.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Hoi An</a></div>
                                <div class="destination_subtitle"><p>Coastal city known for its historic Ancient Town,
                                        Museum of Ceramics, food scene & nearby beaches.</p></div>
                                <div class="destination_price">From 299,000 VND</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination/PhuQuoc.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Phu Quoc</a></div>
                                <div class="destination_subtitle"><p>Vietnamese island with beach resorts, Duong Dong
                                        town & a national park with mountains & jungle.</p></div>
                                <div class="destination_price">From 99,000 VND</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination/SaPa.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Sa Pa</a></div>
                                <div class="destination_subtitle"><p>Mountain town that's a base for trekking, visits to
                                        waterfalls & climbing Phang Xi Pang peak.</p></div>
                                <div class="destination_price">From 199,000 VND</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials" id="testimonials">
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="img/testimonials.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">simply amazing places</div>
                    <div class="section_title"><h2>Testimonials</h2></div>
                </div>
            </div>
            <div class="row testimonials_row">
                <div class="col">

                    <!-- Testimonials Slider -->
                    <div class="testimonials_slider_container">
                        <div class="owl-carousel owl-theme testimonials_slider">

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial">Experience traveling with ARS makes me feel very secure and
                                    excited
                                </div>
                                <div class="testimonial_author">
                                    <div
                                        class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <div>john turner,</div>
                                        <div>client</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial">When I fly, price is one thing that makes me very concerned,
                                    but for ARS it's easy.
                                </div>
                                <div class="testimonial_author">
                                    <div
                                        class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <div>xavi,</div>
                                        <div>client</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial">ARS is a part of my life.
                                </div>
                                <div class="testimonial_author">
                                    <div
                                        class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <div>leo,</div>
                                        <div>client</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="test_nav">
            <ul class="d-flex flex-column align-items-end justify-content-end">
                <li><a href="#">City Breaks Clients<span>01</span></a></li>
                <li><a href="#">Cruises Clients<span>02</span></a></li>
                <li><a href="#">All Inclusive Clients<span>03</span></a></li>
            </ul>
        </div>
    </div>

    <!-- News -->

    <div class="news" id="news">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="news_container">

                        <!-- News Post -->
                        <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                            <div class="news_post_image"><img src="img/news_1.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>02</div>
                                    <div>june</div>
                                </div>
                                <div class="news_post_title"><a href="#">Experience smart domestic ticket booking</a>
                                </div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Book flights often, but not sure everyone knows these good tips..</p>
                                </div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                            <div class="news_post_image"><img src="img/news_2.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>01</div>
                                    <div>june</div>
                                </div>
                                <div class="news_post_title"><a href="#">Unique poses and check-in styles when
                                        traveling</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Check-in with new designs is quite popular among young people. If you are going
                                        with a group of "muddy" friends, you do not have to worry about taking pictures
                                        so funny.</p>
                                </div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                            <div class="news_post_image"><img src="img/news_3.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>29</div>
                                    <div>may</div>
                                </div>
                                <div class="news_post_title"><a href="#">Tips to fly during the epidemic season</a>
                                </div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>You should wear a mask, disposable rubber gloves, eyeglasses, and protective gear
                                        to ensure you won't come into contact with any of the aircraft's sources of
                                        infection.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- News Sidebar -->
                <div class="col-xl-4">
                    <div class="travello">
                        <div class="background_image" style="background-image:url(img/travello.jpg)"></div>
                        <div class="travello_content">
                            <div class="travello_content_inner">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="travello_container">
                            <a href="#">
                                <div class="d-flex flex-column align-items-center justify-content-end">
                                    <span class="travello_title">Get a 20% Discount</span>
                                    <span class="travello_subtitle">Buy Your Vacation Online Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="js/custom.js"></script>
@endsection
