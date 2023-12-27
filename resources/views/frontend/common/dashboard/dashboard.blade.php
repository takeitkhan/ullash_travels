@extends('frontend.layouts.master')

@section('page-content')
    <!-- Profile Header -->
    @include('frontend.academy.dashboard_header')
    <!-- End profile Header -->


    <div class="container">
        <div class="row mt-0 mt-md-4">
            <div class="col-lg-3 col-md-4 col-12">
                <!-- User profile -->
                <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
                    <!-- Menu -->
                    <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
                    <!-- Button -->
                    <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
                        data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="fe fe-menu"></span>
                    </button>
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav">
                        <div class="navbar-nav flex-column">
                            @include('frontend.academy.sidebar')
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="card">
                    @if(request()->get('route')=='edit-profile')
                        @include('frontend.academy.edit_profile')
                    @endif
                </div>  
            </div>
        </div>
    </div>
    <!-- end -->


@endsection

@section('cusjs')



@endsection