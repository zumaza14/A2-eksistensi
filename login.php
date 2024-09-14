<?php
    include_once("koneksi.php");
    
    
    $user = $_GET['user'];
    $pasw = $_GET['pasw'];
    
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND pasw='$pasw'");
    $num = mysqli_num_rows($query);
    
    if($num > 0){
        echo "berhasil";
        
    }else{
        echo "gagal";
    }



?>