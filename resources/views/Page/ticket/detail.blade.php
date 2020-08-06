@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles') }}">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home Background Header-->
    <div class="home page_ticket" style="height: 586px">

        <div class="background_image" style="background-image:url(../../source/images/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Customer information </h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mb-5">
        <div class="row mt-4">
            <div class="col-8 ml-3">
                <div class="row mb-4 booking2_color_logo">
                    <div class="media">
                        <i class="fa fa-plane" aria-hidden="true" style="font-size: 400%"></i>
                        <div class="media-body ml-4">
                            <h5 class="mt-0">Journey details</h5>
                            <h4>Your current reservation</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 ticket_detail_fontfamily ticket_detail_fontsize ml-5">
                <p class="ticket_detail_fontfamily ticket_detail_fontsize">Booking code: <a href=""><span class="ticket_detail_coloredit">ABC123</span></a></p>
                <a href="">Cancellation</a> | <a href="">Pay</a>
            </div>
        </div>
        <div class="card w-100">
            <h5 class="card-header booking2_color_title tiket_detail_title">Flight information</h5>
            <div class="row mt-3">
                <div class="col-7 ml-5">
                    <p class="ticket_detail_fontfamily ticket_detail_fontsize">Flight to go <span class="ticket_detail_coloredit"><strong>Sunday, 20/09/2020.</strong></span> from <span>Ha Noi</span> to <span>Ho Chi Minh</span></p>
                </div>
                <div class="col-4 ml-4">
                    <p class=" ticket_detail_fontsize ticket_detail_fontfamily">Time remaining before takeoff: <span class="ticket_detail_coloredit">45d 19h 10m</span></p>
                </div>
            </div>
            <div class="card m-4 ticket_detail_fontsize ticket_detail_fontfamily">
                <div class="row">
                    <div class="col-2 ml-4">
                        <p class=" ticket_detail_fontsize ticket_detail_fontfamily ticket_detail_coloredit"><span>10:10</span></p>
                        <p class="ticket_detail_fontfamily tiket_detail_add ticket_detail_coloredit"><span>Ha Noi</span></p>
                    </div>
                    <div class="col-1 tiket_detail_mode">
                        <p class="ticket_detail_fontfamily ticket_detail_coloredit"> > </p>
                    </div>
                    <div class="col-2">
                        <p class="ticket_detail_fontfamily ticket_detail_fontsize ticket_detail_coloredit"><span>12:15</span></p>
                        <p class="ticket_detail_fontfamily tiket_detail_add ticket_detail_coloredit"><span>Ho Chi Minh</span></p>
                    </div>
                    <div class="col-2 mt-3">
                        <p class="ticket_detail_fontfamily ticket_detail_fontsize ticket_detail_coloredit"><span>VN-556</span></p>
                    </div>
                    <div class="col-2 ticket_arsplus mt-3 mr-5" >
                        <p class="ticket_detail_fontfamily">ARS Plus</p>
                    </div>
                    <div class="col-3 my-3 ml-5">
                        <button type="submit" class="btn tiket_detail_continue position-sticky continue">Change fligh schedules
                            <span><i class="fa fa-angle-right"></i></span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card w-100 mt-5 ">
            <h5 class="card-header tiket_detail_title">Flight information</h5>
            <div class="row mt-3">
                <div class="card w-100 my-4 mx-5">
                    <table class="table w-100">
                        <thead class="ticket_detail_table">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Function</th>
                        </tr>
                        </thead>
                        <tbody class="ticket_detail_table">
                        <tr>
                            <th scope="row">1</th>
                            <td>Made</td>
                            <td>Dang Kim Thi</td>
                            <td>Adults</td>
                            <td>Change passenger name</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Made</td>
                            <td>Dang Kim Thi</td>
                            <td>Adults</td>
                            <td>Change passenger name</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Made</td>
                            <td>Dang Kim Thi</td>
                            <td>Adults</td>
                            <td>Change passenger name</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card w-100 mt-5">
            <h5 class="card-header tiket_detail_title">Flight information</h5>
            <div class="row mt-3">
                <div class="card w-100 my-4 mx-5">
                    <table class="table w-100">
                        <thead class="ticket_detail_table">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Payment Type</th>
                            <th scope="col">Amount of money</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody class="ticket_detail_table">
                        <tr>
                            <th scope="row">1</th>
                            <td>Master Card</td>
                            <td>3.599.000 VND</td>
                            <td>Finish</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card w-100 mt-5">
            <h5 class="card-header tiket_detail_title">Flight information</h5>
            <div class="row mt-3">
                <div class="card w-100 my-4 mx-5">
                    <table class="table w-100 ticket_detail_table">
                        <thead class="ticket_detail_table">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody class="ticket_detail_table">
                        <tr>
                            <th scope="row">1</th>
                            <td>Add Luggage</td>
                            <td>...</td>
                            <td>3.599.000 VND</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Add Luggage</td>
                            <td>...</td>
                            <td>3.599.000 VND</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection
