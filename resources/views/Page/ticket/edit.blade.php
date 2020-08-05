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
                    <td><input type="text" style="border: none"></td>
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

            <a type="button"  href="" class="btn mt-3 mb-5 position-sticky" style="background-color: #64AF53;font-size: 18px;color: white;font-family: 'Oswald', sans-serif;font-weight: bold;width: 135px">Save  <span><i class="fa fa-angle-right"></i></span></a>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection
