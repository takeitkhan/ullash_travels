<!-- Main-menu-area going here-->
<!-- Header start -->
<div id="main">
    <div class="top2_wrapper">
        <div class="container">
            <div class="top2 clearfix">
                <header>

                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid ps-0">
                            <a class="navbar-brand" href="#">
                                <img src="{{ $the::siteLogo() }}" alt="" class="img-responsive">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">

                                @php
                                    $headerMenus = Menu::getByName($the::settings('header_menu_name'));
                                @endphp

                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    @foreach($headerMenus as $key => $link)
                                        @if($link['link'] == Request::segment('1'))
                                            @php
                                                $active = ' active';
                                            @endphp
                                        @else
                                            @php
                                                $active = ' ';
                                            @endphp
                                        @endif
                                        <li class="nav-item">
                                            <a href="{{ url($link['link']) }}" class="nav-link {{ $active }}">
                                                {!! $link['label'] !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>

            </div>
        </div>
    </div>

    <!-- Header end -->


{{--<section id="main-menu-area" class="d-sm-block d-none">--}}
{{--    <div class="row justify-content-center m-0">--}}
{{--        <div class="col-lg-10">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="main-navbar">--}}
{{--                        <ul class="d-flex justify-content-between align-items-center">--}}
{{--                            @php--}}
{{--                                $headerMenus = Menu::getByName($the::settings('header_menu_name'));--}}
{{--                            @endphp--}}
{{--                            @foreach($headerMenus as $key => $link)--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{ url($link['link']) }}" class="nav-link">--}}
{{--                                        {!! $link['label'] !!}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="d-sm-none mobile-menu d-block">--}}

{{--    <nav class="navbar navbar-expand-sm bg-white navbar-light">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{url('/')}}">--}}
{{--                <?php--}}
{{--                $headerMenus = Menu::getByName($the::settings('mobile_menu_name'));--}}
{{--                $a = array_values($headerMenus)[0];--}}
{{--                ?>--}}

{{--                <img src="{!! $a['label'] !!}" alt="Brand Logo" width="100">--}}

{{--            </a>--}}

{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="collapsibleNavbar">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    @php--}}
{{--                        $headerMenus = Menu::getByName($the::settings('mobile_menu_name') ?? $the::settings('mobile_menu_name'));--}}
{{--                        $sliceMenu = array_slice($headerMenus, 1);--}}
{{--                    @endphp--}}
{{--                    @foreach($sliceMenu as $key => $link)--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ url($link['link']) }}" class="nav-link">--}}
{{--                                {!! $link['label'] !!}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</section>--}}

<!-- End main-menu-area -->
