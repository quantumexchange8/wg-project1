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
    <link rel="stylesheet" href="{{asset('scripts/flexslider/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
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

</body>
</html>

