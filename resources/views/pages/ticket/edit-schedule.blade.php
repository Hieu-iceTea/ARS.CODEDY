@extends('pages.layout.master')

@section('title', 'Ticket - Edit Schedule')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
@endsection

<!-- Content Home -->
<!-- Content Home -->
@section('Content')

    <!-- Home -->

    <div class="home page_ticket">

        <div class="background_image" style="background-image:url(img/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Manage your tickets</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Search -->
    <div class="home_search search_flight">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Re-search for your flight</div>
                        <div class="home_search_content">
                            <form action="booking/step-1" method="get" class="home_search_form" id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    {{--Hiện thị tên các sân bay đi--}}
                                    <select class="search_input search_input_1" id="from" name="from"
                                            required="required">
                                        <option selected value="">-- From --</option>
                                        @foreach($addressAirports as $addressAirport)
                                            <option value= {{ $addressAirport->airport_id }}>{{ $addressAirport->location }} | {{ $addressAirport->name }} ( {{ $addressAirport->code }} ) </option>
                                        @endforeach

                                    </select>

                                    {{--Hiện thị tên các sân bay đến--}}
                                    <select class="search_input search_input_2" id="to" name="to"
                                            required="required" >
                                        <option selected value="">-- To --</option>
                                        @foreach($addressAirports as $addressAirport)
                                            <option value= {{ $addressAirport->airport_id }}>{{ $addressAirport->location }} | {{ $addressAirport->name }} ( {{ $addressAirport->code }} ) </option>
                                        @endforeach

                                    </select>

                                    <input type="date" class="search_input search_input_3" id="departure"
                                           name="departure" placeholder="Departure" required>


                                    <div class="search_input search_input_4">
                                        <div class="title">
                                            <p><a data-toggle="collapse" href="#multiCollapseExample1" role="button"
                                                  aria-expanded="false" aria-controls="multiCollapseExample1"> Passenger
                                                    <span class="mr-4" id="number-of-passenger"></span> <i
                                                        class="fa fa-angle-down rotate-icon "> </i> </a></p>
                                        </div>
                                        <div class="search_input_ssenger collapse "
                                             style="margin-top: -212px;margin-left: -20px" id="multiCollapseExample1">
                                            <div class="people ">
                                                <table class="table ">
                                                    <tr>
                                                        <td><p>Adults: </p></td>
                                                        <td>
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <span class="dec number"><i class="fa fa-minus"></i></span>
                                                                    <input type="text" name="adults"  min="1"
                                                                           value="1">
                                                                    <span class="inc number"> <i class="fa fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Children: </p></td>
                                                        <td>
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <span class="dec number"><i class="fa fa-minus"></i></span>
                                                                    <input type="text" id="value1" name="children"
                                                                           value="0">
                                                                    <span class="inc number"> <i class="fa fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Infant: </p></td>
                                                        <td>
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <span class="dec number"><i class="fa fa-minus"></i></span>
                                                                    <input type="text" id="value1" name="infant"
                                                                           value="0">
                                                                    <span class="inc number"> <i class="fa fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>


                                            </div>


                                        </div>

                                    </div>
                                    <button class="home_search_button" type="submit">search</button>
                                </div>
                                <input type="hidden" id="total_passenger" name="total_passenger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
