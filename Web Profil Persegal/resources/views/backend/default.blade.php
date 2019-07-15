<!DOCTYPE html>
<html lang="en">
@include('backend.partials._head')
<body>
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
@include('backend.partials._navbar')
<!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->

    <!--- Sidemenu -->
@include('backend.partials._sidebar')
<!-- Sidebar -->

    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
    @yield('main')
    <!-- content -->
        <footer class="footer">© 2019 Persegal Official <span class="d-none d-sm-inline-block">- Created by Syafiq Marzuki</span>.</footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
</div>
<!-- END wrapper -->
<!-- jQuery  -->
@include('backend.partials._scripts')
</body>
</html>