@extends('admin.layouts.master')

@section('site-title')
Product category
@endsection

@section('page-content')
<div class="row">
    <div class="col-md-5">
        <form id="productForm" role="form" method="POST" action ="{{ (!empty($category)) ? route('admin_product_category_update') : route('admin_product_category_store') }}" senctype="multipart/form-data">
            @if(!empty($category))
                <input type="hidden" name="id" value="{{$category->id}}" />
            @endif
            @csrf
            <div class="card">
                <div class="card-header card-info  {{ (!empty($category)) ? 'alert-primary' : '' }}">
                    <h3 class="card-title panel-title float-left">
                        {{ (!empty($category)) ? 'Edit Category' : 'Add Category' }}
                    </h3>
                    <h3 class="card-title panel-title float-right">
                        <a title="Add New" href="{{route('admin_product_category_index')}}" class="text-primary"> <i class="fa fa-plus"></i></a> 
                    </h3>
                </div><!-- end card-header-->
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control form-control-sm" id="category_title" name="name" placeholder="Enter category name" autocomplete="off" value="{{ (!empty($category)) ? $category->name : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Category Slug</label>
                        @if(!empty($category)) 
                            <input class="slug_edit d-none" id="slug_edit" name="slug_edit" type="checkbox"> 
                            <label for="slug_edit" class=" font-weight-normal text-success slug_fa" role="button" style="font-size: 10px;"> 
                                <i class="fas fa-edit"></i>    
                            </label>
                        @endif
                        <input type="text" class="form-control form-control-sm {{ (!empty($category)) ?  : 'category_slug_active' }}" id="category_slug" name="slug" placeholder="Enter category Slug" value="{{ (!empty($category)) ? $category->slug : '' }}" autocomplete="off" {{ (!empty($category)) ? 'readonly' : '' }}>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control form-control-sm" id="description" name="description">{{ (!empty($category)) ? $category->description : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Parent Category</label>

                        <?php
                            global $avaiableCat;
                            $avaiableCat = (!empty($category)) ? $category->parent_id : '';
                            function selectCat($parent_id = null, $sub_mark = "") {
                                global $avaiableCat;
                                $getCat = \App\Models\ProductCategory::where('parent_id', $parent_id)->orderBy('created_at', 'desc')->get();
                                foreach($getCat as $row){ ?>
                                    <option value="{{$row->id}}" {{$row->id == $avaiableCat ? 'selected' : ''}}>{{$sub_mark.$row->name}} </option>
                                    <?php selectCat($row->id, $sub_mark .'— ');
                                }
                            }?>
                        <select class="form-control form-control-sm select2Cat" id="parent_id" name="parent_id">
                            <option value="">None</option>
                            <?php selectCat();?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="catimg">Category Image</label>
                        <a type="button" data-toggle="modal" data-target="#category" class="text-primary float-right">Insert Image</a> 
                        <div class="catimg row mx-auto">
                                <!-- product images and hidden fields -->
                                @if((!empty($category)) && $category->image)
                                    <?php
                                        $cimg = \App\Models\Media::where('id', $category->image)->first();
                                    ?>
                                    @if(!empty($cimg->id))
                                        <div class="product-img product-images col-md-2 col-3">
                                            <input type="hidden" name="catimg_id" value="{{$cimg->id}}">
                                            <img class="img-fluid" src="{{asset('/public/uploads/images/').'/'.$cimg->filename}}">
                                            <a href="javascript:void()" class="remove"><span class="fa fa-trash"></span></a>
                                        </div>
                                    @endif
                                @endif
                                <!-- dynamically added after  -->
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="visibility">Visibility</label>
                        <select name="visibility"  class="form-control form-control-sm">
                            <?php $visibility = !empty($category) ? $category->visibility : '';?>
                            <option value="1" {{ $visibility == '1' ? 'selected' : ''}}>Public</option>
                            <option value="0" {{ $visibility == '0' ? 'selected' : ''}}>Private</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div><!-- end card-body-->
            </div><!-- end card-->
        </form>
    </div><!-- end col-->
    <div class="col-md-7">
        <div class="card">
            <div class="card-header card-info">
                <h3 class="card-title panel-title float-left"> All Category </h3>
            </div><!-- end card header-->
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Visibility</th>
                        <th>Count</th>
                        <th>Image</th>
                        <th>Date & Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        function showCat($parent_id = null, $sub_mark=""){ 
                            $showCat = \App\Models\ProductCategory::where('parent_id', $parent_id)->orderBy('created_at', 'desc')->paginate('20');
                            foreach($showCat as $data){ ?>
                                <tr class="">
                                    <td class="align-middle"></td>
                                    <td class="align-middle">{{$sub_mark.$data->name}}</td>
                                    <td class="align-middle">
                                        <small>
                                                @if($data->visibility == 1)
                                                <span class="badge badge-success">Public</span>
                                                @else 
                                                <span class="badge badge-warning">Private</span>
                                                @endif
                                        </small>
                                    </td>
                                    <td class="align-middle">
                                        <a target="_blank" class="text-primary" href="{{route('admin_category_by_product', $data->id)}}">
                                            {{count(App\Models\Product::whereRaw("FIND_IN_SET($data->id , category_id)")->get())}}
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                            $cimg = \App\Models\Media::where('id', $data->image)->first();
                                        ?>
                                        @if(!empty($cimg->id))
                                            <img style="width: 50px;" class="img-fluid" src="{{asset('/public/uploads/images/').'/'.$cimg->filename}}">
                                        @endif
                                    </td>
                                    <td class="align-middle">{{$data->created_at}}</td>
                                    <td class="align-middle">
                                        <a href="{{route('admin_product_category_edit', $data->id)}}" class="btn-sm alert-success"><i class="fa fa-edit"></i></a>   
                                        <a href="{{route('admin_product_category_delete', $data->id)}}" class="btn-sm alert-danger" onclick="return confirm('Are you sure want to Delete?')"><i class="fa fa-trash"></i></a>  
                                    </td>
                                </tr>
                              <?php showCat($data->id, $sub_mark .'— ');
                            } 
                        } ?>
                        {{showCat()}}
                    </tbody>
                </table>
            </div><!-- end card body-->
        </div><!-- end card -->
    </div><!-- end col-->
</div><!-- end row-->
<?php 
    echo \App\CustomClass\MediaManager::mediaScript(); 
    echo \App\CustomClass\MediaManager::media('single', 'category', 'catimg');
?> 


@endsection



@section('cusjs')

<script>

        $(".slug_edit").change(function(){
            console.log(this.checked)
            $("#category_slug").attr('readonly',!this.checked)
            if(this.checked == true){
                $("#category_slug").addClass('category_slug_active')
                $("label.slug_fa i").addClass('fa-check').removeClass('fa-edit')
            }
            if(this.checked == false){
                $("#category_slug").removeClass('category_slug_active')
                $("label.slug_fa i").addClass('fa-edit').removeClass('fa-check')
            }
        })
            $("#category_title").keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
                $(".category_slug_active").val(Text);
            });
        
    
 </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
<!-- Latest compiled and minified JavaScript -->  
<link href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>

<script>
     //Select 2
    function selectRefresh() {
        $('select.select2Cat, select.select2Brand').select2({
  
        });
        //alert('hi');
    } 
    selectRefresh();
</script>


@endsection