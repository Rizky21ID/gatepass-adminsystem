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

<?php
	switch($_GET['act']){
		default:
			echo"<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
			echo"<div id='judulKanan'><center><h2>DATA PETUGAS</h2></center></div>";			
			echo"<a href='?module=tambahpetugas' class='tbl_tambah'><img src='images/add.png' width='50px' heigth='50px'></a></br></br>";
			$sql = mysql_query(" SELECT * FROM petugas ");
			echo"<table cellpadding='0' cellspacing='0' border='0' class='w3-table w3-bordered display' id='example' width='100%'>";
			echo"<thead>";
				echo"<tr class='w3-teal'>
					<th align='center'>No</th>
					<th align='center'>Kode Petugas</th>
					<th align='center'>Nama Petugas</th>
					<th align='center'>Jenis Kelamin</th>
					<th align='center'>No HP</th>
					<th align='center'>Jabatan</th>
					<th align='center'>Edit</th>
					<th align='center'>Hapus</th>
				</tr>";
			echo"</thead>";
			echo"<tbody>";
				$no=1;
					while($r=mysql_fetch_assoc($sql)){
						echo"<tr>
							<td align='center'>$no</td>
							<td align='center'>$r[username]</td>
							<td>$r[nama_petugas]</td>
							<td>$r[jklm]</td>
							<td>$r[hp]</td>
							<td>$r[level]</td>
							<td align='center'>
									<a href='?module=editpetugas&id_petugas=$r[id_petugas]'><img src='images/edit.png' width='15px' heigth='15px'></a>
							</td>
							<td align='center'>
									<a href='http://localhost/gatepass/aksi/deletepetugas.php?id_petugas=$r[id_petugas]' class='hapus'><img src='images/hapus.png' width='15px' heigth='15px'></a>
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