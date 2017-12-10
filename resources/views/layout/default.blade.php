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
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- Fresh Chat -->
    <script src="https://wchat.freshchat.com/js/widget.js"></script>
</head>
<body>

<div id="app">
    @include('include.navbar')
    @yield('content')
    @include('include.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- Fresh Chat -->
<script>
    window.fcWidget.init({
        token: "5ba382cd-d589-4aec-bc90-f9a11d777403",
        host: "https://wchat.freshchat.com"
    });
</script>

</body>
</html>
