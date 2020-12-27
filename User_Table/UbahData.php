<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$level = $_POST['level'];
 
// update data ke database
mysqli_query($connect,"update reguser set id='$id', username='$username', email='$email',level='$level' where id='$id'");
 
if($mysqli_query){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: ViewUser.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='formUbah.php'>Kembali Ke Form</a>";
	}
 
?>