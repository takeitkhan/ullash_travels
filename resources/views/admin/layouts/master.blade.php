<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('site-title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  @include('admin.layouts.css')
  @yield('headjs')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed  text-sm">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    @yield('navbar')

    <!-- Right navbar links -->
    @include('admin.layouts.aside_r')
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-secondary selevation-2 sidebar-no-expand">
    <!-- Brand Logo -->
      <a href="" class="brand-link p-1" style=" padding-bottom: 3.5px !important;padding-top: 6px !important;">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <span class="brand-text font-weight-light text-lg text-center">
{{--            <img src="{{asset('public/admin/dist/img/riptwarev2.png')}}" style="width: 190px;">--}}
            <h4>{{ $the::settings('site_name') ?? 'Mathmozo' }}</h4>
        </span>
      </a>
    <!-- Sidebar -->
    @include('admin.layouts.aside_l')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('pagetitle')<!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        @if(!empty(request()->get('hasPermission')))
          @yield('page-content')
        @else
          <div class="alert alert-warning" role="alert">
            You have no permission for this route.
          </div>
        @endif
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.layouts.js')
@include('admin.layouts.message')
@yield('cusjs')
</body>
</html>
