<div id="featured_packages" class="py-5 bgGray">
    <div class="container">
        <h2 class="titleh2 animated" data-animation="fadeInUp" data-animation-delay="100">Tour Gallery</h2>
        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut
            laoreet dolore magna aliquam erat volutpat.
        </div>


        <div class="row mt-5">
            <div class="col-md-10 mb-4">
                <div class="mb-2 galleryRadius">
                    <img src="{{ $frontendAssets }}/images/single_event_card/1.png" width="100%" alt=""/>
                </div>
            </div>
            <div class="col-md-2">
                <?php
                for ($i = 0; $i <= 4; $i++) {
                ?>
                <div class="mb-2 galleryRadius">
                    <img src="{{ $frontendAssets }}/images/single_event_card/1.png" width="100%" alt=""/>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
