@extends('frontend.layouts.master')

@section('page-content')

    <div class="inner_banner bg-primary">
        <div class="container">
            <h2 class="text-white text-left fs-1">{{$page->name}}</h2>
        </div>
    </div>

    <div id="content">
        <section class="h-100 h-custom">
            <div class="container py-5 h-100">
                <div class="row  mb-3 d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                                {!! $page->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
