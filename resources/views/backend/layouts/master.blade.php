
<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo" data-framework="laravel" data-template="vertical-menu-laravel-template-free">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 04:55:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5, bootstrap 5 free, free admin template">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="KWXCIiTCDP60Dl7rqFBAiHEstGYhMqyvnYwfZNSL">
  <!-- Canonical SEO -->
  <title>
      @yield('title')
  </title>
  @include('backend.layouts.header')


<body>
  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

  @include('backend.layouts.sideber')
    

    <!-- Layout page -->
    <div class="layout-page">
      <!-- BEGIN: Navbar-->
      <!-- Navbar -->
      @include('backend.layouts.nav')
      <!-- Content wrapper -->
      <div class="content-wrapper">

      @yield('content')

      </div>
      <!-- / Content -->

      <!-- Footer -->
      @include('backend.layouts.footer')
                    <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->

  

  

  @include('backend.layouts.script')
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 04:55:45 GMT -->
</html>


