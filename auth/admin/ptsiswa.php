<?php
include ("../../config/koneksi.php");

$query = "INSERT INTO `siswa` (`id`, `nama`, `umur`) VALUES (NULL, '$_POST[nama]', '$_POST[umur]')";
          
mysqli_query($con, $query);

if( $query ) {
  // kalau berhasil alihkan ke halaman list-siswa.php
  header('Location: dsiswa.php');
  } else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan...");
  }


?>