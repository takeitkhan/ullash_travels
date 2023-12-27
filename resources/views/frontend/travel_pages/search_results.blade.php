@extends('frontend.layouts.master')
@section('site-title')
    Search Results
@endsection
@section('meta-description')
    Search results
@endsection

@section('page-content')
    <div class="inner_banner">
        <img src="{{ $publicDir  }}/uploads/images/innerbanner-1703685008.jpg" alt="Search Results Page">
        <div class="searchInner">
            @include('frontend.homepage.search_tabs')
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <nav class="col-md-12">
                    <div class="row">
                        @foreach($posts as $k => $post)
                            <div class="col-sm-3">
                                <div class="thumb5">
                                    <div class="thumbnail clearfix">
                                        <figure>
                                            <a class="no-underline" href="">
                                                <img
                                                    src="{{ $the::media($post->featured_image) }}"
                                                    alt="" class="img-responsive">
                                            </a>
                                            <div class="over">
                                                <div class="v1">
                                                    {{ $post->name ?? NULL }}
                                                </div>
                                                <div class="v2">
                                                    {{ $Post::customField('sub_title', $post->id) ?? NULL }}
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="caption text-center">
                                            <div class="txt1">
                                                <a class="no-underline" href="{{ url('') }}">
                                                    {{ $post->name ?? NULL }}
                                                </a>
                                            </div>
                                            <div class="txt2">
                                                {{ $Post::customField('sub_title', $post->id) ?? NULL }}
                                            </div>
                                            <div class="clearfix">
                                                <div class="my-2">
                                                    <div class="price">
                                                        <span class="d-block"><i>Starts from</i></span>
                                                        <div class="priceFont defaultTextColor">
                                                            &#2547;{{ $Post::customField('price', $post->id) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ route('frontend_page', ['property', $post->slug]) }}"
                                                   class="btn-default btn1">
                                                    Details
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
@endsection
