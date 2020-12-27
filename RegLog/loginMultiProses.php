<?php
include "connection.php";
session_start();
$username=$_POST['username'];
$password=md5($_POST['password']);

$query="SELECT * FROM reguser where id and username='$username' and password='$password'";

$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);

if($row['level']==1){

	?>
	<script type="text/javascript">
		alert("WELCOME ADMIN \u2665");
		window.location.href = "../Home/Home.html";
	</script>
	<?php
}else if($row['level']==2){
	?>
	<script type="text/javascript">

		alert("WELCOME USER \u2665 \u2665 ");
		window.location.href = "../Home/Home-User.html";
	</script>

	<?php
}else{
	?>
	<script type="text/javascript">

		alert("USERNAME / PASSWORD SALAH");
		window.location.href = "login.html";
	</script>
	<?php
	echo mysqli_error($connect);
}

?>