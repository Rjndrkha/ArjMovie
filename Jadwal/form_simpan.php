<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Askbootstrap">
	<meta name="author" content="Askbootstrap">
	<title>ArJ Movie - Watch Movie & Series</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="../img/icon.png">
	<!-- Bootstrap core CSS-->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="../css/osahan.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../vendor/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="../vendor/owl-carousel/owl.theme.css">
	
	<link rel="stylesheet" type="text/css" href="jadwal.css">
</head>
<body>
	

	<main>
		<article>
			<script type="text/javascript">
				document.write('\u2665 WELCOME TO FORM SIMPAN \u2665');

			</script>

			<!-- partial:index.partial.html -->
			<div class="container">

				<button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
					Add Data
				</button> 
				<a href="jadwal.php" class="btn btn-info btn-round" style="color: white;padding:6px;margin-left: 5px;width: 10%;">Back</a>  
			</div>


			<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header border-bottom-0">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-title text-center ">
								<img src="../img/icon.png">
							</div>

							<div class="d-flex flex-column text-center">
								<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
									<div class="form-group">
										<input type="nama" name="nama" class="form-control" id="nama" placeholder="Movie Name" required>
										<br>
										<input class="form-control" name="releasedate" type="date" value="" id="releasedate" required>
										<br>
										<input type="synopsis" name="synopsis" class="form-control" id="synopsis" placeholder="Synopsis" required>
										<br>
										<input type="file" name="foto" id="myFile">


									</div>
									<button type="submit" class="btn btn-success">Submit</button>
									
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</div>
</main>


<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Owl Carousel -->
<script src="../vendor/owl-carousel/owl.carousel.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/custom.js"></script>


</body>
</html>