@php
//    $sliders = $the::settings('home_slider');
    $sliders = $Post::term('slider');
@endphp
<section class="banner-section banner-style-three banner-slider-two pt-0 pb-0">
    <div class="slider-active" id="bannerSliderTwo">
        @foreach($sliders as $key => $item)
        <div class="single-banner banner-section banner-style-three banner-slider-two"  style="background-image: url({{$the::media($item->featured_image)}});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-text">
                            <h1 data-animation="fadeInUp" data-delay=".7s" style="animation-delay: 0.7s;">
{{--                                Reusable--}}
{{--                                <span>Facemask</span> In <span>Bangaldesh</span>--}}
                                {!! $item->description ?? '<h1 class="py-5">&nbsp; &nbsp;</h1>' !!}
                            </h1>
                            <div class="btn-wrap" data-animation="fadeInUp" data-delay=".9s">
                                @if($Post::customField('first_button_text', $item->id))
                                <a href="{{$Post::customField('first_button_url', $item->id) ?? '#'}}" class="main-btn btn-filled">{{$Post::customField('first_button_text', $item->id)}}</a>
                                @else
                                    &nbsp;  &nbsp;
                                @endif
                                @if($Post::customField('second_button_text', $item->id))
                                <a href="{{$Post::customField('second_button_url', $item->id) ?? '#'}}" class="main-btn btn-borderd">{{$Post::customField('second_button_text', $item->id)}}</a>
                                @else
                                    &nbsp;  &nbsp;
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="banner-shape-three">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
            </path>
        </svg>
    </div>
</section>
