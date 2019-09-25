<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Stylesheets -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('public/assets/backend/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('public/assets/backend/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('public/assets/backend/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Light Gallery Plugin Css -->
{{--    <link href="{{asset('public/assets/backend/plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet">--}}

    <!-- Morris Chart Css-->
    <link href="{{asset('public/assets/backend/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('public/assets/backend/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('public/assets/backend/css/themes/all-themes.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('css')

</head>
<body class="theme-blue">


<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
@include('layouts.backend.topbar')
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    @include('layouts.backend.leftsidebar')
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    @yield('content')
</section>


<!-- Jquery Core Js -->
<script src="{{asset('public/assets/backend/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('public/assets/backend/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('public/assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('public/assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('public/assets/backend/plugins/node-waves/waves.js')}}"></script>

{{--ckeditor--}}
<script src="{{ asset('public/assets/backend/plugins/ckeditor/ckeditor.js') }}"></script>

<!-- TinyMCE -->
{{--<script src="{{ asset('public/assets/backend/plugins/tinymce/tinymce.js') }}"></script>--}}

{{--<!-- Light Gallery Plugin Js -->--}}
{{--<script src="{{ asset('public/assets/backend/plugins/light-gallery/js/lightgallery-all.js') }}"></script>--}}

{{--<!-- Custom Js -->--}}
{{--<script src="{{ asset('public/assets/backend/js/pages/medias/image-gallery.js') }}"></script>--}}

<!-- Custom Js -->
<script src="{{asset('public/assets/backend/js/admin.js')}}"></script>
<script src="{{ asset('public/assets/backend/js/pages/forms/editors.js') }}"></script>


<!-- Demo Js -->
<script src="{{asset('public/assets/backend/js/demo.js')}}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error('{{ $error }}','Error',{
                closeButton:true,
                progressBar:true,
    }       );
        @endforeach
    @endif
</script>



@stack('js')


</body>
</html>
