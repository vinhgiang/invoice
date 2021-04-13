<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fixed dark" data-style-switcher-options="{'backgroundColor': 'dark'}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>4S Invoice System</title>

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" />

    @livewireStyles

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>

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

    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.js') }}" defer></script>
    <script src="{{ asset('vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery-appear/jquery.appear.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap-multiselect/js/bootstrap-multiselect.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}" defer></script>
    <script src="{{ asset('vendor/flot/jquery.flot.js') }}" defer></script>
    <script src="{{ asset('vendor/flot.tooltip/jquery.flot.tooltip.js') }}" defer></script>
    <script src="{{ asset('vendor/flot/jquery.flot.pie.js') }}" defer></script>
    <script src="{{ asset('vendor/flot/jquery.flot.categories.js') }}" defer></script>
    <script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery-sparkline/jquery.sparkline.js') }}" defer></script>
    <script src="{{ asset('vendor/raphael/raphael.js') }}" defer></script>
    <script src="{{ asset('vendor/morris/morris.js') }}" defer></script>
    <script src="{{ asset('vendor/gauge/gauge.js') }}" defer></script>
    <script src="{{ asset('vendor/snap.svg/snap.svg.js') }}" defer></script>
    <script src="{{ asset('vendor/liquid-meter/liquid.meter.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/jquery.vmap.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/data/jquery.vmap.sampledata.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/maps/jquery.vmap.world.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}" defer></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}" defer></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('js/theme.js') }}" defer></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/theme.init.js') }}" defer></script>
    <!-- Examples -->
    <script src="{{ asset('js/examples/examples.dashboard.js') }}" defer></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('img/logo/4s-logo.jpg') }}" height="35" alt="Porto Admin" />
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">
                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="https://ui-avatars.com/api/?name=John+Doe" alt="Joseph Doe" class="rounded-circle" data-lock-picture="https://ui-avatars.com/api/?name=John+Doe" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">Administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a class="nav-link" href="/">
                                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>
                </div>
            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Dark Layout</h2>

                    <div class="right-wrapper text-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="bx bx-home-alt"></i>
                                </a>
                            </li>
                            <li><span>Layouts</span></li>
                            <li><span>Dark</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" {{--data-open="sidebar-right"--}}>{{--<i class="fas fa-chevron-left"></i>--}}</a>
                    </div>
                </header>

                <!-- start: page -->
                {{ $slot }}
                <!-- end: page -->
            </section>
        </div>
    </section>

    @livewireScripts
    <script src="//cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" ></script>

    @yield('js')

</body>
</html>
