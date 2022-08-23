<!DOCTYPE html>
<html>
<?php  
include('ceks.php');
include('../../config/koneksi.php');
$bagianWhere = "";
 
 
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
 
$query = "SELECT * FROM detail_list WHERE ".$bagianWhere;
$hasil1 = mysqli_query($con, $query);
$data1 = mysqli_fetch_array($hasil1);
?>
<center><h2>Laporan Checklist </h2></center>
<h3>Nama Murid: <?php echo $data1['nama'];?></h3>
<h3>Umur: <?php echo $data1['umur'];?> Tahun</h3>

<table border="1" style="width: 100%">
<tr>
		<td width="10%">Tanggal</td>
		<td width="10%">Pilihan</td>
</tr>
<?php
$hasil = mysqli_query($con, $query);
while ($data = mysqli_fetch_array($hasil))
{
   echo "<tr>
   <td>".$data['tanggal']."</td>
   <td>".$data['pilih']."</td>
   <tr>";
}?>
</table>
	<!-- <script>
		window.print();
	</script> -->
	</html>