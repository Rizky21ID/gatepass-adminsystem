<?php 
	$id_lokasi			=$_GET['id_lokasi'];
	$query=mysql_query("SELECT * FROM lokasi WHERE id_lokasi='$id_lokasi'");
	
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
	<title>HALAMAN EDIT PETUGAS</title>
	<body>
	<P>&nbsp;</p><P>&nbsp;</p><p>&nbsp;</p>
	<h2>EDIT DATA LOKASI</h2>
	<form name="form1" method="post" action="http://localhost/gatepass/aksi/updatelokasi.php">
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
	<input type="Hidden" name="id_lokasi" value="<?php echo $id_lokasi; ?>" />
	<table>
	<tr>
	<td>Kode Lokasi</td>
	<td> <input type="text" class="w3-input w3-animate-input" style="width:30%" name="kd_lokasi" value="<?php echo $row['kd_lokasi']; ?>" size="40"> </td>
	</tr>	<tr>
	<td>Nama Lokasi</td>
	<td> <input type="text" class="w3-input w3-animate-input" style="width:30%" name="nama_lokasi" value="<?php echo $row['nama_lokasi']; ?>" size="40"> </td>
	</tr>
	<tr>
	<td colspan=2><input type="submit" class="w3-btn w3-green" value="Update"></td>
	<td><input value="Kembali" type="button" onclick="self.history.back ()" class="w3-btn w3-red"/></td>
	<td><a type="button" href="http://localhost/gatepass/aksi/deletelokasi.php?id_jenis=<?php echo $_GET['id_lokasi'] ?>" class="w3-btn w3-red">Hapus</a></td>
	</tr>
	<?php } ?>
	</table></form>
	</body>
	</html>