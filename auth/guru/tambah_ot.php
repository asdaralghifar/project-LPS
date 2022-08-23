<?php
include ("../../config/koneksi.php");

$query = "INSERT INTO detail (id_kategori, nama, terapis, tanggal, kegiatan, subk, pencapaian, penjelasan)
          VALUES('$_POST[id_kategori]', '$_POST[nama]','$_POST[terapis]', '$_POST[tanggal]', '$_POST[kegiatan]',
          '$_POST[subk]', '$_POST[pencapaian]', '$_POST[penjelasan]')";
          
mysqli_query($con, $query);

if( $query ) {
  // kalau berhasil alihkan ke halaman list-siswa.php
  header('Location: hasil.php');
  } else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan...");
  }
?>