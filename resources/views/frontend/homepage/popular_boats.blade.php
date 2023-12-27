<div id="popular_boats1" class="py-5 ">
    <div class="container">

        <h2 class="titleh2 animated" data-animation="fadeInUp" data-animation-delay="100">Popular Boats</h2>

        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut
            laoreet dolore magna aliquam erat volutpat.
        </div>

        <br><br>

        <div id="popular_wrapper" class="animated" data-animation="fadeIn" data-animation-delay="300">
            <div id="popular_inner">
                <div class="">
                    <div id="popular">
                        <div class="">
                            <div class="carousel-box">
                                <div class="inner">
                                    <div class="carousel main">
                                        <ul>
                                            <?php for($i = 1; $i <= 7; $i++) { ?>
                                            <li>
                                                <div class="popular">
                                                    <div class="popular_inner">
                                                        <figure>
                                                            <img src="{{ $frontendAssets }}/images/popular01.jpg" alt=""
                                                                 class="img-responsive">
                                                            <div class="over">
                                                                <div class="v1">Bahamas <span>17 Deal Offers</span>
                                                                </div>
                                                                <div class="v2">Lorem ipsum dolor sit amet,
                                                                    concateus.
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="caption">
                                                            <div class="txt1"><span>Bahamas</span> 7 Night Tour
                                                            </div>
                                                            <div class="txt2">Nam liber tempor cum soluta nobis
                                                                eleifend option congue nihil imperdiet doming.
                                                            </div>
                                                            <div class="txt3 clearfix">
                                                                <div class="left_side">
                                                                    <div class="stars1">
                                                                        <img
                                                                            src="{{ $frontendAssets }}/images/star1.png"
                                                                            alt="">
                                                                        <img
                                                                            src="{{ $frontendAssets }}/images/star1.png"
                                                                            alt="">
                                                                        <img
                                                                            src="{{ $frontendAssets }}/images/star1.png"
                                                                            alt="">
                                                                        <img
                                                                            src="{{ $frontendAssets }}/images/star1.png"
                                                                            alt="">
                                                                        <img
                                                                            src="{{ $frontendAssets }}/images/star2.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="nums">- 18 Reviews</div>
                                                                </div>
                                                                <div class="right_side">
                                                                    <a href="#" class="btn-default btn1">
                                                                        See All
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular_pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
