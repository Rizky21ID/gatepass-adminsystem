<?php
error_reporting (0);
 ob_start();
	include "../config/koneksi.php";
	mysql_query("delete from petugas where id_petugas='$_GET[id_petugas]'");
	header ('location:http://localhost/gatepass/media.php?module=petugas');
?>