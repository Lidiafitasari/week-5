<?php
  include_once "../model/mahasiswa.php";

  $mahasiswa = new mahasiswa;
  $data['nim'] = $_GET['nim'];
  $mahasiswa = $mahasiswa->find($data);

  if($_POST){

    $data['nim'] = $_POST['nim'];
    $data['nama'] = $_POST['nama'];
    $data['angkatan'] = $_POST['angkatan'];

    $mahasiswa = new mahasiswa;
    $mahasiswa->update($data);

    header("location: index.php");

  }
?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <nav class="container">
          <a class="navbar-brand" href="#">POLITAP</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Dosen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mata Kuliah</a>
              </li>
            </ul>
          </div>
      </nav>
    </nav>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                Tabel Data Mahasiswa
              </div>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="" class="control-label">NIM</label>
                  <input type="text" name="nim" value="<?php echo $mahasiswa['nim'] ?>" readonly class="form-control ">
                </div>
                <div class="form-group">
                  <label for="" class="control-label">Nama</label>
                  <input type="text" name="nama" value="<?php echo $mahasiswa['nama'] ?>" class="form-control ">
                </div>
                <div class="form-group">
                  <label for="" class="control-label">Angkatan</label>
                  <input type="text" name="angkatan" value="<?php echo $mahasiswa['angkatan'] ?>" class="form-control ">
                </div>
                <div class="form-group">
                  <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>