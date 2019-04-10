<?php ob_start();
	include "../config/koneksi.php";
	
	$id_kategori				= $_POST['id_kategori'];
	$nama_kategori				= $_POST['nama_kategori'];
	
	mysql_query(" INSERT INTO kategori(id_kategori, nama_kategori)
					VALUES('$id_kategori', '$nama_kategori')");
					
					header('location:../media.php?module=kategori');
	?>