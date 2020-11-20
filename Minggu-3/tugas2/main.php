<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-5">
			<h2 class="m-2">Tambah Data</h2>
	<form action="/search.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>NRP</label>
		<input type="text" class="form-control form-control-sm" name="nrp">
	</div>

	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control form-control-sm" name="nama">
	</div>

	<div class="form-group">
		<label>Foto</label><br>
		<input type="file" class="" name="file">
	</div>

	<div class="form-group">
		<label>Jurusan </label>
		<select name="jurusan" class="form-control">
			<option selected value="Telekomunikasi">Telekomunikasi</option>
			<option value="Elka">Elka</option>
			<option value="IT">IT</option>
			<option value="Elin">Elka</option>
		</select>
	</div>

	<input type="submit" name="">
	</form>
</div>
</div>


<div class="row mt-2">
	<div class="col-sm-5">

		<h2>Cari Data Mahasiswa</h2>
		<form action="/search.php" method="get">
		<div class="input-group mb-3">
		  <input type="text" name="cari" class="form-control" placeholder="Cari ...">
			  <div class="input-group-append">

			    <button class="btn btn-success" type="submit">Search</button>

			  </div>
</div>
</form>
	</div>
</div>


<div class="row mt-2">
	<div class="col-sm-5">

		<h2>Delete Data Mahasiswa</h2>
		<form action="/hapus.php" method="get">
		<div class="input-group mb-3">
		  <input type="text" name="cari" class="form-control" placeholder="NRP ">
			  <div class="input-group-append">

			    <button class="btn btn-success" type="submit">Search</button>

			  </div>
		</div>
		</form>
	</div>
</div>


</div>
</body>
</html>