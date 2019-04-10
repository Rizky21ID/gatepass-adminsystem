<?php ob_start();
	include "../config/koneksi.php";
	
	$id_kendaraan		= $_POST['id_kendaraan'];
	$no			        = $_POST['plat'];
	$merek				= $_POST['merek'];
	$id_jenis			= $_POST['nama_jenis'];
	$id_pemilik			= $_POST['nama_pemilik'];

	mysql_query(" INSERT INTO kendaraan(no_plat, merek, id_jenis, id_pemilik)
					VALUES('$no', '$merek', '$id_jenis', '$id_pemilik')");
					
					header('location:../media.php?module=kendaraan');
	?>