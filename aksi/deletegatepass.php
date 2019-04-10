<?php
error_reporting (0);
 ob_start();
	include "../config/koneksi.php";
	mysql_query("delete from gatepass where id_gatepass='$_GET[id_gatepass]'");
	header ('location:http://localhost/gatepass/media.php?module=gatepass');
?>