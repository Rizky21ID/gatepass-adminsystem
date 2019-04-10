<?php ob_start();
	include "../config/koneksi.php";
	
	$id_pemilik			= $_POST['id_pemilik'];
	$nama_pemilik			= $_POST['nama_pemilik'];
	
	mysql_query(" INSERT INTO pemilik(id_pemilik, nama_pemilik)
					VALUES('$id_pemilik', '$nama_pemilik')");
					
					header('location:../media.php?module=pemilik');
	?>