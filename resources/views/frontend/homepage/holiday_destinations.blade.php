<div id="featured_packages" class="py-5">
    <div class="container">
        <h2 class="titleh2 animated" data-animation="fadeInUp" data-animation-delay="100">
            Your exotic holiday destinations
        </h2>
        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut
            laoreet dolore magna aliquam erat volutpat.
        </div>

        <div class="row">
            <?php for($i = 1; $i <= 6; $i++) { ?>
            <div class="col-md-2 text-center">
                <div><img src="{{ $frontendAssets }}/images/single_event_card/1.png" class="img-fluid" alt="1"/></div>
                <div class="py-2">
                    <div><strong>Forest Resort</strong></div>
                    <div><strong>30 properties</strong></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</div>
