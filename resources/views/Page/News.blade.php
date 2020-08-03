@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
@endsection

<!-- Content Contact -->
@section('Content')
    <div class="home">
        <div class="background_image" style="background-image:url(source/images/news.jpg)"></div>
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

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Container -->
                <div class="col-lg-8">
                    <div class="news_container">

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="{{ asset('source/images/news1.jpg') }}" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>1</div>
                                    <div>August</div>
                                </div>
                                <div class="news_post_title"><a href="#">SIBENIK AND THE KORNATI ISLANDS, CROATIA</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Croatia, believe it or not, is still actually an option, even though its picture-perfect medieval cities and extraordinary coastline welcomed 20 million visitors last year. And one sometimes suspects that all 20 million turn up in August, when those straight-out-of-a-fantasy-novel fortified towns are bursting at the seams. Thank heavens, then, for Obonjan. This wellness retreat from the team behind the Hideout festival, sprawling across a private island of the same name, got off to a shaky start when it launched in 2016. But the kinks have been completely ironed out, and guests are guaranteed a tempting mix of yoga classes, chill-out music and glamping. Spare some time as well for Sibenik, a short speedboat ride away: a major historic city and a lovely labyrinth of chalk-white stone. A day’s sailing around the Kornati Islands – unpopulated idylls given over to vineyards, orchards, and little else – also supplies some much-needed mellow.</p>
                                </div>
                                <div class="news_post_link"><a href="#">Read More</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="{{ asset('source/images/news2.jpg') }}" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>2</div>
                                    <div>October</div>
                                </div>
                                <div class="news_post_title"><a href="#"> Changdeokgung Palace In Seoul </a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p> A must see spot for autumn leaves in Seoul. Not only does this historic attraction offer a glimpse of traditional Korea, it’s also packed full of leafy trees that shower the palace grounds with golden leaves. See the fall foliage atop the curved palace rooftops, or scattered along the pathway, offering up plenty of places to take memorable pictures wearing traditional Korean hanbok..</p>
                                </div>
                                <div class="news_post_link"><a href="#">Read More</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="source/images/news_6.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>3</div>
                                    <div>weekend</div>
                                </div>
                                <div class="news_post_title"><a href="#">How to Have a Good Weekend</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Weekends are an important break from the regular work week, giving you time to relax and do things that you're interested in. Try to take part in a stress-relieving activity — such as exercising, spending time outside, or disconnecting from social media — while also dedicating some time to your passions or hobbies. If you need to get some work done over the weekend, set a time limit and make sure your to-do list is reasonable.</p>
                                </div>
                                <div class="news_post_link"><a href="#">Read More</a></div>
                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li class="active"><a href="#">1.</a></li>
                            <li><a href="#">2.</a></li>
                            <li><a href="#">3.</a></li>
                            <li><a href="#">4.</a></li>
                            <li><a href="#">5.</a></li>
                        </ul>
                    </div>
                </div>

                <!-- News Sidebar -->
                <div class="col-lg-4">
                    <div class="news_sidebar">

                        <!-- Categories -->
                        <div class="categories">
                            <div class="sidebar_title">Categories</div>
                            <div class="sidebar_list">
                                <ul>
                                    <li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Travels<span class="ml-auto">(09)</span></div></a></li>
                                    <li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Organization<span class="ml-auto">(12)</span></div></a></li>
                                    <li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Tips & Tricks<span class="ml-auto">(16)</span></div></a></li>
                                    <li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Uncategorized<span class="ml-auto">(22)</span></div></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Latest News -->
                        <div class="latest">
                            <div class="sidebar_title">Latest News</div>
                            <div class="latest_container">

                                <!-- Latest Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_post_image"><img src="{{ asset('source/images/news1.jpg') }}" alt=""></div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div class="latest_post_day">1</div>
                                            <div class="latest_post_month">August</div>
                                        </div>
                                        <div class="latest_post_title"><a href="#">SIBENIK AND THE KORNATI ISLANDS, CROATIA</a></div>
                                        <div class="latest_post_text"><p>Croatia, believe it or not..</p></div>
                                    </div>
                                </div>

                                <!-- Latest Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_post_image"><img src="{{ asset('source/images/news2.jpg') }}" alt=""></div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div class="latest_post_day">2</div>
                                            <div class="latest_post_month">October</div>
                                        </div>
                                        <div class="latest_post_title"><a href="#">Changdeokgung Palace In Seoul</a></div>
                                        <div class="latest_post_text"><p>A must see spot for autumn leaves..</p></div>
                                    </div>
                                </div>

                                <!-- Latest Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_post_image"><img src="source/images/latest_3.jpg" alt=""></div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div class="latest_post_day">3</div>
                                            <div class="latest_post_month">Weekends</div>
                                        </div>
                                        <div class="latest_post_title"><a href="#">How to Have a Good Weekend</a></div>
                                        <div class="latest_post_text"><p>Weekends are an important break..</p></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="travello">
                            <div class="background_image" style="background-image:url(source/images/travello.jpg)"></div>
                            <div class="travello_content">
                                <div class="travello_content_inner">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="travello_container">
                                <a href="#">
                                    <div class="d-flex flex-column align-items-center justify-content-end">
                                        <span class="travello_title">Get a 20% Discount</span>
                                        <span class="travello_subtitle">Buy Your Vacation Online Now</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/news.js') }}"></script>
@endsection
