<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roiyall Coffee</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/Admin_css/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/Admin_css/dist/css/adminlte.min.css') }}">
    @stack('style')
</head>

<body class="hold-transition sidebar-mini">
@include('sweetalert::alert')

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('StrukturAdmin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Roiyall Coffee</span>
            </a>

            <!-- Sidebar -->
            @include('StrukturAdmin.sidebar')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@yield('subtitle')</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>Category</h3>
                                                <p>Category</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-regular fa-house fa-beat"></i>
                                            </div>
                                            <a href="/category" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>Menu</h3>
                                                <p>Menu</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-person-add"></i>
                                            </div>
                                            <a href="/post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3>Pesanan</h3>
                                                <p>Pesanan</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-pie-graph"></i>
                                            </div>
                                            <a href="{{ route('all.pesanan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>Daftar Penjualan</h3>
                                                <p>Daftar Penjualan</p>
                                            </div>
                                                <a href="/admin/sale" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- /.row -->
                                <!-- Main row -->
                                <!-- /.row (main row) -->
                            </div>
                        </section>

                    </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Designed by Kelompok 05 PA 2024 </strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/Admin_css/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/Admin_css/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/Admin_css/dist/js/adminlte.min.js') }}"></script>
    @stack('script')
</body>

</html>