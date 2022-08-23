<?php

include ("../../config/koneksi.php");



$query = "INSERT INTO `kategori_kegiatan` (`id`, `kategori`, `nama`) VALUES (NULL, '$_POST[kategori]', '$_POST[nama]')";

          

mysqli_query($con, $query);



if( $query ) {

  // kalau berhasil alihkan ke halaman list-siswa.php

  header('Location: dkategori.php');

  } else {

  // kalau gagal tampilkan pesan

  die("Gagal menyimpan perubahan...");

  }





?>