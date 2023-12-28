<div id="content">
    <div class="container">
        @php
            //70|71|72|73|74
            $datas = $Post::customField('property_images', $page->id);
            $image_ids = explode('|', $datas);
        @endphp

        <div class="row masonry mb-5" data-masonry='{"percentPosition": true }'>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img
                        src="{{ $the::media($page->featured_image) }}"/>
                </div>
            </div>
            @foreach($image_ids as $k => $img)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img
                            src="{{ $the::media($img) }}"/>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                @php
                    $qq = collect($category::getCatByMultiid($page->category_id, false));
                    $pc = $qq->whereNull('parent_id')->first();
                    $cc = $qq->whereNotNull('parent_id')->first();
                @endphp
                <div class="card px-4 py-5 bg-white  border-1 mb-2">
                    <div class="mb-2">
                        <span class="badge alert-primary">
                            {{ $pc->name ?? NULL }}
                        </span>
                    </div>

                    <div class="display-6 text-dark">
                        {{ $page->name ?? NULL }}
                    </div>

                    <div class="d-flex">
                        <span class="me-5">
                            <i class="fa fa-map-marker"></i>
                            {{ $cc->name ?? NULL  }}
                        </span>
                        <span class="mx-5">·</span>
                        <span class="me-5">
                            Total Rooms:
                            {{ $page::customField('total_rooms', $page->id) }}
                        </span>
                    </div>
                    <div class="d-block my-3 text-center ">
                        <h5 class="d-inline-block border-bottom">Facilities</h5>
                    </div>

                    <div class="row mt-3">
                        @php
                            $values = $postfield::getCommaSeperatedValueByTermType('property', 'facilities');
                            $saveValue = $page::customField('facilities', $page->id);
                            $saveValue = explode('|', $saveValue);
                        @endphp
                        @foreach($saveValue as $key => $item)
                            <div class="col-md-4">
                                {{--                                @php--}}
                                {{--                                    $what = in_array($item, $saveValue);--}}
                                {{--                                @endphp--}}
                                {{--                                <div class="fs-4 {{ strtolower(str_replace(' ', '_', $item)) }} {{ ($what == 1) ? 'text-primary' : 'text-muted' }}">--}}
                                <div class="fs-4">
                                    <i class="fa-solid fa-check"></i>
                                    {{ $item ?? NULL }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-block mt-3 text-center ">
                        <h5 class="d-inline-block border-bottom">Washroom</h5>
                    </div>

                    <div class="row mt-3">
                        @php
                            $values = $postfield::getCommaSeperatedValueByTermType('property', 'washroom');
                            $saveValue = $page::customField('washroom', $page->id);
                            $saveValue = explode('|', $saveValue);
                        @endphp
                        @foreach($values as $key => $item)
                            <div class="col-md-6">
                                @php
                                    $what = in_array($item, $saveValue);
                                @endphp
                                <div
                                    class="fs-4 {{ strtolower(str_replace(' ', '_', $item)) }} {{ ($what == 1) ? 'text-primary' : 'text-muted' }}">
                                    <i class="fa-solid fa-check"></i>
                                    {{ $item ?? NULL }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>


                <div class="card px-4 py-2 pb-5 bg-white mb-2 border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Description of this property</h5>
                    </div>
                    <div class="">
                        {!! $page->description ?? NULL !!}
                    </div>
                </div>

                <div class="card px-4 py-2 pb-5 bg-white  border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Cost Details</h5>
                    </div>
                    <div class="">
                        {!! $page::customField('cost_details', $page->id) !!}
                    </div>
                </div>
                <div class="card px-4 py-2 pb-5 bg-white mt-2 border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Food Menu</h5>
                    </div>
                    <div class="">
                        {!! $page::customField('food_menu', $page->id) !!}
                    </div>
                </div>
                <div class="card px-4 py-2 pb-5 bg-white mt-2 border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Child Policy</h5>
                    </div>
                    <div class="">
                        {!! $page::customField('child_policy', $page->id) !!}
                    </div>
                </div>
                <div class="card px-4 py-2 pb-5 bg-white mt-2 border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Additional Information</h5>
                    </div>
                    <div class="">
                        {!! $page::customField('additional_information', $page->id) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card px-4 py-5 bg-white shadow-sm  border-1">
                    <div class="d-block startFrom">
                        Starts from
                        <span class="fs-2 fw-bold text-dark">
                            &#2547;{{ $page::customField('price', $page->id) ?? 0 }}
                        </span>
                        Per Person
                    </div>

                    <div class="datePicker">
                        @dump(session()->get('cart'))
                        <form action="{{ route('frontend_book_now') }}" method="get">
                            @csrf
                            <input type="hidden" name="price"
                                   value="{{ $page::customField('price', $page->id) ?? 0 }}"/>
                            <input type="hidden" name="property_id" value="{{ $page->id }}"/>
                            <input type="hidden" name="parent_id" value="{{ $pc->id }}"/>
                            <input type="hidden" name="child_id" value="{{ $cc->id }}"/>
                            <input type="hidden" name="child_id" value="{{ url()->current()  }}"/>

                            <div class="form-group my-3">
                                <label>Checkin Date</label>
                                <input type="date" name="check_in" class="form-control" id="datePicker"/>
                            </div>
                            <div class="form-group my-3">
                                <label>Checkout Date</label>
                                <input type="date" name="check_out" class="form-control" id="datePicker"/>
                            </div>
                            <div class="form-group my-3">
                                <label>Adult</label>
                                <select name="adult_count" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group my-3">
                                <label>Child</label>
                                <select name="child_count" class="form-control">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group my-3">
                                <label>Additional Person (if any)</label>
                                <select name="extra_count" class="form-control">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success w-100 btn-form1-submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@dump($page)

{{--@dump($page::customField('washroom', $page->id))--}}
