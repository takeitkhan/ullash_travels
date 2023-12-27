<section id="hero-area" class="margin-top-bottom">
    <div class="row justify-content-center m-0">
        <div class="col-lg-10">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8 col-lg-6">
                    <div class="hero-left d-inline-flex gap-3 flex-column">
                        <div
                            class="hero-tag px-3 px-md-5 py-3 text-center text-md-start"
                        >
                            <h1 class="text-center text-md-start">
                                {!! $the::settings('home_page_title') ?? NULL !!}
                                {{--                                Over 30 years experience we <br />--}}
{{--                                know how difficult this is on your <br />--}}
{{--                                family.--}}
                            </h1>
                        </div>

                        <div class="hero-description px-3 px-md-5 py-3">
                            <p class="m-0 text-center text-md-start" id="hm_sbtitle">
                                {!! $the::settings('home_category_section_one_title') ?? NULL !!}
                            </p>
                        </div>


                        <a href="{{ url('page/our-team') }}" id="btn_home" class="btn request-consultation text-white mt-3 mt-md-4 w-50 text-decoration-none">
                            Request a free consultation
                        </a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 mt-4 mt-lg-0 order-first order-lg-2">
                    <div class="hero-right text-center">
                        <div class="hero">
                            <img
                                src="{{ $the::media($the::settings('home_faq_image'))  }}"
                                class="img-fluid"
                                alt="sadik-counsel-handshake"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
