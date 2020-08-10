@extends('pages.layout.master')

@section('title', 'Schedule')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/my_styles">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home page_ticket">

        <div class="background_image"
             style="background-image:url({{ asset('img/destinations.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title "><h2>Flight Schedule</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Search -->
    <div class="home_search page_ticket">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Search code Filght</div>
                        <div class="home_search_content">
                            <form action="schedule/detail/VN-67" method="get" class="home_search_form"
                                  id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    <input type="text" class="search_input search_input_1  w-75" id="code"
                                           name="IDFightSchedule"
                                           placeholder="Code">
                                    <button class="home_search_button ml-5" type="submit">search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule index -->
    <div class="schedule-index">
        <div class="container">
            <div class="row ">
                <div class="title-flight">
                    <h4> Recent Flight</h4>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead class="heade-table">
                    <tr>
                        <th scope="col">CODE</th>
                        <th scope="col">TO</th>
                        <th scope="col">FROM</th>
                        <th scope="col">Estimated time to go</th>
                        <th scope="col">Estimated Time of Arrival</th>
                        <th scope="col">STATUS</th>
                    </tr>
                    </thead>
                    <tbody class="active text-uppercase">
                    <tr class="">
                        <th scope="row">tm</th>
                        <td>hÀ NÔI, vIỆT nAM</td>
                        <td>hồ cHÍ mINH vIỆT nAM</td>
                        <td>12-12-2020 20:50</td>
                        <td>12-12-2020 20:50</td>
                        <td>Confirm</td>
                    </tr>
                    <tr class="">
                        <th scope="row">tm</th>
                        <td>hÀ NÔI, vIỆT nAM</td>
                        <td>hồ cHÍ mINH vIỆT nAM</td>
                        <td>12-12-2020 20:50</td>
                        <td>12-12-2020 20:50</td>
                        <td>Confirm</td>
                    </tr>
                    <tr class="">
                        <th scope="row">tm</th>
                        <td>hÀ NÔI, vIỆT nAM</td>
                        <td>hồ cHÍ mINH vIỆT nAM</td>
                        <td>12-12-2020 20:50</td>
                        <td>12-12-2020 20:50</td>
                        <td>Confirm</td>
                    </tr>
                    <tr class="">
                        <th scope="row">tm</th>
                        <td>hÀ NÔI, vIỆT nAM</td>
                        <td>hồ cHÍ mINH vIỆT nAM</td>
                        <td>12-12-2020 20:50</td>
                        <td>12-12-2020 20:50</td>
                        <td>Confirm</td>
                    </tr>
                    <tr class="">
                        <th scope="row">tm</th>
                        <td>hÀ NÔI, vIỆT nAM</td>
                        <td>hồ cHÍ mINH vIỆT nAM</td>
                        <td>12-12-2020 20:50</td>
                        <td>12-12-2020 20:50</td>
                        <td>Confirm</td>
                    </tr>
                    <tr class="">
                        <th scope="row">tm</th>
                        <td>hÀ NÔI, vIỆT nAM</td>
                        <td>hồ cHÍ mINH vIỆT nAM</td>
                        <td>12-12-2020 20:50</td>
                        <td>12-12-2020 20:50</td>
                        <td>Confirm</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection
