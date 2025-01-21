<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roiyall Coffee</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                <img src="/images/logo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
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
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                <h4><i class="fa fa-calendar"></i> &nbsp;<?php echo date('l - d F Y'); ?></h4>

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
    <form action="/post/{{$post->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="name" value="{{$post->name}}" class="form-control">
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
    <label>Deskripsi Hidangan</label>
    <textarea name="description" class="form-control">{{$post->description}}</textarea>
  </div>
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
    <label>Harga</label>
    <input type="number" name="price" class="form-control" step="0.01" value="{{$post->price}}">
    </div>
    @error('price')
    <div class="alert alert-danger">{{ $message }} {{$post->description}}</div>
    @enderror

    <div class="form-group">
    <label>Thumbnail</label>
    <input type="file" name="gambar" class="form-control">
    </div>
    @error('gambar')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

<div class="form-group">
    <label>Kategori</label>
    <select name="category_id" class="form-control" id="">
        <option value="">---pilih kategori--</option>
        @forelse($category as $item)
            @if($item->id === $post->category_id)
                <option value="{{$item->id}}"selected> {{$item->name}}</option>
            @else
                <option value="{{$item->id}}"> {{$item->name}}</option>
            @endif
            <option value="{{$item->id}}"> {{$item->name}}</option>
        @empty
            <option value="">Tidak ada kategori</option>
        @endforelse
        </select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                    <!-- /.card-body -->
                    <!-- /.card-footer-->

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
