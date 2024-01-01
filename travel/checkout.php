<?php include('layouts/header.php'); ?>


<div class="inner_banner bg-primary">
    <div class="container">
        <h2 class="text-white text-left fs-1">Checkout</h2>
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
                                <form action="pay_now.html" method="post">
                                    <div class="col-lg-6">
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First name</label>
                                                    <input class="form-control" name="first_name" type="text"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <input class="form-control" name="last_name" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input class="form-control" name="email_address" type="text"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input class="form-control" name="phone" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control" name="last_name" type="text"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address 2 (Optional)</label>
                                                    <input class="form-control" name="last_name" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="form-select" id="country" required="">
                                                        <option value="">Choose...</option>
                                                        <option>United States</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select class="form-select" id="state" required="">
                                                        <option value="">Choose...</option>
                                                        <option>United States</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Zip</label>
                                                    <input class="form-control" name="zip" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10"></div>
                                            <div class="col-md-2">
                                                <button class="btn btn-success btn-form1-submit">Pay Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include('layouts/footer.php'); ?>
