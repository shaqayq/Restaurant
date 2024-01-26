<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/adminto_1.4/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 10:24:01 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
          <!-- App Favicon -->
        <link href="https://img.freepik.com/premium-vector/salt-icon-logo-vector-design-template_827767-410.jpg" rel="icon">

        <title>Namak Admin Dashboard</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/morris/morris.css') }}">

        <!-- App css -->
         <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/admin/css/core.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/admin/css/components.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/admin/css/pages.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/admin/css/menu.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />

         @stack('css')
         @stack('scripts')
        <script src="{{ asset('assets/admin/js/modernizr.min.js') }}"></script>
         <script>
         (function (i, s, o, g, r, a, m) {
               i['GoogleAnalyticsObject'] = r;
               i[r] = i[r] || function () {
                           (i[r].q = i[r].q || []).push(arguments)
                     }, i[r].l = 1 * new Date();
               a = s.createElement(o),
                     m = s.getElementsByTagName(o)[0];
               a.async = 1;
               a.src = g;
               m.parentNode.insertBefore(a, m)
         })(window, document, 'script', 'www.google-analytics.com/analytics.js', 'ga');
         ga('create', 'UA-74137680-1', 'auto');
         ga('send', 'pageview');
      </script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('admin.layouts.navbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.layouts.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                   @yield('content')
                    <!-- container -->

                </div> <!-- content -->

               @include('admin.layouts.footer')

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            @include('admin.layouts.rightSidebar')
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
      <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/admin/js/detect.js') }}"></script>
      <script src="{{ asset('assets/admin/js/fastclick.js') }}"></script>
      <script src="{{ asset('assets/admin/js/jquery.blockUI.js') }}"></script>
      <script src="{{ asset('assets/admin/js/waves.js') }}"></script>
      <script src="{{ asset('assets/admin/js/jquery.nicescroll.js') }}"></script>
      <script src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>
      <script src="{{ asset('assets/admin/js/jquery.scrollTo.min.js') }}"></script>

      <script src="{{ asset('assets/admin/plugins/jquery-knob/jquery.knob.js') }}"></script>

      <!-- Morris Chart-->
      <script src="{{ asset('assets/admin/plugins/morris/morris.min.js') }}"></script>
      <script src="{{ asset('assets/admin/plugins/raphael/raphael-min.js') }}"></script>

      <!-- Dashboard init -->
      <script src="{{ asset('assets/admin/pages/jquery.dashboard.js') }}"></script>

      <!-- App js -->
      <script src="{{ asset('assets/admin/js/jquery.core.js') }}"></script>
      <script src="{{ asset('assets/admin/js/jquery.app.js') }}"></script>

         @stack('js')
    </body>

<!-- Mirrored from coderthemes.com/adminto_1.4/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 10:26:33 GMT -->
</html>