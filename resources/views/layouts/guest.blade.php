<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fixed dark">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="author" content="vinhgiang.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" />

    @livewireStyles

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.js') }}" defer></script>

    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery-cookie/jquery.cookie.js') }}" defer></script>
    <script src="{{ asset('vendor/popper/umd/popper.min.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" defer></script>
    <script src="{{ asset('vendor/common/common.js') }}" defer></script>
    <script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}" defer></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}" defer></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('js/theme.js') }}" defer></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/theme.init.js') }}" defer></script>
</head>
<body>

    <!-- start: page -->
    {{ $slot }}
    <!-- end: page -->

    @livewireScripts
    <script src="//cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" ></script>

    @yield('js')
</body>
</html>
