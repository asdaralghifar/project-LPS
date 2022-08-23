<?php
include ("../../config/koneksi.php");

$pilih = implode (", ", $_POST['pilih']);
$query = "INSERT INTO detail_list (nama, umur, tanggal, pilih)
          VALUES('$_POST[nama]','$_POST[umur]', '$_POST[tanggal]', '$pilih')";
          
mysqli_query($con, $query);

if( $query ) {
  // kalau berhasil alihkan ke halaman list-siswa.php
  header('Location: hasil.php');
  } else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan...");
  }
?>