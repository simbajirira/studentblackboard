@extends('layouts.auth')

@section('content')
<div class="register-box">
  <div class="register-logo">
     <img src="http://placehold.it/360x70" alt="studentblackboard">
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
             @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
             <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input id="password-confirm" placeholder="Retype password" type="password" class="form-control" name="password_confirmation" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
        </div>
    </form>
    <a href="{{ route('login') }}" class=" btn btn-link text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
@endsection