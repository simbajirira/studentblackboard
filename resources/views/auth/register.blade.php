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
                            <h3>Register</h3>
                        </div>
                        <!-- Breadcumb page pagination start -->
                        <div class="page_pagination">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb area end -->

    <!-- Login area start -->
    <div class="login_area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Login thumb -->
                <div class="col-xs-12 col-md-5 col-lg-6">
                    <div class="login_thumb">
                        <img src="img/bg-pattern/courses-bg.jpg" alt="">
                        <!-- Login thumb caption -->
                        <div class="login_thumb_caption">
                            <h3>Register is so Easy!</h3>
                            <p>Register &amp; start learning.</p>
                        </div>
                    </div>
                </div>
                <!-- Register form area start  -->
                <div class="col-xs-12 col-md-7 col-lg-6">
                    <div class="register_form">
                        <form action="{{ route('register') }}" method="post">
                        {{ csrf_field() }}
                            <!-- Single Register input area start  -->
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} has-feedback">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Enter username" required autofocus>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} has-feedback">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" placeholder="Enter first name" required autofocus>
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} has-feedback">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Enter lastname" required autofocus>
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!-- Single Register input area start  -->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!-- Single Register input area start  -->
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <input type="password" name="password" id="password" placeholder="Password" required autofocus>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!-- Single Register input area start  -->
                            <div class="form-group">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required autofocus>
                            </div>
                            <!-- Single Register input area start  -->
                            <button type="submit" class="btn btn-default" id="login_submit">Sign Up</button>
                        </form>
                        <div class="already_have_account">
                            <a href="{{ route('login') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Already have a account? Login</a>
                        </div>
                    </div>
                </div>
                <!-- Register form area end  -->
            </div>
        </div>
    </div>
    <!-- Login area end -->
@endsection