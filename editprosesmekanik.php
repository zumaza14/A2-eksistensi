<?php
ob_start();
  include_once("helper.php");
  include_once("koneksi.php");
  
       $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    
 
     $query = mysqli_query($koneksi, "UPDATE mekanik SET 
      alamat='$alamat',
      no_hp='$no_hp' WHERE nama='$nama'
     ");
      
  if($query){
     header("location: ".base."mekanik.php?respon=true");
      
  }else{
      echo "gagal";
  }
  
  
  ?>
 