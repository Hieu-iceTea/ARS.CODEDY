<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <base href="{{ asset('/') }}">

    <title>@yield('title') | ARS.CODEDY</title>

    {{--<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">--}}
    {{--<link rel="shortcut icon" type="image/gif" href="img/favicon.gif">--}}

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

{{--https://nguyencaotu.com/tich-hop-live-chat-gui-tin-nhan-cua-facebook-vao-website.html--}}
{{--<style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 30px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/Hieu.iceTea.page" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://thanhtrungmobile.vn" target="_blank" rel="sponsored">Powered by TT</a> </div><div id="fb-root"></div></div><a href="https://m.me/Hieu.iceTea.page" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div>--}}{{--<div class="bubble-msg">Bạn cần hỗ trợ?</div>--}}{{--</a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script>jQuery(document).ready(function($){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script>--}}


<!-- Preloader Start -->
<div id="preloader-active"
     style="{{ (Session::get('preloader') ?? $preloader ?? '') == 'none' ? 'display: none' : '' }}">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="img/logo/logo_animation.gif" alt="">
                {{--<img src="img/logo/logo_animation.gif" alt="">--}}
            </div>
        </div>
    </div>
</div>
<!-- end Preloader Start -->

@include('notifications.all')
@include('errors.all')

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
                                    <li class="{{ (request()->segment(1) == 'schedule') ? 'active' : '' }}{{ (request()->segment(1) == 'booking') ? 'active' : '' }}">
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

                            <div class="header_phone ml-auto">
                                @auth
                                    <a style="color: white" href="member">
                                        {{ \Illuminate\Support\Facades\Auth::user()->user_name ?? '' }}
                                    </a>
                                    &nbsp;|&nbsp;
                                    <a style="color: white" href="member/logout"
                                       onclick="return confirm('Are you sure you want to logout?')">
                                        Logout
                                    </a>
                                @else
                                    <a style="color: white" href="member/register">
                                        Register
                                    </a>
                                    &nbsp;|&nbsp;
                                    <a style="color: white" href="member/login">
                                        Login
                                    </a>
                                @endauth
                            </div>

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
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </header>

    <!-- Menu -->
    <div class="menu">
        <div class="menu_header d-flex flex-row align-items-center justify-content-start">
            <div class="menu_logo"><a href="/">ARS.CODEDY</a></div>
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
                <li><a href="/schedule">Schedule</a></li>
                <li><a href="/ticket">Ticket</a></li>
                <li><a href="/member">Member</a></li>
                <br>
                <li>
                    @auth
                        <a href="/member">
                            {{ \Illuminate\Support\Facades\Auth::user()->user_name ?? '' }}
                        </a>
                        &nbsp;|&nbsp;
                        <a href="/member/logout"
                           onclick="return confirm('Are you sure you want to logout?')">
                            Logout
                        </a>
                    @else
                        <a href="/member/register">
                            Register
                        </a>
                        &nbsp;|&nbsp;
                        <a href="/member/login">
                            Login
                        </a>
                    @endauth
                </li>
            </ul>

        </div>
        <div class="menu_social">
            <div class="menu_phone ml-auto">Call us: 0868 6633 15 (Hiếu iceTea - sales)</div>
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"
                       onclick="return alert('Liên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')"><i
                            class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                            <div class="newsletter_subtitle">Join our team NOW!</div>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#"
                                  class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between"
                                  id="newsletter_form">
                                <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                    <div><input type="text" class="newsletter_input newsletter_input_name"
                                                id="newsletter_input_name" placeholder="Name"
                                                required="required">
                                        <div class="input_border"></div>
                                    </div>
                                    <div><input type="email" class="newsletter_input newsletter_input_email"
                                                id="newsletter_input_email" placeholder="Your e-mail"
                                                required="required">
                                        <div class="input_border"></div>
                                    </div>
                                </div>
                                <div>
                                    <button class="newsletter_button" type="button"
                                            onclick="return alert('Tính năng chưa sẵn sàng.\nLiên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')">
                                        subscribe
                                    </button>
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
                                        <li>Office Landline: +84 868 6633 15</li>
                                        <li>Mobile: +84 868 6633 15</li>
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
                                        <li>Thanh Xuan, Ha Noi</li>
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
                                        <li>DinhHieu8896@gmail.com</li>
                                        <li>FB.com/Hieu.iceTea</li>
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
            All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
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

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v8.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="107928264386009"
     theme_color="#0084ff"
     logged_in_greeting="Xin chào! Làm thế nào tôi có thể giúp bạn?"
     logged_out_greeting="Xin chào! Làm thế nào tôi có thể giúp bạn?">
</div>

</body>
</html>
