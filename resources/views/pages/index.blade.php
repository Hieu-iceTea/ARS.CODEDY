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
                            <form action="booking/1" method="get" class="home_search_form" id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    <select class="search_input search_input_1" id="from" name="from"
                                            required="required">
                                        <option selected value="">-- From --</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                    </select>

                                    <select class="search_input search_input_2" id="to" name="to"
                                            required="required">
                                        <option selected value="">-- To --</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>

                                    </select>

                                    <input type="date" class="search_input search_input_3" id="departure"
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
                                                                    <input type="text" name="adults"  min="1"
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
                                                                    <input type="text" id="value1" name="Infant"
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
                                        <div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Intro Item -->
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                    <div class="intro_icon"><img src="img/wallet.svg" alt=""></div>
                                    <div class="intro_content">
                                        <div class="intro_title">The Best Prices</div>
                                        <div class="intro_subtitle"><p>Sollicitudin mauris lobortis in.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Intro Item -->
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                    <div class="intro_icon"><img src="img/suitcase.svg" alt=""></div>
                                    <div class="intro_content">
                                        <div class="intro_title">Amazing Services</div>
                                        <div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
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
                                <img src="img/destination_1.jpg" alt="">
                                <div class="spec_offer text-center"><a href="#">Special Offer</a></div>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">Bali</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $679</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination_2.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">Indonesia</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $679</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination_3.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">San Francisco</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $679</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination_4.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">Paris</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $679</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination_5.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">Phi Phi Island</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $679</div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="img/destination_6.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">Mykonos</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $679</div>
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
                                <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula
                                    odio.
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
                                <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula
                                    odio.
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
                                <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula
                                    odio.
                                </div>
                                <div class="testimonial_author">
                                    <div
                                        class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <div>john turner,</div>
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
                                <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.
                                        Vivamus massa.Tempor massa et laoreet.</p>
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
                                <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Tempor massa et laoreet malesuada. Pellentesque sit amet elementum ccumsan sit
                                        amet mattis eget, tristique at leo.</p>
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
                                <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Vivamus massa.Tempor massa et laoreet malesuada. Aliquam nulla nisl, accumsan sit
                                        amet mattis.</p>
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
