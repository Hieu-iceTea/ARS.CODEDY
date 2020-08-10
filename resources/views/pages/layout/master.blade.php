<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <base href="{{ asset('/') }}">

    <title>@yield('title') | ARS.CODEDY</title>

    {{--<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">--}}
    <link rel="shortcut icon" type="image/gif" href="img/favicon.gif">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travello template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    @yield('style')
    <link rel="stylesheet" type="text/css" href="css/my_styles.css">
</head>

<body>
<div class="super_container">
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                            <div class="logo"><a href="/">ARS.CODEDY</a></div>

                            <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}">
                                        <a href="/about">About us</a>
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'schedule') ? 'active' : '' }}">
                                        <a href="/schedule">Schedule</a>
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'ticket') ? 'active' : '' }}">
                                        <a href="/ticket">Ticket</a>
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'member') ? 'active' : '' }}">
                                        <a href="/member">Member</a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="header_phone ml-auto"><a style="color: white" href="/contact">Call us: 00-56 445
                                    678 33</a></div>

                            <!-- Hamburger -->

                            <div class="hamburger ml-auto">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_social d-flex flex-row align-items-center justify-content-start">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </header>

    <!-- Menu -->
    <div class="menu">
        <div class="menu_header d-flex flex-row align-items-center justify-content-start">
            <div class="menu_logo"><a href="/">Travello</a></div>
            <div class="menu_close_container ml-auto">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="menu_content">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="/news">News</a></li>
                <li><a href="/ticket">Ticket</a></li>
                <li><a href="/schedule">Schedule</a></li>
            </ul>
        </div>
        <div class="menu_social">
            <div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Content Home -->
@yield('Content')

<!-- Footer -->
    <footer class="footer">
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="{{ asset('img/footer_1.jpg') }}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter">
                        <div class="newsletter_title_container text-center">
                            <div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news
                            </div>
                            <div class="newsletter_subtitle">Join our database NOW!</div>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#"
                                  class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between"
                                  id="newsletter_form">
                                <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                    <div><input type="text" class="newsletter_input newsletter_input_name"
                                                id="newsletter_input_name" placeholder="Name" required="required">
                                        <div class="input_border"></div>
                                    </div>
                                    <div><input type="email" class="newsletter_input newsletter_input_email"
                                                id="newsletter_input_email" placeholder="Your e-mail"
                                                required="required">
                                        <div class="input_border"></div>
                                    </div>
                                </div>
                                <div>
                                    <button class="newsletter_button">subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_contact_row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div
                                class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="{{asset('img/sign.svg')}}" alt="">
                                </div>
                                <div class="footer_contact_title">give us a call</div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li>Office Landline: +44 5567 32 664 567</li>
                                        <li>Mobile: +44 5567 89 3322 332</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div
                                class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="{{ asset('img/trekking.svg') }}"
                                                                      alt=""></div>
                                <div class="footer_contact_title">come & drop by</div>
                                <div class="footer_contact_list">
                                    <ul style="max-width:190px">
                                        <li>4124 Barnes Street, Sanford, FL 32771</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div
                                class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="{{ asset('img/around.svg') }}"
                                                                      alt=""></div>
                                <div class="footer_contact_title">send us a message</div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li>youremail@gmail.com</li>
                                        <li>Office@yourbusinessname.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                href="#">CODEDY</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
    </footer>
</div>

<script src="js/app.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap4.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/my_script.js"></script>
@yield('script')

</body>
</html>
