<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Student black board') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color-changer.css') }}">
</head>
<body>
    <!-- preloader start -->
    <div id="preloader"></div>
    <!-- /.end preloader -->

    <header class="header_area">
        <!-- Top Header Area Start -->
        <div class="top_header_area hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-5">
                        <!--  Top Quote Area Start -->
                        <div class="top_quote hidden-sm">
                            <p>Welcome to {{ config('app.name') }} learning platform.</p>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-7">
                        <div class="social_reg_log_area">
                            <!--  Top Social bar start -->
                            <div class="top_social_bar">
                                <a href="https://www.facebook.com/studentsblackboard/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://github.com/simbajirira/studentblackboard"><i class="fa fa-github" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                            <!--  Login Register Area -->                           

                                @if (Route::has('login'))
                                    <div class="login_register">
                                        @if (Auth::check())
                                            <div class="reg">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <a href="{{ url('/') }}">Home</a>
                                            </div>                                            
                                            <div class="login">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                                <a href="{{ route('logout') }}"
                                                  onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                  Logout
                                              </a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                                              </form>
                                            </div>                                                     
                                        @else
                                           <div class="login">
                                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                <a href="{{ route('login') }}">Login</a>
                                            </div>
                                            <div class="reg">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href="{{ route('register') }}">Register</a>
                                            </div>
                                        @endif
                                    </div>
                                @endif                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area  End -->

        <!-- Main Header Area Start -->
        @include('layouts.partials._nav')
        <!-- Main Header Area End -->

        <!-- Search Box Area Start -->
        <div id="search">
            <div class="search_box_area">
                <form action="#" method="post">
                    <input type="text" name="s" id="search_box" placeholder="Enter keyword and hit enter">
                    <input type="submit" value="Submit" id="sub">
                    <div id="close_button">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </div>
                </form>
            </div>
        </div>
        <!-- Search Box Area End -->
    </header>


    <!-- ===================== Newsletter Area End ===================== -->
    @yield('content')
    <!-- ===================== Footer Area Start ===================== -->
    @include('layouts.partials._footer')
    <!-- ===================== Footer Area End ===================== -->

@include('layouts.partials._jsfiles')

</body>

</html>