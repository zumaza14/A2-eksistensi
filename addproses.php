<?php
ob_start();
  include_once("koneksi.php");
  
       $kode = $_POST['kode_item'];
   $barcode = $_POST['barcode'];
    $nama_item = $_POST['nama_item'];
     $jenis = $_POST['jenis'];
      $satuan = $_POST['satuan'];
       $merek = $_POST['merek'];
        $satuan_dasar = $_POST['satuan_dasar'];
         $konversi = $_POST['konversi'];
          $harga_pokok = $_POST['harga_pokok'];
           $harga_jual = $_POST['harga_jual'];
           $stok = $_POST['stok'];
           $stok_minimum = $_POST['stok_minimum'];
           $tipe_item = $_POST['tipe_item'];
           $menggunakan_serial = $_POST['serial'];
           $rak = $_POST['rak'];
           $kode_gudang_kantor = $_POST['kode_gudang_kantor'];
           $kode_suplier = $_POST['kode_suplier'];
           $keterangan = $_POST['keterangan'];
 
 
     $query = mysqli_query($koneksi, "INSERT INTO sparepart(kode_item,barcode,nama_item,jenis,satuan,merek,satuan_dasar,
      konversi_satuan_dasar,
      harga_pokok,
      harga_jual,stok,
      stok_minimum,
      tipe_item,
      menggunakan_serial,
      rak,
      kode_gudang_kantor,
         kode_suplier,
        keterangan) VALUES ('$kode','$barcode','$nama_item','$jenis','$satuan','$merek','$satuan_dasar','$konversi','$harga_pokok','$harga_jual','$stok','$stok_minimum','$tipe_item','$menggunakan_serial','$rak','$kode_gudang_kantor','$kode_suplier','$keterangan')
     ");
      
  if($query){
       header("location: ".base."sparepart.php?respon=true");
  }else{
      echo "gagal";
  }
  
  
  ?>
 