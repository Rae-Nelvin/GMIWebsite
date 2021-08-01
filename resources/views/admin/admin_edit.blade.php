<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Freeletics Surabaya Admin</title>

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
  <link href="{{ asset ('assets/css/form-css.css') }}" rel="stylesheet">
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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="{{ route('admin.photos') }}" class="nav-link">
            <i class="nav-icon far fa-images"></i>
              <p>
                Galleries
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.news') }}" class="nav-link">
            <i class="nav-icon far fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.admin') }}" class="nav-link active">
            <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Admin & Staff
              </p>
            </a>
          </li>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      @if($errors->any())
        @foreach ($errors->all() as $errors)
        <div class="alert alert-danger">
        {{ $errors }}
        </div>
        @endforeach
      @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 h1-title" style="font-size: 60px;font-family: Nunito;">Edit Photos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" style="color: white; font-size: 20px;font-family:Nunito;">Home</a></li>
              <li class="breadcrumb-item active" style="font-size: 20px;color: #edc124;font-family:Nunito;">Edit Photos</li>
              <br>
            </ol>
          </div><!-- /.col -->
          <!-- Image Table -->
          <div class="card-body bg-custom-1 rounded mt-5">
            <table>
                    <thead>
                        <tr class="table100-head">
                        <th class="column1">#</th>
                        <th class="column2">Real Name</th>
                        <th class="column2">Steam Name</th>
                        <th class="column4">Social Media</th>
                        <th class="column4">Role</th>
                        <th class="column5">Picture</th>
                        <th class="column5">Last Update</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($admins as $adminss)
                    <tr class="table100-body">
                          <td class="column1">{{ $loop->iteration }}</td>
                          <td class="column2">{!! $adminss['real_name'] !!}</td>
                          <td class="column2">{!! $adminss['steam_name'] !!}</td>
                          <td class="column2">{!! $adminss['social_media'] !!}</td>
                          <td class="column2">{!! $adminss['role'] !!}</td>
                          <td class="column4-1"><img src="/uploads/{{$adminss->photos->file_path}}" alt="" style="max-width:60%"></td>
                          <td class="column5">{{ \Carbon\Carbon::parse($adminss['updated_at'])->format('j F, Y') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          <!-- End of Image Table --> 
          <!-- Form -->
          <div class="row mb-2">
          <div class="card-body bg-custom-1 rounded mt-5">
          <form action="{{ route('admin.adminedit') }}" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                <input type="hidden" name="types" value="Admin">
                <input type="hidden" name="prevpid" value="{{$adminss->photos->id}}">
                <input type="hidden" name="id" value="{{ $adminss['id'] }}">
                <div class="form-group">
                    <label for="EventForm" class="title-edit" style="font-family: Nunito;">Masukkan Steam Name :</label>
                    <input type="text" class="form-control bg-white" id="exampleInputEmail1" name="steam_name" style="max-width: 40%;">
                </div>
                <div class="form-group">
                    <label for="EventForm" class="title-edit" style="font-family: Nunito;">Masukkan Real Name :</label>
                    <input type="text" class="form-control bg-white" id="exampleInputEmail1" name="real_name" style="max-width: 40%;">
                </div>
                <div class="form-group">
                    <label for="EventForm" class="title-edit" style="font-family: Nunito;">Masukkan Link Instagram (opsional) :</label>
                    <input type="text" class="form-control bg-white" id="exampleInputEmail1" name="social_media" style="max-width: 40%;">
                </div>
                <div class="form-group">
                    <label for="EventForm" class="title-edit" style="font-family: Nunito;">Masukkan Role GMI :</label>
                    <input type="text" class="form-control bg-white" id="exampleInputEmail1" name="role" style="max-width: 40%;">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" style="font-family: Nunito;" class="title-edit">Images input :</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02" name="images[]" onchange="loadFile(event)" size="60">
                        <label class="custom-file-label bg-white" for="inputGroupFile02" style="max-width: 40%;">Choose Image</label>
                      </div>
                    </div>
                    <img id="output" style="padding:10px; max-width: 25%;"/>
                  </div>
                <button class="btn btn-success" style="font-family: Nunito;font-weight: bold;">Submit<input type="submit" class="button btn-success d-none" /></button>
            </form>
          </div>
          <!-- End of Form -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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
<!-- Image Preview & Add More Button -->
<script type="text/javascript">

var loadFile =  function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };

  $('#inputGroupFile02').on('change',function(){
   var fileName = $(this).val();
  $(this).next('.custom-file-label').html(fileName);
})

</script>
</body>
</html>
