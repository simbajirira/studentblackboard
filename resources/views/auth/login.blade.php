@extends('layouts.auth')
@section('content')

<div class="login-box">
  <div class="login-logo">
    <img src="http://placehold.it/360x70" alt="studentblackboard">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

      <div class="form-group{{ $errors->has('email') ? ' has-error ' : '' }} has-feedback">
       <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
       <span class="glyphicon glyphicon-envelope form-control-feedback"></span>        
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error ' : '' }} has-feedback">
        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a class="btn btn-link" href="{{ route('password.request') }}">
        Forgot Your Password?
    </a>
    <a href="{{ route('register') }}" class="btn btn-link text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>







@endsection