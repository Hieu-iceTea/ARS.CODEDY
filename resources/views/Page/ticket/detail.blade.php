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
<div class="tiket_detail">
    <div class="container">
        <div class="row ml-1 my-4 ticket_title_color">
            <h2>Ticket details</h2>
        </div>

        <table class="table table-bordered detail_font_family">
            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="5" class="detail-background" style="background-color: #1b4b72">Customer information</th>
            </tr>
            </thead>
            <tbody class="font-style">
            <tr>
                <th scope="row">#</th>
                <th>Full name</th>
                <th>Gender</th>
                <th>Date of birth</th>
                <th>Guest type</th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Vu Quang Huy</td>
                <td>Male</td>
                <td>20/02/2001</td>
                <td>Adults</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Truong Thanh Tu</td>
                <td>Female</td>
                <td>01/01/2020</td>
                <td>Baby</td>
            </tr>
            </tbody>
        </table>


        <table class="table table-bordered my-5 detail_font_family">
            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="8" class="detail-background" style="background-color: #1b4b72">Ticket information</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">#</th>
                <th>Ticket code</th>
                <th>Payment type</th>
                <th>Price type</th>
                <th>Status</th>
                <th>Ticket type</th>
                <th>Total number of guests</th>
                <th>The total amount</th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>MH370</td>
                <td>Cash</td>
                <td>VNĐ</td>
                <td>Tickets left</td>
                <td>Bamboo Bussiness</td>
                <td rowspan="2">2</td>
                <td rowspan="2">1.000.000Đ</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>MH370</td>
                <td>Truong Thanh Tu</td>
                <td>Cash</td>
                <td>VNĐ</td>
                <td>Bamboo ECO</td>
            </tr>
            </tbody>
        </table>

        <table class="table table-bordered detail_font_family mb-5">
            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="5" class="detail-background" style="background-color: #1b4b72">Flight information</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">#</th>
                <th>Flight code</th>
                <th>From</th>
                <th>To</th>
                <th>Describe</th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>MH370</td>
                <td>TP.Ho Chi Minh</td>
                <td>Ha Noi</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>MH370</td>
                <td>TP.Ho Chi Minh</td>
                <td>Ha Noi</td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection
