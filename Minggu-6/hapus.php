<?php 
include 'koneksi.php' ;

$conn = new koneksi() ;

$id = $_GET['id'] ;

$conn->hapus($id) ;

echo "success" ;
?>