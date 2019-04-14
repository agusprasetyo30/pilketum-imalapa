<?php
	include("../koneksi/koneksi.php");
	include("../class.php");

	$query = mysqli_query($koneksi, "SELECT * FROM calon");
	$nama = mysqli_query($koneksi, "SELECT nama FROM calon");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="beranda.php">Pilketum Imalapa</a>
			<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
			        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="beranda.php">Beranda</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="chart.php">Jumlah perolehan suara</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../">Keluar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
			<div class="container valign">
				<h4 class="text-center m-2">Daftar jumlah perolehan suara Pilketum Imalapa Tuban periode 2018/2019</h4>
				<div class="row">
					<canvas id="myChart" width="200" height="50"></canvas>
				</div>
				<div class="container">
					<div class="row">
						<?php
							foreach ($query as $data) {
								$cln = new calon;				 
								?>
						<div class="col-md-4 justify-content-center">
							<div class="card text-white bg-primary">
									<h4 class="card-text p-2 text-center"><?=$data['nama']?></h4>
									<div class="card text-center text-dark kolom-jumlah">
										<?php
											$jumlah = $cln->kandidat($data['id_calon']);
											?>
										<h3><?=$jumlah?></h3> Orang
									</div>
							</div>
						</div>
							<?php } ?>
					</div>
				</div>
			</div>

	<script src="../assets/js/jquery-3.3.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/Chart.min.js"></script>

	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
					<?php
						while ($a = mysqli_fetch_array($nama)) {
							echo '"' .$a['nama']. '",';
						}	
					?>
				],
				datasets: [{
					label: 'Jumlah perolehan suara',
					data: [
						<?php
							foreach ($query as $data) {
								$id = $cln->kandidat($data['id_calon']);
								echo '"' .$id. '",';
							}
						?>
					],
					backgroundColor: [
						'rgba(255, 99, 132)',
						'rgba(54, 162, 235)',
						'rgba(255, 206, 86)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>

</body>

</html>