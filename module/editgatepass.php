<?php 
	$now="Y-m-d";
	$id_gatepass=$_GET['id_gatepass'];

	//$sql = mysql_query("SELECT * FROM gatepass");
	//$ex = mysql_query("SELECT g.id_gatepass, (SELECT nama_kategori FROM kategori j WHERE g.kategori_id=j.id_kategori) AS kategori_id, g.tgl_expired, (SELECT no_plat FROM kendaraan k WHERE g.kendaraan_id=k.id_kendaraan) AS kendaraan_id, (SELECT kd_lokasi FROM lokasi l WHERE g.lokasi_id=l.id_lokasi) AS lokasi_id, (SELECT username FROM petugas p WHERE g.petugas_id=p.id_petugas) AS petugas_id  FROM gatepass g")
	$ex = mysql_query("SELECT gatepass.*,kategori.nama_kategori,kendaraan.no_plat,lokasi.nama_lokasi,petugas.nama_petugas FROM gatepass Inner Join kategori ON gatepass.kategori_id=kategori.id_kategori Inner Join kendaraan ON gatepass.kendaraan_id=kendaraan.id_kendaraan Inner Join lokasi ON gatepass.lokasi_id=lokasi.id_lokasi Inner Join petugas ON gatepass.petugas_id=petugas.id_petugas WHERE id_gatepass='$id_gatepass'");
  
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
	<input type="hidden" name="id_gatepass" value="<?php echo $id_gatepass; ?>" />
	<table>

	<tr>
	<td>Petugas</td>
	<td> 
	
	
	<select name="petugas" id="petugas" class="w3-input w3-animate-input">	
	<?php
		$ptgs=$row['petugas_id'];
		$sqlp = mysql_query("SELECT * FROM petugas");
			while($x=mysql_fetch_array($sqlp)){
				if($x['id_petugas']==$row['petugas_id']){?>
				<option value="<?php echo $x['id_petugas'];?>" selected><?php echo $x['nama_petugas'];?></option>
				<?php }else{?>
				<option value="<?php echo $x['id_petugas'];?>"><?php echo $x['nama_petugas'];?></option>	
				<?php }	
			}?>
	</select>
	</td>
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
	<td> 
	<select name="lokasi" id="lokasi" class="w3-input w3-animate-input">	
	<?php
		$lok=$row['lokasi_id'];
		$sqll = mysql_query("SELECT * FROM lokasi");
			while($l=mysql_fetch_array($sqll)){
				if($l['id_lokasi']==$row['lokasi_id']){?>
				<option value="<?php echo $l['id_lokasi'];?>" selected><?php echo $l['nama_lokasi'];?></option>
				<?php }else{?>
				<option value="<?php echo $l['id_lokasi'];?>"><?php echo $l['nama_lokasi'];?></option>	
				<?php }	
			}?>
	</select>
	</td>
	</tr>

	<tr>
	<td>Kategori</td>
	<td> 
	<select name="kategori" id="kategori" class="w3-input w3-animate-input">	
	<?php
		$kat=$row['kategori_id'];
		$sqlk = mysql_query("SELECT * FROM kategori");
			while($k=mysql_fetch_array($sqlk)){
				if($k['id_kategori']==$row['kategori_id']){?>
				<option value="<?php echo $k['id_kategori'];?>" selected><?php echo $k['nama_kategori'];?></option>
				<?php }else{?>
				<option value="<?php echo $k['id_kategori'];?>"><?php echo $k['nama_kategori'];?></option>	
				<?php }	
			}?>
	</select>
	</td>
	</tr>

	<tr>
	<td>Nomer Plat</td>
	<td> 
	<select name="kendaraan" id="kendaraan" class="w3-input w3-animate-input">	
	<?php
		$kat=$row['kendaraan_id'];
		$sqlkd = mysql_query("SELECT * FROM kendaraan");
			while($kd=mysql_fetch_array($sqlkd)){
				if($kd['id_kendaraan']==$row['kendaraan_id']){?>
				<option value="<?php echo $kd['id_kendaraan'];?>" selected readonly="true"><?php echo $kd['no_plat'];?></option>
				<?php }else{?>
				<option value="<?php echo $kd['id_kendaraan'];?>" readonly><?php echo $kd['no_plat'];?></option>	
				<?php }	
			}?>
	</select>
	</td>
	</tr>
	<tr>
	<td>Pemilik</td>
	<td> 
	<select name="pemilik" id="pemilik" class="w3-input w3-animate-input">
	<?php
		$kat=$row['pemilik_id'];
		$sqlpm = mysql_query("SELECT * FROM pemilik");
			while($pm=mysql_fetch_array($sqlpm)){
				if($pm['id_pemilik']==$row['pemilik_id']){?>
				<option value="<?php echo $pm['id_pemilik'];?>" selected readonly="true"><?php echo $pm['nama_pemilik'];?></option>
				<?php }else{?>
				<option value="<?php echo $pm['id_pemilik'];?>" readonly><?php echo $pm['nama_pemilik'];?></option>	
				<?php }	
			}?>
	</select>
	</td>
	</tr>

	<tr>
	<td colspan=2><input type="submit" class="w3-btn w3-green" value="Update"></td>
	<td><input value="Kembali" type="button" onclick="self.history.back ()" class="w3-btn w3-red"/></td>
	<td><a type="button" href="http://localhost/gatepass/aksi/deletegatepass.php?id_gatepass=<?php echo $_GET['id_gatepass'] ?>" class="w3-btn w3-red">Hapus</a></td>
	</tr>
	<?php } ?>
	</table></form>
	</body>
	</html>