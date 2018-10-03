<?php
   include "koneksi/koneksi.php";

   
   class suara{ 
      
      function __construct(){
         $this->koneksi = mysqli_connect("localhost", "root", "", "pilketum_imalapa") or trigger_error(mysqli_error(), E_USER_NOTICE);
      }
      
      function pilihCalon($id){
         global $koneksi;
            
         $q = "INSERT INTO suara VALUES('', '$id')";
         $query = mysqli_query($this->koneksi, $q);
         return mysqli_affected_rows($this->koneksi);
      }

      function totalpemilih(){
         $q = "SELECT count(*) as 'jumlah' FROM suara";
         $query = mysqli_query($this->koneksi, $q);
         $result = mysqli_fetch_assoc($query);
         return $result['jumlah'];
      }
   }

   class calon extends suara{
      function kandidat($id){
         $q = "SELECT count(*) as 'calon1' FROM suara WHERE id_calon = '$id' ";
         $query = mysqli_query($this->koneksi, $q);
         $result = mysqli_fetch_assoc($query);
         return $result['calon1'];
      }
   
   }
?>