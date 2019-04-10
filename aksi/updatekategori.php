
<?php ob_start();
 
include '../config/koneksi.php';
	$id_kategori	 			= $_POST['id_kategori'];
	$nama_kategori 				= $_POST['nama_kategori'];
 
mysql_query("UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

header("location:../media.php?module=kategori");
?>