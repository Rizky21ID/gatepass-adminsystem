
<?php ob_start();
 
include '../config/koneksi.php';
	$id_pemilik	 				= $_POST['id_pemilik'];
	$nama_pemilik 				= $_POST['nama_pemilik'];
 
mysql_query("UPDATE pemilik SET nama_pemilik='$nama_pemilik' WHERE id_pemilik='$id_pemilik'");

header("location:../media.php?module=pemilik");
?>