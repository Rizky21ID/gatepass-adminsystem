
<?php ob_start();
 
include '../config/koneksi.php';
	$id_jenis 				= $_POST['id_jenis'];
	$nama_jenis 				= $_POST['nama_jenis'];
 
mysql_query("UPDATE jenis_kendaraan SET nama_jenis='$nama_jenis' WHERE id_jenis='$id_jenis'");

header("location:../media.php?module=jenis");
?>