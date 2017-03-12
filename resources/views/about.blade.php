@extends('layouts.app')
@section('content')
   <!-- Breadcumb area start -->
    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb_section">
                        <!-- Breadcumb page title start -->
                        <div class="page_title">
                            <h3>About Us</h3>
                        </div>
                        <!-- Breadcumb page pagination start -->
                        <div class="page_pagination">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb area end -->

    <!-- About us area start -->
    <section class="about_us_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <!-- About us text start -->
                    <div class="about_us_text">
                        <h3>About <span>{{config('app.name')}}</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque quaerat modi accusamus, deserunt quos iusto beatae facilis expedita quisquam molestiae harum distinctio, vero mollitia, corporis repellat! Dicta possimus, minima.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus repellat blanditiis non tenetur modi, sint id quo esse corporis dicta, dignissimos nemo. Voluptas blanditiis ad culpa obcaecati in dicta, quibusdam.</p>
                    </div>
                    <!-- About us special quote start -->
                    <div class="special_service">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- About us single quote start -->
                                <div class="single_special_service">
                                    <img src="img/checked.png" alt="">
                                    <h5>We are global</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- About us single quote start -->
                                <div class="single_special_service">
                                    <img src="img/checked.png" alt="">
                                    <h5>Highest Rated</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- About us single quote start -->
                                <div class="single_special_service">
                                    <img src="img/checked.png" alt="">
                                    <h5>Online Traning</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- About us single quote start -->
                                <div class="single_special_service">
                                    <img src="img/checked.png" alt="">
                                    <h5>Awesome Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-md-6">
                    <!-- About us thumb start -->
                    <div class="about_us_thumb">
                        <img src="img/about.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us area end -->

    <!-- ===================== Cool Facts Area Start ===================== -->
    <section class="cool_facts_area section_padding_60">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <!-- Single Cool Facts area Start -->
                    <div class="cool_fact_text">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <h3><span class="counter">763</span></h3>
                        <h5>Free Courses</h5>
                    </div>
                    <!-- Single Cool Facts area End -->
                </div>

                <div class="col-xs-12 col-sm-3">
                    <!-- Single Cool Facts area Start -->
                    <div class="cool_fact_text">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3><span class="counter">10</span>k+</h3>
                        <h5>STUDENTS ENROLLED</h5>
                    </div>
                    <!-- Single Cool Facts area End -->
                </div>

                <div class="col-xs-12 col-sm-3">
                    <!-- Single Cool Facts area Start -->
                    <div class="cool_fact_text">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <h3><span class="counter">251</span></h3>
                        <h5>CERTIFIED TEACHERS</h5>
                    </div>
                    <!-- Single Cool Facts area End -->
                </div>

                <div class="col-xs-12 col-sm-3">
                    <!-- Single Cool Facts area Start -->
                    <div class="cool_fact_text">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <h3><span class="counter">7412</span></h3>
                        <h5>Complate Graduates</h5>
                    </div>
                    <!-- Single Cool Facts area End -->
                </div>

            </div>
        </div>
    </section>
    <!-- ===================== Why Chooses Area End ===================== -->

    <!-- Our mission area start -->
    <section class="our_mission_vision_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <!-- Our mission thumb start -->
                    <div class="about_us_thumb mission">
                        <img src="img/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- Single accordian start -->
                        <div class="panel single-accordion">
                            <h5>
                                <a role="button" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"  href="#collapseOne">Our Mission
                                    <span class="accor-open">+</span>
                                    <span class="accor-close">-</span>
                                </a>
                            </h5>
                            <div id="collapseOne" class="accordion-content collapse in">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <p>Mirum est notare quam littera gothica, quam nunc claram.</p>
                            </div>
                        </div>
                        <!-- Single accordian start -->
                        <div class="panel single-accordion">
                            <h5>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="two" data-parent="#accordion" data-toggle="collapse"  href="#two">Our Vision
                                    <span class="accor-open">+</span>
                                    <span class="accor-close">-</span>
                                </a>
                            </h5>
                            <div id="two" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <p>Mirum est notare quam littera gothica, claram.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our mission area end -->
@endsection