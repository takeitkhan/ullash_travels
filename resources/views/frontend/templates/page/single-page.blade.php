<!--====== BREADCRUMB SECTION START ======-->
<section class="breadcrumb-section" style="background-image: url({{$the::media($page->featured_image)}})">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>{{$page->name}}</h1>

        </div>
        <ul class="breadcrumb-nav">
            <li><a href="{{url('/')}}">Home</a></li>
        </ul>
    </div>

</section>
<!--====== BREADCRUMB SECTION END ======-->


<section class="about-section about-style-three pt-40 pb-20">
    <div class="container-fluid custom-container-two">
        <div class="about-text py-3">
        {!! $page->description !!}
        </div>
    </div>
</section>



