<?php
error_reporting (0);
 ob_start();
	include "../config/koneksi.php";
	mysql_query("delete from kategori where id_kategori='$_GET[id_kategori]'");
	header ('location:http://localhost/gatepass/media.php?module=kategori');
?>