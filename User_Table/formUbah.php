<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($connect,"select * from reguser where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="UbahData.php">
			<table>
				<tr>			
					<td>Username</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="username" value="<?php echo $d['username']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>level</td>
					<td><input type="number" name="level" value="<?php echo $d['level']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-success" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>


</body>
</html>