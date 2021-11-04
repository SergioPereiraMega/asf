<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

    <!-- Openlayers Maps CSS-->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/css/ol.css" type="text/css">

    <!-- Favicon Agronegocios San Francisco -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('img/favicon-32x32.png') }}">
    <!-- <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" type="image/x-icon" href="img/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital@1&display=swap" rel="stylesheet">
    <!-- Openlayers Maps JS-->
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/build/ol.js"></script>
</head>

<body>

    <!-- Main header start -->
    @include('sections.mainheader')
    <!-- Main header end -->


    @yield('content')

    <!-- Footer start -->
    @include('sections.footer')
    <!-- Footer end -->


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>