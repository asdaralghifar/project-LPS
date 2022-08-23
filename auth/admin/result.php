<!DOCTYPE html>
<html>
<title>Laporan Program</title>
<?php  
include('ceks.php');
include('../../config/koneksi.php');
$bagianWhere = "";
 
if (isset($_POST['idkCat']))
{
   $kategori = $_POST['id_kategori'];
   if (empty($bagianWhere))
   {
        $bagianWhere .= "id_kategori = '$kategori'";
   }
}
 
if (isset($_POST['tglCat']))
{
   $tanggal = $_POST['tanggal'];
   if (empty($bagianWhere))
   {
        $bagianWhere .= "tanggal LIKE '%$tanggal%'";
   }
   else
   {
        $bagianWhere .= " AND tanggal LIKE '%$tanggal%'";
   }
}

if (isset($_POST['namaCat']))
{
   $nama = $_POST['nama'];
   if (empty($bagianWhere))
   {
        $bagianWhere .= "nama LIKE '%$nama%'";
   }
   else
   {
        $bagianWhere .= " AND nama LIKE '%$nama%'";
   }
}
$query = "SELECT * FROM detail WHERE ".$bagianWhere;
$hasil1 = mysqli_query($con, $query);
$data1 = mysqli_fetch_array($hasil1);
?>
<center><h2>Laporan Program <?php echo $data1['id_kategori'];?></h2></center>
<h3>Nama Murid: <?php echo $data1['nama'];?></h3>

<table border="1" style="width: 100%">
<tr>
		<td width="10%">Tanggal</td>
		<td width="10%">Terapis</td>
		<td width="10%">Kegiatan</td>
		<td width="10%">Sub Kegiatan</td>
		<td width="10%">Pencapaian</td>
		<td width="10%">Penjelasan</td>
</tr>
<?php
$hasil = mysqli_query($con, $query);
while ($data = mysqli_fetch_array($hasil))
{
   echo "<tr>
   <td>".$data['tanggal']."</td>
   <td>".$data['terapis']."</td>
   <td>".$data['kegiatan']."</td>
   <td>".$data['subk']."</td>
   <td>".$data['pencapaian']."</td>
   <td>".$data['penjelasan']."</td>
   <tr>";
}?>
</table>
	<script>
		window.print();
	</script>
	</html>