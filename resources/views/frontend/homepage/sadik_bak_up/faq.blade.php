<section class="about-section about-style-two">
    <!-- About Text -->
    <div class="pt-120 about-text-warp">
        <div class="mockup-img left-0" style="bottom: 1px;">
            <img src="{{$the::media($the::settings('home_faq_image'))}}" alt="mockup-img">
        </div>
        <div class="container">
            <div class="row no-gutters justify-content-center justify-content-lg-end">
                <div class="col-lg-5 col-md-10">
                    <div class="faq-wrapper about-text position-relative">
                        <div class="section-title left-border mb-40">
                            <h2>Ask Our Experts</h2>
                        </div>

                        <div class="faq-accordion faq-loop accordion p-0" id="faqAccordion">
                            @php $faqs = $Post::term('faqs')->take(5) @endphp
                            @foreach($faqs as $item)
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faq{{$item->id}}">
                                            {!! $item->name !!}
                                            <span class="icon  bg-transparent"><span>+</span></span>
                                        </button>
                                    </div>
                                    <div id="faq{{$item->id}}" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            {!! $item->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <a href="{{url('/page/faqs')}}" class="main-btn btn-filled mt-40">Read all Faqs </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
