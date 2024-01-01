<div id="partners">
    <div class="container">
        <div class="row">

            <?php for($i = 1; $i <= 7; $i++) { ?>
            <div class="col-sm-4 col-md-2 col-xs-6">
                <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="100">
                    <div class="thumbnail clearfix">
                        <a href="#">
                            <figure>
                                <img src="{{ $frontendAssets }}/images/partner1.jpg" alt="" class="img1 img-responsive">
                                <img src="{{ $frontendAssets }}/images/partner1_hover.jpg" alt=""
                                     class="img2 img-responsive">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
