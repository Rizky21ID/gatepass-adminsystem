<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
<?php
$now="Y-m-d";
?>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><div>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<h2>INPUT DATA GATEPASS</h2></div>
<form name="form1" method="post" action="http://localhost/gatepass/aksi/simpangatepass.php">
<table>

<input type="hidden" name="petugas" value="<?php echo"$_SESSION[id_petugas]"; ?>" />

<tr>
<td>Tanggal Expired</td>
<td><input class="w3-input w3-animate-input" type="date" name="tgl_expired" size="30"/></td>
</tr>

<tr>
<td>Tanggal Perubahan</td>
<td><input class="w3-input w3-animate-input" type="date" name="tgl_update" value="<?php echo date($now); ?>" size="30"/></td>
</tr>

<?php
echo"<tr>
							<td>Lokasi</td>
							<td>";
								echo"<select class='w3-input w3-animate-input' name='lokasi'>";
									$sql = mysql_query(" SELECT * FROM lokasi");
									while($r = mysql_fetch_assoc($sql)){
										echo"<option value='$r[id_lokasi]'>$r[kd_lokasi]</option>";
									}
								echo"</select>";
					echo"</td></tr>";
?>
<?php
echo"<tr>
							<td>Kategori</td>
							<td>";
								echo"<select class='w3-input w3-animate-input' name='kategori'>";
									$sql = mysql_query(" SELECT * FROM kategori");
									while($r = mysql_fetch_assoc($sql)){
										echo"<option value='$r[id_kategori]'>$r[nama_kategori]</option>";
									}
								echo"</select>";
					echo"</td></tr>";
?>
<?php
echo"<tr>
							<td>No Plat</td>
							<td>";
								echo"<select class='w3-input w3-animate-input' name='kendaraan'>";
									$sql = mysql_query(" SELECT * FROM kendaraan");
									while($r = mysql_fetch_assoc($sql)){
										echo"<option value='$r[id_kendaraan]'>$r[no_plat]</option>";
									}
								echo"</select>";
					echo"</td></tr>";
?>
<?php
echo"<tr>
							<td>Pemilik Kendaraan</td>
							<td>";
								echo"<select class='w3-input w3-animate-input' name='pemilik'>";
									$sql = mysql_query(" SELECT * FROM pemilik");
									while($r = mysql_fetch_assoc($sql)){
										echo"<option value='$r[id_pemilik]'>$r[nama_pemilik]</option>";
									}
								echo"</select>";
					echo"</td></tr>";
?>
<td><input value="Simpan" type="submit" class="w3-btn w3-green"/></td>
<td><input value="Ulangi" type="reset" class="w3-btn w3-red"/></td>
<td><input value="Kembali" type="button" onclick="self.history.back ()" class="w3-btn w3-red"/>
</td>
</table>
</body>
</html>