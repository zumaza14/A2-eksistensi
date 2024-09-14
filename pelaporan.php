<?php
    include_once("koneksi.php");
    
    
    $nopol = $_GET['nopol'];
    $tgl = $_GET['tgl'];
     $name = $_GET['name'];
    $kernet = $_GET['kernet'];
     $ket = $_GET['ket'];
      $merk = $_GET['merk'];
      $mekanik = "";
      $sparepart = "";
    
    
    $query = mysqli_query($koneksi, "INSERT INTO pelaporan(nopol,nick_name,merk,kernet,tanggal,ket,sparepart,mekanik) VALUES ('$nopol','$name','$merk','$kernet','$tgl','$ket','$sparepart','$mekanik')");
    
    
    if($query){
        echo "berhasil";
        
    }else{
        echo "gagal";
    }



?>