<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin ngalamkurir.ID</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/motorbike.png') }}">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- jvectormap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <!-- notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
    <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/wave/waves.min.css') }}">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
    ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

    @livewireStyles
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    @include('layouts.partial.header')
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    @include('layouts.partial.mobilemenu')
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    @include('layouts.partial.mainmenu')
    <!-- Main Menu area End-->
    {{ $slot }}

    @include('layouts.partial.footer')
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->

    <!-- End Footer area-->
    <!-- jquery
    ============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow JS
    ============================================ -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="{{ asset('js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- jvectormap JS
    ============================================ -->
    <script src="{{ asset('js/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('js/jvectormap/jvectormap-active.js') }}"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/sparkline/sparkline-active.js') }}"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="{{ asset('js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('js/flot/flot-active.js') }}"></script>
    <!-- knob JS
    ============================================ -->
    <script src="{{ asset('js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('js/knob/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/knob/knob-active.js') }}"></script>
    <!--  wave JS
    ============================================ -->
    <script src="{{ asset('js/wave/waves.min.js') }}"></script>
    <script src="{{ asset('js/wave/wave-active.js') }}"></script>
    <!--  todo JS
    ============================================ -->
    <script src="{{ asset('js/todo/jquery.todo.js') }}"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!--  Chat JS
    ============================================ -->
    <script src="{{ asset('js/chat/moment.min.js') }}"></script>
    <script src="{{ asset('js/chat/jquery.chat.js') }}"></script>
    <!-- main JS
    ============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- tawk chat JS
    ============================================ -->
    <script src="{{ asset('js/tawk-chat.js') }}"></script>


    @stack('jsdashboard')
    @livewireScripts
</body>

</html>
