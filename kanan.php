<?
error_reporting(0);
?>
<style type="text/css">
<link rel="stylesheet" href="css/w3.css">
	#judulKanan{
		position:relative;
		float:left;
		width:1080px;
		margin-left:-7px;
		height:auto;
		min-height:5px;
		padding:5px 10px 5px 10px;
		background:#0CF;
		text-align:center;
		color:#000;
		font-size:16px;
		margin-top:5px;
		border: 2px solid #00F;
		border-radius: 5px 5px 5px 5px;
	}
	#kotakTengah{
		position:relative;
		float:left;
		width:692px;
		height:auto;
		
	}
</style>

<?php
	$module = $_GET['module'];
	if($module=='home'){
		include('module/home.php');
// Bagian Login
	}else if($module=='salah'){
		include('module/salah.php');
	}else if($module=='logout'){
		include('module/logout.php');
	}else if($module=='signin'){
		include('module/signin.php');
	}else if($module=='log1'){
		include('module/log1.php');
// Bagian Petugas
	}else if($module=='petugas'){
		include('module/petugas.php');
	}else if($module=='tambahpetugas'){
		include('module/tambahpetugas.php');
	}else if($module=='editpetugas'){
		include('module/editpetugas.php');
// Bagian Jenis Kendaraan
	}else if($module=='jenis'){
		include('module/jenis.php');
	}else if($module=='editjenis'){
		include('module/editjenis.php');
	}else if($module=='tambahjenis'){
		include('module/tambahjenis.php');
// Bagian Pemilik
	}else if($module=='pemilik'){
		include('module/pemilik.php');
	}else if($module=='editpemilik'){
		include('module/editpemilik.php');
	}else if($module=='tambahpemilik'){
		include('module/tambahpemilik.php');
// Bagian Kendaraan
	}else if($module=='kendaraan'){
		include('module/kendaraan.php');
	}else if($module=='editkendaraan'){
		include('module/editkendaraan.php');
	}else if($module=='tambahkendaraan'){
		include('module/tambahkendaraan.php');
// Bagian Lokasi
	}else if($module=='lokasi'){
		include('module/lokasi.php');
	}else if($module=='editlokasi'){
		include('module/editlokasi.php');
	}else if($module=='tambahlokasi'){
		include('module/tambahlokasi.php');
// Bagian Kategori
	}else if($module=='kategori'){
		include('module/kategori.php');
	}else if($module=='editkategori'){
		include('module/editkategori.php');
	}else if($module=='tambahkategori'){
		include('module/tambahkategori.php');
// Bagian GatePass
	}else if($module=='gatepass'){
		include('module/gatepass.php');
	}else if($module=='editgatepass'){
		include('module/editgatepass.php');
	}else if($module=='tambahgatepass'){
		include('module/tambahgatepass.php');
	}else if($module=='print'){
		include('module/print.php');
		// ---------------
	
		}else{
		echo"module <strong>$module</strong> belum diisi";
		}
	
?>