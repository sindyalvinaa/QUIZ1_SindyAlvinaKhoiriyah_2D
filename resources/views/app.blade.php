<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{assets('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{assets('/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{assets('/css/templatemo-art-factory.css')}}">
    <link rel="stylesheet" type="text/css" href="{{assets('/css/owl-carousel.css')}}">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    @include('navbar')
    @yield('content')

    @include('footer')

    <!-- jQuery -->
    <script src="{{assets('/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{assets('/js/popper.js')}}"></script>
    <script src="{{assets('/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{assets('/js/owl-carousel.js')}}"></script>
    <script src="{{assets('/js/scrollreveal.min.js')}}"></script>
    <script src="{{assets('/js/waypoints.min.js')}}"></script>
    <script src="{{assets('/js/jquery.counterup.min.js')}}"></script>
    <script src="{{assets('/js/imgfix.min.js')}}"></script>
    yield
    <!-- Global Init -->
    <script src="{{assets('/js/custom.js')}}"></script>
@yield('js')
  </body>
</html>

