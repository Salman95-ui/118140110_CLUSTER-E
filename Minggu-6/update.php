<?php 

include 'koneksi.php' ;

$conn = new koneksi() ;

	$id = $_POST['id'];
	$nim = $_POST['nim'] ;
	$nama = $_POST['nama'] ;
	$prodi = $_POST['prodi'] ;
	$angkatan = $_POST['angkatan'] ;
	$sql = "update mahasiswa set nim = '$nim' , nama = '$nama' , prodi = '$prodi' , angkatan = '$angkatan' where id = $id" ;
	mysqli_query($conn->koneksi ,$sql ) ;

	echo "success" ;

?>