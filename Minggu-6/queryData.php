<?php 
include 'koneksi.php' ;

$koneksi = new koneksi() ;

$data = $_GET['prodi2'] ;
echo $koneksi->data($data) ;
?>