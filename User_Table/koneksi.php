<?php  
	$namaHost="localhost";
	$username="root";
	$password="";
	$database="finalproj";

	$connect=mysqli_connect($namaHost,$username,$password,$database);
$stts="Status: ";
if($connect){
	echo "$stts Connection Succesfully <br><br>";
}else{
	echo "$stts Connection Unsuccesfully <br><br>";
}
