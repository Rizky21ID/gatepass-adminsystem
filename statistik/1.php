<!doctype html>
<html>

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
<h1>Terkoneksi dengan database</h1>
	<div id="container" style="width: 75%;">
		<canvas id="canvas"></canvas>
	</div>
	
	<?php 
	include 'konekgp.php';
	?>
				<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from gatepass");
			while($d=mysqli_fetch_array($data)){
				?>
	<script>
		var MONTHS = ['January'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['January'],
			datasets: [{
				label: 'POMI',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					<?php $sql = "SELECT * FROM petugas"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
                      ?>
					
				]
			}, {
				label: 'Contractor',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					<?php $sql = "SELECT * FROM Ppetugas"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
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
			<?php } ?>
			
	</script>
					  <?php 
					$jumlah_januari_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=5");
					echo mysqli_num_rows($jumlah_januari_kontraktor);
					?>
					<?php 
					$jumlah_oktober_kontraktor = mysqli_query
					($koneksi,"SELECT (SELECT nama_kategori FROM kategori j WHERE j.id_kategori=g.kategori_id) AS kategori_id,(SELECT nama_pemilik FROM pemilik j WHERE j.id_pemilik=g.pemilik_id) AS pemilik_id, g.tgl_expired, tgl_update, MONTH(tgl_update) as 'bulan Update'  
					FROM gatepass g WHERE kategori_id like '4%' && MONTH(tgl_update)=10");
					echo mysqli_num_rows($jumlah_oktober_kontraktor);
					?>
</body>

</html>
