<?php
	if (isset($_GET['pesan'])) {
		$pesan = $_GET['pesan'];
	}else{
		$pesan = 'false';
    }
?>
<!doctype html>
<html lang="en">

<head>
   <title>Title</title>
   <meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="./assets/css/style.css">
	<!-- <link href="./assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/simple-line-icons.css" rel="stylesheet"> -->
</head>

<body>
	
   <div class="alert alert-success text-center" id="tampilanSukses">Pemilihan sukses</div>
	<div class="container valign">
      <div class="row justify-content-center animasi">
         <div class="col-sm-5 col-md-5 col-lg-5 shadow-lg bayangan">
            <div class="card text-white bg-primary">
               <h4 class="card-text p-2 text-center">LOGIN AREA </h4>
               <div class="card text-center text-dark p-3">
                  <button onclick="window.location.href='calon.php'" id="tombol" class="btn btn-primary btn-block login" disabled>
							TEKAN UNTUK MEMILIH 
                  </button>
                  <p class="alert alert-info" id="timeLeft">&nbsp;</p>
               </div>
            </div>
         </div>
      </div>
	</div>
	<div class="bawah">
		<a href="admin">admin</a>
	</div>
	<div class="footer">
		<div class="container">
			<span class="text-body">Footer</span>
		</div>
</div>
   <!-- <script src="./assets/js/jquery-slim.min.js"></script> -->
   <script src="./assets/js/jquery-3.3.1.min.js"></script>
   <script src="./assets/js/popper.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
   <?php
	?>
   <script>
      let a = <?= $pesan ?>;
      if (a === true) {
         setTimeout(function () {
            $('#tampilanSukses').fadeOut('slow');
         }, 3000);
      } else {
         document.getElementById("tampilanSukses").style.display = "none";
      }

      window.onload = function () {

         setTimeout(() => {
            document.getElementById("tombol").disabled = null;
         }, 6000);

         let detik = 5;
         hitungDetik();

         function hitungDetik() {
            setTimeout(() => {
               if (detik != 0) {
                  document.getElementById("timeLeft").innerHTML = 'Tunggu dalam ' + detik + ' detik';
                  hitungDetik();
                  detik--;
               } else {
                  document.getElementById("timeLeft").innerHTML = 'Tombol berfungsi';
                  $("#timeLeft").fadeOut(1500);
               }
            }, 1000);
         }
      }
   </script>
</body>

</html>