@extends('layouts.app')
@section('content')
   <!-- ===================== Breadcumb area start ===================== -->
    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb_section">
                        <!-- Breadcumb page title start -->
                        <div class="page_title">
                            <h3>sign in</h3>
                        </div>
                        <!-- Breadcumb page pagination start -->
                        <div class="page_pagination">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>sign in</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== Breadcumb area end ===================== -->

    <!-- ===================== login area start ===================== -->
    <section class="login_area section_padding_100">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-5 col-lg-6">
                    <!-- login thumb start -->
                    <div class="login_thumb">
                        <img src="img/bg-pattern/courses-bg.jpg" alt="">
                        <!-- login thumb caption -->
                        <div class="login_thumb_caption">
                            <h3>Welcome Back!</h3>
                            <p>Continue your learning by sign in.</p>
                        </div>
                    </div>
                    <!-- login thumb end -->
                </div>

                <div class="col-xs-12 col-md-7 col-lg-6">
                    <!-- login form start -->
                    <div class="login_form">
                        <!-- sign in facebok -->
                        <div class="sign_in_facebook">
                            <a class="btn btn-default" href="#" role="button"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                        </div>
                        <!-- sign in twitter -->
                        <div class="sign_in_twitter">
                            <a class="btn btn-default" href="#" role="button"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                        </div>
                        <!-- sign in manual form -->
                        <div class="login_manual_form">
                            <p>or</p>
                            <form action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error ' : '' }} has-feedback">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error ' : '' }} has-feedback">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    <input type="password" name="password" id="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-xs-8">
                                  <div class="checkbox icheck">
                                    <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                  </div>
                                </div>
                                   <button type="submit" class="btn btn-default" id="login_submit">Sign in</button>
                            </form>
                            <!-- forget password -->
                            <div class="forget_pass one">
                                <a href="{{ route('password.request') }}"><i class="fa fa-question-circle" aria-hidden="true"></i>Forget Password</a>
                            </div>
                            <div class="forget_pass">
                                <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Didn't have a account? Register</a>
                            </div>
                        </div>
                    </div>
                    <!-- login form end -->
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== login area end ===================== -->








@endsection