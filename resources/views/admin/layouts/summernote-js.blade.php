<script>
    $('{{$summerNoteId}}').summernote({
        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '26', '28', '30', '32', '34', '36', '38', '40', '45', '50', '75', '100', '125', '150', '175', '200'],
        lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0'],
        fontNames: ['Roboto Light', 'Roboto Regular', 'Roboto Bold', 'Thai Sans Neue Light', 'Thai Sans Neue Regular', 'Thai Sans Neue Bold', 'Open Sans','Alice serif'],
        fontNamesIgnoreCheck: ['Roboto Light', 'Roboto Regular', 'Roboto Bold', 'Thai Sans Neue Light', 'Thai Sans Neue Regular', 'Thai Sans Neue Bold', 'Alice serif'],

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
            ['insert', ['link', 'picture', 'video', 'image',  'hr']],
            ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
            ['remove', ['removeMedia']],
            ['float', ['floatLeft', 'floatRight', 'floatNone']],
            ['undo', ['undo']],
            ['redo', ['redo']],
            ['fullscreen', ['fullscreen']],
            ['codeview', ['codeview']],
            ['help', ['help']],
        ],

        styleTags: ['div','p', 'pre', 'blockquote', 'h1', 'h2', 'h3', 'h4', 'h5'],
        tableClassName: 'table table-bordered table-striped',
        height: 250,   //set editable area's height
        focus: true,
        codemirror: { // codemirror options
            lineNumbers: true,
            theme: 'monokai',
        },

    })
</script>
