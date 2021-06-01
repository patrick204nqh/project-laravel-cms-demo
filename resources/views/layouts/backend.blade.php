
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Nguyen Quang Huy">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/backend/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CSS -->
    <link href="{{ asset('assets/backend/font-awesome/css/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN CSS for this page -->
    @yield('css')
    <!-- END CSS for this page -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/custom.css') }}" />
</head>

<body class="adminbody">

    <div id="main">
        <div class="headerbar">
            @include('partials.backend.header.left_headerbar')
            @include('partials.backend.header.top_navbar')
        </div>

        <div class="left main-sidebar">
            @include('partials.backend.sidebar.left_sidebar')
        </div>

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                @yield('content')
                </div>
            </div>
        </div>

        <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="#">CRM SYSTEM</a>
            </span>
            <span class="float-right">
                Powered by <a target="_blank" href="https://github.com/nguyenquanghuy-hdws/laravel-cms-demo" title="My Github repo"><b>huy.nguyenquang@hdwebsoft.co</b></a>
            </span>
        </footer>

        <script src="{{ asset('assets/backend/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/moment.min.js') }}"></script>

        <script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/backend/js/detect.js') }}"></script>
        <script src="{{ asset('assets/backend/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/backend/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/backend/js/jquery.nicescroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/backend/js/admin.js') }}"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="{{ asset('assets/backend/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/datatables/datatables.min.js') }}"></script>

    <!-- Counter-Up-->
    <script src="{{ asset('assets/backend/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/counterup/jquery.counterup.min.js') }}"></script>

    <!-- dataTabled data -->
    <script src="{{ asset('assets/backend/data/data_datatables.js') }}"></script>

    <!-- Charts data -->
    @yield('js')
    <!-- END Java Script for this page -->
    <script src="{{ asset('assets/backend/js/custom.js') }}"></script>

</body>

</html>
