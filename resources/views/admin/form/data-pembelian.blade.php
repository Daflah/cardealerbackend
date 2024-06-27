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
            <h1 class="m-0">Data Pembelian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pembelian</li>
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
                        <th>Email Address</th>
                        <th>Card Number</th>
                        <th>Card Holder Name</th>
                        <th>Expiration Date</th>
                        <th>CVV</th>
                        <th>Country</th>
                        <th>Zip Code</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtPembelian as $pembelian)
                    <tr>
                        <td>{{$pembelian->email_address}}</td>
                        <td>{{$pembelian->card_number}}</td>
                        <td>{{$pembelian->card_holder_name}}</td>
                        <td>{{$pembelian->expiration_date}}</td>
                        <td>{{$pembelian->cvv}}</td>
                        <td>{{$pembelian->country}}</td>
                        <td>{{$pembelian->zip_code}}</td>
                        <td>
                          <a href="{{ route('edit-pembelian', $pembelian->id) }}"><i class="fas fa-pen-to-square"></i></a> | 
                          <a href="{{ route('delete-pembelian', $pembelian->id) }}"><i class="fas fa-trash" style="color:red"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="d-flex justify-content-center">
                    {{ $dtPembelian->links() }}
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
