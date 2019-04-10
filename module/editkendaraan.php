<?php 
	$id_kendaraan			=$_GET['id_kendaraan'];
	$query=mysql_query("SELECT * FROM kendaraan WHERE id_kendaraan='$id_kendaraan'");
	
	?>
	<html>
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
	<title>HALAMAN EDIT KENDARAA</title>
	<body>
	<P>&nbsp;</p><P>&nbsp;</p><p>&nbsp;</p>
	<h2>EDIT DATA KENDARAAN</h2>
	<form name="form1" method="post" action="http://localhost/gatepass/aksi/updatekendaraan.php">
	<table border="0">
	<?php
	while ($row=mysql_fetch_array($query)){
		$jklm=$row['jklm'];
		$level=$row['level'];
	function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
	?>
	<input type="Hidden" name="id_kendaraan" value="<?php echo $id_kendaraan; ?>" />
	<table>
	<tr>
	<td>Nomer Plat</td>
	<td> <input type="text" class="w3-input w3-animate-input" style="width:30%" name="no_plat" value="<?php echo $row['no_plat']; ?>" size="15"> </td>
	</tr>
	<tr>
	<td>Merek</td>
	<td> <input type="text" class="w3-input w3-animate-input" style="width:30%" name="merek" value="<?php echo $row['merek']; ?>" size="30"> </td>
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

	<tr>
	<td colspan=2><input type="submit" class="w3-btn w3-green" value="Update"></td>
	<td><input value="Kembali" type="button" onclick="self.history.back ()" class="w3-btn w3-red"/></td>
	<td><a type="button" href="http://localhost/gatepass/aksi/deletekendaraan.php?id_kendaraan=<?php echo $_GET['id_kendaraan'] ?>" class="w3-btn w3-red">Hapus</a></td>
	</tr>
	<?php } ?>
	</table></form>
	</body>
	</html>