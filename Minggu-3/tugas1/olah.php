<?php
function faktorial($nilai){
	$data = 1 ;
	for($i = $nilai ; $i > 1 ; $i--){
		$data *= $i ;
	}

	echo "Nilai faktorial $nilai =  $data " ;
}

faktorial($_GET["nilai"]);


?>