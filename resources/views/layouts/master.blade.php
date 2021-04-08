<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


</head>

<body>


        <!-- Main header start -->
        @include('sections.mainheader')
        <!-- Main header end -->


        @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

</body>

</html>