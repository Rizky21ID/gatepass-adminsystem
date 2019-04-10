
<?php ob_start();
 
include '../config/koneksi.php';
	$id_kendaraan		= $_POST['id_kendaraan'];
	$no_plat		    = $_POST['no_plat'];
	$merek				= $_POST['merek'];
	$id_jenis			= $_POST['nama_jenis'];
	$id_pemilik			= $_POST['nama_pemilik'];

mysql_query("UPDATE kendaraan SET no_plat='$no_plat', merek='$merek', id_jenis='$id_jenis',id_pemilik='$id_pemilik'    WHERE id_kendaraan='$id_kendaraan'");

header("location:../media.php?module=kendaraan");
?>