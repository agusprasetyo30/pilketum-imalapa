<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Auto reload 2 detik -->
	<meta http-equiv="refresh" content="5">
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
					<li class="nav-item active">
						<a class="nav-link" href="beranda.php">Beranda</a>
					</li>
					<li class="nav-item">
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
		<div class="row justify-content-center">
			<?php
				
            ?>
			<div class="col-md-4">
			<div class="card text-white bg-dark">
               <h4 class="card-text p-2 text-center">Jumlah Pemilih keseluruhan</h4>
               <div class="card text-center text-dark" style="padding:70px;">
               <?php
							require "../class.php";
							$data = new suara;
							$jumlah = $data->totalpemilih();
						?>
                  <h1 style="font-size:60px;"><?=$jumlah?></h1> Orang
               </div>
         </div>
			</div>
		</div>
	</div>

	<script src="../assets/js/jquery-3.3.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/Chart.min.js"></script>


</body>

</html>