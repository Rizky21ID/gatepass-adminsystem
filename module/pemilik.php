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
			echo"<div id='judulKanan'><center><h2>DATA PEMILIK</h2></center></div>";			
			echo"<a href='?module=tambahpemilik' class='tbl_tambah'><img src='images/add.png' width='50px' heigth='50px'></a></br></br>";
			$sql = mysql_query(" SELECT * FROM pemilik ");
			echo"<table cellpadding='0' cellspacing='0' border='0' class='w3-table w3-bordered display' id='example' width='100%'>";
			echo"<thead>";
				echo"<tr class='w3-teal'>
					<th align='center'>No</th>
					<th align='center'>ID Jenis</th>
					<th align='center'>Nama Pemilik</th>
					<th align='center'>Edit</th>
					<th align='center'>Hapus</th>
				</tr>";
			echo"</thead>";
			echo"<tbody>";
				$no=1;
					while($r=mysql_fetch_assoc($sql)){
						echo"<tr>
							<td align='center'>$no</td>
							<td align='center'>$r[id_pemilik]</td>
							<td>$r[nama_pemilik]</td>
							<td align='center'>
									<a href='?module=editpemilik&id_pemilik=$r[id_pemilik]'><img src='images/edit.png' width='15px' heigth='15px'></a>
							</td>
							<td align='center'>
									<a href='http://localhost/gatepass/aksi/deletepemilik.php?id_pemilik=$r[id_pemilik]' class='hapus'><img src='images/hapus.png' width='15px' heigth='15px'></a>
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