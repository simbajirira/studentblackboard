<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
@include('layouts.partials.auth._authhead')
</head>
<body class="hold-transition login-page register-page">
{{-- content hear --}}

@yield('content')
<!-- /.login-box -->

@include('layouts.partials.auth._authscripts')
</body>
</html>
