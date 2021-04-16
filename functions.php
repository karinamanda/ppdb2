<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'latihan');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nis = htmlspecialchars($data['nis']);
  $nama = htmlspecialchars($data['nama']);
  $jk = htmlspecialchars($data['jk']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $alamat = htmlspecialchars($data['alamat']);
  $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
  $kelas = htmlspecialchars($data['kelas']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $query = ("INSERT INTO
             murid
             VALUES
             ('$nis','$nama','$jk','$tempat_lahir','$tanggal_lahir','$alamat','$asal_sekolah','$kelas','$jurusan')");

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($nis)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM murid WHERE nis = $nis");

  return mysqli_affected_rows($conn);
}

function edit($data)
{
  $conn = koneksi();

  $nis = htmlspecialchars($data['nis']);
  $nama = htmlspecialchars($data['nama']);
  $jk = htmlspecialchars($data['jk']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $alamat = htmlspecialchars($data['alamat']);
  $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
  $kelas = htmlspecialchars($data['kelas']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $query = "UPDATE murid SET
            nama = '$nama',
            jk = '$jk',
            tempat_lahir = '$tempat_lahir',
            tanggal_lahir = '$tanggal_lahir',
            alamat = '$alamat',
            asal_sekolah = '$asal_sekolah',
            kelas = '$kelas',
            jurusan = '$jurusan'
            WHERE nis = $nis";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
