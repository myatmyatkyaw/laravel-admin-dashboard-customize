<!DOCTYPE html>
<html lang="en">
<head>
  @extends('dashboard.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTELogo" height="60" width="60">
  </div>
 
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
 
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
 
    </ul>
  </nav>
  <!-- /.navbar -->
 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
 
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
 
    @extends('dashboard.footer')
 
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 
<!-- jQuery -->
<script src="{{ asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- ChartJS -->
<script src="{{ asset("plugins/chart.js/Chart.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{ asset("plugins/sparklines/sparkline.js")}}"></script>
<!-- JQVMap -->
<script src="{{ asset("plugins/jqvmap/jquery.vmap.min.js")}}"></script>
<script src="{{ asset("plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset("plugins/jquery-knob/jquery.knob.min.js")}}"></script>
<!-- daterangepicker -->
<script src="{{ asset("plugins/moment/moment.min.js")}}"></script>
<script src="{{ asset("plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- Summernote -->
<script src="{{ asset("plugins/summernote/summernote-bs4.min.js")}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("dist/js/adminlte.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("dist/js/demo.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("dist/js/pages/dashboard.js")}}"></script>
</body>
</html>