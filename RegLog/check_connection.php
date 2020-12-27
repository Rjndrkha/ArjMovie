<?php  
	$namaHost="localhost";
	$username="id15717527_root";
	$password="Jendrarakha29.";

	$connect=mysqli_connect($namaHost,$username,$password);

	if($connect){
		echo "Koneksi dengan MySQL berhasil";
	}else{
		echo "Kondeksi dengan MySQL gagal". mysqli_connect_error();
	}
?>