<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')-{{ config('app.name', 'Home') }}</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Merriweather%3A400%2C700%2C900%2C400italic%2C700italic%2C900italic%7CMontserrat%3A400%2C700%7CInconsolata%3A400&amp;subset=latin%2Clatin-ext' id='twentysixteen-fonts-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/genericons/genericons5589.css')}}' id='genericons-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/css/bootstrap.min33c5.css?ver=4.6.14')}}' id='MyStyle-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/css/animate33c5.css?ver=4.6.14')}}' id='MyStyle2-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/css/owl.carousel33c5.css?ver=4.6.14')}}' id='MyStyle3-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/css/owl.theme.default33c5.css?ver=4.6.14')}}' id='MyStyle4-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/css/calendar33c5.css?ver=4.6.14')}}' id='MyStyle5-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/css/style33c5.css?ver=4.6.14')}}' id='MyStyle6-css' media='all' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C600%2C700&amp;ver=4.6.14' id='MyFonts-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/css/font-awesome.min33c5.css?ver=4.6.14')}}' id='MyStyle7-css' media='all' rel='stylesheet' type='text/css'>
    <link href='{{asset('public/assets/frontend/style33c5.css?ver=4.6.14')}}' id='MyStyle8-css' media='all' rel='stylesheet' type='text/css'>
    <link href="{{asset('public/assets/frontend/images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">

    @stack('css')
</head>


@include('layouts.frontend.partial.header')



@yield('content')


@include('layouts.frontend.partial.footer')


<script type='text/javascript'>
</script>
<script src='{{asset('public/assets/frontend/js/skip-link-focus-fix8de4.js?ver=20160816')}}' type='text/javascript'>
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var screenReaderText = {"expand":"expand child menu","collapse":"collapse child menu"};
    /* ]]> */
</script>
<script src='{{asset('public/assets/frontend/js/functions8de4.js?ver=20160816')}}' type='text/javascript'>
</script>
<script src='{{asset('public/assets/frontend/js/jquery.min7d12.js?ver=18102016')}}' type='text/javascript'>
</script>
<script src='{{asset('public/assets/frontend/js/bootstrap.min7d12.js?ver=18102016')}}' type='text/javascript'>
</script>
<script src='{{asset('public/assets/frontend/js/owl.carousel7d12.js?ver=18102016')}}' type='text/javascript'>
</script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDW5CZSttxrSAc8RBzDo2D2CalRJbAlQZ8&amp;ver=18102016' type='text/javascript'>
</script>
<script src='{{asset('public/assets/frontend/js/wow.min7d12.js?ver=18102016')}}' type='text/javascript'>
</script>
<script src='{{asset('public/assets/frontend/js/calendar.min7d12.js?ver=18102016')}}' type='text/javascript'>
</script>
<script src='{{asset('public/assets/frontend/js/jquery.nicescroll.min7d12.js?ver=18102016')}}' type='text/javascript'>
</script>
<script src='{{asset('public/assets/frontend/js/script7d12.js?ver=18102016')}}' type='text/javascript'>
</script>

@stack('js')

</body>
</html>
