@extends('layouts.app')

@section('content')
    <!-- ===================== Welcome Area Start ===================== -->
    <section class="welcome_area" id="home">
        <div class="welcome_slides">
            <!-- Single Slide Start -->
            <div class="single_slide" style="background-image: url(img/bg-pattern/slider-1.jpg);">
                <div class="slide_text">
                    <div class="table">
                        <div class="table_cell">
                            <h2>Education is Power</h2>
                            <h3>Educating the mind without educating the heart is no education at all.</h3>
                            <div class="welcome_btn">
                                <a class="btn btn-1 btn-default btn-lg active" href="#" role="button">Learn More</a>
                                <a class="btn btn-2 btn-default btn-lg" href="#" role="button">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Start -->
            <div class="single_slide" style="background-image: url(img/bg-pattern/slider-2.jpg);">
                <div class="slide_text">
                    <div class="table">
                        <div class="table_cell">
                            <h2>{{ config('app.name') }}</h2>
                            <h3>Education is the most powerful weapon which you can use to change the world.</h3>
                            <div class="welcome_btn">
                                <a class="btn btn-1 btn-default btn-lg active" href="#" role="button">Enroll Now</a>
                                <a class="btn btn-2 btn-default btn-lg" href="#contact" role="button">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ===================== Welcome Area End ===================== -->

    <!-- ===================== Awesome Feature Area Start ===================== -->
    <section class="awesome_features_area home2 section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading wow fadeInUp">
                        <img src="img/icon-img/icon.png" alt="">
                        <h4>{{ config('app.name') }} Services</h4>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
            <!-- end./ row -->

            <div class="row">
                <!-- Single Feature Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature_img">
                            <span class="icon-genius"></span>
                        </div>
                        <!-- Single Feature Image Area End -->
                        <div class="feature_text">
                            <h5>Effective Courses</h5>
                            <p>Lorem ipsum dolors item amet coti adipisicing elt, sed do eimd at.</p>
                        </div>
                        <!-- Single Feature Text Area End -->
                    </div>
                </div>
                <!-- Single Feature Area End -->

                <!-- Single Feature Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature_img">
                            <span class="icon-profile-male"></span>
                        </div>
                        <!-- Single Feature Image Area End -->
                        <div class="feature_text">
                            <h5>Best Course Teachers</h5>
                            <p>Lorem ipsum dolors item amet coti adipisicing elt, sed do eimd at.</p>
                        </div>
                        <!-- Single Feature Text Area End -->
                    </div>
                </div>
                <!-- Single Feature Area End -->

                <!-- Single Feature Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature_img">
                            <span class="icon-compass"></span>
                        </div>
                        <!-- Single Feature Image Area End -->
                        <div class="feature_text">
                            <h5>Practical Classes</h5>
                            <p>Lorem ipsum dolors item amet coti adipisicing elt, sed do eimd at.</p>
                        </div>
                        <!-- Single Feature Text Area End -->
                    </div>
                </div>
                <!-- Single Feature Area End -->

                <!-- Single Feature Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature_img">
                            <span class="icon-gift"></span>
                        </div>
                        <!-- Single Feature Image Area End -->
                        <div class="feature_text">
                            <h5>Organised Classroom</h5>
                            <p>Lorem ipsum dolors item amet coti adipisicing elt, sed do eimd at.</p>
                        </div>
                        <!-- Single Feature Text Area End -->
                    </div>
                </div>
                <!-- Single Feature Area End -->

            </div>
            <!-- end./ row -->
        </div>
        <!-- end./ container -->
    </section>
    <!-- ===================== Awesome Feature Area End ===================== -->

    <!-- ===================== Popular Courses Area Start ===================== -->
    <section class="popular_coureses_area home2 grid_coundown section_padding_60">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Area Start -->
                    <div class="section_heading wow fadeInUp">
                        <img src="img/icon-img/coures-icon.png" alt="">
                        <h4>Upcoming Courses</h4>
                    </div>
                    <!-- Section Heading Area End -->
                </div>
            </div>

            <div class="row">
                <!-- Single Courses Area Start -->
                <div class="col-md-4 col-xs-12">
                    <div class="single_courses wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single_courses_thumb">
                            <img src="img/course-img/event-1.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="links">
                                    <a class="magnific-popup" href="img/course-img/event-1.jpg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Courses Image Area End -->
                        <div class="single_courses_desc">
                            <!-- Single Courses Title Area End -->
                            <div class="title">
                                <a href="#"><h5>7 Quick Ways to Make a Great Event Successful</h5></a>
                                <div class="date_time">
                                    <div class="date">
                                        <p><span class="icon-calendar"></span> 16 Sep, 2017</p>
                                    </div>
                                    <div class="time">
                                        <p><span class="icon-clock"></span> 20:30</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic sunt</p>
                            </div>
                            <!-- Single Courses Blog Title Area End -->

                            <div class="price_rating_area">
                                <ul data-countdown="2018/01/01 14:21:37" class="timer">
                                    <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                                    <li><span class="days">0</span>d</li>
                                    <li><span class="hours">0</span>h</li>
                                    <li><span class="minutes">00</span>m</li>
                                    <li><span class="seconds">00</span>s</li>
                                </ul>
                            </div>
                            <!-- Event Coundown area End -->
                        </div>
                    </div>
                </div>
                <!-- Single Courses Area End -->

                <!-- Single Courses Area Start -->
                <div class="col-md-4 col-xs-12">
                    <div class="single_courses wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single_courses_thumb">
                            <img src="img/course-img/event-2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="links">
                                    <a class="magnific-popup" href="img/course-img/event-2.jpg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Courses Image Area End -->
                        <div class="single_courses_desc">
                            <!-- Single Courses Title Area End -->
                            <div class="title">
                                <a href="#"><h5>Science &amp; IT Fair Coming to Your University</h5></a>
                                <div class="date_time">
                                    <div class="date">
                                        <p><span class="icon-calendar"></span> 16 Sep, 2017</p>
                                    </div>
                                    <div class="time">
                                        <p><span class="icon-clock"></span> 20:30</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic sunt </p>
                            </div>
                            <!-- Single Courses Blog Title Area End -->

                            <div class="price_rating_area">
                                <ul data-countdown="2017/01/01 14:21:12" class="timer">
                                    <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                                    <li><span class="days">0</span>d</li>
                                    <li><span class="hours">0</span>h</li>
                                    <li><span class="minutes">00</span>m</li>
                                    <li><span class="seconds">00</span>s</li>
                                </ul>
                            </div>
                            <!-- Event Coundown area End -->
                        </div>
                    </div>
                </div>
                <!-- Single Courses Area End -->

                <!-- Single Courses Area Start -->
                <div class="col-md-4 col-xs-12">
                    <div class="single_courses wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single_courses_thumb">
                            <img src="img/course-img/event-3.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="links">
                                    <a class="magnific-popup" href="img/course-img/event-3.jpg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Courses Image Area End -->
                        <div class="single_courses_desc">
                            <!-- Single Courses Title Area End -->
                            <div class="title">
                                <a href="#"><h5>7 Quick Ways to Make a Great Event Successful</h5></a>
                                <div class="date_time">
                                    <div class="date">
                                        <p><span class="icon-calendar"></span> 16 Sep, 2017</p>
                                    </div>
                                    <div class="time">
                                        <p><span class="icon-clock"></span> 20:30</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic sunt</p>
                            </div>
                            <!-- Single Courses Blog Title Area End -->

                            <div class="price_rating_area">
                                <ul data-countdown="2018/05/07 14:21:45" class="timer">
                                    <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                                    <li><span class="days">0</span>d</li>
                                    <li><span class="hours">0</span>h</li>
                                    <li><span class="minutes">00</span>m</li>
                                    <li><span class="seconds">00</span>s</li>
                                </ul>
                            </div>
                            <!-- Event Coundown area End -->
                        </div>
                    </div>
                </div>
                <!-- Single Courses Area End -->
            </div>
        </div>
    </section>
    <!-- ===================== Popular Courses Area End ===================== -->

    <!-- ===================== Why Chooses Area Start ===================== -->
    <section class="why_choose_us_area home2 section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section_heading wow fadeInUp">
                        <img src="img/icon-img/why-choose-icon.png" alt="">
                        <h4>WHY Choose {{ config('app.name') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single why choose area start -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_service wow fadeInUp" data-wow-delay="0.1s">
                        <div class="single_service_img_area">
                            <div class="border">
                                <!-- Single why choose image -->
                                <div class="single_service_img">
                                    <span class="icon-linegraph"></span>
                                </div>
                                <!-- Single why choose title -->
                                <div class="service_title">
                                    <h5>HIGHest RATED</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single why choose area start -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_service wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single_service_img_area">
                            <div class="border">
                                <!-- Single why choose image -->
                                <div class="single_service_img">
                                    <span class="icon-presentation"></span>
                                </div>
                                <!-- Single why choose title -->
                                <div class="service_title">
                                    <h5>ONLINE TRAINING</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single why choose area start -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_service wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single_service_img_area">
                            <div class="border">
                                <!-- Single why choose image -->
                                <div class="single_service_img">
                                    <span class="icon-global"></span>
                                </div>
                                <!-- Single why choose title -->
                                <div class="service_title">
                                    <h5>we are GLOBAL</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single why choose area start -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_service wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single_service_img_area">
                            <div class="border">
                                <!-- Single why choose image -->
                                <div class="single_service_img">
                                    <span class="icon-lightbulb"></span>
                                </div>
                                <!-- Single why choose title -->
                                <div class="service_title">
                                    <h5>Creative Solution</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single why choose area start -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_service wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single_service_img_area">
                            <div class="border">
                                <!-- Single why choose image -->
                                <div class="single_service_img">
                                    <span class="icon-book-open"></span>
                                </div>
                                <!-- Single why choose title -->
                                <div class="service_title">
                                    <h5>SKILLED FACULTY</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_service wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single_service_img_area">
                            <div class="border">
                                <!-- Single why choose image -->
                                <div class="single_service_img">
                                    <span class="icon-layers"></span>
                                </div>
                                <!-- Single why choose title -->
                                <div class="service_title">
                                    <h5>Large e-library</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single why choose area start -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_service wow fadeInUp" data-wow-delay="0.7s">
                        <div class="single_service_img_area">
                            <div class="border">
                                <!-- Single why choose image -->
                                <div class="single_service_img">
                                    <span class="icon-browser"></span>
                                </div>
                                <!-- Single why choose title -->
                                <div class="service_title">
                                    <h5>Free Webinars</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single why choose area start -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_service wow fadeInUp" data-wow-delay="0.8s">
                        <div class="single_service_img_area">
                            <div class="border">
                                <!-- Single why choose image -->
                                <div class="single_service_img">
                                    <span class="icon-genius"></span>
                                </div>
                                <!-- Single why choose title -->
                                <div class="service_title">
                                    <h5>Online Research</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end. row -->
        </div>
        <!-- end. container -->
    </section>
    <!-- ===================== Why Chooses Area End ===================== -->

  



    <!-- ===================== Testimonial Area Start ===================== -->
    <section class="testimonial_area home2 section_padding_60">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="testimonials_home2">

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area_home2">
                            <!-- Single testimonial thumb  -->
                            <div class="testimonial_thumb">
                                <img src="img/teacher-img/team-member-1.jpg" alt="">
                            </div>
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                <h5>MD NAZRUL ISLAM</h5>
                                <h6>CEO &amp; Founder, Designing World</h6>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area_home2">
                            <!-- Single testimonial thumb  -->
                            <div class="testimonial_thumb">
                                <img src="img/teacher-img/team-member-2.jpg" alt="">
                            </div>
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                <h5>YASIN RAHMAN</h5>
                                <h6>CEO &amp; Founder, Creativeracer</h6>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area_home2">
                            <!-- Single testimonial thumb  -->
                            <div class="testimonial_thumb">
                                <img src="img/teacher-img/team-member-4.jpg" alt="">
                            </div>
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                <h5>DELOWER HOSAIN</h5>
                                <h6>CEO &amp; Founder, Design Clime</h6>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area_home2">
                            <!-- Single testimonial thumb  -->
                            <div class="testimonial_thumb">
                                <img src="img/teacher-img/team-member-3.jpg" alt="">
                            </div>
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                <h5>LIM SARAH</h5>
                                <h6>CEO &amp; Founder, Priyo Bazaar</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== Testimonial Area End ===================== -->

    <!-- ===================== Blog Area Start ===================== -->
    <section class="blog_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section_heading wow fadeInUp">
                        <img src="img/news-img/news-icon.png" alt="">
                        <h4>Blog &amp; News</h4>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- single latest news area start -->
                <div class="col-md-4 col-xs-12">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay="0.2s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img src="img/news-img/blog.jpg" alt="">
                            <!-- single latest news published date -->
                            <div class="published_date">
                                <p class="date">01</p>
                                <p class="month">Aug</p>
                            </div>
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="#"><h4>Improve Your Computer Skills, Sign Up For Free Online Courses</h4></a>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias adipisci voluptate qui laudantium vitae? Impedit pariatur molestiae officia saepe atque. Illum quos maxime maiores, inventore eveniet? Iure, fuga quis. Magni.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single latest news area start -->
                <div class="col-md-4 col-xs-12">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay="0.4s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img src="img/news-img/blog-2.jpg" alt="">
                            <!-- single latest news published date -->
                            <div class="published_date">
                                <p class="date">22</p>
                                <p class="month">Dec</p>
                            </div>
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="#"><h4>Education is not preparation for life; education is life itself.</h4></a>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias adipisci voluptate qui laudantium vitae? Impedit pariatur molestiae officia saepe atque. Illum quos maxime maiores, inventore eveniet? Iure, fuga quis. Magni.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single latest news area start -->
                <div class="col-md-4 col-xs-12">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay="0.6s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img src="img/news-img/blog-3.jpg" alt="">
                            <!-- single latest news published date -->
                            <div class="published_date">
                                <p class="date">13</p>
                                <p class="month">Feb</p>
                            </div>
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="#"><h4>Education is the key to unlock the golden door of freedom.</h4></a>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias adipisci voluptate qui laudantium vitae? Impedit pariatur molestiae officia saepe atque. Illum quos maxime maiores, inventore eveniet? Iure, fuga quis. Magni.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end. row -->
        </div>
        <!-- end. container -->
    </section>
    <!-- ===================== Blog Area End ===================== -->

   

    <!-- ===================== Contact & FAQ Area Start ===================== -->
    <section class="global_partner_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section_heading wow fadeInUp">
                        <img src="img/news-img/news-icon.png" alt="">
                        <h4>Contact &amp; Faq</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- basic contact info area start -->
                <div class="col-md-6 col-xs-12">
                    <div class="basic_contact_area wow fadeInUp" data-wow-delay="0.2s">
                        <!-- basic contact title -->
                        <h5>HAve a quesions? Write to {{ config('app.name') }}.</h5>
                        <!-- basic contact form -->
                        <div class="basic_contact_form">
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-left" id="name" placeholder="Your Full Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="phone" placeholder="Your Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your E-mail" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="question" cols="30" rows="10" placeholder="Your Question" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Get Answer</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="accordions wow fadeInUp" data-wow-delay="0.4s" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                    <a role="button" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"  href="#collapseOne">How can I apply for a job?
                                        <span class="accor-open">+</span>
                                        <span class="accor-close">-</span>
                                    </a>
                                </h5>
                            <div id="collapseOne" class="accordion-content collapse in">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="two" data-parent="#accordion" data-toggle="collapse"  href="#two">Where can I find out about events?
                                        <span class="accor-open">+</span>
                                        <span class="accor-close">-</span>
                                    </a>
                                </h5>
                            <div id="two" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                    <a role="button" aria-expanded="true" aria-controls="three" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#three">Who can use the libraries? 
                                        <span class="accor-open">+</span>
                                        <span class="accor-close">-</span>
                                    </a>
                                </h5>
                            <div id="three" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                       <a role="button" aria-expanded="true" aria-controls="four" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#four">Are there campus tours for visitors?
                                        <span class="accor-open">+</span>
                                        <span class="accor-close">-</span>
                                    </a>
                                </h5>
                            <div id="four" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                    <a role="button" aria-expanded="true" aria-controls="five" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#five">What is the phone number for the University? 
                                        <span class="accor-open">+</span>
                                        <span class="accor-close">-</span>
                                    </a>
                                </h5>
                            <div id="five" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                    <a role="button" aria-expanded="true" aria-controls="six" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#six">How can I post a job for students?
                                        <span class="accor-open">+</span>
                                        <span class="accor-close">-</span>
                                    </a>
                                </h5>
                            <div id="six" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== Contact & FAQ Area End ===================== -->

    <!-- ===================== Newsletter Area Start ===================== -->
    <div class="newsletter_area wow fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="newsletter_text">
                        <h4>Subcribe weekly newsletter</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_from">
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Enter Your E-mail" required>
                            </div>
                            <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
