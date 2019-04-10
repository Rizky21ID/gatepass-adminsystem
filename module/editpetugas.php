<?php 
	$id_petugas			=$_GET['id_petugas'];
	$query=mysql_query("SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
	
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
	<h2>EDIT DATA PETUGAS</h2>
	<form name="form1" method="post" action="http://localhost/gatepass/aksi/updatepetugas.php">
	<table border="0">
	<?php
	while ($row=mysql_fetch_array($query)){
		$jklm=$row['jklm'];
		$level=$row['level'];
	function active_radio_button($value,$input){
    $result =  $value==$input?'checked':'';
    return $result;
}
	?>
	<input type="Hidden" name="id_petugas" value="<?php echo $id_petugas; ?>" />
	<table>
	<tr>
	<td>Username</td>
	<td> <input type="text" class="w3-input w3-animate-input" name="username" value="<?php echo $row['username']; ?>" size="15"> </td>
	</tr>
	<tr>
	<td>Nama Petugas</td>
	<td> <input type="text" class="w3-input w3-animate-input" name="nama_petugas" value="<?php echo $row['nama_petugas']; ?>" size="30"> </td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td>
    <td>
        <input type="radio" name="jklm" value="laki-laki" <?php echo active_radio_button("Laki-Laki", $row['jklm'])?>>Laki Laki
        <input type="radio" name="jklm" value="perempuan" <?php echo active_radio_button("Perempuan", $row['jklm'])?>>Perempuan
    </td>
	</tr>
	<tr>
	<td>Agama</td>
	<td> <input type="text" class="w3-input w3-animate-input" name="agama" value="<?php echo $row['agama']; ?>" size="15"> </td>
	</tr>
	<tr>
	<td>Nomer HP</td>
	<td> <input type="text" class="w3-input w3-animate-input" name="hp" value="<?php echo $row['hp']; ?>" size="15"> </td>
	</tr>

	<tr>
	<td>Level</td>
    <td>
        <input type="radio" name="level" value="Admin" <?php echo active_radio_button("Admin", $row['level'])?>>Admin
        <input type="radio" name="level" value="Operator" <?php echo active_radio_button("Operator", $row['level'])?>>Operator
    </td>
	</tr>

	<tr>
	<td>Password</td>
	<td> <input type="text" class="w3-input w3-animate-input" style="width:30%" name="password" value="<?php echo $row['password']; ?>" size="15"> </td>
	</tr>
	<tr>
	<td colspan=2><input type="submit" class="w3-btn w3-green" value="Update"></td>
	<td><input value="Kembali" type="button" onclick="self.history.back ()" class="w3-btn w3-red"/></td>
	<td><a type="button" href="http://localhost/gatepass/aksi/deletepetugas.php?id_petugas=<?php echo $_GET['id_petugas'] ?>" class="w3-btn w3-red">Hapus</a></td>
	</tr>
	<?php } ?>
	</table></form>
	</body>
	</html>