<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="{{asset('layout/scripts/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('layout/scripts/bootstrap/css/bootstrap.css')}}">
    <script src="{{asset('layout/scripts/script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('layout/style.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/image-box.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('layout/scripts/flexslider/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('layout/scripts/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('layout/scripts/php/contact-form.css')}}">
    <link rel="stylesheet" href="{{asset('layout/scripts/social.stream.css')}}">
    <link rel="stylesheet" href="{{asset('skin.css')}}">
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    @yield('fullpage')
</head>
<body>
  @include('layout.nav')
  @yield('content')
  @include('layout.footer')

  <link rel="stylesheet" href="{{asset('layout/scripts/font-awesome/css/font-awesome.css')}}">
  <script async src="{{asset('layout/scripts/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('layout/scripts/imagesloaded.min.js')}}"></script>
  <script src="{{asset('layout/scripts/parallax.min.js')}}"></script>
  <script src="{{asset('layout/scripts/flexslider/jquery.flexslider-min.js')}}"></script>
  <script async src="{{asset('layout/scripts/isotope.min.js')}}"></script>
  <script async src="{{asset('layout/scripts/php/contact-form.js')}}"></script>
  <script async src="{{asset('layout/scripts/jquery.progress-counter.js')}}"></script>
  <script async src="{{asset('layout/scripts/jquery.tab-accordion.js')}}"></script>
  <script async src="{{asset('layout/scripts/bootstrap/js/bootstrap.popover.min.js')}}"></script>
  <script async src="{{asset('layout/scripts/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('layout/scripts/social.stream.min.js')}}"></script>
  <script src="{{asset('layout/scripts/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('layout/scripts/smooth.scroll.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>


  @yield('script')
  @yield('additional_scripts')
</body>
</html>

