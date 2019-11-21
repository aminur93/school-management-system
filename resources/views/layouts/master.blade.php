<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SMS | @yield('page')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/admins/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admins/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admins/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/admins/plugins/datatables/dataTables.bootstrap4.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="/admins/plugins/daterangepicker/daterangepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/admins/plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admins/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('layouts.header')

    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('page')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">@yield('page')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                    @yield('content')
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/admins/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/admins/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admins/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/admins/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/admins/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/admins/plugins/raphael/raphael.min.js"></script>
<script src="/admins/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/admins/plugins/jquery-mapael/maps/world_countries.min.js"></script>
<!-- ChartJS -->
<script src="/admins/plugins/chart.js/Chart.min.js"></script>
<!-- DataTables -->
<script src="/admins/plugins/datatables/jquery.dataTables.js"></script>
<script src="/admins/plugins/datatables/dataTables.bootstrap4.js"></script>

<!-- Bootstrap 4 -->
<script src="/admins/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="/admins/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="/admins/dist/js/adminlte.min.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    })
</script>

<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>
@stack('js')
</body>
</html>
