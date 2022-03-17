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
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/templatemo-art-factory.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/owl-carousel.css')}}">

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
    <script src="{{asset('/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('/js/popper.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('/js/owl-carousel.js')}}"></script>
    <script src="{{asset('/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('/js/waypoints.min.js')}}"></script>
    <script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/js/imgfix.min.js')}}"></script>
    yield
    <!-- Global Init -->
    <script src="{{asset('/js/custom.js')}}"></script>
@yield('js')
  </body>
</html>

