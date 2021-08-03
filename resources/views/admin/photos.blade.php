<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Garry's Mod Indonesia</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset ('assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('assets/css/adminlte/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- CSS.gg Icon -->
  <link href="{{ asset('assets/css/btn-css.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Table CSS -->
  <link href="{{ asset ('assets/css/table-css.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.dashboard') }}"><h2 id="nav-title">GARRY'S MOD INDONESIA</h2></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a href="{{ route('auth.logout') }}"><button class="logout-btn button touch">Logout
        </button></a>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('assets/images/gmilogo/gmi_recreate.png') }}" alt="GMI Logo" class="brand-image elevation-5" style="opacity: .8">
      <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <p>Hello,</p>
            @foreach ($admin as $admin)
              <a href="#" class="d-block">{{ $admin->name }}</a>
            @endforeach
        </div>
      </div>

      @include('admin/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      @if(Session::get('Successful'))
        <div class="alert alert-success">
          {{ Session::get('Successful') }}
        </div>
      @endif
      @if(Session::get('Fail'))
        <div class="alert alert-danger">
          {{ Session::get('Fail') }}
        </div>
      @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 h1-title" style="font-size: 60px;font-family: Nunito;">Galleries</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" style="color: white; font-size: 20px;font-weight: bold;font-family: Nunito;">Home</a></li>
              <li class="breadcrumb-item active" style="font-size: 20px;color: #edc124;font-weight: bold;font-family: Nunito;">Galleries</li>
              <br>
            </ol>
          </div><!-- /.col -->
        </div>
            <!-- Photo Table -->
          <!-- Add New Button -->
          <div class="card-body bg-custom-1 rounded mt-5">
            <div class="row" style="margin-left: 10px;margin-right: 10px;">
              <div class="col-sm-10">
              <h1 class="m-0 h1-title" style="font-size: 30px;font-family: Nunito;color: white;">Photo</h1>
              </div>
              <div class="col-sm-2"><a class="button primary new addnew-btn" href="{{ route('admin.upload_photos') }}" style="font-family: inherit; font-weight: bold;font-family: Nunito;">Add New</a></div>
              <!-- End of Button -->
              <!-- Table -->
              <table>
                <thead>
                  <tr class="table100-head">
                    <th class="column1">#</th>
                    <th class="column2">Title</th>
                    <th class="column2">Types</th>
                    <th class="column2">Gamemodes</th>
                    <th class="column4">Gambar</th>
                    <th class="column5">Last Update</th>
                    <th class="column6">Actions</th>
                  </tr>
                </thead>
                      <tbody>
                      @foreach ($photo as $photos)
                        <tr class="table100-body">
                          <td class="column1">{{ $loop->iteration }}</td>
                          <td class="column2">{!! $photos['caption'] !!}</td>
                          <td class="column2">{!! $photos['types'] !!}</td>
                          <td class="column2">{!! $photos['gamemodes'] !!}</td>
                          <td class="column4-1"><img src="/uploads/{{$photos->file_path}}" alt="{{$photos->file_path}}" style="max-width:60%"></td>
                          <td class="column5">{{ \Carbon\Carbon::parse($photos['updated_at'])->format('j F, Y') }}</td>
                          <td class="column6-1">
                          <a class="button touch delete" href="{{ route('admin.delete_photos', $photos->id) }}"></a></td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    <div class="card-footer clearfix">
                      <ul class="pagination pagination-sm m-o">
                        <span id="table-pagination">
                        {{$photo->links()}}
                        </span>
                      </ul>
                    </div>
                    
                    <!-- End of Table -->
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- /.content-header -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src=".{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
</body>
</html>
