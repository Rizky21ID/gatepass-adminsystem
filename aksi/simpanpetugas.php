<?php ob_start();
	include "../config/koneksi.php";
	
	$id_petugas			= $_POST['id_petugas'];
	$username			= $_POST['username'];
	$nama_petugas		= $_POST['nama_petugas'];
	$jklm				= $_POST['jklm'];
	$agama				= $_POST['agama'];
	$hp					= $_POST['hp'];
	$level				= $_POST['level'];
	$password			= $_POST['password'];
	
	mysql_query(" INSERT INTO petugas(id_petugas, username, nama_petugas, jklm, agama, hp, level, password)
					VALUES('$id_petugas', '$username', '$nama_petugas', '$jklm', '$agama',  '$hp', '$level', '$password')");
					
					header('location:../media.php?module=petugas');
	?>