<?php

include_once("koneksi.php");

$namee = isset($_GET['nama']) ? $_GET['nama'] : false;
$respon = isset($_GET['respon']) ? $_GET['respon'] : false;



$query = mysqli_query($koneksi, "DELETE FROM mekanik WHERE nama='$namee'");




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo2.png" rel="icon">
  <title>Shantika - ADMIN</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <img src="img/logo/logo2.png" width="50"> <h5 style="margin:8px;color:white;font-family:sans-serif;">PO NEW SHANTIKA</h5>
          
          
          <ul class="navbar-nav ml-auto">
           
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
     
        <h3 style="text-align:center;">MAINTENANCE</h3>
        <h3 style="text-align:center;">PO NEW SHANTIKA</h3>
          <div stle="margin:30px;">
      
        <a href="https://shantika-admin.000webhostapp.com/admin" style="margin:10px;"><img src="home.png" widht="100" height="40"></a>
      
  </div>
        
        <hr/>
<!--konten-->
<?php 
if($respon == "true"){
echo "<div class='alert alert-success col-sm-6' role='alert' style='margin:10px;'>
  <h4 class='alert-heading'>Berhasil!</h4>
  <p>Berhasil menambahkan mekanik</p>
</div>";

}
if($respon == "delete"){
echo "<div class='alert alert-danger col-sm-6' role='alert' style='margin:10px;'>
  <h4 class='alert-heading'>Berhasil!</h4>
  <p>Berhasil menghapus mekanik</p>
</div>";

}
?>

<a href="addmekanik.php" type="button" class="btn btn-primary" style="margin:10px;">+Tambah Mekanik</a>

<div class="overflow-x-auto" style="overflow-x: scroll;margin:10px;">
    <tbody class="overflow-x-auto" sty>
<table class="table table-bordered border-primary">
  <tr style="font-size:14px;">
    <th>Nama</th>
    <th>Alamat</th>
    <th>Nomor Hp</th>
    
    
  </tr>
  
  <?php
  $query = mysqli_query($koneksi, "SELECT * FROM mekanik");
 while( $row = mysqli_fetch_array($query)){
  $nama = $row['nama'];
   $alamat = $row['alamat'];
    $no_hp = $row['no_hp'];
     
  
  
  
  echo "
  <tr>
    <td>$nama</td>
    <td>$alamat</td>
    <td>$no_hp</td>
    
  
  <td><a href='mekanik.php?nama=$nama&respon=delete'>HAPUS</a>
  <br/><a href='editmekanik.php?nama=$nama'>EDIT</a></td>
  
  
  
  </tr>";
 }
  ?>
 
 
 
  </tbody>
</table>



</div>



          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Keluar Akun</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Kamu yakin ingin keluar?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    
    </div>
  

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>