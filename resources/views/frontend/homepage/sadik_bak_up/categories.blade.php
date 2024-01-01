<section class="about-section about-style-three pt-0 pb-120">
    <div class="container">
        <div class="about-text">
            <div class="section-title left-border">
                <h2>{!! $the::settings('home_category_section_one_title') !!}</h2>
            </div>
        </div>
        <div class="row">
            @php
//                $featuredCategory = $Model('Category')::with('custom_field')->where('taxonomy_type', 'product_category')->get();
//                $featuredCategory = $Model('Category')::getData('product-category');
                $catOne = $the::settings('home_category_section_one_ids');
                $catOne = $catOne ? explode(',', $catOne) : false;
                $featuredCategoryOne = $catOne ? $Model('Category')::whereIn('id', $catOne)->where('is_status', 'publish')->get() : [];
            @endphp
            @foreach($featuredCategoryOne as $item)
{{--                @if(isset($item['featured_product_category']) && $item['featured_product_category'] == '1')--}}
                    <div class="col-lg-6">
                        <div class="choose-comf-tile">
                            <div class="choose-comf-content">
                                <h3 class="choose-comf-tile-h">
                                    {{$item['name']}}
                                </h3>

                                <p class="choose-comf-tile-p">
                                    {{$item['description']}}
                                </p>

                                <a href="{{route('frontend_category', [$item['taxonomy_type'], $item['slug']])}}"
                                   class="choose-comf-tile-btn site-btn main-btn btn-filled lh-normal h-auto"> SHOP</a>
                            </div>

                            <div class="choose-comf-tile-img-wrap">
                                <a href="#">
                                    <picture>
                                        <img src="{{$the::media($item['image'])}}"
                                             class="img-fluid">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
{{--                @endif--}}
            @endforeach
        </div>
    </div>
</section>









<section class="about-section about-style-three pt-0 pb-120">
    <div class="container">
        <div class="about-text">
            <div class="section-title left-border">
                <h2>{!! $the::settings('home_category_section_two_title') !!}</h2>
            </div>
        </div>
        <div class="row">
            @php
                //                $featuredCategory = $Model('Category')::with('custom_field')->where('taxonomy_type', 'product_category')->get();
                //                $featuredCategory = $Model('Category')::getData('product-category');
                $catTwo = $the::settings('home_category_section_two_ids');
                $catTwo = $catTwo ? explode(',', $catTwo) : false;
                $featuredCategoryTwo = $catTwo ? $Model('Category')::whereIn('id', $catTwo)->where('is_status', 'publish')->get() : [];
            @endphp
            @foreach($featuredCategoryTwo as $item)
                {{--                @if(isset($item['featured_product_category']) && $item['featured_product_category'] == '1')--}}
                <div class="col-lg-6">
                    <div class="choose-comf-tile">
                        <div class="choose-comf-content">
                            <h3 class="choose-comf-tile-h">
                                {{$item['name']}}
                            </h3>

                            <p class="choose-comf-tile-p">
                                {{$item['description']}}
                            </p>

                            <a href="{{route('frontend_category', [$item['taxonomy_type'], $item['slug']])}}"
                               class="choose-comf-tile-btn site-btn main-btn btn-filled lh-normal h-auto"> SHOP</a>
                        </div>

                        <div class="choose-comf-tile-img-wrap">
                            <a href="#">
                                <picture>
                                    <img src="{{$the::media($item['image'])}}"
                                         class="img-fluid">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                {{--                @endif--}}
            @endforeach
        </div>
    </div>
</section>




<style>

</style>
