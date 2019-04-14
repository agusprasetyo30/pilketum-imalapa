<?php
include "class.php";
include "./koneksi/koneksi.php";
$suara = new suara;
$id = $_GET['id'];   
$pilihCalon = $suara->pilihCalon($id);
   if ($pilihCalon > 0) {
      header("Location:/pilketum-imalapa/?pesan=true");
      exit;
   }else{
      echo "<script>
         alert('Tidak sukses');
      </script>";
      echo mysqli_error($suara->koneksi);
   }
?>