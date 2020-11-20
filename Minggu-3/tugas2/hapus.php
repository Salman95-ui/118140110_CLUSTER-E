<?php
$conn = mysqli_connect("localhost" , "root" , "" ,"tugas");

$data = $_GET['cari'];

$Data = mysqli_query($conn , "select * from mahasiswa where NRP = '$data'");

$jurusan ;
foreach ($Data as $nilai) {
	# code...
	echo $jurusan = $nilai["ID_Jur"];
}

mysqli_query($conn , "delete from jurusan where ID_Jur = '$jurusan'");
mysqli_query($conn , "delete from mahasiswa where NRP = '$data'");



echo "<h2>Data berhasil di hapus </h2>" ;

?>