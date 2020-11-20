<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h3>Perhitungan Harga</h3>
			<form action="/olah2.php" method="get">
				<div class="form-group">
				
				<select name="warna" class="form-control">
					<option selected value="">Choose</option>
					<option value="yellow">Kuning</option>
					<option value="blue">Biru</option>
					<option value="green">Hijau</option>
				</select>
				</div>

				<div class="form-group">
					<input type="text" name="nama" class="form-control" placeholder="Nama ...">
				</div>


				<div class="form-group">
					<input type="submit"  class="btn btn-primary" >
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>