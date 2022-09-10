<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FANN.SHOES</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="shortcut icon" href="{{url('public/admin')}}/dist/img/logoweb.png" type="image/x-icon" >
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">

  @stack('style')
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.section.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('template.utils.notif')
        </div>
      </div>
    </div>
    @yield('content')
  </div>

    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  @include('template.section.sidebar')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>

  </aside>
  <!-- /.control-sidebar -->
  @include('template.section.footer')
  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<!-- jQuery -->
<script src="{{ url('public/admin') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('public/admin') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ url('public/admin') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ url('public/admin') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ url('public/admin') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('public/admin') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ url('public/admin') }}/plugins/moment/moment.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('public/admin') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ url('public/admin') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/admin') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('public/admin') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('public/admin') }}/dist/js/pages/dashboard.js"></script>

<script src="{{ url('public/admin') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('public/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/admin') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
  @stack('script')

<script src="{{ url('public/admin') }}/dist/js/demo.js"></script>
<script>
  $(".table-datatable").DataTable();
</script>
</body>
</html>