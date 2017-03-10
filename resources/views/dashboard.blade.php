<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
 @include('layouts.partials._head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  @include('layouts.partials._header')
  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
  @include('layouts.partials._asideBarleft')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- footer goes here --}}
  @include('layouts.partials._footer')

  <!-- Control Sidebar -->
  @include('layouts.partials._controlsidebar')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
@include('layouts.partials._scripts')
</body>
</html>
