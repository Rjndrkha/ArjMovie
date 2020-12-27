<?php  
	$namaHost="localhost";
	$username="root";
	$password="";
	$database="finalproj";

	$connect=mysqli_connect($namaHost,$username,$password,$database);

	if($connect){
		echo "Koneksi dengan MySQL berhasil ";
	}else{
		echo "Koneksi dengan MySQL gagal". mysqli_connect_error();
	}

	$sql="CREATE TABLE RegUser(
		  id int Primary key,
		  nama varchar(255) not null,
		  email varchar(255) not null,
		  password varchar(255)not null)";

	if(mysqli_query($connect,$sql)){
		echo "Tabel Berhasil Dibuat";
	}else{
		echo "Tabel Gagal Dibuat<br>".mysqli_error($connect);
	}
	mysqli_close($connect)
?>
