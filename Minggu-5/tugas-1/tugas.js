	var datatext = document.getElementById('text');
		var ul = document.getElementById('ul');

	var data = ["sapu" , "papan" , "meja"] ;
	var string = "" ;


	function tambah(){
	
		data.push(datatext.value) ;
		show();
		
	
	}

	function show(){
		ul.innerHTML = "" ;
		data.forEach(get);
	}

	function get(item , index){
		string = "<li>" + item + " <span onclick='edit("+ index + ")'>Edit |</span><span onclick='hapus("+index+")'> Hapus</span></li>" ; 
		ul.innerHTML += string ;
	}

	function edit(id){
		console.log(id);
		nilai = prompt("Ubah data ?") ;
		data[id] = nilai ;
		show() ;
		console.log(data) ;
	}

	function hapus(id){
		data.splice(id , 1 ) ;
		console.log(data);
		show();
	}