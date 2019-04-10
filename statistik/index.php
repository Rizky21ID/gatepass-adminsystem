<!doctype html>
<html>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>

<head>
	<title>Statistik Gatepass</title>
	<script src="chartjs/Chart.bundle.js"></script>
	<script src="chartjs/samples/utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
</head>

<body>
	<div id="container" style="width: 75%;">
		<canvas id="canvas"></canvas>
	</div>
	
	<?php 
	include 'konekgp.php';
	?>

	<script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			datasets: [{
				label: 'POMI',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					<?php 
					$jumlah_januari_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=1");
					echo mysqli_num_rows($jumlah_januari_pomi);
					?>
					,
					<?php 
					$jumlah_februari_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=2");
					echo mysqli_num_rows($jumlah_februari_pomi);
					?>,
					<?php 
					$jumlah_maret_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=3");
					echo mysqli_num_rows($jumlah_maret_pomi);
					?>,
					<?php 
					$jumlah_april_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=4");
					echo mysqli_num_rows($jumlah_april_pomi);
					?>,
					<?php 
					$jumlah_mei_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=5");
					echo mysqli_num_rows($jumlah_mei_pomi);
					?>,
					<?php 
					$jumlah_juni_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=6");
					echo mysqli_num_rows($jumlah_juni_pomi);
					?>,
					<?php 
					$jumlah_juli_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=7");
					echo mysqli_num_rows($jumlah_juli_pomi);
					?>,
					<?php 
					$jumlah_agustus_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=8");
					echo mysqli_num_rows($jumlah_agustus_pomi);
					?>,
					<?php 
					$jumlah_september_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=9");
					echo mysqli_num_rows($jumlah_september_pomi);
					?>,
					<?php 
					$jumlah_oktober_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=10");
					echo mysqli_num_rows($jumlah_oktober_pomi);
					?>,
					<?php 
					$jumlah_november_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=11");
					echo mysqli_num_rows($jumlah_november_pomi);
					?>,
					<?php 
					$jumlah_desember_pomi = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  FROM gatepass g WHERE kategori_id like '1' && MONTH(tgl_update)=12");
					echo mysqli_num_rows($jumlah_desember_pomi);
					?>
				]
			}, {
				label: 'Contractor',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					<?php 
					$jumlah_januari_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=1");
					echo mysqli_num_rows($jumlah_januari_kontraktor);
					?>
					,
					<?php 
					$jumlah_februari_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=2");
					echo mysqli_num_rows($jumlah_februari_kontraktor);
					?>,
					<?php 
					$jumlah_maret_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=3");
					echo mysqli_num_rows($jumlah_maret_kontraktor);
					?>,
					<?php 
					$jumlah_april_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=4");
					echo mysqli_num_rows($jumlah_april_kontraktor);
					?>,
					<?php 
					$jumlah_mei_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=5");
					echo mysqli_num_rows($jumlah_mei_kontraktor);
					?>,
					<?php 
					$jumlah_juni_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=6");
					echo mysqli_num_rows($jumlah_juni_kontraktor);
					?>,
					<?php 
					$jumlah_juli_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=7");
					echo mysqli_num_rows($jumlah_juli_kontraktor);
					?>,
					<?php 
					$jumlah_agustus_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=8");
					echo mysqli_num_rows($jumlah_agustus_kontraktor);
					?>,
					<?php 
					$jumlah_september_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=9");
					echo mysqli_num_rows($jumlah_september_kontraktor);
					?>,
					<?php 
					$jumlah_oktober_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=10");
					echo mysqli_num_rows($jumlah_oktober_kontraktor);
					?>,
					<?php 
					$jumlah_november_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=11");
					echo mysqli_num_rows($jumlah_november_kontraktor);
					?>,
					<?php 
					$jumlah_desember_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=12");
					echo mysqli_num_rows($jumlah_desember_kontraktor);
					?>
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Data Statistik Gatepass'
					}
				}
			});

		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			var zero = Math.random() > 1 ? true : true;
			barChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return zero ? 1 : randomScalingFactor();
				});

			});
			window.myBar.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[barChartData.datasets.length % colorNames.length];
			var dsColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + barChartData.datasets.length,
				backgroundColor: color(dsColor).alpha(0.5).rgbString(),
				borderColor: dsColor,
				borderWidth: 1,
				data: []
			};

			for (var index = 0; index < barChartData.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			barChartData.datasets.push(newDataset);
			window.myBar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (barChartData.datasets.length > 0) {
				var month = MONTHS[barChartData.labels.length % MONTHS.length];
				barChartData.labels.push(month);

				for (var index = 0; index < barChartData.datasets.length; ++index) {
					// window.myBar.addData(randomScalingFactor(), index);
					barChartData.datasets[index].data.push(randomScalingFactor());
				}

				window.myBar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			barChartData.datasets.splice(0, 1);
			window.myBar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			barChartData.labels.splice(-1, 1); // remove the label first

			barChartData.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myBar.update();
		});
	</script>
	<td><button onclick="window.print()" class="button button1" id="print" data-placement="top" title="Click to Print">Print Statistik</button></p>
<a href="../media.php?module=gatepass" class="button button1" id="kembali" data-placement="top" title="Click to Print">Kembali</a></p></td>


</body>

</html>
