<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('site-title')</title>
    <meta name="description" content="@yield('meta-description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="@yield('meta-keyword')">

    <meta name="author" content="@yield('meta-author')">

    <meta property="og:type" content="@yield('meta-type')"/>

    <meta property="og:title" content="@yield('meta-title')"/>

    <meta property="og:description" content="@yield('meta-description')"/>

    <meta property="og:image" content="@yield('meta-image')"/>

    <meta property="og:url" content="@yield('meta-url')"/>

    <meta property="og:site_name" content="{{ $the::settings('site_name') }}"/>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{$the::media($the::settings('site_faviconimg_id'))}}">

    <!-- CSS  ========================= -->
    @include('frontend.layouts.css')

</head>

<body class="front superslides-version" style="overflow-x: hidden">


@include('frontend.layouts.notification')

@include('frontend.layouts.header')
@yield('page-content')
@include('frontend.layouts.footer')

<!-- JS
============================================ -->

@include('frontend.layouts.js')
@yield('cusjs')


</body>
</html>
<!-- Jquery cdn -->


