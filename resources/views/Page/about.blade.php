@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="source/styles/about.css">
    <link rel="stylesheet" type="text/css" href="source/styles/about_responsive.css">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(source/images/about.jpg)"></div>
    </div>

    <!-- Search -->

    <div class="home_search">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Search for your trip</div>
                        <div class="home_search_content">
                            <form action="#" class="home_search_form" id="home_search_form">
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <input type="text" class="search_input search_input_1" placeholder="City" required="required">
                                    <input type="text" class="search_input search_input_2" placeholder="Departure" required="required">
                                    <input type="text" class="search_input search_input_3" placeholder="Arrival" required="required">
                                    <input type="text" class="search_input search_input_4" placeholder="Budget" required="required">
                                    <button class="home_search_button">search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
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
                        <div class="text_highlight">Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet .Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        <div class="about_text">
                            <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet .Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu laoreet ante, sollicitudin volutpat quam. Vestibulum posuere malesuada ultrices. In pulvinar rhoncus lacus at aliquet. Nunc vitae lacus varius, auctor nisi sit amet, consectetur mauris. Curabitur sodales semper est, vel faucibus urna laoreet vel. Ut justo diam, sodales non pulvinar at, vulputate quis neque. Etiam aliquam purus vel ultricies consequat.</p>
                        </div>
                        <div class="button about_button"><a href="#">read more</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_image"><img src="source/images/about_1.jpg" alt=""></div>
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
                        <div class="milestone_icon"><img src="source/images/mountain.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="17">0</div>
                        <div class="milestone_text">Online Courses</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="source/images/island.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="213">0</div>
                        <div class="milestone_text">Students</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="source/images/camera.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="11923">0</div>
                        <div class="milestone_text">Teachers</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="source/images/boat.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="15">0</div>
                        <div class="milestone_text">Countries</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Why Choose Us -->

    <div class="why">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/why.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">simply amazing places</div>
                    <div class="section_title"><h2>Why choose us?</h2></div>
                </div>
            </div>
            <div class="row why_row">

                <!-- Why item -->
                <div class="col-lg-4 why_col">
                    <div class="why_item">
                        <div class="why_image">
                            <img src="source/images/why_1.jpg" alt="">
                            <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                <img src="source/images/why_1.svg" alt="">
                            </div>
                        </div>
                        <div class="why_content text-center">
                            <div class="why_title">Fast Services</div>
                            <div class="why_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Why item -->
                <div class="col-lg-4 why_col">
                    <div class="why_item">
                        <div class="why_image">
                            <img src="source/images/why_2.jpg" alt="">
                            <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                <img src="source/images/why_2.svg" alt="">
                            </div>
                        </div>
                        <div class="why_content text-center">
                            <div class="why_title">Great Team</div>
                            <div class="why_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Why item -->
                <div class="col-lg-4 why_col">
                    <div class="why_item">
                        <div class="why_image">
                            <img src="source/images/why_3.jpg" alt="">
                            <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                <img src="source/images/why_3.svg" alt="">
                            </div>
                        </div>
                        <div class="why_content text-center">
                            <div class="why_title">Best Deals</div>
                            <div class="why_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Team -->

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
                        <div class="team_image"><img src="source/images/team_1.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_title"><a href="#">Margaret Smith</a></div>
                            <div class="team_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6 team_col">
                    <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="team_image"><img src="source/images/team_2.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_title"><a href="#">James Williams</a></div>
                            <div class="team_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6 team_col">
                    <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="team_image"><img src="source/images/team_3.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_title"><a href="#">Michael James</a></div>
                            <div class="team_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6 team_col">
                    <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="team_image"><img src="source/images/team_4.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_title"><a href="#">Noah Smith</a></div>
                            <div class="team_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="source/plugins/greensock/TweenMax.min.js"></script>
    <script src="source/plugins/greensock/TimelineMax.min.js"></script>
    <script src="source/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="source/plugins/greensock/animation.gsap.min.js"></script>
    <script src="source/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="source/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="source/js/about.js"></script>
@endsection
