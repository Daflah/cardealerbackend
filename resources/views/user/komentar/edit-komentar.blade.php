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
  <!-- /.main-sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Komentar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Komentar</li>
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
                <h3>Edit Data Komentar</h3>
            </div>
            
            <div class="card-body">
                <form action="{{ route('update-komentar', $komentar->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="gambarmobil">Gambar Mobil</label>
                        <input type="file" id="gambarmobil" name="gambarmobil" class="form-control">
                        @if($komentar->gambarmobil)
                            <img src="{{ url('img/'.$komentar->gambarmobil) }}" alt="Gambar Mobil" width="100">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="gambarprofile">Gambar Profil</label>
                        <input type="file" id="gambarprofile" name="gambarprofile" class="form-control">
                        @if($komentar->gambarprofile)
                            <img src="{{ url('img/'.$komentar->gambarprofile) }}" alt="Gambar Profil" width="100">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{ $komentar->nama }}" required> 
                    </div>
                    <div class="form-group">
                        <label for="job">Pekerjaan</label>
                        <input type="text" id="job" name="job" class="form-control" placeholder="Pekerjaan" value="{{ $komentar->job }}" required> 
                    </div>
                    <div class="form-group">
                        <label for="komentar">Komentar</label>
                        <textarea name="komentar" id="komentar" class="form-control" placeholder="Komentar" required>{{ $komentar->komentar }}</textarea>
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
