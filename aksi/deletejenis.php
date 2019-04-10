<?php
error_reporting (0);
 ob_start();
	include "../config/koneksi.php";
	mysql_query("delete from jenis_kendaraan where id_jenis='$_GET[id_jenis]'");
	header ('location:http://localhost/gatepass/media.php?module=jenis');
?>