<?php 

	include 'koneksi.php' ;

	$nim = $_POST['nim'] ;
	$nama = $_POST['nama'] ;
	$prodi = $_POST['prodi'] ;
	$angkatan = $_POST['angkatan'] ;


	$koneksi = new koneksi() ;

	$koneksi->add($nim , $nama , $prodi , $angkatan) ;

	echo "success" ;
	echo $_POST['nim'] ;
	echo  $_POST['nama'] ;
	echo $_POST['prodi'] ;
	echo $_POST['angkatan'] ;

?>