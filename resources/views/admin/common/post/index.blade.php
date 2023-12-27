@extends('admin.layouts.master')

@section('site-title')
{{$term_name}}
@endsection

@section('page-content')
    <div class="card">
        <div class="card-header card-info">
            <h3 class="card-title panel-title float-left"> {{ !empty($catName) ? $catName : 'All '. $term_name  }} </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed table-hover table-sm">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($getPost as $key => $data)
                <tr>
                    <td class="align-middle">{{$key + $getPost->firstItem()}}</td>
                    <td class="align-middle">
                        <?php
                            $fimg = \App\Models\Media::where('id', $data->featured_image)->first();
                        ?>
                        @if(!empty($fimg->id))
                            <img style="width: 50px;" class="img-fluid" src="{{asset('/public/uploads/images/').'/'.$fimg->filename}}">
                        @endif
                    </td>
                    <td class="align-middle">
                        <a target="_blank" href="{{route('frontend_page', [$term_slug, $data->slug])}}">
                            {{$data->name}}
                        </a>
                        <small class="d-block">/{{$data->term_type}}/{{$data->slug}}</small>
                    </td>
                    <td class="align-middle">
                        {{ !empty($data->category_id) ? $category::getCatByMultiid($data->category_id, 'name')  : '' }}
                    </td>
                    <td class="align-middle">{{$data->created_at->format('d M Y')}} <br> {{$data->created_at->format('h:i a')}}</td>
                    <td class="align-middle">{{$data->is_status}}</td>
                    <td class="align-middle">
                        <a href="{{route('admin_term_type_edit', [$term_slug, $data->id])}}" class="badge alert-success"><i class="fa fa-edit"></i></a>
                        <a href="{{route('admin_term_type_delete', [$term_slug, $data->id])}}" class="badge alert-danger" onclick="return confirm('Are you sure want to Delete?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
            {{$getPost->links('pagination::bootstrap-4')}}
        </div>

     </div>

@endsection
