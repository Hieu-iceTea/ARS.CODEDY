@extends('pages.layout.master')

@section('title', 'Contact')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/contact_responsive.css">
@endsection

<!-- Content Contact -->
@section('Content')


    <!-- Search -->

    <div class="home page_ticket">

        <div class="background_image" style="background-image:url(img/contact.jpg)"></div>
        <div class="home_slider_content_container mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Contact</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Get in touch -->
                <div class="col-lg-6">
                    <div class="contact_content">
                        <div class="contact_title">Get in touch with us</div>
                        <div class="contact_text">
                            <p>We are always ready to assist you wherever you are. Please feel free to leave your
                                questions and suggestions. We will try our best to perfect the product better.
                                Thank you very much!</p>
                        </div>
                        <div class="contact_list">
                            <ul>
                                <li>
                                    <div>address:</div>
                                    <div>Thanh Xuan, Ha Noi</div>
                                </li>
                                <li>
                                    <div>phone:</div>
                                    <div>+84 868 6633 15</div>
                                </li>
                                <li>
                                    <div>email:</div>
                                    <div>DinhHieu8896@gmail.com</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact_form_container">
                        <form action="#" id="contact_form" class="contact_form">
                            <div style="margin-bottom: 18px"><input type="text"
                                                                    class="contact_input contact_input_name inpt"
                                                                    placeholder="Your Name" required="required">
                                <div class="input_border"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6" style="margin-bottom: 18px">
                                    <div><input type="text" class="contact_input contact_input_email inpt"
                                                placeholder="Your E-mail" required="required">
                                        <div class="input_border"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="margin-bottom: 18px">
                                    <div><input type="text" class="contact_input contact_input_subject inpt"
                                                placeholder="Subject" required="required">
                                        <div class="input_border"></div>
                                    </div>
                                </div>
                            </div>
                            <div><textarea class="contact_textarea contact_input inpt" placeholder="Message"
                                           required="required"></textarea>
                                <div class="input_border" style="bottom:3px"></div>
                            </div>
                            <button class="contact_button" type="button"
                                    onclick="return alert('Tính năng chưa sẵn sàng.\nLiên hệ ngay với Hiếu-iceTea (0868 6633 15) Nếu bạn có bất kỳ câu hỏi hay góp ý gì nhé. Cảm ơn bạn 💜')">
                                send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map -->

    <div class="contact_map">
        <!-- Google Map -->
        <div class="map">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script type="text/javascript" src="js/contact.js"></script>
@endsection
