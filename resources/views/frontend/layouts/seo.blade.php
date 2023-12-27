@section('site-title'){{!empty($page->meta_title) ? $page->meta_title : $page->name .' | ' . $the::settings('site_name')}} @endsection

@section('meta-title'){{!empty($page->meta_title) ? $page->meta_title : $page->name }}@endsection

@section('meta-description'){{!empty($page->meta_description) ? $page->meta_description : $the::settings('site_description')  }}@endsection

@section('meta-keyword'){{$page->meta_keyword}}@endsection

@section('meta-author'){{$page->meta_author}}@endsection

@section('meta-image'){{$the::media($page->featured_image)}}@endsection

@section('meta-type'){{$page->term_type}}@endsection

@section('meta-url'){{route('frontend_page', [$page->term_type, $page->slug])}}@endsection
