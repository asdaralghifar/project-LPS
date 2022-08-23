<?php
include ("../../config/koneksi.php");

$query = "INSERT INTO `list` (`id`, `nama`) VALUES (NULL, '$_POST[nama]')";
          
mysqli_query($con, $query);

if( $query ) {
  // kalau berhasil alihkan ke halaman list-siswa.php
  header('Location: dlist.php');
  } else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan...");
  }


?>