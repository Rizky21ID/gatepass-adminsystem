<?php ob_start();
	include "../config/koneksi.php";
	
	$id_jenis			= $_POST['id_jenis'];
	$nama_jenis			= $_POST['nama_jenis'];
	
	mysql_query(" INSERT INTO jenis_kendaraan(id_jenis, nama_jenis)
					VALUES('$id_jenis', '$nama_jenis')");
					
					header('location:../media.php?module=jenis');
	?>