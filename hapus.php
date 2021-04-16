<?php

require 'functions.php';

$nis = $_GET['nis'];

if (hapus($nis)) {
  echo "<script>
          alert ('DATA BERHASIL DI HAPUS !');
          document.location.href = 'list.php';
        </script>";
} else {
  echo "<script>
          alert ('DATA GAGAL DI HAPUS !');
        </script>";
}
