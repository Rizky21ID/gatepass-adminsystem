<?php 
	$now="Y-m-d";
	$id_gatepass			=$_GET['id_gatepass'];

	$sql = mysql_query("SELECT * FROM gatepass");
	$ex = mysql_query("SELECT g.id_gatepass, (SELECT nama_kategori FROM kategori j WHERE g.kategori_id=j.id_kategori) AS kategori_id, g.tgl_expired, (SELECT no_plat FROM kendaraan k WHERE g.kendaraan_id=k.id_kendaraan) AS kendaraan_id, (SELECT kd_lokasi FROM lokasi l WHERE g.lokasi_id=l.id_lokasi) AS lokasi_id, (SELECT username FROM petugas p WHERE g.petugas_id=p.id_petugas) AS petugas_id  FROM gatepass g")
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
	<title>HALAMAN EDIT GATEPASS</title>
	<body>
	<P>&nbsp;</p><P>&nbsp;</p><p>&nbsp;</p>
	<h2>EDIT DATA GATEPASS</h2>
	<form name="form1" method="post" action="http://localhost/gatepass/aksi/updategatepass.php">
	<table border="0">
	<?php
	while ($row=mysql_fetch_array($ex)){
	function active_radio_button($value,$input){
}
	?>
	<input type="Hidden" name="id_gatepass" value="<?php echo $id_gatepass; ?>" />
	<table>

	<tr>
	<td>Petugas</td>
	<td> <input type="text" class="w3-input w3-animate-input" name="petugas" value="<?php echo $row['petugas_id']; ?>" size="30" readonly> </td>
	</tr>

	<tr>
	<td>Tanggal Expired</td>
	<td> <input type="date" class="w3-input w3-animate-input" name="tgl_expired" value="<?php echo $row['tgl_expired']; ?>" size="30"> </td>
	</tr>

	<tr>
	<td>Tanggal Perubahan</td>
	<td> <input type="date" class="w3-input w3-animate-input" name="tgl_update" value="<?php echo date($now); ?>" size="30"> </td>
	</tr>

	<tr>
	<td>Lokasi</td>
	<td> <input type="text" class="w3-input w3-animate-input" name="lokasi" value="<?php echo $row['lokasi_id']; ?>" size="30" readonly> </td>
	</tr>

	<tr>
	<td>Kategori</td>
	<td> <input type="text" class="w3-input w3-animate-input" name="kategori" value="<?php echo $row['kategori_id']; ?>" size="30" readonly> </td>
	</tr>

	<tr>
	<td>Nomer Plat</td>
	<td> <input type="text" class="w3-input w3-animate-input" name="kendaraan" value="<?php echo $row['kendaraan_id']; ?>" size="30" readonly> </td>
	</tr>

	<tr>
	<a href="#" onclick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a></p>
	</tr>
	<?php } ?>
	</table></form>
	</body>
	</html>