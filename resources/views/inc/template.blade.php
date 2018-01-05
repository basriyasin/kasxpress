<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>KasXpress @yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="{{ asset('img/favicon.png') }}" rel="icon">
        <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="{{ asset('css/google-font/google-font.css') }}" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        
        @yield('style')
    </head>

    <body>
        <!--------[ Header ]-------->
        @include('inc.header')
        <!--------[ End Of Header ]-------->
        
        @yield('jumbotron')
        
        <main id="main">
            @yield('content')
        </main>

        <!--------[ Footer ]-------->
        @include('inc.footer')
        <!--------[ End Of Footer ]-------->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>-->

        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
        <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>

        <!-- Page's Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('contactform/contactform.js') }}"></script>
        @yield('script')
        <!-- End Of Page's Javascript -->
    </body>
</html>
