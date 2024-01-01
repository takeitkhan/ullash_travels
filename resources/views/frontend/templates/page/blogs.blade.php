@extends('frontend.layouts.master')

@section('page-content')

    <!-- Hero going here-->
    <section id="" class="margin-top-bottom">
        <div class="container">

            <div class="hero-img d-flex justify-content-center align-items-center">
                <img
                    src="{{ url('/public/uploads/images/team-sadik-counsel-1692261717.svg') }}"
                    class="img-fluid"
                    width="60%"
                    alt="sadik-counsel-services"
                />
            </div>
        </div>
    </section>
    <!--End Hero going here-->

    <!--Blog going here-->
    <section id="blogs-section" class="margin-top-bottom">
        <div class="container">
            <div
                class="blog-area d-flex flex-column flex-lg-row gap-5 justify-content-start"
                id="blog-row"
            >
                <div class="blogs d-flex flex-column gap-3 gap-sm-5">

{{--                    single blog start--}}
                    @php
                        $blogs = $Model('Post')::term('blogs');
//dd($blogs);
                    @endphp
                    @foreach($blogs as $item)
                    <div
                        class="single-blog d-flex flex-column flex-md-row gap-0 gap-sm-4"
                    >
                        <div class="img-area">
                            <a
                                href="{{route('frontend_page', [$item->term_type, $item->slug])}}"
                                class="text-decoration-none text-start text-md-center"
                            >
                                <figure class="figure">
                                    <img
                                        src="{{ $the::media($item->featured_image, $item->id) }}"
                                        class=" rounded img-weight"
                                        width=""
                                        alt="Trulli"
                                    />
                                    <figcaption class="figure-caption">Trulli, Puglia, Italy.</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="content-area">
                            <div class="date text-muted">Category - VAT | {{$item->created_at}}</div>
                            <div class="title mt-3">
                                <h2>{{ $item->name  }}</h2>
                            </div>
                            <div class="blog-short mb-3">

                                <p>
                                    {{$Model('Post')::customField('blog_sub_title', $item->id)}}
                                </p>
                            </div>

                            <div class="link">
                                <a href="{{route('frontend_page', [$item->term_type, $item->slug])}}" class="btn btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--End Col-->

                <div class="category-list border-left ">
                    <ul>
                        <li class="bg-light py-2 text-center">Category List</li>
                        <li><a href="#" class="text-decoration-none">Business</a></li>
                        <li><a href="#" class="text-decoration-none">TAX</a></li>
                        <li><a href="#" class="text-decoration-none">Vat</a></li>
                    </ul>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
    </section>
    <!--End Blog going here-->

@endsection
