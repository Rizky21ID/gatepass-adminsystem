<?php ob_start();
	include "../config/koneksi.php";
	
	$id_lokasi			= $_POST['id_lokasi'];
	$kd_lokasi			= $_POST['kd_lokasi'];
	$nama_lokasi			= $_POST['nama_lokasi'];
	
	mysql_query(" INSERT INTO lokasi(kd_lokasi, nama_lokasi)
					VALUES('$kd_lokasi', '$nama_lokasi')");
					
					header('location:../media.php?module=lokasi');
	?>