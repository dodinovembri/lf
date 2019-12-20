<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('tmp/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tmp/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('tmp/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tmp/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tmp/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('tmp/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('tmp/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('tmp/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('tmp/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('tmp/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('tmp/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('tmp/css/style.css') }}">
            
</head>
<body>
<!--     <div id="app">
        <main class="py-4"> -->
            @yield('content')
      <!--   </main>
    </div> -->

    <script src="{{ asset('tmp/js/jquery.min.js') }}"></script>
    <script src="{{ asset('tmp/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('tmp/js/popper.min.js') }}"></script>
    <script src="{{ asset('tmp/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tmp/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('tmp/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('tmp/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('tmp/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('tmp/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('tmp/js/aos.js') }}"></script>
    <script src="{{ asset('tmp/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('tmp/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('tmp/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('tmp/js/google-map.js') }}"></script>
    <script src="{{ asset('tmp/js/main.js') }}"></script>
</body>
</html>
