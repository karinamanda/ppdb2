<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST)) {
    echo "<script>
            alert ('SISWA BERHASIL DI DAFTARKAN !');
            document.location.href = 'list.php';
          </script>";
  } else {
    echo "<script>
            alert ('DATA SISWA GAGAL DI TAMBAHKAN !');
          </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>FORMULIR PENDAFTARAN || APLIKASI PPDB</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center" style="margin-top:60px;">FORMULIR PENDAFTARAN</h1>

    <form action="" method="post" style="margin-top:30px;">
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">NIS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" value="" name="nis" autocomplete="off" required autofocus>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">NAMA</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" value="" name="nama" autocomplete="off" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" value="" name="jk" autocomplete="off" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" value="" name="tempat_lahir" autocomplete="off" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="" value="" name="tanggal_lahir" autocomplete="off" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">ALAMAT</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" value="" name="alamat" autocomplete="off" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">ASAL SEKOLAH</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" value="" name="asal_sekolah" autocomplete="off" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">KELAS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" value="" name="kelas" autocomplete="off" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">JURUSAN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" value="" name="jurusan" autocomplete="off" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="tambah" style="margin-left:934px;">DAFTAR</button>
      <a href="list.php" type="button" class="btn btn-secondary">KEMBALI</a>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>