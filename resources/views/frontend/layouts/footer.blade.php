<?php
$home_url = url('/');
$footer_bg = request()->url() == $home_url ? 'footer-bg' : '';
?>

<!-- Footer ------------------------------------- -->
<div class="bot1_wrapper">
    <div class="container">
        <div class="col-md-12">
            <h5 class="text-center pb-4">Payment Methods</h5>
            <img src="{{ $frontendAssets }}/images/SSLCommerz.png" width="100%" alt="sslcommerze"/>
        </div>
        <div class="row my-4">
            <div class="col-md-1">
                <strong>Quick Links</strong>
            </div>
            <div class="col-md-11 d-flex">
                @php
                    $footer_nav = Menu::getByName('Footer navigation');
                @endphp
                <ul class="footerUl">
                    @foreach($footer_nav as $key => $link)
                        <li>
                            <a href="{{ url($link['link']) }}">
                                {!! $link['label'] !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-1">
                <strong>Address</strong>
            </div>
            <div class="col-md-11 d-flex">
                <div class="fluid">
                    {!! $the::settings('footer_content') !!}
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-1">
                <strong>Connect Us</strong>
            </div>
            <div class="col-md-11 d-flex">
                <div class="fluid">
                    <a class="btn btn-sm btn-social btn-fb" href="{{url($the::settings('facebook_url'))}}"
                       target="_blank" title="Share this post on Facebook">
                        <i class="fa fa-facebook"></i> Share
                    </a>
                    <a class="btn btn-sm btn-social btn-tw"
                       href="{{url($the::settings('twitter_url'))}}" target="_blank"
                       title="Share this post on Twitter">
                        <i class="fa fa-twitter"></i> Tweet
                    </a>
                    <a class="btn btn-sm btn-social btn-in"
                       href="{{url($the::settings('linkedin_url'))}}"
                       target="_blank" title="Share this post on LinkedIn">
                        <i class="fa fa-linkedin" data-fa-transform="grow-2"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="bot2_wrapper">
    <div class="container">
        <div class="left_side">
            {!! $the::settings('bottom_footer_content') !!}
            <span>|</span>
            <a href="{{ url('privacy_policy') }}">Privacy Policy</a>
            <span>|</span>
            <a href="{{ url('refund_policy') }}">Refund Policy</a>
            <span>|</span>
            <a href="{{ url('privacy_policy') }}">Contact Support</a>
        </div>
        <div class="right_side">
            Designed by <a href="https://mathmozo.com" target="_blank"><strong>MathMozo</strong></a>
        </div>
    </div>
</div>
