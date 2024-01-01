@extends('frontend.layouts.master')

@section('page-content')

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
                                    <form action="{{ route('frontend_paynow') }}" method="post">
                                        @csrf
                                        <div class="col-lg-6">
                                            <div class="row align-items-center mb-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Full Name</label>
                                                        <input class="form-control" name="customer_name" type="text"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-4">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <input class="form-control" name="customer_phone" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Alternate Phone Number</label>
                                                        <input class="form-control" name="alternate_phone" type="text"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-item-center mb-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input class="form-control" name="customer_email" type="text"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control"
                                                                  name="customer_address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Customer Notes</label>
                                                        <textarea class="form-control"
                                                                  name="customer_notes"></textarea>
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

                                    @dump(session()->get('cart'))
                                    @dump(session()->get('payable_total'))
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
