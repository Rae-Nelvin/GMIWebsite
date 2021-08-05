<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Garry's Mod Indonesia</title>
  <link rel="shortcut icon" href="{{ asset('assets/images/gmilogo/gmi_logo_old.png') }}" />

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
      <a href="{{ route('admin.dashboard') }}"><h2 id="nav-title">GARRY'S MOD <span style="color: white">INDONESIA</span></h2></a>
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
      @if($errors->any())
        @foreach ($errors->all() as $errors)
        <div class="alert alert-danger">
        {{ $errors }}
        </div>
        @endforeach
      @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 h1-title" style="font-size: 60px;font-family: Nunito;">Add New</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" style="color: white; font-size: 20px">Home</a></li>
              <li class="breadcrumb-item active" style="font-size: 20px;color: #edc124;font-family: Nunito;">Add New</li>
              <br>
            </ol>
          </div><!-- /.col -->
            <div class="card-body bg-custom-1 rounded mt-5">
            <form action="{{ route('admin.uploadphotos') }}" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                <div class="form-group">
                    <label for="EventForm" class="title-edit" style="font-family: Nunito;">Select Photo Type :</label><br>
                    <select name="gamemodes" id="gamemodes">
                      <option value ="" class="active">---</option>
                      <option value="TTT">TTT</option>
                      <option value="Surf">Surf</option>
                      <option value="Deathrun">Deathrun</option>
                      <option value="Slender">Slender</option>
                      <option value="Sandbox">Sandbox</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="EventForm" class="title-edit" style="font-family: Nunito;">Masukkan Caption Gambar :</label>
                    <input type="text" class="form-control bg-white" id="exampleInputEmail1" name="caption">
                </div>
                <div class="form-group">
                  <label for="EventForm" class="title-edit" style="font-family: Nunito;">Type of Pictures: </label>
                  <input type="radio" id="html" name="types" value="Background">
                  Background (Only 1 Photos at a time)
                  <input type="radio" id="html" name="types" value="Screenshoot">
                  Screenshots
                </div>
                <div class="form-group">
                  <table>
                    <thead>
                    <tr class="table100-head">
                      <th class="column3">Upload Image (16:9)</th>
                      <th class="column4-2">Image Preview</th>
                      <th class="column6"><button class="btn btn-success" id="add-member-fields">+ Add Photo</button></th>
                    </tr>
                    </thead>
                    <tbody id="team-member-fields">
                    </tbody>
                  </table>
                </div>
                <button class="btn btn-success" style="font-family: Nunito;font-weight: bold;">Submit<input type="submit" class="button btn-success d-none" /></button>
            </form>
              </div>
          </div>
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

var i = 0;

function preview_member(event, inp) {
  var reader = new FileReader();
  console.log(inp);
  reader.onload = function() {
    var output = document.getElementById("output_member" + inp);
    output.src = reader.result;
  };

  reader.readAsDataURL(event.target.files[0]);
}

jQuery(document).ready(function($) {
  //fadeout selected item and remove
  $(document).on("click", "#remove-member-fields", function(event) {
    event.preventDefault();
    $(this)
      .parent()
      .fadeOut(300, function() {
        $(this).empty();
        return false;
      });
  });

  $('tbody').on('click', '.remove', function(){
    $(this).parent().parent().remove();
  });

  //add input
  $("#add-member-fields").click(function() {
    i++;

    var rows = '<tr class="table100-body">' +
                      '<td class="column3"><input type="file" name="images[]" id="image" onchange="preview_member(event, '+ i + ')"></td>' +
                      '<td class="column4-2"><img id="output_member'+ i + '" style="max-width:40%;margin: 10px"></td>' +
                      '<td class="column6"><button class="btn btn-danger remove" id="remove-member-fields">- Remove</button></td>' +
                    '</tr>';

    $(rows)
      .fadeIn("slow")
      .appendTo("#team-member-fields");
    return false;
  });
});

</script>
</body>
</html>
