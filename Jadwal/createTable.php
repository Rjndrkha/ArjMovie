<?php  
	$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "finalproj"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); 

$sql="CREATE TABLE jadwalmov(
id int not null Primary key ,
nama varchar(255) not null,
releasedate DATE not null,
synopsis varchar(255) not null,
foto varchar(255) not null)";

if(mysqli_query($connect,$sql)){
	echo "Tabel Berhasil Dibuat";
}else{
	echo "Tabel Gagal Dibuat<br>".mysqli_error($connect);
}
mysqli_close($connect)
?>