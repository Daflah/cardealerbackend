<!DOCTYPE html>
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
            <h1 class="m-0">Edit Data Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Edit Data Pegawai</h3>
            </div>
            
            <div class="card-body">
                <form action="{{ route('update-pegawai', $peg->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pegawai" value="{{ $peg->nama }}" required> 
                    </div>
                    <div class="form-group">
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim Pegawai" value="{{ $peg->nim }}" required> 
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Pegawai" required>{{ $peg->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="date" id="tgllhr" name="tgllhr" class="form-control" value="{{ $peg->tgllhr }}" required>
                    </div>
                    <div class="form-group">
                        <input type="file" id="gambar" name="gambar" class="form-control">
                        @if($peg->gambar)
                            <img src="{{ url('img/'.$peg->gambar) }}" alt="Gambar Pegawai" width="100">
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
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
