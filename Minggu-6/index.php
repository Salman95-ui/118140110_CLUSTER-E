<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		body{

			margin: 0;
			padding: 0;

		}
		h3{
			margin: 10px 10px ;
		}

		input{
			margin-top: 5px;
			display: block;
		}

		hr{
			height: 3px ;
			background-color: black ;

		}
	</style>
	<title></title>
</head>
<body onload="show()">

<div class="container">
	
		<div class="row justify-content-center">	
		 <div class="col-sm-10 ">
		 	<h3>Data Inputan</h3>
		 	<form method="post">
				
					<input type="text" class="form-control m-2" id="nim" name="nim" placeholder="NIM">

					<input type="text" class="form-control m-2" id="nama" name="nama" placeholder="Nama">

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
			</form>

					<button id="submit" class="btn btn-success m-2">Submit</button>
					<hr>


			</div>
		</div>

<!-- bagian data table -->

		<div class="row justify-content-center">
			<div class="col-sm-10 text-center">
				
				<h2>Data Mahasiswa</h2>

				<div id="data">
			
				</div>
			</div>
		</div>

</div>


<script >

// first page load 
	function show(){
		$.ajax({
			type : "POST" , 
			url : "/Minggu-6/data.php" ,
			success : function(data){
				$("#data").html(data)
			}
		})
	}

	//delete data 

	function hapus(id){
		$.ajax({
			type : "GET" , 
			url : "/Minggu-6/hapus.php?id=" + id  ,
			success : function(data){
				show()
				
			}
		})	
	}

//add data to a server 

	$("#submit").click(function(){
		var Data = $("form").serialize() ;
		$.ajax({
			type : "POST" , 
			url : "/Minggu-6/add.php" , 
			data : Data , 
			success : function(data){
				show()
			}
		})

	})


// Program untuk cari data mahasiswa menggunakan select prodi 
	$("#prodi").change(function(){


		$.ajax({
			type : "GET" , 
			url : "/Minggu-6/queryData.php?prodi2="+$("#prodi").val() ,
			success : function(data){
				$("#data").html(data)
			}
		})
	})

	$("button").click(function(){
		
	})
</script>
</body>
</html>