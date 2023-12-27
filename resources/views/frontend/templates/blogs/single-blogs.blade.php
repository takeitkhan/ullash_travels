{{--{{$page->id}}--}}
@php
    $blogs = $Model('Post')::term('blogs');
//dd($blogs);
@endphp
{{--@dump($page)--}}
<div class="container mt-5">

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $page->name }}</h1>
            <p class="text-muted">Published on {{$page->created_at}}</p>
        </div>
        <div class="col-md-4">
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <img src="{{$the::media($page->featured_image)}}" alt="Blog Post Image" class="img-fluid mb-3">
            <p>{!! $page->description !!} </p>
        </div>
        <div class="col-md-4 px-5">

            <div class="mt-0">
                <h5>Related Posts</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-dark">Post 1</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Post 2</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Post 3</a></li>
                </ul>
            </div>
            <div>
                <div>
                    <div class="mt-4">
                        <h5 class="card-title bg-light py-2 text-center">List of Categories :</h5>
                        <ul>
                            <li><a href="#" class="text-decoration-none text-dark">Business</a></li>
                            <li><a href="#" class="text-decoration-none text-dark">TAX</a></li>
                            <li><a href="#" class="text-decoration-none text-dark">Vat</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row mt-5">
{{--        <div class="col-md-8">--}}
{{--            <h3>Comments</h3>--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <p class="card-text">Comment by Jane Smith</p>--}}
{{--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
