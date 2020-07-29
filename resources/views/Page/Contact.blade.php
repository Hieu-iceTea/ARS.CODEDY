@extends('master')

<?php $activeContact = 'active'; ?>

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="source/styles/contact.css">
    <link rel="stylesheet" type="text/css" href="source/styles/contact_responsive.css">
@endsection

<!-- Content Contact -->
@section('Content')
    <div class="home">
        <div class="background_image" style="background-image:url(source/images/contact.jpg)"></div>
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
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <input type="text" class="search_input search_input_1" placeholder="City"
                                           required="required">
                                    <input type="text" class="search_input search_input_2" placeholder="Departure"
                                           required="required">
                                    <input type="text" class="search_input search_input_3" placeholder="Arrival"
                                           required="required">
                                    <input type="text" class="search_input search_input_4" placeholder="Budget"
                                           required="required">
                                    <button class="home_search_button">search</button>
                                </div>
                            </form>
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
                            <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus
                                massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis
                                eget, tristique at leo. Vivamus massa.</p>
                        </div>
                        <div class="contact_list">
                            <ul>
                                <li>
                                    <div>address:</div>
                                    <div>1481 Creekside Lane Avila Beach, CA 931</div>
                                </li>
                                <li>
                                    <div>phone:</div>
                                    <div>+53 345 7953 32453</div>
                                </li>
                                <li>
                                    <div>email:</div>
                                    <div>yourmail@gmail.com</div>
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
                            <button class="contact_button">send</button>
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
    <script src="source/js/contact.js"></script>
@endsection
