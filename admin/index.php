<?php
   ini_set("display_errors", 0);
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
<div class="container valign">
      <div class="row justify-content-center animasi">
         <div class="col-sm-5 col-md-5 col-lg-5 shadow-lg bayangan">
            <div class="card text-white bg-primary">
               <h4 class="card-text p-2 text-center">LOGIN ADMIN</h4>
               <div class="card text-center text-dark p-3">
               <form action="" method="post">
                  <input type="password" class="form-control" autofocus="on" autocomplete="off" name="input_sandi" placeholder="Masukan kata sandi" required>
                  <input type="submit" class="btn btn-block btn-primary" name="login" value="LOGIN">
                  <a href="../" class="btn btn-block btn-warning">KEMBALI</a>
               </form>
               <?php
                  $input = $_POST['input_sandi'];
                  if (isset($_POST['login'])) {
                     if ($input === 'akulogin123') {
                        echo "<script>
                           window.location.href = 'beranda.php';
                        </script>";
                     }
                  }
               ?>
               </div>
            </div>
         </div>
      </div>
	</div>
</body>
</html>