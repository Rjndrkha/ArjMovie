<?php  
	$namaHost="localhost";
	$username="root";
	$password="";

	$connect=mysqli_connect($namaHost,$username,$password);

	if($connect){
		echo "Koneksi dengan MySQL berhasil ";
	}else{
		echo "Kondeksi dengan MySQL gagal". mysqli_connect_error();
	}

	$sql="CREATE DATABASE FinalProj";
	if(mysqli_query($connect,$sql)){
		echo "Database Berhasil Dibuat";
	}else{
		echo "Database Gagal Dibuat<br>".mysqli_error($connect);
	}
?>