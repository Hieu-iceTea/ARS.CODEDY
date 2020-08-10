@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
@endsection

<!-- Content Contact -->
@section('Content')

    <div class="home page_ticket">

        <div class="background_image" style="background-image:url(source/images/news.jpg)"></div>
        <div class="home_slider_content_container mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>News</h2></div>
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
                                    <div>02</div>
                                    <div>june</div>
                                </div>
                                <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
                                </div>
                                <div class="news_post_link"><a href="#">Read More</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="source/images/news_5.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>02</div>
                                    <div>june</div>
                                </div>
                                <div class="news_post_title"><a href="#">10 Amazing Destination for you this summer</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
                                </div>
                                <div class="news_post_link"><a href="#">Read More</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="source/images/news_6.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                    <div>02</div>
                                    <div>june</div>
                                </div>
                                <div class="news_post_title"><a href="#">How to organize your perfect vacation</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
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
                                    <div class="latest_post_image"><img src="source/images/latest_1.jpg" alt=""></div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div class="latest_post_day">02</div>
                                            <div class="latest_post_month">june</div>
                                        </div>
                                        <div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
                                    </div>
                                </div>

                                <!-- Latest Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_post_image"><img src="source/images/latest_2.jpg" alt=""></div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div class="latest_post_day">02</div>
                                            <div class="latest_post_month">june</div>
                                        </div>
                                        <div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
                                    </div>
                                </div>

                                <!-- Latest Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_post_image"><img src="source/images/latest_3.jpg" alt=""></div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div class="latest_post_day">02</div>
                                            <div class="latest_post_month">june</div>
                                        </div>
                                        <div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
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
