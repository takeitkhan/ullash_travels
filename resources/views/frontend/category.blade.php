@extends('frontend.layouts.master')

@section('site-title'){{!empty($category->name) ? $category->name : $category->name .' | ' . $the::settings('site_name')}}@endsection

@section('meta-title'){{!empty($category->name) ? $category->name : $category->name }}@endsection

@section('meta-image'){{$the::media($category->image)}}@endsection


@section('page-content')

<?php
global $heroBanner;
global $categoryName;

$heroBanner = $the::media($category->image);
$pageName = $category->name;

function showBanner(){
    global $heroBanner;
  	global $categoryName;
    ob_start();?>

    <section class="slider_section is-large has-carousel">
        <div id="carousel-emo" class="hero-carousel">
            <div class="item-1">
                <div class="item-container">
                    @if($heroBanner != url('/').'/public/frontend/images/noblank-images.jpg')
                  		<div class="has-text-centered mt-3 customOnImageTitle">
                        	<h1 class="title mb-0">{{$categoryName}}</h1>
                  		</div>
                        <img src="{{$heroBanner}}" alt="" style="width: 100vw;"/>
                    @else
                        <div style="background: #3273dc; padding: 2.35rem;"></div>
                    @endif
                </div>
            </div>
        </div>
    </section>

<?php
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}
?>


@if($category->template != null && $core::checkTemplateFile($category->taxonomy_type, $category->template) == true)

        @include('frontend.templates.'.$category->taxonomy_type.'.'.$category->template)

@elseif($core::checkTemplateFile($category->taxonomy_type, 'archive-'.$category->taxonomy_type) == true )

        @include('frontend.templates.'.$category->taxonomy_type.'.'.'archive-'.$category->taxonomy_type)

@else

<?php echo showBanner();?>

<section class="section">
    <div class="columns is-centered is-vcentered is-mobile">
        <div class="column has-text-centered">
            <h1 class="title mb-0">{{$category->name}}</h1>

        </div>
    </div>
    <div class="container">
        <div class="columns">
            <div class="column">
                <?php echo $category->description;?>
            </div>
        </div>
    </div>

</section>
@endif

@endsection
