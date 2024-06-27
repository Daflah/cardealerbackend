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
            <h1 class="m-0">Data Jualan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Jualan</li>
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
                <h3>Create Data Jualan</h3>
            </div>

            <div class="card-body">
              <form action="{{ route('simpan-jualan') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk Mobil" required>
                </div>
                <div class="form-group">
                    <input type="text" id="namamobil" name="namamobil" class="form-control" placeholder="Nama Mobil" required>
                </div>
                <div class="form-group">
                    <select id="type" name="type" class="form-control" required>
                        <option value="" disabled selected>Pilih Tipe Mobil</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Jeep">Jeep</option>
                        <option value="SUV">SUV</option>
                        <option value="Truck">Truck</option>
                        <option value="Coupe">Coupe</option>
                        <option value="Convertible">Convertible</option>
                        <option value="Wagon">Wagon</option>
                        <option value="Van">Van</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" id="transmission" name="transmission" class="form-control" placeholder="Transmission" required>
                </div>
                <div class="form-group">
                    <input type="text" id="bensin" name="bensin" class="form-control" placeholder="Bensin" required>
                </div>
                <div class="form-group">
                    <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga Mobil" required>
                </div>
                <div class="form-group">
                    <input type="file" id="gambar" name="gambar" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
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
