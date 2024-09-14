<?php
ob_start();
    include_once("koneksi.php");
    include_once("helper.php");
    
    
    $user = $_GET['user'];
    $pasw = $_GET['pasw'];
    
    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE user='$user' AND pasw='$pasw'");
    $num = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    
    
    if($num > 0){
      
      session_start();
      $_SESSION['user'] = $row['user'];
      header("location: ".base."index.php");
      
        
    }else{
        header("location: ".base."login.html?respon=true");
    }



?>