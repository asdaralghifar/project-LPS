<!DOCTYPE html>
<html>
<?php include "header.php"; 
include('ceks.php');
include('../../config/koneksi.php'); ?>
<body>
<center>
<h1>Cari Data Yang Ingin Di Cetak</h1>
 
<p>Pilih kategori pencarian</p>
 
<form method="post" action="result.php">

<table>
   <tr><td><input type="checkbox" name="idkCat"> kategori</td><td><input type="text" name="id_kategori"></td></tr>
   <tr><td><input type="checkbox" name="tglCat"> Tanggal</td><td><input type="date" name="tanggal"></td></tr>
   <tr><td><input type="checkbox" name="namaCat"> Nama</td><td><input type="text" name="nama"></td></tr>
   <tr><td></td><td><input type="submit" name="submit" value="Submit"></td></tr>   
</table>
</form>
</center>
</body>
</html>