
<?php ob_start();
 
include '../config/koneksi.php';
	$id_lokasi 				= $_POST['id_lokasi'];
	$kd_lokasi 				= $_POST['kd_lokasi'];
	$nama_lokasi 			= $_POST['nama_lokasi'];
 
mysql_query("UPDATE lokasi SET kd_lokasi='$kd_lokasi', nama_lokasi='$nama_lokasi' WHERE id_lokasi='$id_lokasi'");

header("location:../media.php?module=lokasi");
?>