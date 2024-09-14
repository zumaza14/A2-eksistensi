<?php

include_once("koneksi.php");
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
        
        <hr/>
<!--konten-->

  <?php
  $nopol = $_GET['kode'];
  
  $query = mysqli_query($koneksi, "SELECT * FROM pelaporan WHERE nopol='$nopol'");
  $row = mysqli_fetch_array($query);
  
  $nopol = $row['nopol'];
   $nick_name = $row['nick_name'];
    $merk = $row['merk'];
     $kernet = $row['kernet'];
      $tanggal= $row['tanggal'];
       $ket = $row['ket'];
       
  ?>
  
  <h3 style="margin:10px;">Form Tambah Sparepart</h3>
  
  <form style="margin:15px;" class="col-md-6 col-11" method="GET" action="prosesaddsparepart.php">
  <div class="mb-3">
    <label class="form-label">NOMOR POLISI</label>
    <input type="text" class="form-control" name="nopol" VALUE="<?php echo $nopol;?>">
  </div>
  <div class="mb-3">
    <label class="form-label">NICK NAME</label>
    <input type="text" class="form-control" name="name" VALUE="<?php echo $nick_name;?>">
  </div>
  <div class="mb-3">
    <label class="form-label">MERK</label>
    <input type="text" class="form-control" name="merk" VALUE="<?php echo $merk;?>">
  </div>
  <div class="mb-3">
    <label class="form-label">NAMA KERNET</label>
    <input type="text" class="form-control" name="kernet" VALUE="<?php echo $kernet;?>">
  </div>
  <div class="mb-3">
    <label class="form-label">TANGGAL</label>
    <input type="text" class="form-control" name="tgl" VALUE="<?php echo $tanggal;?>">
  </div>
  <div class="mb-3">
    <label class="form-label">KETERANGAN</label>
    <input type="text" class="form-control" name="ket" VALUE="<?php echo $ket;?>">
  </div>
  <div class="mb-3">
    <label class="form-label">SPAREPART</label>
    <input type="text" class="form-control" name="sparepart" VALUE="">
  </div>
  <div class="mb-3">
    <label class="form-label">MEKANIK</label>
<br/>
  <select class="form-select" aria-label="Default select example" name='mekanik'>
  <option selected>Pilih Mekanik</option>
 
  
  <?php
  $cek = mysqli_query($koneksi, "SELECT * FROM mekanik");

  while($get=mysqli_fetch_array($cek)){
      $mekanik = $get['nama'];
  echo "
  <option value='$mekanik'> $mekanik</option>";

  
  }
 
  ?>
</select>
</div>
  
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
  
  
</form>
  
 



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