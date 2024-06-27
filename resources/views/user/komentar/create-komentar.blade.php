<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Data Komentar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Include your custom CSS file here -->
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

<!-- <div class="container mt-5">
  
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Komentar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Komentar</li>
          </ol>
        </div>
      </div>
    </div>
  </div> -->


  <!-- Main content -->
  <div class="content">
    <div class="card card-info card-outline">
      <div class="card-header">
        <h3>Create Data Komentar</h3>
      </div>

      <div class="card-body">
        <form action="{{ route('simpan-komentar') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="gambarmobil">Gambar Mobil</label>
            <input type="file" id="gambarmobil" name="gambarmobil" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="gambarprofile">Gambar Profil</label>
            <input type="file" id="gambarprofile" name="gambarprofile" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="job">Pekerjaan</label>
            <input type="text" id="job" name="job" class="form-control" placeholder="Pekerjaan" required>
          </div>
          <div class="form-group">
            <label for="komentar">Komentar</label>
            <textarea name="komentar" id="komentar" class="form-control" placeholder="Komentar" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan Komentar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.container -->

<!-- REQUIRED SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
