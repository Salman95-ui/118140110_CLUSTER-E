<?php

function hargabet($nama , $warna){

	$nilai = strlen($nama) ;

	if($nilai > 1 && $nilai <= 10 ){

		$hasil = $nilai * 300 ;

		if($warna != ""){

		 echo "<p style='color : $warna'>nama $nama harga $hasil  </p>" ;
		}else{
			echo "<p style='color : red'>nama $nama harga $hasil  </p>" ;
		}

	}else if($nilai > 10 && $nilai <= 20){

		$hasil = $nilai * 500 ;

		if($warna != ""){

		 echo "<p style='color : $warna'>nama $nama harga $hasil  </p>" ;
		}else{
			echo "<p style='color : red'>nama $nama harga $hasil  </p>" ;
		}


	}else if($nilai > 20 ){

		$hasil = $nilai * 700 ;

		if($warna != ""){

		 echo "<p style='color : $warna'>nama $nama harga $hasil  </p>" ;
		}else{
			echo "<p style='color : red'>nama $nama harga $hasil  </p>" ;
		}

	}
}

$data = $_GET['warna'] ;
$nama = $_GET['nama'] ;

hargabet($nama , $data);
?>