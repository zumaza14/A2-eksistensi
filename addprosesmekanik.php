<?php
ob_start();
  include_once("koneksi.php");
  include_once("helper.php");
  
       $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
     
 
 
     $query = mysqli_query($koneksi, "INSERT INTO mekanik(nama,alamat,no_hp) VALUES ('$nama','$alamat','$no_hp')
     ");
      
  if($query){
      header("location: ".base."mekanik.php?respon=true");
      
  }else{
      echo "gagal";
  }
  
  
  ?>
 