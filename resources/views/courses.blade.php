@extends('layouts.app')
@section('content')
    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb_section">
                        <!-- Breadcumb page title start -->
                        <div class="page_title">
                            <h3>Courses</h3>
                        </div>
                        <!-- Breadcumb page pagination start -->
                        <div class="page_pagination">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>View All</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular_coureses_area all_courses grid_list section_padding_100">
        <div class="container">
            <div class="row">

                <!-- Single Courses Area Start -->
                <div class="col-sm-4 col-xs-12">
                    <div class="single_courses">
                        <div class="single_courses_thumb">
                            <img src="img/course-img/softwareengineer.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="links">
                                    <a class="magnific-popup" href="img/course-img/softwareengineer.jpg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Courses Image Area End -->
                        <div class="single_courses_desc">
                            <!-- Single Courses Title Area End -->
                            <div class="title">
                                <a href="#"><h5>Introduction to Family Engagement in Education</h5></a>
                                <p><i class="fa fa-user" aria-hidden="true"></i> Md Nazrul Islam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, excepturi!</p>
                            </div>
                            <!-- Single Courses Blog Title Area End -->
                            <div class="price_rating_area">
                                <div class="price">
                                    <span>$199</span>
                                </div>
                                <div class="seat">
                                    <i class="fa fa-users" aria-hidden="true"><span>90</span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Courses Area End -->

                <!-- Single Courses Area Start -->
                <div class="col-sm-4 col-xs-12">
                    <div class="single_courses">
                        <div class="single_courses_thumb">
                            <img src="img/course-img/softwareengineer-2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="links">
                                    <a class="magnific-popup" href="img/course-img/softwareengineer-2.jpg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Courses Image Area End -->
                        <div class="single_courses_desc">
                            <!-- Single Courses Title Area End -->
                            <div class="title">
                                <a href="#"><h5>Introduction to Family Engagement in Education</h5></a>
                                <p><i class="fa fa-user" aria-hidden="true"></i> Md Nazrul Islam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, excepturi!</p>
                            </div>
                            <!-- Single Courses Blog Title Area End -->
                            <div class="price_rating_area">
                                <div class="price">
                                    <span>$199</span>
                                </div>
                                <div class="seat">
                                    <i class="fa fa-users" aria-hidden="true"><span>90</span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Courses Area End -->

                <!-- Single Courses Area Start -->
                <div class="col-sm-4 col-xs-12">
                    <div class="single_courses">
                        <div class="single_courses_thumb">
                            <img src="img/course-img/lab_abstract.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="links">
                                    <a class="magnific-popup" href="img/course-img/lab_abstract.jpg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Courses Image Area End -->
                        <div class="single_courses_desc">
                            <!-- Single Courses Title Area End -->
                            <div class="title">
                                <a href="#"><h5>Introduction to Family Engagement in Education</h5></a>
                                <p><i class="fa fa-user" aria-hidden="true"></i> Md Nazrul Islam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, excepturi!</p>
                            </div>
                            <!-- Single Courses Blog Title Area End -->
                            <div class="price_rating_area">
                                <div class="price">
                                    <span>$199</span>
                                </div>
                                <div class="seat">
                                    <i class="fa fa-users" aria-hidden="true"><span>90</span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Courses Area End -->    
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Pagination Area Start -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li><a href="#" aria-label="Previous">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next">Next</a></li>
                        </ul>
                    </nav>
                    <!-- Pagination Area End -->
                </div>
            </div>
            <!-- .end row -->
        </div>
        <!-- .end container -->
    </section>

@endsection