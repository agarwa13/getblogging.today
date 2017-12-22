<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('include.head-section')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMQTSDS"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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

@yield('scripts')

</body>
</html>