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
            <h1 class="m-0">Data Galeri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Galeri</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header d-flex justify-content-between align-items-center">
                <form action="{{ route('data-galeri') }}" method="GET" class="form-inline">
                    <input type="text" name="search" class="form-control" placeholder="Search by title" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary ml-2">Search</button>
                </form>
                <a href="{{ route('create-galeri') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtGaleri as $item)
                    <tr>
                        <td>
                          @if($item->gambar)
                            <img src="{{ asset('img/'. $item->gambar) }}" alt="Gambar Galeri" width="100">
                          @else
                            Tidak ada gambar
                          @endif
                        </td>
                        <td>{{ $item->judul }}</td>
                        <td>
                          <a href="{{ route('edit-galeri', $item->id) }}"><i class="fas fa-pen-to-square"></i></a> | 
                          <a href="{{ route('delete-galeri', $item->id) }}"><i class="fas fa-trash" style="color:red"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="d-flex justify-content-center">
                    {{ $dtGaleri->appends(['search' => request('search')])->links() }}
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
  @include('sweetalert::alert')

</body>
</html>
