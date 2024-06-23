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
            <h1 class="m-0">Edit Header</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Header</li>
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
                <h3>Edit Header</h3>
            </div>
            
            <div class="card-body">
                <form action="{{ route('update-header', $Head->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="slogan" name="slogan" class="form-control" placeholder="Slogan" value="{{ $Head->slogan }}" required> 
                    </div>
                    <div class="form-group">
                        <input type="text" id="judulmobil" name="judulmobil" class="form-control" placeholder="Judul Mobil" value="{{ $Head->judulmobil }}" required> 
                    </div>
                    <div class="form-group">
                        <input type="text" id="model" name="model" class="form-control" placeholder="Model" value="{{ $Head->model }}" required> 
                    </div>
                    <div class="form-group">
                        <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga Rp" value="{{ $Head->harga }}" required> 
                    </div>
                    <div class="form-group">
                        <input type="file" id="gambar" name="gambar" class="form-control">
                        @if($Head->gambar)
                            <img src="{{ url('img/'.$Head->gambar) }}" alt="Gambar Header" width="100">
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
