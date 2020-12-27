
<?php

$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "finalproj"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL
$stts="MySQL Status = ";

if($connect){
	echo "$stts Connection Succesfully <br><br>";
}else{
	echo "$stts Connection Succesfully <br><br>";
}
