<!-- jQuery -->
<script src="{{asset('public/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/admin/dist/js/adminlte.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset ('/public/admin/plugins/summernote/summernote-bs4.js')}}"></script>
<link rel="stylesheet"
      href="<?php echo asset('/public/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css');?>">
<script
    src="<?php echo asset('/public/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js');?>"></script>
<script>
    $(function () {
        // Summernote
        function summernoteLoad(classOrIDName = '#compose-textarea') {
            let alice = 'Alice';
            $(classOrIDName).summernote({
                fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '26', '28', '30', '32', '34', '36', '38', '40', '45', '50', '75', '100', '125', '150', '175', '200'],
                lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0'],
                fontNames: ['Roboto Light', 'Roboto Regular', 'Roboto Bold', 'Thai Sans Neue Light', 'Thai Sans Neue Regular', 'Thai Sans Neue Bold', 'Open Sans', alice],
                fontNamesIgnoreCheck: ['Roboto Light', 'Roboto Regular', 'Roboto Bold', 'Thai Sans Neue Light', 'Thai Sans Neue Regular', 'Thai Sans Neue Bold', alice],

                image: [
                    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['remove', ['removeMedia']]
                ],
                link: [
                    ['link', ['linkDialogShow', 'unlink']]
                ],

                air: [
                    ['color', ['color']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['para', ['ul', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']]
                ],

                toolbar: [
                    // [groupName, [list of button]]
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    //['fontsizeunit', ['fontsizeunit']],
                    ['fontsizeunit', ['fontsizeunit']],
                    ['styleTags', ['pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6']],
                    ['style', ['style', 'code']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'image', 'hr']],
                    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                    ['remove', ['removeMedia']],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['undo', ['undo']],
                    ['redo', ['redo']],
                    ['fullscreen', ['fullscreen']],
                    ['codeview', ['codeview']],
                    ['help', ['help']],
                ],

                styleTags: ['div', 'p', 'pre', 'blockquote', 'h1', 'h2', 'h3', 'h4', 'h5'],
                tableClassName: 'table table-bordered table-striped',
                height: 250,   //set editable area's height
                focus: true,
                codemirror: { // codemirror options
                    lineNumbers: true,
                    theme: 'monokai',
                },

            })
        }

        summernoteLoad();
        summernoteLoad('.compose-textarea-summernote')
    })

    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
</script>
<script>
    function loadColorPicker(id) {
        $(id).colorpicker()
        $(id).on('colorpickerChange', function (event) {
            $(id + ' .fa-square').css('color', event.color.toString());
        });
    }
</script>





