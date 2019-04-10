<?php ob_start();
	include "../config/koneksi.php";
	
	$id_gatepass			= $_POST['id_gatepass'];
	$kategori				= $_POST['kategori'];
	$tgl_expired			= $_POST['tgl_expired'];
	$tgl_update				= $_POST['tgl_update'];
	$lokasi					= $_POST['lokasi'];
	$kendaraan				= $_POST['kendaraan'];
	$petugas				= $_POST['petugas'];
	$pemilik				= $_POST['pemilik'];

	mysql_query(" INSERT INTO gatepass(id_gatepass, kategori_id, tgl_expired, tgl_update, lokasi_id, kendaraan_id, petugas_id,pemilik_id)
					VALUES('$id_gatepass', '$kategori', '$tgl_expired', '$tgl_update', '$lokasi', '$kendaraan', '$petugas','$pemilik')");
					
					header('location:../media.php?module=gatepass');
	?>