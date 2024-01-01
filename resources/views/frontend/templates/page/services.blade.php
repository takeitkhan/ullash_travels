@extends('frontend.layouts.master')

@section('page-content')

    <!-- Hero going here-->
    <section id="service-hero-area" class="margin-top-bottom">
        <div class="container">
            <div class="hero-img d-flex justify-content-center align-items-center">
                <img src="{{$the::media($page->featured_image)}}" class="img-fluid" width="60%" alt="sadik-counsel-services">
            </div>
        </div>
    </section>
    <!--End Hero going here-->

    <!--Service going here-->
    <section id="service-content-area" class="margin-top-bottom">
        <div class="container">
            <div class="service-content d-flex flex-column flex-xl-row gap-xl-5 justify-content-center">
                <div class="left w-100 h-100" id="left-service">

                    @php
                        $services = $Model('Post')::term('service');
//                        dump($services);
                    $divide = count($services)/2;
                    $n = 0;
                    @endphp

                    @foreach($services as $key=> $item)
                        @if($key < $divide)
                            <a href="{{route('frontend_page', [$item->term_type, $item->slug])}}" class="text-decoration-none text-dark w-100">

                                <div class="single-service w-100">
                                    <h5>{{$item->name}}</h5>
                                    <div class="w-100">

                                            <?php
                                            $service_des = $Model('Post')::customField('service_sub_title', $item->id);
                                            $truncated_service_des = substr($service_des, 0, 65); // Truncate to 20 characters
                                            ?>
                                        <p>
                                            {!! $truncated_service_des !!}...
                                        </p>
                                    </div>
                                </div>
                            </a>
                            @php
                                $n++;
                            @endphp
                        @endif

                    @endforeach
                    @php
                        $devide = $n;
                    @endphp

                </div>
                <div class="service-vline d-none d-xl-block"></div>


                <div class="right w-100 h-100 pt-0 pt-xl-5" id="right-service">


                    @foreach($services as $key=>$item)
                        @if($key >= $divide)
                            <a href="{{route('frontend_page', [$item->term_type, $item->slug])}}" class="text-decoration-none text-dark">

                                <div class="single-service w-100">
                                    <h5>{{$item->name}}</h5>
                                   <div class="w-100">

                                           <?php
                                           $service_des = $Model('Post')::customField('service_sub_title', $item->id);
                                           $truncated_service_des = substr($service_des, 0, 65); // Truncate to 20 characters
                                           ?>
                                       <p>
                                           {!! $truncated_service_des !!}...
                                       </p>
                                   </div>
                                </div>
                            </a>
                            @php
                                $n++;
                            @endphp
                        @endif

                    @endforeach


                </div>
            </div>
            <div class="service_h_line d-none d-xl-block"></div>
        </div>
    </section>
    <!--End Service going here-->

@endsection
