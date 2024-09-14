<?php

include_once("koneksi.php");

$barcode = $_GET['kode'];

$query = mysqli_query($koneksi, "DELETE FROM sparepart WHERE barcode='$barcode'");

if($query){
    header("location: admin/sparepart.php");
}



?>