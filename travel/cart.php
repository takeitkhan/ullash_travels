<?php include('layouts/header.php'); ?>

<div class="inner_banner bg-primary">
    <div class="container">
        <h2 class="text-white text-left fs-1">Cart</h2>
    </div>
</div>

<div id="content">
    <section class="h-100 h-custom">
        <div class="container py-5 h-100">
            <div class="row  mb-3 d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="mb-3">
                                        <a href="#!" class="text-body">
                                            <i class="fas fa-long-arrow-alt-left me-2"></i>
                                            Check other rooms, cabins or events
                                        </a>
                                    </h5>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Your choosen item</p>
                                            <p class="mb-0">You have 1 items in your cart</p>
                                        </div>
                                    </div>
                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div>
                                                            <img
                                                                    src="./images/single_event_card/1.png"
                                                                    class="img-fluid rounded-3" alt="Shopping item"
                                                                    style="width: 65px;">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h5>Iphone 11 pro</h5>
                                                            <p class="small mb-0">256GB, Navy Blue</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div style="width: 250px;">
                                                            <h5 class="fw-normal mb-0">
                                                                2 adults<br/>
                                                                2 childs<br/>
                                                                0 extra person
                                                            </h5>
                                                        </div>
                                                        <div style="width: 100px;">
                                                            <h5 class="mb-0">৳1900.00</h5>
                                                        </div>
                                                        <a href="#!" style="color: #d30000;">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <hr class="my-4">
                                    <div class="total_cart">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2 total_cart_title">Subtotal</p>
                                            <p class="mb-2 total_cart_amount">৳5700.00</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2 total_cart_title">Shipping</p>
                                            <p class="mb-2 total_cart_amount">৳100.00</p>
                                        </div>

                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-2 total_cart_title">Total (Incl. taxes)</p>
                                            <p class="mb-2 total_cart_amount">$5800.00</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <div class="col-md-2">
                                            <button class="btn btn-success btn-form1-submit">Checkout</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include('layouts/footer.php'); ?>
