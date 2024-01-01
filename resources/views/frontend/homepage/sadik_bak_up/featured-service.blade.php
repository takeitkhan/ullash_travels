@php
    //    $sliders = $the::settings('home_slider');
        $cards = $Post::term('homepage_cards', ['query' => true])->take('3')->get();
@endphp
<section class="services-secton featured-service mt-negative">
    <div class="container">
        <div class="services-loop">
            <div class="row justify-content-center">
                @foreach($cards as $key => $item)
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-service text-center white-bg mt-60" style="background-color: {{$Post::customField('card_color', $item->id)}}">
                        <div class="icon">
                            <img src="{{$the::media($item->featured_image)}}" alt="">
                        </div>
                        <h4>{{$item->name}}</h4>
                        <p>  {!! $item->description ?? '<h1 class="py-5">&nbsp; &nbsp;</h1>' !!} </p>
                        @php
                         $links = $Post::customField('any_card_page_link', $item->id);
                        @endphp
                        @if($links)
                            <a href="{{$links}}" class="service-link">Read More</a>
                        @else
                            &nbsp;
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
