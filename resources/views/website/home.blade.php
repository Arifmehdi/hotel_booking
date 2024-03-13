@extends('website.partial.master')
@section('content')
        <!--================Slider Area =================-->
        <section class="main_slider_area main_s_banner">
            <div class="book_table_area">
                <div class="container">
                    <h4 class="book_single_one">A Luxuary Paradise</h4>
                    <h3 class="book_single_text">Book Your Room</h3>
                    <div class="book_table_inner row m0">
                        <div class="book_table_item">
                            <div class="input-append date form_datetime">
                                <input size="16" type="text" value="" readonly placeholder="Arrival Date">
                                <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="book_table_item">
                            <div class="input-append date form_datetime">
                                <input size="16" type="text" value="" readonly placeholder="Departure Date">
                                <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="book_table_item">
                            <select class="selectpicker">
                                <option>Adults</option>
                                <option>Adults</option>
                                <option>Adults</option>
                            </select>
                        </div>
                        <div class="book_table_item">
                            <select class="selectpicker">
                                <option>Children</option>
                                <option>Children</option>
                                <option>Children</option>
                            </select>
                        </div>
                        <div class="book_table_item">
                            <a class="book_now_btn" href="#">Check Availability</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Slider Area =================-->

        <!--================Introduction Area =================-->
        <section class="introduction_area intro_area2">
            <div class="container">
                <div class="row introduction_inner">
                    <div class="col-md-6">
                        <div class="introduction_img">
                            <img src="img/introduction-img2.jpg" alt="">
                            <img src="img/introduction-img3.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="introduction_left_text">
                            <div class="intro_title">
                                <h2>Introduction <span>of resort</span></h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                            </div>
                            <h4>We are Available for business</h4>
                            <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exerci-tationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi con-sequatur? Quis autem vel eum iure reprehenderit qui in ea volup.</p>
                            <div class="row intro_box_item_area">
                                <div class="col-xs-4">
                                    <div class="intro_box_item">
                                        <i class="flaticon-toaster"></i>
                                        <h4>Restaurant</h4>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="intro_box_item">
                                        <i class="flaticon-taxi"></i>
                                        <h4>pick & drop</h4>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="intro_box_item">
                                        <i class="flaticon-wifi"></i>
                                        <h4>free wifi</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Introduction Area =================-->

        <!--================Choose Resot Area =================-->
        <section class="choose_resot_area">
            <div class="container">
                <div class="center_title">
                    <h2>why choose our <span>resot</span></h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                </div>
                <div class="row choose_resot_inner">
                    <div class="col-md-5">
                        <div class="resot_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Wellness & poll</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Free wifi</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bar & garden with terrace</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Delicious breakfast</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>HIgh customer satisfaction</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Good parking & security</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Clean room service</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Discount coupons</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="choose_resot_slider owl-carousel">
                            <div class="item">
                                <img src="img/resot/resot-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/resot/resot-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/resot/resot-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Choose Resot Area =================-->

        <!--================Explor Room Area =================-->
        <section class="explor_room_area explor_slider_area">
            <div class="container">
                <div class="explor_title row m0">
                    <div class="pull-left">
                        <div class="left_wh_title">
                            <h2>Explor Our <span>rooms</span></h2>
                            <p>choose room according to budget</p>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="about_btn_wh" href="#">view all rooms</a>
                    </div>
                </div>
                <div class="explor_room_item_inner explor_slider owl-carousel">
                    <div class="item">
                        <div class="explor_item">
                            <a href="room-details.html" class="room_image">
                                <img src="img/room/room-1.jpg" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="#"><h4>Budget room</h4></a>
                                <ul>
                                    <li><a href="#">10x15</a></li>
                                    <li><a href="#">Mountain view</a></li>
                                    <li><a href="#">2 Balcony</a></li>
                                </ul>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>$170 <span>/ Night</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <a class="book_now_btn" href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explor_item">
                            <a href="room-details.html" class="room_image">
                                <img src="img/room/room-2.jpg" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="#"><h4>Budget room</h4></a>
                                <ul>
                                    <li><a href="#">10x15</a></li>
                                    <li><a href="#">Mountain view</a></li>
                                    <li><a href="#">2 Balcony</a></li>
                                </ul>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>$170 <span>/ Night</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <a class="book_now_btn" href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="explor_item">
                            <a href="room-details.html" class="room_image">
                                <img src="img/room/room-3.jpg" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="#"><h4>Budget room</h4></a>
                                <ul>
                                    <li><a href="#">10x15</a></li>
                                    <li><a href="#">Mountain view</a></li>
                                    <li><a href="#">2 Balcony</a></li>
                                </ul>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>$170 <span>/ Night</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <a class="book_now_btn" href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Explor Room Area =================-->

        <!--================Video Area =================-->
        <section class="video_area">
            <div class="container">
                <div class="video_inner">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=48uPk1SA37Y"><i class="flaticon-play-button"></i></a>
                    <h4>virtual Tour</h4>
                    <h5>of Hill Town Resort</h5>
                </div>
            </div>
        </section>
        <!--================End Video Area =================-->

        <!--================Latest News Area =================-->
        <section class="latest_news_area client_twin_area">
            <div class="client_area">
                <div class="container twin_inner_area">
                    <div class="clients_slider owl-carousel">
                        <div class="item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/clients/client-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <p><i>“</i> Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis. </p>
                                    <a href="#"><h4>- Michale John</h4></a>
                                    <h5>Ceo of Minda</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/clients/client-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <p><i>“</i> Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis. </p>
                                    <a href="#"><h4>- Michale John</h4></a>
                                    <h5>Ceo of Minda</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/clients/client-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <p><i>“</i> Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis. </p>
                                    <a href="#"><h4>- Michale John</h4></a>
                                    <h5>Ceo of Minda</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row latest_news_left">
                            <div class="left_ex_title">
                                <h2>Latest <span>News</span></h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="l_news_item">
                                    <a href="blog-details.html" class="news_img">
                                        <img src="img/blog/latest-news/l-news-1.jpg" alt="">
                                    </a>
                                    <div class="news_text">
                                        <a class="l_date" href="#">26 Aug 2017</a>
                                        <a href="#"><h4>A Night in Resort with Family</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque ...</p>
                                        <a class="news_more" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="l_news_item">
                                    <a href="blog-details.html" class="news_img">
                                        <img src="img/blog/latest-news/l-news-2.jpg" alt="">
                                    </a>
                                    <div class="news_text">
                                        <a class="l_date" href="#">26 Aug 2017</a>
                                        <a href="#"><h4>A Night in Resort with Family</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque ...</p>
                                        <a class="news_more" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="right_event">
                            <div class="left_ex_title">
                                <h2>Upcoming <span>Events</span></h2>
                            </div>
                            <div class="right_event_area">
                                <div class="media">
                                    <div class="media-left">
                                        <h3>17<span>Aug</span></h3>
                                    </div>
                                    <div class="media-body">
                                        <h4>Anneversay of our resort</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <h3>25<span>Dec</span></h3>
                                    </div>
                                    <div class="media-body">
                                        <h4>Anneversay of our resort</h4>
                                    </div>
                                </div>
                                <a class="all_s_btn" href="#">view all events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Latest News Area =================-->

        <!--================Discount Area =================-->
        <section class="discount_area">
            <div class="container">
                <div class="row discount_inner">
                    <div class="col-md-4">
                        <div class="discount_img">
                            <img src="img/discount-person.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="discount_right_content">
                            <h5>Hot offer</h5>
                            <h4>Get 40% <span>discount</span> <br /> in summer vocations</h4>
                            <a class="book_now_btn" href="#">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Discount Area =================-->


        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->

@endsection
