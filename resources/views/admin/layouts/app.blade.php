<!DOCTYPE html>
<html
   lang="en"
   class="light-style layout-navbar-fixed layout-menu-fixed"
   dir="ltr"
   data-theme="theme-default"
   data-assets-path="{{ asset('assets/admin/') }}"
   data-template="vertical-menu-template"
   >
   <head>
      <meta charset="utf-8" />
      <meta
         name="viewport"
         content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
         />
      <title>
         Namak Admin Panel
      </title>
      <meta
         name="description"
         content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!"
         />
      <meta
         name="keywords"
         content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5"
         />
      <!-- Canonical SEO -->
      <link
         rel="canonical"
         href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
         />
      <!-- Favicon -->
      <link
         rel="icon"
         type="image/x-icon"
         href="{{ asset('assets/admin/img/favicon/favicon.ico') }}"
         />
      <!-- Core CSS -->
      <link
         rel="stylesheet"
         href="{{asset('assets/admin/vendor/css/rtl/core.css')}}"
         class="template-customizer-core-css"
         />
      <link
         rel="stylesheet"
         href="{{ asset('assets/admin/vendor/css/rtl/theme-default.css')}}"
         class="template-customizer-theme-css"
         />
      <link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css')}}" />
      <!-- Vendors CSS -->
      <link
         rel="stylesheet"
         href="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
         />
      <link
         rel="stylesheet"
         href="{{ asset('assets/admin/vendor/libs/typeahead-js/typeahead.css') }}"
         />
      <link
         rel="stylesheet"
         href="{{ asset('assets/admin/vendor/libs/apex-charts/apex-charts.css') }}"
         />
      <!-- Page CSS -->
      <link
         rel="icon"
         type="image/x-icon"
         href="{{asset('assets/admin/img/favicon/favicon.ico')}}"/>
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
         rel="stylesheet"
         />
      <!-- Icons -->
      <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/boxicons.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/fontawesome.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/flag-icons.css')}}" />
      <!-- Core CSS -->
      <link
         rel="stylesheet"
         href="{{asset('assets/admin/vendor/css/rtl/core.css')}}"
         class="template-customizer-core-css"
         />
      <link
         rel="stylesheet"
         href="{{asset('assets/admin/vendor/css/rtl/theme-default.css')}}"
         class="template-customizer-theme-css"
         />
      <link rel="stylesheet" href="{{asset('assets/admin/css/demo.css')}}" />
      <!-- Vendors CSS -->
      <link
         rel="stylesheet"
         href="{{asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"
         />
      <link
         rel="stylesheet"
         href="{{asset('assets/admin/vendor/libs/typeahead-js/typeahead.css')}}"
         />
      <link
         rel="stylesheet"
         href="{{asset('assets/admin/vendor/libs/apex-charts/apex-charts.css')}}"
         />
      @stack('css')
      <!-- Page CSS -->
      <!-- Helpers -->
      <script src="{{asset('assets/admin/vendor/js/helpers.js')}}"></script>
      <script src="{{asset('assets/admin/js/config.js')}}"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script
         async="async"
         src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"
         ></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
           dataLayer.push(arguments);
         }
         gtag("js", new Date());
         gtag("config", "GA_MEASUREMENT_ID");
      </script>
      <!-- Custom notification for demo -->
      <!-- beautify ignore:end -->
   </head>
   <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
         <div class="layout-container">
            <!-- Menu -->
            <!-- End f Sidebar --> 
            @include('admin.layouts.sidebar')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
               <!-- Navbar -->
               @include('admin.layouts.navbar')
               <!-- / Navbar -->
               <!-- Content wrapper -->
               <div class="content-wrapper">
                  <div class="container-xxl flex-grow-1 container-p-y">
                     @yield('content')
                  </div>
                  <!-- / Content -->
               </div>
               <!-- Footer -->
               @include('admin.layouts.footer')
               <!-- / Footer -->
               <div class="content-backdrop fade"></div>
            </div>
            <!-- / Layout page -->
         </div>
         <!-- Overlay -->
         <div class="layout-overlay layout-menu-toggle"></div>
         <!-- Drag Target Area To SlideIn Menu On Small Screens -->
         <div class="drag-target"></div>
      </div>
      <!-- / Layout wrapper -->
      <!-- Core JS -->
      <script src="{{ asset('assets/admin/vendor/libs/jquery/jquery.js') }}"></script>
      <script src="{{ asset('assets/admin/vendor/libs/popper/popper.js') }}"></script>
      <script src="{{ asset('assets/admin/vendor/js/bootstrap.js') }}"></script>
      <script src="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
      <script src="{{ asset('assets/admin/vendor/libs/hammer/hammer.js') }}"></script>
      <script src="{{ asset('assets/admin/vendor/libs/typeahead-js/typeahead.js') }}"></script>
      <script src="{{ asset('assets/admin/vendor/js/menu.js') }}"></script>
      <!-- endbuild -->
      <!-- Vendors JS -->
       @stack('js')
      
     
      <!-- Main JS -->
 
      <script src="{{ asset('assets/admin/js/main.js') }}"></script>
      <!-- Page JS -->
      <script src="{{ asset('assets/admin/js/dashboards-analytics.js') }}"></script>
   </body>
</html>