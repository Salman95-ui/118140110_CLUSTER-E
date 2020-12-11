<?php 
class koneksi{
	public $koneksi ;
public function __construct(){
$this->koneksi = mysqli_connect("localhost" , "root" , "" , "mahasiswa");

}

public function data($Data = ""){

if($Data == ""){
	$data = mysqli_query($this->koneksi , "select * from mahasiswa");

	$html = "<table class='table table-striped'><tr><th>NIM</th><th>Nama</th><th>Prodi</th><th>Angkatan</th><th>Action</th></tr>" ; 

	foreach ($data as $nilai) {
		# code...
		$html .= "<tr><td>".$nilai['nim']."</td><td>".$nilai['nama']."</td><td>".$nilai['prodi']."</td><td>".$nilai['angkatan']."</td><td><a class='btn btn-primary btn-sm' href=/Minggu-6/edit.php?id=". $nilai['id'] .">Edit </a><a class='btn btn-danger ml-1 btn-sm' onclick='hapus(".$nilai['id'].")'> Hapus</a> </td></tr>" ;

	}

	$html .= "</table>" ;

	return $html ;	
	
	}else{

	$data = mysqli_query($this->koneksi , "select * from mahasiswa where prodi = '". $Data . "'");

	$html = "<table class='table table-striped'><tr><th>NIM</th><th>Nama</th><th>Prodi</th><th>Angkatan</th></tr>" ; 

	foreach ($data as $nilai) {
		# code...
		$html .= "<tr><td>".$nilai['nim']."</td><td>".$nilai['nama']."</td><td>".$nilai['prodi']."</td><td>".$nilai['angkatan']."</td></tr>" ;

	}

	$html .= "</table>" ;

	return $html ;	

	}
}

public function add($nim , $nama , $prodi , $angkatan){
	$sql = "insert into mahasiswa values('','$nim' , '$nama' , '$prodi' , '$angkatan')" ;
	mysqli_query($this->koneksi , $sql ) ;


}

public function hapus($id){

	mysqli_query($this->koneksi , "delete from mahasiswa where id = $id") ;

	
}


}

?>