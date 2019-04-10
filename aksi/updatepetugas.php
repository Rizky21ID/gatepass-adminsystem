
<?php ob_start();
 
include '../config/koneksi.php';
	$id_petugas 				= $_POST['id_petugas'];
	$username	 				= $_POST['username'];
	$nama_petugas 				= $_POST['nama_petugas'];
	$jklm						= $_POST['jklm'];
	$agama 						= $_POST['agama'];
	$hp 						= $_POST['hp'];
	$level	 					= $_POST['level'];
	$password 					= $_POST['password'];
 
mysql_query("UPDATE petugas SET username='$username',nama_petugas='$nama_petugas',jklm='$jklm',agama='$agama',hp='$hp',level='$level',password='$password' WHERE id_petugas='$id_petugas'");

header("location:../media.php?module=petugas");
?>