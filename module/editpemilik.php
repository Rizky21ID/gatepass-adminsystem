<?php 
	$id_pemilik			=$_GET['id_pemilik'];
	$query=mysql_query("SELECT * FROM pemilik WHERE id_pemilik='$id_pemilik'");
	
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
	<title>HALAMAN EDIT PEMILIK</title>
	<body>
	<P>&nbsp;</p><P>&nbsp;</p><p>&nbsp;</p>
	<h2>EDIT DATA PEMILIK</h2>
	<form name="form1" method="post" action="http://localhost/gatepass/aksi/updatepemilik.php">
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
	<input type="Hidden" name="id_pemilik" value="<?php echo $id_pemilik; ?>" />
	<table>
	<tr>
	<td>Nama Pemilik</td>
	<td> <input type="text" class="w3-input w3-animate-input" style="width:30%" name="nama_pemilik" value="<?php echo $row['nama_pemilik']; ?>" size="40"> </td>
	</tr>
	<tr>
	<td colspan=2><input type="submit" class="w3-btn w3-green" value="Update"></td>
	<td><input value="Kembali" type="button" onclick="self.history.back ()" class="w3-btn w3-red"/></td>
	<td><a type="button" href="http://localhost/gatepass/aksi/deletepemilik.php?id_pemilik=<?php echo $_GET['id_pemilik'] ?>" class="w3-btn w3-red">Hapus</a></td>
	</tr>
	<?php } ?>
	</table></form>
	</body>
	</html>