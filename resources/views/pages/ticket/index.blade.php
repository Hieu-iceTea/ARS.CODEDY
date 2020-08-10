@extends('pages.layout.master')

@section('title', 'Ticket')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
@endsection

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
    <div class="home_search page_ticket">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Search for your ticket</div>
                        <div class="home_search_content">
                            <form action="ticket" method="get" class="home_search_form" id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    <input type="text" class="search_input search_input_1" id="code" name="code"
                                           placeholder="Code">

                                    <select class="search_input search_input_2" id="from" name="from">
                                        <option selected value="">-- From --</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                    </select>

                                    <select class="search_input search_input_3" id="to" name="to">
                                        <option selected value="">-- To --</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                    </select>

                                    <input type="date" class="search_input search_input_4" id="departure"
                                           name="departure" min="2020-07-31">

                                    <button class="home_search_button" type="submit">search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Destinations -->

    <div class="ticket_list page_ticket" id="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="table_title"><h4>Your ticket list <span id="ticket_count">(03 ticket)</span></h4></div>
                </div>
            </div>

            <div class="row">

                <table class="table table-info-tickets table-hover ">
                    <thead class="table-top">
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Passenger</th>
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody class="active">
                    <tr>
                        <th scope="row">VN-6859</th>
                        <td>HaNoi, VietNam</td>
                        <td>HoChiMinh, VietNam</td>
                        <td>08/08/2020</td>
                        <td>5 (Adult: 1, Children: 4, Baby: 0)</td>
                        <td>
                            <a href="/ticket/detail/1">View</a>
                            |
                            <a href="/ticket/edit/1">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">VN-6859</th>
                        <td>HaNoi, VietNam</td>
                        <td>HoChiMinh, VietNam</td>
                        <td>08/08/2020</td>
                        <td>5 (Adult: 1, Children: 4, Baby: 0)</td>
                        <td>
                            <a href="/ticket/detail/1">View</a>
                            |
                            <a href="/ticket/edit/1">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">VN-6859</th>
                        <td>HaNoi, VietNam</td>
                        <td>HoChiMinh, VietNam</td>
                        <td>08/08/2020</td>
                        <td>5 (Adult: 1, Children: 4, Baby: 0)</td>
                        <td>
                            <a href="/ticket/detail/1">View</a>
                            |
                            <a href="/ticket/edit/1">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">VN-6859</th>
                        <td>HaNoi, VietNam</td>
                        <td>HoChiMinh, VietNam</td>
                        <td>08/08/2020</td>
                        <td>5 (Adult: 1, Children: 4, Baby: 0)</td>
                        <td>
                            <a href="/ticket/detail/1">View</a>
                            |
                            <a href="/ticket/edit/1">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">VN-6859</th>
                        <td>HaNoi, VietNam</td>
                        <td>HoChiMinh, VietNam</td>
                        <td>08/08/2020</td>
                        <td>5 (Adult: 1, Children: 4, Baby: 0)</td>
                        <td>
                            <a href="/ticket/detail/1">View</a>
                            |
                            <a href="/ticket/edit/1">Edit</a>
                        </td>
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
