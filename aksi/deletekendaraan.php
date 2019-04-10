<?php
error_reporting (0);
 ob_start();
	include "../config/koneksi.php";
	mysql_query("delete from kendaraan where id_kendaraan='$_GET[id_kendaraan]'");
	header ('location:http://localhost/gatepass/media.php?module=kendaraan');
?>