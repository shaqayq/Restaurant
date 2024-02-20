<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/admin/assets/images/favicon.svg') }}" type="image/x-icon">

</head>
<body>
<div id="app">
@include('admin.layouts.sidebar')
<div id="main">
@include('admin.layouts.navbar')
<div class="main-content container-fluid">
   @yield('content')
</div>

          @include('admin.layouts.footer')
        </div>
    </div>
    <script src="{{ asset('assets/admin/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/app.js') }}"></script>

    <script src="{{ asset('assets/admin/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>
    @stack('js')
</body>
</html>
