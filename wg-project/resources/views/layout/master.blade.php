<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="{{asset('scripts/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('scripts/bootstrap/css/bootstrap.css')}}">
    <script src="{{asset('scripts/script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('css/image-box.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('/scripts/flexslider/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('/scripts/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/scripts/php/contact-form.css')}}">
    <link rel="stylesheet" href="{{asset('/scripts/jquery.fullPage.css')}}">
    <link rel="stylesheet" href="{{asset('/scripts/social.stream.css')}}">
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('skin.css')}}">

</head>
<body>
  @include('layout.nav')
  @yield('content')
  @include('layout.footer')

    <link rel="stylesheet" href="{{asset('scripts/font-awesome/css/font-awesome.min.css')}}">
    <script src="{{asset('scripts/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('scripts/jquery.tab-accordion.js')}}"></script>
    <script src="{{asset('scripts/parallax.min.js')}}"></script>
    <script src="{{asset('scripts/flexslider/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('scripts/imagesloaded.min.js')}}"></script>
    <script async src="{{asset('scripts/isotope.min.js')}}"></script>
    <script async src="{{asset('scripts/php/contact-form.js')}}"></script>
    <script async src="{{asset('scripts/jquery.progress-counter.js')}}"></script>
    <script async src="{{asset('scripts/bootstrap/js/bootstrap.popover.min.js')}}"></script>
    <script async src="{{asset('scripts/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('scripts/social.stream.min.js')}}"></script>
    <script src="{{asset('scripts/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('scripts/google.maps.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="{{asset('scripts/smooth.scroll.min.js')}}"></script>
    <script src="{{asset('scripts/jquery.fullPage.min.js')}}"></script>

  
</body>
</html>

