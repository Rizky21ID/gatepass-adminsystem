<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$('.hapus').click(function(){
			text = $(this).parents('tr').find('td').eq(1).html();
			var pesan = confirm("Nama petugas : "+text+"\nAkan dihapus ! \nLanjutkan?");
			if(pesan){
				return true;
			}else{
				return false;
			}
		})
	})
</script>
<?php $sql = "SELECT * FROM gatepass"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
                      ?>
<?php
	switch($_GET['act']){
		default:
			echo"<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
			echo"<div id='judulKanan'><center><h2>DATA GATEPASS<br></h2>";
			echo"Total Data Gatepass: $count </center></div>";			
			echo"<a href='?module=tambahgatepass' class='tbl_tambah'><img src='images/add.png' width='50px' heigth='50px'></a>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<a href='statistik' class='tbl_tambah'><img src='images/statistik.png' width='50px' heigth='50px'></a><br><br>";
			//$sql = mysql_query(" SELECT * FROM gatepass ");
			$sql = mysql_query(" SELECT id_gatepass, (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, (SELECT no_plat FROM kendaraan k WHERE k.id_kendaraan=g.kendaraan_id) AS kendaraan_id, (SELECT kd_lokasi FROM lokasi l WHERE l.id_lokasi=g.lokasi_id) AS lokasi_id, (SELECT username FROM petugas p WHERE p.id_petugas=g.petugas_id) AS petugas_id  FROM gatepass g;");
			echo"<table cellpadding='0' cellspacing='0' border='0' class='w3-table w3-bordered display' id='example' width='100%'>";
			echo"<thead>";
				echo"<tr class='w3-teal'>
					<th align='center'>No</th>
					<th align='center'>Kategori</th>
					<th align='center'>Pemilik</th>
					<th align='center'>Tanggal Expired</th>
					<th align='center'>Tanggal Perubahan</th>
					<th align='center'>No Plat</th>
					<th align='center'>Lokasi</th>
					<th align='center'>Petugas</th>
					<th align='center'>Edit</th>
					<th align='center'>Hapus</th>
				</tr>";
			echo"</thead>";
			echo"<tbody>";
				$no=1;
					while($row=mysql_fetch_assoc($sql)){
						echo"<tr>
							<td align='center'>$no</td>
							<td align='center'>$row[kategori_id]</td>
							<td align='center'>$row[pemilik_id]</td>
							<td>$row[tgl_expired]</td>
							<td>$row[tgl_update]</td>
							<td>$row[kendaraan_id]</td>
							<td>$row[lokasi_id]</td>
							<td>$row[petugas_id]</td>
							<td align='center'>
									<a href='?module=editgatepass&id_gatepass=$row[id_gatepass]'><img src='images/edit.png' width='15px' heigth='15px'></a>
							</td>
							<td align='center'>
									<a href='http://localhost/gatepass/aksi/deletegatepass.php?id_gatepass=$row[id_gatepass]' class='hapus'><img src='images/hapus.png' width='15px' heigth='15px'></a>
							</td>
							
							</tr>";
							$no++;
					}
					
					echo"</tbody>";
					echo"</table>";
					echo"<p>&nbsp;</p>";
					break;
					
					
	}
?>