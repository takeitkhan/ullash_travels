@extends('admin.layouts.master')

@section('site-title')
Frontend Settings
@endsection

@section('page-content')
        <?php echo \App\CustomClass\MediaManager::mediaScript();?>
        <?php
        $globalSettingRow = function(){
            return \App\Models\FrontendSettings::orderBy('meta_order', 'ASC')->get()->groupBy('meta_group');
        };


        $globalSetting =  function ($arg)
        {
            $get = \App\Models\FrontendSettings::where('meta_name', $arg)->first();
            return $get->meta_value ?? NULL;
        }
        ?>

<form action="{{route('admin_frontend_settings_update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        @php
            $i = 0;
        @endphp
        @foreach( $globalSettingRow() as $index => $row)
        @php
            $i++;
        @endphp
        @if(request()->get('action') == $i)
            <div class="col-md-8 mb-2">
                <div class="card border-1">
                    <div class="card-header card-info py-0">
                        <h3 class="card-title panel-title float-left mb-1" style="font-size: 19px;">
                            {{$index}} Settings
                        </h3>
                    </div><!-- end card-header-->


                    <div class="div card-body">
                        @foreach ($row as $item)

                            <div class="form-group">
                                <label style="width: 20%" for="">{{$item->meta_title}}</label>
                                <input name="meta_name[]" type="hidden" value="{{$item->meta_name}}">

                                @if($item->meta_type == 'Text')
                                    <input name="{{$item->meta_name}}" type="text" class="form-control form-control-sm"
                                        value="{{$globalSetting($item->meta_name) }}" placeholder="{{$globalSetting($item->meta_placeholder) }}">
                                    <p class="text-muted"><small>{{$item->meta_description}}</small></p>
                                @endif

                                @if($item->meta_type == 'Textarea')
                                    <textarea name="{{$item->meta_name}}"
                                    class="form-control form-control-sm">{{$globalSetting($item->meta_name) }}</textarea>
                                    <p class="text-muted"><small>{!! $item->meta_description !!}</small></p>
                                @endif

                                @if($item->meta_type == 'Richeditor')
                                    <textarea id="" name="{{$item->meta_name}}"
                                        class="form-control form-control-sm summernote">{{$globalSetting($item->meta_name) }}</textarea>
                                    <p class="text-muted"><small>{!! $item->meta_description !!}</small></p>
                                @endif

                                @if($item->meta_type == 'Number')
                                    <input name="{{$item->meta_name}}" type="number" class="form-control form-control-sm"
                                        value="{{$globalSetting($item->meta_name) }}" placeholder="{{$globalSetting($item->meta_placeholder) }}">
                                    <p class="text-muted"><small>{!! $item->meta_description !!}</small></p>
                                @endif

                                @if($item->meta_type == 'Email')
                                    <input name="{{$item->meta_name}}" type="email" class="form-control form-control-sm"
                                    value="{{$globalSetting($item->meta_name) }}" placeholder="{{$globalSetting($item->meta_placeholder) }}">
                                    <p class="text-muted"><small>{!! $item->meta_description !!}</small></p>
                                @endif
                                @if($item->meta_type == 'Checkbox')
                                    <input name="{{$item->meta_name}}" type="checkbox" class="checkbox"
                                    {{$globalSetting($item->meta_name) == 1 ? 'checked' : NULL }} value="1">
                                    <p class="text-muted"><small>{!! $item->meta_description !!}</small></p>
                                @endif

                                @if($item->meta_type == 'Media')
                                    <h3 class="card-title panel-title float-right">
                                        <a type="button" data-toggle="modal" data-target="#{{$item->meta_name}}" class="text-primary">Insert Image</a>
                                    </h3>

                                    <div class="{{$item->meta_name}}img row mx-auto">
                                        <!--  images and hidden fields -->
                                            <?php
                                                $fimg = \App\Models\Media::where('id', $globalSetting($item->meta_name))->first();
                                            ?>
                                            @if(!empty($fimg->id))
                                                <div class="product-img product-images col-md-2 col-3">
                                                    <input type="hidden" name="{{$item->meta_name}}" value="{{$fimg->id}}">
                                                    <img class="img-fluid" src="{{asset('/public/uploads/images/').'/'.$fimg->filename}}">
                                                    <a href="javascript:void()" class="remove"><span class="fa fa-trash"></span></a>
                                                </div>
                                            @endif
                                        <!-- dynamically added after  -->
                                    </div>
                                    <?php echo \App\CustomClass\MediaManager::media('single', $item->meta_name, $item->meta_name.'img', $item->meta_name);?>
                                    <p class="text-muted"><small>{!! $item->meta_description !!}</small></p>
                                @endif
                                <!-- end -->

                            </div>

                        @endforeach

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @endforeach



        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    List of frontend settings
                </div>
                <div class="card-body">
                    @php
                        $i = 0;
                    @endphp
                    @foreach($globalSettingRow() as $index => $row)
                        @php
                            $i++;
                        @endphp
                        <ul class="list-group">
                            <li class="list-group-item mb-2">
                                <a class="text-primary"
                                   href="{{request()->url()}}?action={{ $i  }}">
                                    @if(!empty($index))
                                        {{ $index }}
                                    @else
                                        Default
                                    @endif
                                    Settings
                                </a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- End Frontend Setting -->
    </div>
</form>




<?php //echo \App\CustomClass\MediaManager::media('single', 'site_logo', 'site_logoimg');?>
<?php //echo \App\CustomClass\MediaManager::media('single', 'site_favicon', 'site_faviconimg');?>

@endsection


@section('cusjs')
    <script src="{{asset('public/admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>


    <script>
    // $('.summernote').summernote({
    //     height: 250,   //set editable area's height
    //     codemirror: { // codemirror options
    //       theme: 'monokai'
    //   }
    // })
    </script>
    @include('admin.layouts.summernote-js', ['summerNoteId' => '.summernote'])


    <script>
        $('.product_category').select2({
            //theme: 'bootstrap4'
        })
    </script>
@endsection
