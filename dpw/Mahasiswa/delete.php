<?php
    include_once "../model/mahasiswa.php";

    $mahasiswa = new mahasiswa;
    $data['nim'] = $_GET['nim'];
    $mahasiswa = $mahasiswa->delete($data);

	header("location: index.php");

?>