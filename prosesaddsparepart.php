<?php
ob_start();
    include_once("koneksi.php");
    include_once("helper.php");
    
    
    $nopol = $_GET['nopol'];
    $tgl = $_GET['tgl'];
     $name = $_GET['name'];
    $kernet = $_GET['kernet'];
     $ket = $_GET['ket'];
      $merk = $_GET['merk'];
      $mekanik = $_GET['mekanik'];;
      $sparepart = $_GET['sparepart'];;
    
    
    $query = mysqli_query($koneksi, "INSERT INTO pelaporan(nopol,nick_name,merk,kernet,tanggal,ket,sparepart,mekanik) VALUES ('$nopol','$name','$merk','$kernet','$tgl','$ket','$sparepart','$mekanik')");
    
    
    if($query){
        header("location: ".base."order.php?respon=true");
        
    }else{
        echo "gagal";
    }



?>