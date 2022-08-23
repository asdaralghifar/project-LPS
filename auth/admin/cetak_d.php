<!DOCTYPE html>
<html>
<?php include "header.php"; 
include('ceks.php');
include('../../config/koneksi.php'); ?>
<body>
<center>
<h1>Cari Nama Yang Ingin Di Cetak</h1> 
<form method="post" action="result1.php">

<table>
   <tr><td><input type="checkbox" name="namaCat"> Nama</td><td><input type="text" name="nama"></td></tr>
   <tr><td></td><td><input type="submit" name="submit" value="Submit"></td></tr>   
</table>
</form>
</center>
</body>
</html>