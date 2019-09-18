<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url('/') }}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Coderthemes">
    <title>SB Admin 2 - Bootstrap Admin Theme Modify by Saimok</title>
    <!-- Bootstrap Core CSS -->
    @include('layouts.inc-stylesheet')
    @yield('stylesheet')
</head>

<body>
    <div class="wrapper">
        <!-- START LEFT MENU -->
        <div class="left-side-menu left-side-menu-light">
            @include('layouts.inc-left-sidebar')
        </div>
        <!-- END LEFT MENU -->
        <div class="content-page">
            <div class="content">
                <!-- START TOPBAR -->
                <div class="navbar-custom">
                    @include('layouts.inc-header')
                </div>
                <!-- END TOPBAR -->
                <!-- START CONTENT-->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- START FOOTER -->
            <footer class="footer">
                @include('layouts.inc-footer')
            </footer>
            <!-- END FOOTER -->
        </div>
    </div>
    @include('layouts.inc-scripts')
    @yield('scripts')
</body>
</html>