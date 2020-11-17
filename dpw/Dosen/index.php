<?php

  include_once "../model/dosen.php";

  $dosen = new dosen;
  $list_data_dosen = $dosen->all();
?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Data Dosen</title>
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
                <a class="nav-link text-white" href="../Mahasiswa/index.php">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Dosen/index.php">Dosen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Makul/index.php">Mata Kuliah</a>
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
              <a href="create.php" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Tambah Data</a>
              <div class="card-title">
                Tabel Data Mahasiswa
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead class="bg-dark text-white">
                  <th width="50px">No</th>
                  <th width="150px">Aksi</th>
                  <th width="150px">Nim</th>
                  <th>Nama</th>
                  <th>Angkatan</th>
                </thead>
                <tbody>
                  <?php foreach ($list_data_dosen as $key => $dosen): ?>
                    <tr>
                      <td><?php echo $key+1 ?></td>
                      <td>
                        <div class="btn-group">
                          <a href="show.php?nip=<?php echo $dosen['nip'] ?>" readonly class="btn btn-dark"><i class="fa fa-info"></i></a>
                          <a href="edit.php?nip=<?php echo $dosen['nip'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a onclick="return confirm('Yakin Menghapus Data Ini')" href="delete.php?nip=<?php echo $dosen['nip'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                      <td><?php echo $dosen['nip'] ?></td>
                      <td><?php echo $dosen['nama'] ?></td>
                      <td><?php echo $dosen['makul'] ?></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
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