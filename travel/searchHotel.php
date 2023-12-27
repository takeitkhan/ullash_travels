<?php include('layouts/header.php'); ?>

<div class="inner_banner">
    <img src="./images/inner_banner.jpg" alt="inner banner">
    <div class="searchInner">
        <?php include('homepage/search_tabs.php'); ?>
    </div>
</div>
<div id="content">
    <div class="container">
        <div class="row">
            <nav class="col-md-12">
                <div class="row">
                    <?php for ($i = 1; $i <= 16; $i++) { ?>
                        <div class="col-sm-3">
                            <div class="thumb5">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels01.jpg"
                                             alt="" class="img-responsive">
                                        <div class="over">
                                            <div class="v1">Normandy Hotel <span>6.9 Review score</span></div>
                                            <div class="v2">Twin / Double Room</div>
                                        </div>
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Normandy Hotel</div>
                                        <div class="txt2">Twin / Double Room</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$250.00</div>
                                                <div class="stars2">
                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                         alt="">
                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                         alt="">
                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                         alt="">
                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="right_side"><a
                                                        href="https://demo.gridgum.com/templates/Travel-agency/booking-hotel.html"
                                                        class="btn-default btn1">Details</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>


        </div>
    </div>


</div>
</div>


<?php include('layouts/footer.php'); ?>
