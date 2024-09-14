<?php
ob_start();
    include_once("koneksi.php");
    include_once("helper.php");
    
    
    $nopol = $_GET['nopol'];
    $kerusakan = $_GET['kerusakan'];
     $rujukan = $_GET['rujukan'];
   
    
 
     $query = mysqli_query($koneksi, "INSERT INTO laporan_berat(nopol,kerusakan,rujukan) VALUES ('$nopol','$kerusakan','$rujukan')
     ");
      
  if($query){
      header("location: ".base."kerusakan_berat.php?respon=true");
      
  }else{
      echo "gagal";
  }
  
  
  ?>
 