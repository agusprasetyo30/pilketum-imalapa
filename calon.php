<?php
	include("koneksi/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="./assets/css/style.css">
   <title>Document</title>
</head>

<body>
   <!-- <div class="justify-content-center"> -->
   <div class="container valign ">
      <h2 class="text-center">CALON KETUA UMUM IMALAPA TUBAN</h2>
      <div class="row mt-5 animasi" style="text-align: center;">
      <?php 
         $query = mysqli_query($koneksi, "SELECT * FROM calon");

         foreach ($query as $data) {
      ?>
         <div class="col-md-4 ">
            <a href="konfirmasi.php?id=<?=$data['id_calon']?>" class="listcalon" onclick="return confirm('Apakah anda yakin memilih pasangan calon nomer <?=$data['id_calon']?> ?')">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card" style="border: 1px solid #5f5f5fea;">
                        <div class="card text-white bg-primary ">
                              <h2><?=$data['id_calon']?></h2>
                        </div>
                        <img class="card-img-bottom" style="width: 100%;border-bottom: 1px solid #5f5f5fea;" height="300" src="./assets/img/<?=$data['gambar']?>" title="<?=$data['nama']?>">
                        <div class=" card-body p-3">
                           <h4 class="card-text""><?=$data['nama']?></h4>
                        </div>
            </a>
            <div class="card-footer p-3" style="border-top: 1px solid #5f5f5fea;">
               <a href="konfirmasi.php?id=<?=$data['id_calon']?>" onclick="return confirm('Apakah anda yakin memilih pasangan calon nomer <?=$data['id_calon']?> ?')" class="btn btn-block btn-success">PILIH</a>
            </div>
         </div>
      </div>
   </div>
   </div>
         <?php } ?>
   <!--  -->
   
   </div>
   </div>
</body>

</html>