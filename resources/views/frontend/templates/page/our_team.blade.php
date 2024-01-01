@extends('frontend.layouts.master')

@section('page-content')

    <!-- Hero going here-->
    <section id="team-hero-area" class="margin-top-bottom">
        <div class="container">
            <div class="hero-img d-flex justify-content-center align-items-center">
                <img src="{{ url('/public/uploads/images/team-sadik-counsel-1692261717.svg') }}" class="img-fluid"
                     width="60%"
                     alt="sadik-counsel-services">
            </div>
        </div>
    </section>
    <!--End Hero going here-->

    <!--About going here-->
    <section id="team-content-area" class="margin-top-bottom">
        <div class="container">
            <div class="team-content d-flex flex-column flex-xl-row gap-xl-5">
                <div class="left w-100 h-100 " id="team-left">
                    <!-- Single Member -->

                    @php
                        $teams = $Model('Post')::term('our-team');
//                        dump($teams);
                        $devide = count($teams)/2;
                        $n = 0;
                    @endphp

                    @foreach($teams as $key => $item)
                        @if($key  < $devide)
                            <a href="{{route('frontend_page', [$item->term_type, $item->slug])}}" class="text-decoration-none text-dark">
                                <div class="single-member w-100 d-flex gap-4 justify-content-start">
                                    <div class="member-img flex-grow-1 w-25">
                                        <img src="{{ $the::media($item->featured_image, $item->id) }}"
                                             class="img-fluid rounded team-member-shadow" alt="{{ $item->name  }}">
                                    </div>

                                    <div class="member-content h-100 w-100 overflow-hidden">
                                        <h4>{{ $item->name  }}</h4>
                                            <?php
                                            $team_des = $Model('Post')::customField('team_sub_title', $item->id);
                                            $truncated_team_des = substr($team_des, 0, 50); // Truncate to 20 characters
                                            ?>

                                        <div class="w-100 h-100">
                                            <div class="team-des">{{ $truncated_team_des }}...</div>
                                            <div><strong>Designation: </strong>{{ $Model('Post')::customField('designation', $item->id) }}</div>
                                            <div><strong>Degree: </strong>{{ $Model('Post')::customField('degrees', $item->id) }}</div>
                                            <div><strong>Practice Area: </strong>{{ $Model('Post')::customField('practice_area', $item->id) }}</div>
                                            <div><strong>Chamber Location: </strong>{{ $Model('Post')::customField('chamber_location', $item->id) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @php  $n++; @endphp
                        @endif
                    @endforeach
                    @php
                        $devide = $n;
                    @endphp

                </div>

                <div class="team-vline d-none d-xl-block"></div>

                <div class="right w-100 h-100 " id="team-right">
                    @foreach($teams as $key => $item)
                        @if($key  >= $devide)
                            <a href="{{route('frontend_page', [$item->term_type, $item->slug])}}" class="text-decoration-none text-dark">
                                <div class="single-member w-100 d-flex gap-4 justify-content-start">
                                    <div class="member-img flex-grow-1 w-25">
                                        <img src="{{ $the::media($item->featured_image, $item->id) }}"
                                             class="img-fluid rounded team-member-shadow" alt="{{ $item->name  }}">
                                    </div>
                                    <div class="member-content w-100 h-100 overflow-hidden">
                                        <h4>{{ $item->name  }}</h4>
                                            <?php
                                            $team_des = $Model('Post')::customField('team_sub_title', $item->id);
                                            $truncated_team_des = substr($team_des, 0, 50); // Truncate to 50 characters
                                            ?>
                                      <div class="w-100 h-100">
                                          <div class="team-des">{{ $truncated_team_des }}...</div>
                                          <div><strong>Designation: </strong>{{ $Model('Post')::customField('designation', $item->id) }}</div>
                                          <div><strong>Degree: </strong>{{ $Model('Post')::customField('degrees', $item->id) }}</div>
                                          <div><strong>Practice Area: </strong>{{ $Model('Post')::customField('practice_area', $item->id) }}</div>
                                          <div><strong>Chamber Location: </strong>{{ $Model('Post')::customField('chamber_location', $item->id) }}</div>
                                      </div>
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
            <div class="team_h_line d-none d-xl-block"></div>
        </div>
    </section>
    <!--End About going here-->

@endsection
