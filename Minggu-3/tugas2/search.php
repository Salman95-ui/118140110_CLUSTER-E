<?php 

$conn = mysqli_connect("localhost" , "root" , "" ,"tugas");

if($_SERVER["REQUEST_METHOD"] === "POST"){
	$nrp = $_POST['nrp'] ;
	$nama = $_POST['nama'] ;
	$file = $_FILES['file']['name'] ;
	$jurusan = $_POST['jurusan'];

	$sql = "insert into mahasiswa values('$nrp' , '$nama' , '$file' , '$jurusan' ) " ;
	
	mysqli_query($conn , $sql);
	mysqli_query($conn , "insert into jurusan values('$jurusan' , '$jurusan')");
	move_uploaded_file($_FILES['file']['tmp_name'] , "img/" . $_FILES['file']['name']);
	echo "$nrp , $nama , $jurusan , $file data berhasil di simpan";

}else{
	$cari = $_GET['cari'];

	$data = mysqli_query($conn , "select * from mahasiswa where Nama = '$cari'" ) ;
	$nama ;
	$nrp ;
	$foto ;
	foreach($data as $nilai ){
		$nama = $nilai['Nama'];
		$nrp = $nilai['NRP'];
		$foto = $nilai['Foto'];
	}

	$nama_jur ;
	foreach($data as $nilai ){
		$nama_jur = $nilai['ID_Jur'];
	}
	
	$data2 = mysqli_query($conn , "select * from mahasiswa where ID_Jur = '$nama_jur'" ) ;
	
	echo "<h2>Data Ditemukan</h2>" ;
	echo "<h3>NRP $nrp</h3> ";
	echo "<h3>Nama $nama  </h3>";
	echo "<h3>Foto <br> <img src='/img/$foto' width='100px' height='100px'></h3>" ;
	echo "<h3>Jurusan <br> $nama_jur  </h3>";

}

?>