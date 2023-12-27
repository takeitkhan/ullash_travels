@extends('admin.layouts.master')

@section('site-title')
Medias
@endsection

@section('page-content')

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                     <form method="POST" enctype="multipart/form-data" class="uploadform" action="<?php echo route('admin_media_store_noajax'); ?>" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2 text-center">
                                <img id="image_preview_container" src="" style="max-height: 150px;">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group alert alert-primary">
{{--                                    <input type="file" class="form-control mx-auto w-75" name="image" placeholder="Choose image" id="image">--}}
{{--                                    <span class="text-danger"><?php //echo $errors->first('title'); ?></span>--}}

                                    <div class="form-group file-area">
                                        <label for="images">Upload Images <span></span></label>
                                        <input type="file" name="image[]" id="images" required="required" multiple="multiple"/>
                                        <div class="file-dummy">
                                            <div class="success">Great, your files are selected. Keep on.</div>
                                            <div class="default">Please select some files</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-2">
                                <button id="submitButton" type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($media as $item)
                        <div class="product-images col-md-2 col-3" style="background: #f2f2f2;">
                            <a href="{{asset('/public/uploads/images/').'/'. $item->filename}}" data-toggle="lightbox" data-title="{{$item->filename}}" data-gallery="gallery">
                                @if($item->file_extension == "pdf")

                                        <div class="document danger">
                                            <div class="document-body">
                                                <i class="fa fa-file-pdf text-danger"></i>
                                            </div>
                                        </div>
                                        <span class="p-3">
                                            {{$item->filename}}
                                        </span>
                                @else
                                <img src="{{asset('/public/uploads/images/').'/'. $item->filename}}" class="media img-fluid mb-2" alt="{{$item->filename}}"/>
                                @endif
                                <a href="{{route('admin_media_delete', $item->id)}}" onclick="return confirm('Are you sure want to Delete?')" class="remove"><span class="fa fa-trash"></span></a>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    {{$media->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
<?php echo \App\CustomClass\MediaManager::mediaScript();?>
@endsection

@section('cusjs')
    <!-- Ekko Lightbox -->
     <link rel="stylesheet" href="{{asset('public/admin/plugins/ekko-lightbox/ekko-lightbox.css')}}">
    <!-- Ekko Lightbox -->
    <script src="{{asset('public/admin/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
    <style>
        img.media{
            width: 200px;
            height: 200px;
            margin: 0 auto;
          	object-fit: cover;

        }
    </style>
    <script>
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true,
                size: "lg",
            });
        });
    })
    </script>


    <style>
        .file-area  label {
            font-weight: 500;
            display: block;
            margin: 4px 0;
            text-transform: uppercase;
            font-size: 13px;
            overflow: hidden;
        }
        .file-area .file-dummy {
            width: 100%;
            padding: 30px;
            background: rgba(255, 255, 255, 0.2);
            border: 2px dashed rgba(255, 255, 255, 0.2);
            text-align: center;
            transition: background 0.3s ease-in-out;
        }

        .file-area input[type=file] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            cursor: pointer;
        }

        .file-area .file-dummy .success {
            display: none;
        }
        .file-area input[type=file]:valid + .file-dummy .default {
            display: none;
        }

        .file-area input[type=file]:valid + .file-dummy .success {
            display: inline-block;
        }

        .file-area input[type=file]:valid + .file-dummy {
            border-color: rgba(0, 255, 0, 0.4);
            background-color: rgba(0, 255, 0, 0.3);
        }




    </style>




    <style>
        .document {
            background-color: #fff;
            border-radius: 3px;
            border: 1px solid #dce2e9;
        }

        .document .document-body {
            height: 130px;
            text-align: center;
            border-radius: 3px 3px 0 0;
            background-color: #fdfdfe;
        }

        .document .document-body i {
            font-size: 45px;
            line-height: 120px;
        }

        .document .document-body img {
            width: 100%;
            height: 100%;
        }

        .document .document-footer {
            border-top: 1px solid #ebf1f5;
            height: 46px;;
            padding: 5px 12px;
            border-radius: 0 0 2px 2px;
            position: relative;
        }

        .document .document-footer .document-name {
            display: block;
            margin-bottom: 0;
            font-size: 15px;
            font-weight: 600;
            width: 100%;
            line-height: normal;
            overflow-x: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: #fff;
        }

        .document .document-footer .document-description {
            display: block;
            margin-top: -1px;
            font-size: 11px;
            font-weight: 600;
            color: #fff;
            width: 100%;
            line-height: normal;
            overflow-x: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .document .file-download {
            font-size: 32px;
            color: #fff;
            position: absolute;
            right: 10px;
        }
        .document.danger .document-footer {
            background-color: #b52828;
        }
    </style>

@endsection
