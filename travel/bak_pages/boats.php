<?php include('layouts/header.php'); ?>
    <div id="google_map2_wrapper">
        <div id="google_map2"></div>
    </div>

    <div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a
                        href="https://demo.gridgum.com/templates/Travel-agency/index.html">Home</a><span>/</span><a
                        href="#">Pages</a><span>/</span>Cruises
            </div>
        </div>
    </div>


    <div id="content">
        <div class="container">

            <div class="tabs_wrapper tabs1_wrapper">
                <div class="tabs tabs2">
                    <div class="tabs_tabs tabs1_tabs">

                        <ul>
                            <li class="flights"><a href="#tabs-1">Flights</a></li>
                            <li class="hotels"><a href="#tabs-2">Hotels</a></li>
                            <li class="cars"><a href="#tabs-3">Cars</a></li>
                            <li class="active cruises"><a href="#tabs-4">Cruises</a></li>
                        </ul>

                    </div>
                    <div class="tabs_content tabs1_content">

                        <div id="tabs-1">
                            <form action="javascript:;" class="form1">
                                <div class="row">
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Flying from:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">City or Airport</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>To:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">City or Airport</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Departing:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Returning:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-1">
                                        <div class="select1_wrapper">
                                            <label>Adult:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select select3" style="width: 100%">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-1">
                                        <div class="select1_wrapper">
                                            <label>Child:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select select3" style="width: 100%">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="button1_wrapper">
                                            <button type="submit" class="btn-default btn-form1-submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-sm-3">

                                    <form action="javascript:;" class="form2 form2_flights">
                                        <div class="select1_wrapper clearfix">
                                            <label>Passenger:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select select3" style="width: 100%">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>

                                    <ul class="ul3">
                                        <li><a href="#">Star Raiting</a></li>
                                        <li><a href="#">Price Range</a></li>
                                        <li><a href="#">Departure Ports</a></li>
                                        <li><a href="#">Trip Duration</a></li>
                                        <li><a href="#">Ships</a></li>
                                    </ul>

                                    <div class="sm_slider sm_slider1">
                                        <a class="sm_slider_prev" href="#"></a>
                                        <a class="sm_slider_next" href="#"></a>
                                        <div class="">
                                            <div class="carousel-box">
                                                <div class="inner">
                                                    <div class="carousel main">
                                                        <ul>
                                                            <li>
                                                                <div class="sm_slider_inner">
                                                                    <div class="txt1">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit, sed diam nonummy
                                                                        nibh euismod tincidunt ut laoreet dolore magna
                                                                        aliquam erat volutpat. Ut wisi enim ad minim
                                                                        veniam.
                                                                    </div>
                                                                    <div class="txt2">George Smith</div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sm_slider_inner">
                                                                    <div class="txt1">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit, sed diam nonummy
                                                                        nibh euismod tincidunt ut laoreet dolore magna
                                                                        aliquam erat volutpat. Ut wisi enim ad minim
                                                                        veniam.
                                                                    </div>
                                                                    <div class="txt2">Adam Parker</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-sm-9">

                                    <form action="javascript:;" class="form3 clearfix">
                                        <div class="select1_wrapper txt">
                                            <label>Sort by:</label>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Name</option>
                                                    <option value="2">Name2</option>
                                                    <option value="2">Name3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Price</option>
                                                    <option value="2">Price2</option>
                                                    <option value="2">Price3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Raiting</option>
                                                    <option value="2">Raiting2</option>
                                                    <option value="2">Raiting3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Popularity</option>
                                                    <option value="2">Popularity2</option>
                                                    <option value="2">Popularity3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper buttons">
                                            <a href="#" class="btn-default s1"></a>
                                            <a href="#" class="btn-default s2"></a>
                                            <a href="#" class="btn-default s3"></a>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights01.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Abudabi - Zurich</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$250.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights02.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Sydney - Berlin</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$849.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights03.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Ankara - Munich</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$849.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hl1"></div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights04.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Zurich- Moscow</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$549.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights05.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Boston- Tbilisi</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$749.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights06.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Amsterdam- Viena</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$179.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hl1"></div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights07.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Berlin- Warsaw</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$69.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights08.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">New York - Paris</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$539.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb4">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights09.jpg"
                                                             alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Riga- Prague</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$49.00</div>
                                                                <div class="nums">avg/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pager_wrapper">
                                        <ul class="pager clearfix">
                                            <li class="prev"><a href="#">Previous</a></li>
                                            <li class="li"><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li class="li"><a href="#">3</a></li>
                                            <li class="li"><a href="#">4</a></li>
                                            <li class="li"><a href="#">5</a></li>
                                            <li class="li"><a href="#">6</a></li>
                                            <li class="li"><a href="#">7</a></li>
                                            <li class="li"><a href="#">8</a></li>
                                            <li class="li"><a href="#">9</a></li>
                                            <li class="li"><a href="#">10</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div id="tabs-2">
                            <form action="javascript:;" class="form1">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="select1_wrapper">
                                            <label>City or Hotel Name:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Enter a destination or hotel name</option>
                                                    <option value="2">Lorem ipsum dolor sit amet</option>
                                                    <option value="3">Duis autem vel eum</option>
                                                    <option value="4">Ut wisi enim ad minim veniam</option>
                                                    <option value="5">Nam liber tempor cum</option>
                                                    <option value="6">At vero eos et accusam et</option>
                                                    <option value="7">Consetetur sadipscing elitr</option>
                                                    <option value="8">Sed diam nonumy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Check-In:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Check-Out:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Adult:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Room for 1 adult</option>
                                                    <option value="2">Room for 2 adult</option>
                                                    <option value="3">Room for 3 adult</option>
                                                    <option value="4">Room for 4 adult</option>
                                                    <option value="5">Room for 5 adult</option>
                                                    <option value="6">Room for 6 adult</option>
                                                    <option value="7">Room for 7 adult</option>
                                                    <option value="8">Room for 8 adult</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="button1_wrapper">
                                            <button type="submit" class="btn-default btn-form1-submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-sm-3">

                                    <form action="javascript:;" class="form2 form2_hotels">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="select1_wrapper clearfix">
                                                    <label>Adult:</label>
                                                    <div class="select1_inner">
                                                        <select class="select2 select select3" style="width: 100%">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="select1_wrapper clearfix">
                                                    <label>Child:</label>
                                                    <div class="select1_inner">
                                                        <select class="select2 select select3" style="width: 100%">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <ul class="ul3">
                                        <li><a href="#">Star Raiting</a></li>
                                        <li><a href="#">Price Range</a></li>
                                        <li><a href="#">Departure Ports</a></li>
                                        <li><a href="#">Trip Duration</a></li>
                                        <li><a href="#">Ships</a></li>
                                    </ul>

                                    <div class="star_rating_wrapper">
                                        <div class="title">Star Raiting</div>
                                        <div class="content">
                                            <div class="star_rating">
                                                <form>
                                                    <div>
                                                        <input id="checkbox-1" class="checkbox1-custom"
                                                               name="checkbox-1" type="checkbox" checked>
                                                        <label for="checkbox-1" class="checkbox1-custom-label"><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><span>5 Stars</span></label>
                                                    </div>
                                                    <div>
                                                        <input id="checkbox-2" class="checkbox1-custom"
                                                               name="checkbox-2" type="checkbox">
                                                        <label for="checkbox-2" class="checkbox1-custom-label"><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><span>4 Stars</span></label>
                                                    </div>
                                                    <div>
                                                        <input id="checkbox-3" class="checkbox1-custom"
                                                               name="checkbox-3" type="checkbox" checked>
                                                        <label for="checkbox-3" class="checkbox1-custom-label"><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><span>3 Stars</span></label>
                                                    </div>
                                                    <div>
                                                        <input id="checkbox-4" class="checkbox1-custom"
                                                               name="checkbox-4" type="checkbox">
                                                        <label for="checkbox-4" class="checkbox1-custom-label"><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><span>2 Stars</span></label>
                                                    </div>
                                                    <div>
                                                        <input id="checkbox-5" class="checkbox1-custom"
                                                               name="checkbox-5" type="checkbox">
                                                        <label for="checkbox-5" class="checkbox1-custom-label"><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><img
                                                                    src="https://demo.gridgum.com/templates/Travel-agency/images/star2.png"
                                                                    alt=""><span>1 Stars</span></label>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm_slider sm_slider2">
                                        <a class="sm_slider_prev" href="#"></a>
                                        <a class="sm_slider_next" href="#"></a>
                                        <div class="">
                                            <div class="carousel-box">
                                                <div class="inner">
                                                    <div class="carousel main">
                                                        <ul>
                                                            <li>
                                                                <div class="sm_slider_inner">
                                                                    <div class="txt1">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit, sed diam nonummy
                                                                        nibh euismod tincidunt ut laoreet dolore magna
                                                                        aliquam erat volutpat. Ut wisi enim ad minim
                                                                        veniam.
                                                                    </div>
                                                                    <div class="txt2">George Smith</div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sm_slider_inner">
                                                                    <div class="txt1">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit, sed diam nonummy
                                                                        nibh euismod tincidunt ut laoreet dolore magna
                                                                        aliquam erat volutpat. Ut wisi enim ad minim
                                                                        veniam.
                                                                    </div>
                                                                    <div class="txt2">Adam Parker</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-sm-9">

                                    <form action="javascript:;" class="form3 clearfix">
                                        <div class="select1_wrapper txt">
                                            <label>Sort by:</label>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Name</option>
                                                    <option value="2">Name2</option>
                                                    <option value="2">Name3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Price</option>
                                                    <option value="2">Price2</option>
                                                    <option value="2">Price3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Raiting</option>
                                                    <option value="2">Raiting2</option>
                                                    <option value="2">Raiting3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Popularity</option>
                                                    <option value="2">Popularity2</option>
                                                    <option value="2">Popularity3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper buttons">
                                            <a href="#" class="btn-default s1"></a>
                                            <a href="#" class="btn-default s2"></a>
                                            <a href="#" class="btn-default s3"></a>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels01.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Normandy Hotel <span>6.9 Review score</span>
                                                            </div>
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
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels02.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Hotel West-End <span>6.9 Review score</span>
                                                            </div>
                                                            <div class="v2">Twin / Double Room</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Hotel West-End</div>
                                                        <div class="txt2">Twin / Double Room</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$349.00</div>
                                                                <div class="stars2">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels03.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Chambiges Elysees
                                                                <span>6.9 Review score</span></div>
                                                            <div class="v2">Twin / Double Room</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Chambiges Elysees</div>
                                                        <div class="txt2">Twin / Double Room</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$360.00</div>
                                                                <div class="stars2">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hl1"></div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels04.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Hamilton Hotel <span>6.9 Review score</span>
                                                            </div>
                                                            <div class="v2">Twin / Double Room</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Hamilton Hotel</div>
                                                        <div class="txt2">Twin / Double Room</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$75.00</div>
                                                                <div class="stars2">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels05.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Central Grand Hotel
                                                                <span>6.9 Review score</span></div>
                                                            <div class="v2">Twin / Double Room</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Central Grand Hotel</div>
                                                        <div class="txt2">Twin / Double Room</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$65.00</div>
                                                                <div class="stars2">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels06.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Ambasador Premium
                                                                <span>6.9 Review score</span></div>
                                                            <div class="v2">Twin / Double Room</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Ambasador Premium</div>
                                                        <div class="txt2">Twin / Double Room</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$35.00</div>
                                                                <div class="stars2">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hl1"></div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels07.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Grand Plaza <span>6.9 Review score</span>
                                                            </div>
                                                            <div class="v2">Twin / Double Room</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Grand Plaza</div>
                                                        <div class="txt2">Twin / Double Room</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$450.00</div>
                                                                <div class="stars2">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels08.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Grand Iberia <span>6.9 Review score</span>
                                                            </div>
                                                            <div class="v2">Twin / Double Room</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Grand Iberia</div>
                                                        <div class="txt2">Twin / Double Room</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$255.00</div>
                                                                <div class="stars2">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb5">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels09.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Westminster Hotel
                                                                <span>6.9 Review score</span></div>
                                                            <div class="v2">Twin / Double Room</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">Westminster Hotel</div>
                                                        <div class="txt2">Twin / Double Room</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$275.00</div>
                                                                <div class="stars2">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png"
                                                                         alt="">
                                                                    <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pager_wrapper">
                                        <ul class="pager clearfix">
                                            <li class="prev"><a href="#">Previous</a></li>
                                            <li class="li"><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li class="li"><a href="#">3</a></li>
                                            <li class="li"><a href="#">4</a></li>
                                            <li class="li"><a href="#">5</a></li>
                                            <li class="li"><a href="#">6</a></li>
                                            <li class="li"><a href="#">7</a></li>
                                            <li class="li"><a href="#">8</a></li>
                                            <li class="li"><a href="#">9</a></li>
                                            <li class="li"><a href="#">10</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div id="tabs-3">
                            <form action="javascript:;" class="form1">
                                <div class="row">
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Country:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Please Select</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>City:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Please Select</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Location:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Please Select</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Pick up Date:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Drop off Date:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-md-2">
                                        <div class="button1_wrapper">
                                            <button type="submit" class="btn-default btn-form1-submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-sm-3">

                                    <ul class="ul3">
                                        <li><a href="#">Star Raiting</a></li>
                                        <li><a href="#">Price Range</a></li>
                                        <li><a href="#">Departure Ports</a></li>
                                        <li><a href="#">Trip Duration</a></li>
                                        <li><a href="#">Ships</a></li>
                                    </ul>

                                    <div class="sm_slider sm_slider3">
                                        <a class="sm_slider_prev" href="#"></a>
                                        <a class="sm_slider_next" href="#"></a>
                                        <div class="">
                                            <div class="carousel-box">
                                                <div class="inner">
                                                    <div class="carousel main">
                                                        <ul>
                                                            <li>
                                                                <div class="sm_slider_inner">
                                                                    <div class="txt1">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit, sed diam nonummy
                                                                        nibh euismod tincidunt ut laoreet dolore magna
                                                                        aliquam erat volutpat. Ut wisi enim ad minim
                                                                        veniam.
                                                                    </div>
                                                                    <div class="txt2">George Smith</div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sm_slider_inner">
                                                                    <div class="txt1">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit, sed diam nonummy
                                                                        nibh euismod tincidunt ut laoreet dolore magna
                                                                        aliquam erat volutpat. Ut wisi enim ad minim
                                                                        veniam.
                                                                    </div>
                                                                    <div class="txt2">Adam Parker</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-9">

                                    <form action="javascript:;" class="form3 clearfix">
                                        <div class="select1_wrapper txt">
                                            <label>Sort by:</label>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Premium</option>
                                                    <option value="2">Premium2</option>
                                                    <option value="2">Premium3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Automatic</option>
                                                    <option value="2">Automatic2</option>
                                                    <option value="2">Automatic3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Price</option>
                                                    <option value="2">Price2</option>
                                                    <option value="2">Price3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Fuel Type</option>
                                                    <option value="2">Fuel Type2</option>
                                                    <option value="2">Fuel Type3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper buttons">
                                            <a href="#" class="btn-default s1"></a>
                                            <a href="#" class="btn-default s2"></a>
                                            <a href="#" class="btn-default s3"></a>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars01.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">SMART FORFOUR 1.0 <span>or similar</span>
                                                            </div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">SMART FORFOUR 1.0</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$24.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars02.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">FIAT 500 1.2 <span>or similar</span></div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">FIAT 500 1.2</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$25.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars03.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">FIAT PANDA 1.2 <span>or similar</span></div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">FIAT PANDA 1.2</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$26.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hl1"></div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars04.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">MERCEDES BENZ C200 <span>or similar</span>
                                                            </div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">MERCEDES BENZ C200</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$68.00</div>
                                                                <div class="nums">per/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars05.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">MERCEDES BENZ E200 <span>or similar</span>
                                                            </div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">MERCEDES BENZ E200</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$75.00</div>
                                                                <div class="nums">per/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars06.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">AUDI A4 2.0 <span>or similar</span></div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">AUDI A4 2.0</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$75.00</div>
                                                                <div class="nums">per/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hl1"></div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars07.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">PEUGEOT 2008 GPS <span>or similar</span>
                                                            </div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">PEUGEOT 2008 GPS</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$58.00</div>
                                                                <div class="nums">per/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars08.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">GM VIVARO 2.1 <span>or similar</span></div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">GM VIVARO 2.1</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$90.00</div>
                                                                <div class="nums">per/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars09.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">MERCEDES BENZ V 2.1 <span>or similar</span>
                                                            </div>
                                                            <div class="v2">Mileage unlimited 4 / Manual transmission
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">MERCEDES BENZ V 2.1</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$100.00</div>
                                                                <div class="nums">per/person</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cars.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pager_wrapper">
                                        <ul class="pager clearfix">
                                            <li class="prev"><a href="#">Previous</a></li>
                                            <li class="li"><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li class="li"><a href="#">3</a></li>
                                            <li class="li"><a href="#">4</a></li>
                                            <li class="li"><a href="#">5</a></li>
                                            <li class="li"><a href="#">6</a></li>
                                            <li class="li"><a href="#">7</a></li>
                                            <li class="li"><a href="#">8</a></li>
                                            <li class="li"><a href="#">9</a></li>
                                            <li class="li"><a href="#">10</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div id="tabs-4">
                            <form action="javascript:;" class="form1">
                                <div class="row">
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Sail To:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">All destinations</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Sail From:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">All ports</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Start Date:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="From any month">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>End of Date:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="To any month">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Cruise Ship:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">All Ships</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-md-2">
                                        <div class="button1_wrapper">
                                            <button type="submit" class="btn-default btn-form1-submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-sm-3">

                                    <form action="javascript:;" class="form2 form2_flights">
                                        <div class="select1_wrapper clearfix">
                                            <label>Passenger:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select select3" style="width: 100%">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>

                                    <ul class="ul3">
                                        <li><a href="#">Star Raiting</a></li>
                                        <li><a href="#">Price Range</a></li>
                                        <li><a href="#">Departure Ports</a></li>
                                        <li><a href="#">Trip Duration</a></li>
                                        <li><a href="#">Ships</a></li>
                                    </ul>

                                    <div class="sm_slider sm_slider4">
                                        <a class="sm_slider_prev" href="#"></a>
                                        <a class="sm_slider_next" href="#"></a>
                                        <div class="">
                                            <div class="carousel-box">
                                                <div class="inner">
                                                    <div class="carousel main">
                                                        <ul>
                                                            <li>
                                                                <div class="sm_slider_inner">
                                                                    <div class="txt1">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit, sed diam nonummy
                                                                        nibh euismod tincidunt ut laoreet dolore magna
                                                                        aliquam erat volutpat. Ut wisi enim ad minim
                                                                        veniam.
                                                                    </div>
                                                                    <div class="txt2">George Smith</div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sm_slider_inner">
                                                                    <div class="txt1">Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit, sed diam nonummy
                                                                        nibh euismod tincidunt ut laoreet dolore magna
                                                                        aliquam erat volutpat. Ut wisi enim ad minim
                                                                        veniam.
                                                                    </div>
                                                                    <div class="txt2">Adam Parker</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-9">

                                    <form action="javascript:;" class="form3 clearfix">
                                        <div class="select1_wrapper txt">
                                            <label>Sort by:</label>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Ships</option>
                                                    <option value="2">Ships2</option>
                                                    <option value="2">Ships3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Duration</option>
                                                    <option value="2">Duration2</option>
                                                    <option value="2">Duration3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Price</option>
                                                    <option value="2">Price2</option>
                                                    <option value="2">Price3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper sel">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Name</option>
                                                    <option value="2">Name2</option>
                                                    <option value="2">Name3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select1_wrapper buttons">
                                            <a href="#" class="btn-default s1"></a>
                                            <a href="#" class="btn-default s2"></a>
                                            <a href="#" class="btn-default s3"></a>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises01.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Bahamas <span>17 Deal Offers</span></div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">7 Days Bahamas</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$729.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cruise.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises02.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Mediterranean <span>17 Deal Offers</span>
                                                            </div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">14 Days Mediterranean</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$999.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a
                                                                        href="https://demo.gridgum.com/templates/Travel-agency/search-cruise.html"
                                                                        class="btn-default btn1">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises03.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Caribbean <span>17 Deal Offers</span></div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">5 Days Caribbean</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$360.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a href="#"
                                                                                       class="btn-default btn1">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hl1"></div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises04.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Greece <span>17 Deal Offers</span></div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">4 Days Greece</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$236.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a href="#"
                                                                                       class="btn-default btn1">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises05.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Australia <span>17 Deal Offers</span></div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">9 Days Australia</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$990.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a href="#"
                                                                                       class="btn-default btn1">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises06.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Mediterranean <span>17 Deal Offers</span>
                                                            </div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">12 Days Mediterranean</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$560.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a href="#"
                                                                                       class="btn-default btn1">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hl1"></div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises07.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Caribbean <span>17 Deal Offers</span></div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">4 Day Caribbean</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$36.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a href="#"
                                                                                       class="btn-default btn1">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises08.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Caribbean <span>17 Deal Offers</span></div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">6 Day Caribbean</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$90.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a href="#"
                                                                                       class="btn-default btn1">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb6">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises09.jpg"
                                                             alt="" class="img-responsive">
                                                        <div class="over">
                                                            <div class="v1">Caribbean <span>17 Deal Offers</span></div>
                                                            <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                                        </div>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">5 Day Caribbean</div>
                                                        <div class="txt3 clearfix">
                                                            <div class="left_side">
                                                                <div class="price">$160.00</div>
                                                                <div class="nums">per/Day</div>
                                                            </div>
                                                            <div class="right_side"><a href="#"
                                                                                       class="btn-default btn1">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pager_wrapper">
                                        <ul class="pager clearfix">
                                            <li class="prev"><a href="#">Previous</a></li>
                                            <li class="li"><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li class="li"><a href="#">3</a></li>
                                            <li class="li"><a href="#">4</a></li>
                                            <li class="li"><a href="#">5</a></li>
                                            <li class="li"><a href="#">6</a></li>
                                            <li class="li"><a href="#">7</a></li>
                                            <li class="li"><a href="#">8</a></li>
                                            <li class="li"><a href="#">9</a></li>
                                            <li class="li"><a href="#">10</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>


<?php include('layouts/footer.php'); ?>
