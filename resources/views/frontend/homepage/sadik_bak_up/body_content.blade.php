<!-- statistics percentage going here-->
<section id="statistics-percentage-area" class="pb-4 d-none d-sm-block">
    <div class="container">
        <div class="statistics-percentage p-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                <div class="col">


                    <div
                        class="single-progress d-flex flex-column gap-1 justify-content-center align-items-center"
                    >


                        <div class="progressbar">
                            <div class="second circle" data-percent="{!! $the::settings('charged_dropped') ?? NULL !!}">
                                <strong class="fa-w-1 rounded-circle "></strong>
                                <span class="progress-value text-dark fw-bold">Charges Dropped</span>
                            </div>
                        </div>

                    </div>

                </div>
                <div
                    class="single-progress d-flex flex-column gap-1 justify-content-center align-items-center"
                >
                    <div class="progressbar">
                        <div class="second circle" data-percent="{!! $the::settings('happy_clients') ?? NULL !!}">
                            <strong class="fa-w-1 rounded-circle "></strong>
                            <span class="progress-value text-dark fw-bold">Happy Clients</span>
                        </div>
                    </div>
                </div>

                <div
                    class="single-progress d-flex flex-column gap-1 justify-content-center align-items-center"
                >
                    <div class="progressbar">
                        <div class="second circle" data-percent="{!! $the::settings('trusting_clients') ?? NULL !!}">
                            <strong class="fa-w-1 rounded-circle "></strong>
                            <span class="progress-value text-dark fw-bold">Trusting Clients</span>
                        </div>
                    </div>
                </div>

                <div
                    class="single-progress d-flex flex-column gap-1 justify-content-center align-items-center"
                >
                    <div class="progressbar">
                        <div class="second circle" data-percent="{!! $the::settings('award_won') ?? NULL !!}">
                            <strong class="fa-w-1 rounded-circle "></strong>
                            <span class="progress-value text-dark fw-bold">Award Won</span>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar structure for other statistics -->
            </div>
        </div>
    </div>

    <section id="contact-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <form action="#" class="col-lg-11">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="What is your name?*"
                                />
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="mb-3">
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    placeholder="What is your email?*"
                                />
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="phone"
                                    placeholder="What is your phone number?*"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="mt-3 mb-3">
                    <textarea
                        class="form-control"
                        name="case"
                        rows="3"
                        placeholder="Case Details"
                    ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="contact_accept">
                                <input type="checkbox" name="accept" id="accept"/>
                                <label for="accept"
                                >I have read and accept the
                                    <a href="#" class="text-decoration-none"
                                    >Terms of Service & Privacy Policy</a
                                    ></label
                                >
                            </div>
                        </div>
                        <div
                            class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start justify-content-sm-end"
                        >
                            <div class="button">
                                <button class="btn btn-light">Send message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>


<!-- carousel slider for small device  -->
<div id="carouselExampleIndicators" class="carousel slide d-sm-none">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="single-progress d-flex flex-column gap-1 justify-content-center align-items-center">
                <div class="progressbar">
                    <div class="second circle" data-percent="{!! $the::settings('charged_dropped') ?? NULL !!}">
                        <strong class="fa-w-1 rounded-circle "></strong>
                        <span class="progress-value text-dark fw-bold">Charges Dropped</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="carousel-item">
            <div class="single-progress d-flex flex-column gap-1 justify-content-center align-items-center">
                <div class="progressbar">
                    <div class="second circle" data-percent="{!! $the::settings('happy_clients') ?? NULL !!}">
                        <strong class="fa-w-1 rounded-circle "></strong>
                        <span class="progress-value text-dark fw-bold">Happy Clients</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="carousel-item">
            <div class="single-progress d-flex flex-column gap-1 justify-content-center align-items-center">
                <div class="progressbar">
                    <div class="second circle" data-percent="{!! $the::settings('trusting_clients') ?? NULL !!}">
                        <strong class="fa-w-1 rounded-circle "></strong>
                        <span class="progress-value text-dark fw-bold">Trusting Clients</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="carousel-item">
            <div class="single-progress d-flex flex-column gap-1 justify-content-center align-items-center">
                <div class="progressbar">
                    <div class="second circle" data-percent="{!! $the::settings('award_won') ?? NULL !!}">
                        <strong class="fa-w-1 rounded-circle "></strong>
                        <span class="progress-value text-dark fw-bold">Award Won</span>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon text-bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon text-bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section id="contact-area" class="d-sm-none mt-5 mb-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form action="#" class="col-lg-11">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="What is your name?*"
                            />
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="mb-3">
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                placeholder="What is your email?*"
                            />
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="phone"
                                placeholder="What is your phone number?*"
                            />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-12">
                        <div class="mt-3 mb-3">
                  <textarea
                      class="form-control"
                      name="case"
                      rows="3"
                      placeholder="Case Details"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="contact_accept">
                            <input type="checkbox" name="accept" id="accept"/>
                            <label for="accept"
                            >I have read and accept the
                                <a href="#" class="text-decoration-none"
                                >Terms of Service & Privacy Policy</a
                                ></label
                            >
                        </div>
                    </div>
                    <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start justify-content-sm-end"
                    >
                        <div class="button">
                            <button class="btn btn-light">Send message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- carousel slider for small device ends  -->


<!-- End statistics percentage here-->

