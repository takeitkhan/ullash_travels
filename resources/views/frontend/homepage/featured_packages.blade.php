<div id="featured_packages" class="py-5 bgGray">
    <div class="container">
        <h2 class="titleh2 animated" data-animation="fadeInUp" data-animation-delay="100">Featured Events</h2>
        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut
            laoreet dolore magna aliquam erat volutpat.
        </div>


        <div class="row mt-5">
            <?php
            for ($i = 0; $i <= 7; $i++) {
                ?>
                <div class="col-md-3 mb-4">
                    <div class="card-wrapper">
                        <div class="card shadow-sm">
                            <div class="card-slider">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade h-100"
                                     data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <img src="{{ $frontendAssets }}/images/single_event_card/1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="{{ $frontendAssets }}/images/single_event_card/2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ $frontendAssets }}/images/single_event_card/3.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleFade"
                                            data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleFade"
                                            data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-details text-dark px-3 py-0">
                                <p class="py-2 m-0">
                                    <span><i class="fa fa-map-marker primary-color"></i></span>
                                    <span class="ps-2 fw-light">Green peak bandarban</span>
                                </p>
                                <h5 class="fs-6 pt-0 card-heading">
                                    Bandarban Green Peak Resort
                                </h5>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="pb-1">
                                            <span><i class="fa fa-gear"></i></span>
                                            <span class="ps-2 card-pragraph">Trained Staff</span>
                                        </div>
                                        <div class="pb-1">
                                            <span><i class="fa fa-gear"></i></span>
                                            <span class="ps-2 card-pragraph">Exotic Food </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pb-1">
                                            <span><i class="fa fa-gear"></i></span>
                                            <span class="ps-2 card-pragraph">Exotic Trained</span>
                                        </div>
                                        <div class="pb-1">
                                            <span><i class="fa fa-gear"></i></span>
                                            <span class="ps-2 card-pragraph">Exotic Food</span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="text-center">
                                    <p class="m-0 p-2 fs-3 fw-bold primary-color">
                                        $999 <span class="fs-6 fw-normal">per person</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
