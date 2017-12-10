<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('description')">
    <meta name="author" content="Nikhil Agarwal from Bloggercasts.com">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/all.css?version=1.1') }}" rel="stylesheet">
</head>
<body>



<div id="app">

    @include('include.top-banner')
    @include('include.navbar')
    @include('include.guide-navbar')

    @yield('content')

    @include('include.bottom-banner')
    @include('include.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
