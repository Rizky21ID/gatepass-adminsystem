<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
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
<h2>INPUT DATA KENDARAAN</h2></div>
<form name="form1" method="post" action="http://localhost/gatepass/aksi/simpankendaraan.php">
<table>
<tr>
<td>No Plat</td>
<td><input class="w3-input w3-animate-input" style="width:30%" type="text" name="plat" size="15"/></td>
</tr>
<tr>
<td>Merek</td>
<td><input class="w3-input w3-animate-input" style="width:70%" type="text" name="merek" size="30"/></td>
</tr>
<?php
echo"<tr>
							<td>Jenis Kendaraan</td>
							<td>";
								echo"<select class='w3-input w3-animate-input' name='nama_jenis'>";
									$sql = mysql_query(" SELECT * FROM jenis_kendaraan");
									while($r = mysql_fetch_assoc($sql)){
										echo"<option value='$r[id_jenis]'>$r[nama_jenis]</option>";
									}
								echo"</select>";
					echo"</td></tr>";
?>
<?php
echo"<tr>
							<td>Nama Pemilik</td>
							<td>";
								echo"<select class='w3-input w3-animate-input' name='nama_pemilik'>";
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