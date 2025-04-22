<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'ShilpFab') }}</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('public/front/images/logo.png') }}" type="image/x-icon">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('css')

    <!-- Styles -->
    @include('front.layouts.headerscript')
</head>

<body>
    @yield('content')
</body>

@include('front.layouts.footerscript')
@yield('scripts')

</html>
