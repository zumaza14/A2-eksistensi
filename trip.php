<?php
    include_once("koneksi.php");
    
    
    $nopol = $_GET['nopol'];
    $tgl = $_GET['tgl'];
     $name = $_GET['name'];
    $kernet = $_GET['kernet'];
     $ket = $_GET['ket'];
    
    
    $query = mysqli_query($koneksi, "INSERT INTO trip(nopol,tanggal,nick_name,kernet,ket) VALUES ('$nopol','$tgl','$name','$kernet','$ket')");
    
    
    if($query){
        echo "berhasil";
        
    }else{
        echo "gagal";
    }



?>