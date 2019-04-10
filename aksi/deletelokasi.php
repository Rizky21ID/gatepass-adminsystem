<?php
error_reporting (0);
 ob_start();
	include "../config/koneksi.php";
	mysql_query("delete from lokasi where id_lokasi='$_GET[id_lokasi]'");
	header ('location:http://localhost/gatepass/media.php?module=lokasi');
?>