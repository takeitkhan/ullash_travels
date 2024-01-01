<section class="about-section about-style-three pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="about-text pr-30">
                    <?php /*
                    <div class="section-title left-border mb-40">
                        <h2>Find your perfect mattress</h2>
                    </div>
                    <p>
                        Our mattress selector tool matches your sleep preferences and suggests the best one for you
                    </p>
                    */ ?>

                    {!! $the::settings('home_matress_selector_text') !!}

                    <div class="experience-tag mt-40">
                        <a href="{{url('/page/matress-selector')}}" class="main-btn btn-filled">Click to Choose</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 order-first order-lg-last">
                <div class="about-img">
                    <img src="{{$the::media($the::settings('home_matress_selector_image'))}}" alt="mockup-img">
                </div>
            </div>
        </div>
    </div>
</section>
