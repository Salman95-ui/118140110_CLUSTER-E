<?php 
include 'koneksi.php' ;

$conn = new koneksi();
$data = $conn->data();
echo $data;

?>