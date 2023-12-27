<section class="portfolio pt-120 pb-90 bg-light-blue">
    <div class="container">
        <div class="section-title text-center both-border mb-80">
           <?php /*
            <span class="title-tag">Shop</span>
            <h2>We Bring Certified Mask </h2>
                */ ?>
            {!! $the::settings('home_product_gallery_text') !!}
        </div>
        <div class="row shop-sidebar-section style-2">
            @php
                $products = $Model('PostMeta')::where('meta_name', 'featured_product')->where('meta_value', 1)->get('post_id')->toArray();
                $products = $Model('Post')::whereIn('id', $products)->where('is_status', 'publish')->get();
            @endphp
            @foreach($products as $item)
            <div class="col-lg-4 col-md-6">
                <div class="product-grid border-0">
                    <div class="rating-star">

                    </div>
                    <div class="product-image4">
                        <a href="{{route('frontend_page', [$item->term_type, $item->slug])}}">
                            <img class="pic-1" src="{{$the::media($item->featured_image)}}" alt="img">
                        </a>
                    </div>
                    <div class="product-content p-0">
                        <h4 class="title"><a href="{{route('frontend_page', [$item->term_type, $item->slug])}}">{{$item->name}}</a></h4>
                        <div class="price">
                             {{$Model('Post')::customField('default_price', $item->id)}}
                        </div>
                        <p>{{$Model('Post')::customField('sub_title', $item->id)}}</p>
                        <a class="main-btn btn-filled" href="{{route('frontend_page', [$item->term_type, $item->slug])}}">View product</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
