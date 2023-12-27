@extends('admin.layouts.master')

@section('site-title')
    {{!empty($post) ? 'Edit ' : 'Add New '}}  {{$term_name}}
@endsection

@section('page-content')
    @include('admin.common.post.tab')
    @if(request()->get('custom-field'))
        @if(!empty($post))
            <form role="form" method="POST" action="{{ route('admin_term_type_custom_field_data_store', $term_slug) }}"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}"/>
                <input type="hidden" name="custom_field_file" value="{{request()->get('custom-field')}}"/>
                @include('frontend.templates.'.$term_slug.'.custom-field.'.request()->get('custom-field'))
            </form>
        @endif
    @else
        <form role="form" method="POST"
              action="{{ (!empty($post)) ? route('admin_term_type_update', $term_slug)  : route('admin_term_type_store', $term_slug) }}"
              enctype="multipart/form-data">
            @csrf
            @if(!empty($post))
                <input type="hidden" name="id" value="{{$post->id}}"/>
            @endif
            @php
                $getTermInfo = $Model('Term')::where('slug', $term_slug)->first();
                $getTermInfo = $getTermInfo ? explode(',', $getTermInfo->default_field) : [];
        //        dd($getTermInfo);
            @endphp
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-info  {{ (!empty($post)) ? 'alert-primary' : '' }}">
                            <h3 class="card-title panel-title float-left">
                                {{ (!empty($post)) ? 'Edit '.$term_name : 'Add '.$term_name }}
                            </h3>
                        </div><!-- end card-header-->
                        <div class="card-body">
                            @if(in_array('title',$getTermInfo))
                                <div class="form-group">
                                    <label for="{{$term_slug}}_title">{{$term_name}} Title</label>
                                    <input type="text" class="form-control form-control-sm" id="{{$term_slug}}_title"
                                           name="name" placeholder="Enter {{$term_name}} title"
                                           value="{{ (!empty($post)) ? $post->name : '' }}" required>
                                </div>
                            @endif
                            <?php /*
                  	<div class="form-group">
                        <label for="{{$term_slug}}_sub_title">{{ $term_name }} Sub Title</label>
                        <input type="text" class="form-control form-control-sm" id="{{$term_slug}}_sub_title" name="sub_title" placeholder="Enter {{$term_name}} sub title" value="{{ (!empty($post)) ? $post->sub_title : '' }}">
                    </div>
                    */ ?>
                            <div class="form-group">
                                <label for="{{$term_slug}}_slug">{{$term_name}} Slug</label>
                                @if(!empty($post))
                                    <input class="slug_edit d-none" id="slug_edit" name="slug_edit" type="checkbox">
                                    <label for="slug_edit" class=" font-weight-normal text-success slug_fa"
                                           role="button" style="font-size: 10px;">
                                        <i class="fas fa-edit"></i>
                                    </label>
                                @endif
                                <input type="text"
                                       class="form-control form-control-sm {{ (!empty($post)) ?  : $term_slug.'_slug_active' }}"
                                       id="{{$term_slug}}_slug" name="slug" placeholder="Enter {{$term_name}} Slug"
                                       value="{{ (!empty($post)) ? $post->slug : '' }}"
                                       autocomplete="off" {{ (!empty($post)) ? 'readonly' : '' }}>
                            </div>
                            @if(in_array('description',$getTermInfo))
                                <div class="form-group">
                                    <label for="post_content">{{$term_name}} Description</label>
                                    <div class="pad">
                                        <textarea xid="compose-textarea"
                                                  class="form-control compose-textarea-summernote"
                                                  name="description">{{ (!empty($post)) ? $post->description : '' }}</textarea>
                                    </div>
                                </div>
                            @endif

                        </div><!-- /.card-body -->
                    </div>

                    <?php
                    $customField = \App\Models\PostField::where('term_type', $term_slug)->orderBy('sorting', 'asc')->get();
                    ?>

                    @if(count($customField) > 0)
                        <div class="card">
                            <div class="card-header mb-1 card-info  {{ (!empty($post)) ? 'alert-primary' : '' }}">
                                Custom Field
                            </div>
                            <div class="card-body">
                                <?php
                                $post_id = $post->id ?? null;
                                $typeForCustomField = 'Post';
                                $customFields = \App\Helpers\CustomPostField::getField($term_slug, $post_id, $typeForCustomField);
                                foreach ($customFields as $data) {
                                    echo $data;
                                }
                                ?>
                            </div>
                        </div>
                    @endif


                    <div class="card">
                        <div class="card-header card-info  {{ (!empty($post)) ? 'alert-primary' : '' }}">
                            <h3 class="card-title panel-title float-left">
                                Seo Settings
                            </h3>
                        </div><!-- end card-header-->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="{{ $term_slug }}_meta_title">{{$term_name}} Meta Title</label>
                                <input type="text" class="form-control form-control-sm {{ (!empty($post)) ?  : '' }}"
                                       id="{{ $term_slug }}_meta_title" name="meta_title"
                                       placeholder="Enter {{$term_name}} Meta Title"
                                       value="{{ (!empty($post)) ? $post->meta_title : '' }}" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="{{ $term_slug }}_meta_description">{{$term_name}} Meta Description</label>
                                <input type="text" class="form-control form-control-sm {{ (!empty($post)) ?  : '' }}"
                                       id="{{ $term_slug }}_meta_description" name="meta_description"
                                       placeholder="Enter {{$term_name}} Meta Description"
                                       value="{{ (!empty($post)) ? $post->meta_description : '' }}" autocomplete="off"
                                       }>
                            </div>
                            <div class="form-group">
                                <label for="{{ $term_slug }}_meta_keyword">{{$term_name}} Meta Keyword</label>
                                <input type="text" class="form-control form-control-sm {{ (!empty($post)) ?  : '' }}"
                                       id="{{ $term_slug }}_meta_keyword" name="meta_keyword"
                                       placeholder="Enter {{$term_name}} Meta Keyword"
                                       value="{{ (!empty($post)) ? $post->meta_keyword : '' }}" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="{{ $term_slug }}_meta_author">{{$term_name}} Meta Author</label>
                                <input type="text" class="form-control form-control-sm {{ (!empty($post)) ?  : '' }}"
                                       id="{{ $term_slug }}_meta_author" name="meta_author"
                                       placeholder="Enter {{$term_name}} Meta Author"
                                       value="{{ (!empty($post)) ? $post->meta_author : '' }}" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    @php
                        $termTaxonomy = \App\Models\TermTaxonomy::where('term_type', $term_slug)->where('status', 'publish')->get();
                    @endphp
                    @foreach($termTaxonomy as $key => $taxonomy)
                        <div class="card"> <!-- category -->
                            <div class="card-header card-info">
                                <h3 class="card-title panel-title">{{$taxonomy->name}}</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                global $avaiableCat;
                                global $taxSlug;
                                $taxSlug = $taxonomy->slug;
                                global $termSlug;
                                $termSlug = $term_slug;
                                //$avaiableCat = (!empty($post)) ? $post->category_id : '';
                                $avaiableCat = (!empty($post)) ? explode(',', $post->category_id) : [];

                                if (!function_exists('selectCat'))   {
                                function selectCat($parent_id = null, $sub_mark = "") {
                                global $avaiableCat;
                                global $taxSlug;
                                global $termSlug;
                                $getCat = \App\Models\Category::where('parent_id', $parent_id)->where('taxonomy_type', $taxSlug)->orderBy('created_at', 'desc')->get();
                                foreach($getCat as $row){ ?>
                                <option value="{{$row->id}}"
                                <?php foreach ($avaiableCat as $cat) {
                                    echo $row->id == $cat ? 'selected' : '';
                                } ?>
                                >
                                    {{$sub_mark.$row->name}}
                                </option>

                                <?php selectCat($row->id, $sub_mark . '— ');

                                }
                                }};?>
                                <div class="select2-dark">
                                    <select id="{{$taxonomy->slug}}select" multiple
                                            class="form-control form-control-sm select2Cat" id="category_id"
                                            name="category_id[]">
                                        <option value="">None</option>
                                        <?php selectCat();?>
                                    </select>
                                </div>
                            </div>
                        </div>  <!-- end category -->
                    @endforeach

                    @if(in_array('featured-image',$getTermInfo))
                        <div class="card"><!-- Featured Image-->
                            <div class="card-header card-info">
                                <h3 class="card-title panel-title">Featured Image</h3>
                                <h3 class="card-title panel-title float-right">
                                    <a type="button" data-toggle="modal" data-target="#{{$term_slug}}"
                                       class="text-primary">Insert Image</a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="{{$term_slug}}img row mx-auto">
                                    <!-- product images and hidden fields -->
                                    @if((!empty($post)) && $post->featured_image)
                                        <?php
                                        $fimg = \App\Models\Media::where('id', $post->featured_image)->first();
                                        ?>
                                        @if(!empty($fimg->id))
                                            <div class="product-img product-images col-md-2 col-3">
                                                <input type="hidden" name="{{$term_slug}}img_id" value="{{$fimg->id}}">
                                                <img class="img-fluid"
                                                     src="{{asset('/public/uploads/images/').'/'.$fimg->filename}}">
                                                <a href="javascript:void()" class="remove"><span
                                                        class="fa fa-trash"></span></a>
                                            </div>
                                    @endif
                                @endif
                                <!-- dynamically added after  -->
                                </div>
                            </div>
                        </div><!-- End Featured Image -->
                    @endif

                    <div class="card card-info">
                        <div class="card-body">
                            @php
                                $dir = $core::templateDir($term_slug);
                            @endphp
                            @if(is_dir($dir) == true)
                                <div class="form-group">
                                    <label for="{{$term_slug}}_template">Template</label>
                                    <select id="template_select" class="form-control form-control-sm" name="template">
                                        @php $template = array_diff(scandir($dir), array('.', '..')) @endphp;
                                        @foreach($template as $item)
                                            @php
                                                $getFileName = explode(".blade.php", $item);
                                                $checkFile =  str_contains($item, '.blade.php');
                                            @endphp
                                            <option></option>
                                            @if($checkFile == 1)
                                                <option
                                                    value="{{$getFileName[0]}}" {{!empty($post) && $post->template == $getFileName[0] ? 'selected' : ''}}>
                                                    {{ucwords($getFileName[0])}}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="{{ $term_slug }}_order_by">{{$term_name}} Order</label>
                                <input type="number" class="form-control form-control-sm" id="{{$term_slug}}_order_by"
                                       name="order_by" placeholder="Enter {{$term_name}} order"
                                       value="{{ (!empty($post)) ? $post->order_by : '' }}">
                            </div>

                            <div class="form-group">
                                <label for="{{$term_slug}}_is_status">{{$term_name}} Status</label>
                                @php
                                    $isStatusEnumValues = $core::getEnumValues('posts', 'is_status')
                                @endphp
                                <select name="is_status" id="{{$term_slug}}_is_status"
                                        class='form-control form-control-sm'>
                                    @foreach($isStatusEnumValues as $item)
                                        <option
                                            value="{{$item }}" {{(!empty($post)) && $item == $post->is_status ? 'selected' : null}}>{{ucwords($item)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
            @endif
        </form>

        <?php echo \App\CustomClass\MediaManager::mediaScript();?>
        <?php echo \App\CustomClass\MediaManager::media('single', $term_slug, $term_slug . 'img');?>

@endsection


@if(request()->get('custom-field'))
@else
@section('cusjs')

    <script src="{{asset('public/admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>

    <script>

        $(".slug_edit").change(function () {
            // console.log(this.checked)
            $("#{{$term_slug}}_slug").attr('readonly', !this.checked)
            if (this.checked == true) {
                $("#{{$term_slug}}_slug").addClass('{{$term_slug}}_slug_active')
                $("label.slug_fa i").addClass('fa-check').removeClass('fa-edit')
            }
            if (this.checked == false) {
                $("#{{$term_slug}}_slug").removeClass('{{$term_slug}}_slug_active')
                $("label.slug_fa i").addClass('fa-edit').removeClass('fa-check')
            }
        })
        $("#{{$term_slug}}_title").keyup(function () {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
            $(".{{$term_slug}}_slug_active").val(Text);
        });
    </script>


    @foreach($termTaxonomy as $key => $taxonomy)
        <script>
            var taxonomy_select = '{{!empty($termTaxonomy) ? $taxonomy->slug : ''}}select';
            $('select#' + taxonomy_select).select2({
                placeholder: "Select {{$taxonomy->name}}",
                allowClear: true,
                //theme: 'bootstrap4'
            })
        </script>
    @endforeach

    <script>
        $('select#template_select').select2({
            placeholder: "Select Template",
            allowClear: true,
            //theme: 'bootstrap4'
        })
    </script>

@endsection
@endif
