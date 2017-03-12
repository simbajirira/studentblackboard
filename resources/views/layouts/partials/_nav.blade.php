<div class="main_header_area home2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-9">
                        <!-- Logo Area -->
                        <div class="logo_area">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/core-img/logo1.png') }}" alt=""></a>
                        </div>
                    </div>

                    <div class="col-sm-9 col-xs-12">
                        <!-- Menu Area -->
                        <div class="main_menu_area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li {{(Request::is('/') ? 'class=current_page_item' : '')}}><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="#">teacher<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="teachers.html">Teachers</a></li>
                                                <li><a href="teachers-details.html">Teacher Details</a></li>
                                            </ul>
                                        </li>
                                        <li 
                                            {{
                                                (Request::is('library/courses/all') ? 'class=current_page_item' : '')

                                            }}>
                                            <a href="#">Library<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('all') }}">All courses</a></li>
                                                <li><a href="event-grid.html">Upcoming Events</a></li>
                                                <li><a href="event-list.html">upcoming courses</a></li>
                                            </ul>
                                        </li>

                                        <li 
                                            {{                                                
                                                (Request::is('about','contact') ? 'class=current_page_item' : '')                                             
                                                
                                            }}>
                                            <a href="#">{{config('app.name')}}<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('events') }}">events</a></li>
                                                <li><a href="{{ route('contact') }}">contact</a></li>
                                                <li><a href="{{ route('about') }}">about</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- mainmenu end -->
                            <!-- Search Button Area -->
                            <div class="search_button hidden-xs">
                                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>