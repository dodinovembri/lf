<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome !!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <link rel="stylesheet" href="{{ asset('tmp/css/style2.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body class="goto-here">
    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('tmp/images/bg_6.jpg') }});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Hai !!!</a></span> <span></span></p>
            <h1 class="mb-0 bread">Selamat Datang</h1>            
            <form method="POST" action="{{ route('search') }}">
              @csrf
              <a href=""><span id="icon"><i class="fa fa-search"></i></span></a>
              <input class="btn btn-primary py-3 px-4" name="shop_id" id="input" placeholder="Masukkan Nama Toko Langganan Anda">
              <button type="submit"></button>
            </form>
          </div>
        </div>
      </div>
    </div>

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