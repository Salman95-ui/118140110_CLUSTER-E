<?php
include 'koneksi.php' ;

$id = $_GET['id'] ;

$conn = new koneksi() ;

$data = mysqli_query($conn->koneksi ,  "select * from mahasiswa where id = $id ") ;

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
<div class="container">
	
		<div class="row justify-content-center">	
		 <div class="col-sm-10 ">
		 	<h3>Data Inputan</h3>
		 	<form method="post" action="/Minggu-6/update.php">
				
				<?php foreach($data as $nilai) : ?>
					<input type="hidden" value="<?= $nilai['id']?>" class="form-control m-2"  name="id" >
					<input type="text" value="<?= $nilai['nim']?>" class="form-control m-2" id="nim" name="nim" >

					<input type="text"  value="<?= $nilai['nama']?>" class="form-control m-2" id="nama" name="nama" >

					<select class="form-control m-2" name="prodi" >
						<option value="T.Lingkungan">T.Lingkungan</option>
						<option value="T.Industri">T.Industri</option>
						<option value="T.Informatika">T.Informatika</option>
					</select>

					<select class="form-control m-2" name="angkatan" >
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
					</select>

				<?php endforeach ; ?>


					<button type="submit" id="submit" class="btn btn-success m-2">Submit</button>
			</form>

				</div>
			</div>
		</div>
</body>
</html>