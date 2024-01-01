@extends('frontend.layouts.master')

@include('frontend.layouts.seo')

@section('page-content')

    @php
        global $heroBanner;
        global $pageName;
        global $pageSubName;
        $heroBanner = $the::media($page->featured_image);
        $pageName = $page->name;
        $pageSubName = $page->sub_title;
        function showBanner()
        {
            global $heroBanner;
            global $pageName;
            global $pageSubName;
            ob_start();
    @endphp

    <section class="slider_section is-large has-carousel">
        <div id="carousel-emo" class="hero-carousel">
            <div class="item-1">
                <div class="item-container">
                    @if($heroBanner != url('/').'/public/frontend/images/noblank-images.jpg')
                        <div class="has-text-centered mt-3 customOnImageTitle">
                            <h1 class="title mb-0">{{$pageName}}</h1>

                            @if(!empty($pageSubName))
                                <h4 class="sub_title">{{ $pageSubName }}</h4>
                            @endif
                        </div>
                        <img src="{{$heroBanner}}" alt="" style="width: 100vw;"/>
                    @else
                        <div style="background: #3273dc; padding: 2.35rem;"></div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @php
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
        }
    @endphp


    @if($page->template != null && $core::checkTemplateFile($page->term_type, $page->template) == true)

        @include('frontend.templates.'.$page->term_type.'.'.$page->template)

    @elseif($core::checkTemplateFile($page->term_type, 'single-'.$page->term_type) == true )

        @include('frontend.templates.'.$page->term_type.'.'.'single-'.$page->term_type)

    @else

        @php
            echo showBanner();
        @endphp

        <section class="section">
            <div class="columns is-centered is-vcentered is-mobile">
                <div class="column has-text-centered">
                    <h1 class="title mb-0">{{$page->name}}</h1>

                    @if(!empty($page->sub_title))
                        <h4 class="sub_title">{{ $page->sub_title }}</h4>
                    @endif

                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column">
                        @php
                            echo $page->description;
                        @endphp
                    </div>
                </div>
            </div>

        </section>
    @endif

@endsection
