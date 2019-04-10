<?php
error_reporting (0);
 ob_start();
	include "../config/koneksi.php";
	mysql_query("delete from pemilik where id_pemilik='$_GET[id_pemilik]'");
	header ('location:http://localhost/gatepass/media.php?module=pemilik');
?>