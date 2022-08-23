<?php
include ("../../config/koneksi.php");

$query = "INSERT INTO `kegiatan` (`id`, `kategori`, `nama_kegiatan`, `sub_kegiatan`) VALUES (NULL, '$_POST[kategori]', '$_POST[nama_kegiatan]', '$_POST[sub_kegiatan]')";
          
mysqli_query($con, $query);

if( $query ) {
  // kalau berhasil alihkan ke halaman list-siswa.php
  header('Location: dkegiatan.php');
  } else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan...");
  }


?>