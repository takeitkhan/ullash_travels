@extends('frontend.layouts.master')

@section('site-title')
    {{ $the::settings('site_name') .' | '. $the::settings('site_description')}}
@endsection


@section('page-content')

    {{--    @include('frontend.homepage.slider')--}}

    @include('frontend.homepage.hero')
    @include('frontend.homepage.search_tabs')
    @include('frontend.homepage.why_choose_us')
    @include('frontend.homepage.packages')
    @include('frontend.homepage.holiday_destinations')
    @include('frontend.homepage.featured_packages')
    @include('frontend.homepage.popular_boats')
    @include('frontend.homepage.gallery')
    @include('frontend.homepage.testimonials')


@endsection
