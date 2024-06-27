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
            <h1 class="m-0">Data Komentar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Komentar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Gambar Mobil</th>
                        <th>Gambar Profil</th>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th>Komentar</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtKomentar as $komentar)
                    <tr>
                        <td>
                          @if($komentar->gambarmobil)
                            <img src="{{ asset('img/'. $komentar->gambarmobil) }}" alt="Gambar Mobil" width="100">
                          @else
                            Tidak ada gambar
                          @endif
                        </td>
                        <td>
                          @if($komentar->gambarprofile)
                            <img src="{{ asset('img/'. $komentar->gambarprofile) }}" alt="Gambar Profil" width="100">
                          @else
                            Tidak ada gambar
                          @endif
                        </td>
                        <td>{{$komentar->nama}}</td>
                        <td>{{$komentar->job}}</td>
                        <td>{{$komentar->komentar}}</td>
                        <td>
                          <a href="{{ route('edit-komentar', $komentar->id) }}"><i class="fas fa-pen-to-square"></i></a> | 
                          <a href="{{ route('delete-komentar', $komentar->id) }}"><i class="fas fa-trash" style="color:red"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="d-flex justify-content-center">
                    {{ $dtKomentar->links() }}
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
