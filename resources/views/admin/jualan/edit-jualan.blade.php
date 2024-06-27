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
            <h1 class="m-0">Edit Data Jualan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Jualan</li>
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
                <h3>Edit Data Jualan</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('update-jualan', $jual->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk Mobil" value="{{ $jual->merk }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="namamobil" name="namamobil" class="form-control" placeholder="Nama Mobil" value="{{ $jual->namamobil }}" required>
                    </div>
                    <div class="form-group">
                        <select id="type" name="type" class="form-control" required>
                            <option value="Sedan" {{ $jual->type == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                            <option value="Jeep" {{ $jual->type == 'Jeep' ? 'selected' : '' }}>Jeep</option>
                            <option value="SUV" {{ $jual->type == 'SUV' ? 'selected' : '' }}>SUV</option>
                            <option value="Truck" {{ $jual->type == 'Truck' ? 'selected' : '' }}>Truck</option>
                            <option value="Coupe" {{ $jual->type == 'Coupe' ? 'selected' : '' }}>Coupe</option>
                            <option value="Convertible" {{ $jual->type == 'Convertible' ? 'selected' : '' }}>Convertible</option>
                            <option value="Wagon" {{ $jual->type == 'Wagon' ? 'selected' : '' }}>Wagon</option>
                            <option value="Van" {{ $jual->type == 'Van' ? 'selected' : '' }}>Van</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" id="transmission" name="transmission" class="form-control" placeholder="Transmission" value="{{ $jual->transmission }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="bensin" name="bensin" class="form-control" placeholder="Bensin" value="{{ $jual->bensin }}" required>
                    </div>
                    <div class="form-group">
                        <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga Mobil" value="{{ $jual->harga }}" required>
                    </div>
                    <div class="form-group">
                        <input type="file" id="gambar" name="gambar" class="form-control">
                        @if($jual->gambar)
                            <img src="{{ url('img/'.$jual->gambar) }}" alt="Gambar Mobil" width="100">
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
