<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('public') }}/images/apple-icon-180x180.png">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('public') }}/images/fevicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('public') }}/images/fevicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('public') }}/images/fevicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('public') }}/images/fevicon/favicon-16x16.png">
        <!-- <link rel="manifest" href="{{ URL::asset('public') }}/images/fevicon/manifest.json"> -->
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ URL::asset('public') }}/images/fevicon/ms-icon-144x144.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title> Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('public/admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/bootstrap/css/bootstrap-grid.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/bootstrap/css/bootstrap-reboot.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/owl.carousel/css/owl.carousel.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet"/>

    <link href="{{asset('public/admin/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin/css/parsely.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('public/dist/font/font-fileuploader.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('public/dist/jquery.fileuploader.min.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('public/admin/plugins/toastr/toastr.min.css') }}" rel="stylesheet"/>

    <link href="{{asset('public/admin/css/colors.css')}}" rel="stylesheet" id="themecolor"/>
    <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin/css/custom_style.css')}}" rel="stylesheet"/>
    <script src="{{asset('public/admin/plugins/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <link href="{{asset('public/admin/manage-menu/bs-iconpicker/css/bootstrap-iconpicker.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/jquery.datetimepicker.min.css')}}">

    <link href="{{asset('public/admin/plugins/bootstrap-table/bootstrap-table.css') }}" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet"/>
    <!-- <link href="{{asset('public/admin/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet"/> -->
    @yield('style')
</head>
<!--Body Begins-->
<body>
<!--Begin Loading-->
<div class="preloader">

</div>
<!--End Loading-->
<!--Begin wrapper-->
<div class="wrapper">
    @include('admin.layouts.sidebar')
    <!--Begin Main Panel-->
    <div class="main-panel">
        @include('admin.layouts.header')
        <!--Begin Content-->
        <div class="content">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <!--End Content-->
        @include('admin.layouts.footer')
    </div>
    <!--EndMain Panel-->
</div>
<!--End wrapper-->
</body>
<!--End Body-->
<!--   Core JS Files   -->

<script src="{{asset('public/admin/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/waitMe/waitMe.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2oRAljHGZArBeQc5OXY0MI5BBoQproWY&libraries=places"></script>
<script type="text/javascript" src="{{ URL::asset('public/dist/jquery.fileuploader.min.js') }}"></script>

<script src="{{asset('public/admin/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('public/admin/js/pvr_lite_toastr.js') }}"></script>
<!-- <script src="{{ asset('public/admin/plugins/js/toastr_default_options.js') }}"></script> -->
<script src="{{ asset('public/admin/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/owl.carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('public/admin/js/pvr_lite_ecommerce.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public') }}/admin/js/data-parsely.js"></script>
<script src="{{asset('public/admin/js/pvr_lite_app.js')}}" id="appjs"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>

<!-- <script src="{{asset('public/admin/manage-menu/bs-iconpicker/js/iconset/iconset-fontawesome-4.7.0.min.js')}}"></script> -->

<script src="{{asset('public/admin/manage-menu/bs-iconpicker/js/bootstrap-iconpicker.js')}}"></script>
<script src="{{asset('public/admin/manage-menu/jquery-menu-editor.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/jquery.datetimepicker.full.js')}}"></script>

<!-- Bootstrap Table -->
<script type="text/javascript" src="{{asset('public/admin/plugins/bootstrap-table/bootstrap-table.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/plugins/bootstrap-table/extensions/export/bootstrap-table-export.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/plugins/bootstrap-table/extensions/export/tableExport.js')}}"></script>
<script src="{{asset('public/admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<script src="{{asset('public/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Ckeditor & Ckfinder -->
<script src="{{ asset('public/admin/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{asset('public/admin/plugins/ckfinder/ckfinder.js')}}"></script>
<script src="{{asset('public/admin/plugins/jquery.repeater/jquery.repeater.js')}}"></script>
<script src="{{asset('public/admin/plugins/typeit/typeit.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('public/froala')}}/css/froala_editor.pkgd.min.css">
<script type="text/javascript" src="{{asset('public/froala')}}/js/froala_editor.pkgd.min.js"></script>

<!-- Initialize the editor. -->
<script type="text/javascript">
CKEDITOR.replace( 'editor', {
        filebrowserBrowseUrl: '{{asset("public")}}/admin/plugins/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '{{asset("public")}}/admin/plugins/ckfinder/ckfinder.html?type=Images',
        filebrowserUploadUrl: '{{asset("public")}}/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
       filebrowserImageUploadUrl: '{{asset("public")}}/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
</script>

<!-- Manage menu -->
<script>
    jQuery(document).ready(function () {
        // menu items
        var strjson = [{"href":"http://home.com","icon":"fa fa-home","text":"Home", "target": "_top", "title": "My Home"},{"icon":"fa fa-bar-chart-o","text":"Opcion2"},{"icon":"fa fa-cloud-upload","text":"Opcion3"},{"icon":"fa fa-crop","text":"Opcion4"},{"icon":"fa fa-flask","text":"Opcion5"},{"icon":"fa fa-map-marker","text":"Opcion6"},{"icon":"fa fa-search","text":"Opcion7","children":[{"icon":"fa fa-plug","text":"Opcion7-1","children":[{"icon":"fa fa-filter","text":"Opcion7-1-1"}]}]}];
        //icon picker options
        var iconPickerOptions = {searchText: 'Buscar...', labelHeader: '{0} de {1} Pags.'};
        //sortable list options
        var sortableListOptions = {
            placeholderCss: {'background-color': 'cyan'}
        };

        var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions, labelEdit: 'Edit'});
        editor.setForm($('#frmEdit'));
        editor.setUpdateButton($('#btnUpdate'));

        $('#btnReload').on('click', function () {
            editor.setData(strjson);
        });

        $('#btnOut').on('click', function () {
            var str = editor.getString();
            $("#out").text(str);
        });

        $("#btnUpdate").click(function(){
            editor.update();
        });

        $('#btnAdd').click(function(){
            editor.add();
        });
    });
    $(".datetime").datetimepicker({
        step:5,
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        minTime: 0,
        //numberOfMonths: 2,
       // showButtonPanel: true,
    });

    // enable fileuploader plugin
    $('input#picupload2').fileuploader({
    theme: 'default',
    addMore: true,
    limit: 5,
    extensions: ['jpg', 'jpeg', 'pdf', 'png'],
    files: null,
    thumbnails: {
        // thumbnails list HTML {String, Function}
        // example: '<ul></ul>'
        // example: function(options) { return '<ul></ul>'; }
        box: '<div class="fileuploader-items">' +
            '<ul class="fileuploader-items-list"></ul>' +
            '</div>',

        // append thumbnails list to selector {null, String, jQuery Object}
        // example: 'body'
        // example: $('body')
        boxAppendTo: null,

        // thumbnails item HTML {String, Function}
        // example: '<li>${name}</li>'
        // example: function(item) { return '<li>' + item.name + '</li>'; }
        item: '<li class="fileuploader-item">' +
            '<div class="columns">' +
            '<div class="column-thumbnail">${image}</div>' +
            '<div class="column-title">' +
            '<div title="${name}">${name}</div>' +
            '<span>${size2}</span>' +
            '</div>' +
            '<div class="column-actions">' +
            '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i></i></a>' +
            '</div>' +
            '</div>' +
            '<div class="progress-bar2">${progressBar}<span></span></div>' +
            '</li>',

        // thumbnails appended item HTML {String, Function}
        // example: '<li>${name}</li>'
        // example: function(item) { return '<li>' + item.name + '</li>'; }
        item2: '<li class="fileuploader-item">' +
            '<div class="columns">' +
            '<a href="${data.url}" target="_blank">' +
            '<div class="column-thumbnail">${image}</div>' +
            '<div class="column-title">' +
            '<div title="${name}">${name}</div>' +
            '<span>${size2}</span>' +
            '</div>' +
            '</a>' +
            '<div class="column-actions">' +
            '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="Download" download><i></i></a>' +
            '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i></i></a>' +
            '</div>' +
            '</div>' +
            '</li>',

        // insert the thumbnail's item at the beginning of the list? {Boolean}
        itemPrepend: false,

        // show a confirmation dialog by removing a file? {Boolean}
        // it will not be shown in upload mode by canceling an upload
        removeConfirmation: true,

        // render the image thumbnail? {Boolean}
        // if it will be false, it will generate an icon(you can also hide it with css)
        // if it will be false, you can use the API method (item.renderImage()) to render it (check thumbnails example)
        startImageRenderer: true,

        // render the images synchron {Boolean}
        // made to improve the browser speed
        synchronImages: true,

        // render the image in a canvas element {Boolea, Object}
        // if it will be true, it will generate an image with the css sizes from the parent element (.column-thumbnail)
        // you can also set the width and the height in the object
        // by default - true
        canvasImage: {
            width: null,
            height: null
        },

        // thumbnails selectors
        _selectors: {
            list: '.fileuploader-items-list',
            item: '.fileuploader-item',
            start: '.fileuploader-action-start',
            retry: '.fileuploader-action-retry',
            remove: '.fileuploader-action-remove'
        },

        // Callback fired before adding the list element
        beforeShow: function (parentEl, newInputEl, inputEl) {
            // callback will go here
        },

        // Callback fired after adding the item element
        onItemShow: function (item, listEl, parentEl, newInputEl, inputEl) {
            // callback will go here
        },

        // Callback fired after removing the item element
        // by default we will animate the removing action
        onItemRemove: function (itemEl, listEl, parentEl, newInputEl, inputEl) {
            itemEl.children().animate({'opacity': 0}, 200, function () {
                setTimeout(function () {
                    itemEl.slideUp(200, function () {
                        itemEl.remove();
                    });
                }, 100);
            });
        },

        // Callback fired after the item image was loaded
        onImageLoaded: function (itemEl, listEl, parentEl, newInputEl, inputEl) {
            // callback will go here
        },
    }

});

$(".form_datetime").datepicker({
    todayHighlight: true,
    format: "MM d, yyyy"
});
$(".date_time_pick").on("click", function () {
    $(this).prev().trigger("focus")
});
</script>
@yield('script')

</html>
