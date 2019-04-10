<?php 
ob_start();
 include '../config/koneksi.php';	
	$id_gatepass = $_POST['id_gatepass'];
	$kategori = $_POST['kategori'];
	$tgl_expired = $_POST['tgl_expired'];
	$tgl_update = $_POST['tgl_update'];
	$lokasi = $_POST['lokasi'];
	$petugas = $_POST['petugas'];
	$kendaraan = $_POST['kendaraan'];
	$pemilik = $_POST['pemilik'];
	
//mysql_query("UPDATE gatepass SET kategori_id='$kategori', tgl_expired='$tgl_expired', tgl_update='$tgl_update', kendaraan_id='$kendaraan', lokasi_id='$lokasi', petugas_id='$petugas'    WHERE id_gatepass='$id_gatepass'");
mysql_query("UPDATE gatepass SET kategori_id='$kategori',lokasi_id='$lokasi',petugas_id='$petugas',pemilik_id='$pemilik',tgl_expired='$tgl_expired', tgl_update='$tgl_update', kendaraan_id='$kendaraan' WHERE id_gatepass='$id_gatepass'");
header("location:../media.php?module=gatepass");
?>