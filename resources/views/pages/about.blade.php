@extends('pages.layout.master')

@section('title', 'About us')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/about_responsive.css">
@endsection

<!-- Content Home -->
@section('Content')
    <div class="home page_ticket my_home">

        <div class="background_image" style="background-image:url(img/news.jpg)"></div>
        <div class="home_slider_content_container mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title" style="margin-top: 2.5rem"><h2>About Us</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Meet the Team -->

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">simply amazing places</div>
                    <div class="section_title"><h2>Meet the Team</h2></div>
                </div>
            </div>
            <div class="row team_row">
                <!-- Team Item -->
                <div class="col-xl-3 col-md-6 team_col">
                    <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="team_image"><img src="img/about/vuquanghuy2001.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_title"><a href="#">Quang Huy</a></div>
                            <div class="team_text">
                                <h5>Data Management</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6 team_col">
                    <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="team_image"><img src="img/about/Hieu-iceTea.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_title"><a href="#">Dinh Hieu</a></div>
                            <div class="team_text">
                                <h5>CEO & Founder</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6 team_col">
                    <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="team_image"><img src="img/about/chanhoa.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_title"><a href="#">Chan Hoa</a></div>
                            <div class="team_text">
                                <h5>Content Production</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6 team_col">
                    <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="team_image"><img src="img/about/tuanpth1909.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_title"><a href="#">Pham Tuan</a></div>
                            <div class="team_text">
                                <h5>UI/UX Designer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about pt-0">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">simply amazing places</div>
                    <div class="section_title"><h2>A few words about us</h2></div>
                </div>
            </div>
            <div class="row about_row">
                <div class="col-lg-6">
                    <div class="about_content">
                        <div class="text_highlight">ARS.CODEDY, a four-star airline, is one of the most prestigious and
                            quality airlines in Vietnam, always chosen by passengers as a companion.
                        </div>
                        <div class="about_text">
                            <p>From 1976 to 1980, ARS.CODEDY expanded and effectively exploited many international
                                routes to Asian countries. In April 1993, ARS.CODEDY Airlines was officially formed as
                                a large-scale air transportation business unit of the State. In October 2002, Vietnam
                                Airlines introduced a new logo, demonstrating the development of ARS.CODEDY to become
                                an airline with a caliber and identity in the region and in the world. In October 2003,
                                ARS.CODEDY began to receive and put into operation a modern aircraft with many
                                outstanding features of Boeing 777 first among 6 Boeing 777 ordered by Boeing.
                                This event marked the start of the airline's modernization program. Today, ARS.CODEDY
                                has become one of the youngest and most modern airlines in the region with an average fleet age of 5.4 years.</p>
                        </div>
                        <div class="button about_button"><a href="#">read more</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_image"><img src="img/about_plane-in-the-sky.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Milestones -->

    <div class="milestones">
        <div class="container">
            <div class="row">

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="img/mountain.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="17">0</div>
                        <div class="milestone_text">Online Courses</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="img/island.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="213">0</div>
                        <div class="milestone_text">Students</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="img/camera.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="11923">0</div>
                        <div class="milestone_text">Teachers</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="img/boat.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="15">0</div>
                        <div class="milestone_text">Countries</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Why Choose Us -->

    <div class="why">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="img/why.jpg"
             data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">best service</div>
                    <div class="section_title"><h2>Why choose us?</h2></div>
                </div>
            </div>
            <div class="row why_row">

                <!-- Why item -->
                <div class="col-lg-4 why_col">
                    <div class="why_item">
                        <div class="why_image">
                            <img src="img/why_1.jpg" alt="">
                            <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                <img src="img/why_1.svg" alt="">
                            </div>
                        </div>
                        <div class="why_content text-center">
                            <div class="why_title">Fast Services</div>
                            <div class="why_text">
                                <p>With 4-star standard we always bring satisfaction to customers about flight experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Why item -->
                <div class="col-lg-4 why_col">
                    <div class="why_item">
                        <div class="why_image">
                            <img src="img/why_2.jpg" alt="">
                            <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                <img src="img/why_2.svg" alt="">
                            </div>
                        </div>
                        <div class="why_content text-center">
                            <div class="why_title">Great Team</div>
                            <div class="why_text">
                                <p>Our team of pilots and flight attendants with top experience will give customers the safest flight.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Why item -->
                <div class="col-lg-4 why_col">
                    <div class="why_item">
                        <div class="why_image">
                            <img src="img/why_3.jpg" alt="">
                            <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                <img src="img/why_3.svg" alt="">
                            </div>
                        </div>
                        <div class="why_content text-center">
                            <div class="why_title">Promotion</div>
                            <div class="why_text">
                                <p>We always offer attractive promotions for customers, with cheap flights and diverse flight schedules.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="js/about.js"></script>
@endsection
