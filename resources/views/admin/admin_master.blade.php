<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="" name="Software development Company, Application Development">
    {{-- <meta name="viewport" content="width=device-width"> --}}
    <meta name="google-site-verification" content="JOJUuUXCBtdHTk1KtRb76Zb9_C4fLqENqwEWpDw7Q-A" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('assets/img/index/logo/favicon-2.png')}}" rel="icon">

    <title>Webito Infotech</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <link href="css\app.css" rel="stylesheet"> --}}

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

        @include('admin.body.header')
        @include('admin.body.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('admin')
        {{-- @yield('testimonilasContain') --}}
        <!-- /.content-wrapper -->

        @include('admin.body.footer')

        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->


    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>


    <!-- Sunny Admin App -->
    <script src="{{ asset('backend/js/template.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>
