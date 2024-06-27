<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('admin.template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="card h-100">
              <img src="{{ asset('img/download(2).jpg') }}" class="card-img-top" alt="Admin Car">
              <div class="card-body">
                <h5 class="card-title">Admin Car</h5>
                <p class="card-text">
                  Allhamdulilah admin daflah mempunyai mobil seperti gambar diatas, "Berkerja lah sekeras mungkin sampai es Antartika kalah keras".
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="card h-100 card-primary card-outline">
              <img src="{{ asset('img/download(3).jpg') }}" class="card-img-top" alt="Employee Car">
              <div class="card-body">
                <h5 class="card-title">Employee Car</h5>
                <p class="card-text">
                  Ini adalah contoh mobil para pekerja yang berada disini, sangat bagus bukan? bekerjalah sekeras mungkin
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('admin.template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
  @include('admin.template.script')

</body>
</html>
