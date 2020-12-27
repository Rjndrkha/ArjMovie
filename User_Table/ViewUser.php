<html>
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
   <style type="text/css">
      body{
         background-color: #F0FFFF;
      }
      h1{
         text-align: left
      }

      tr{
         text-align: center;
         
      }
      h2{
         text-align: center;
         color: white;
         background-color: #808080;
         margin-top: 200px;
         padding: 30px;
      }
      th{
         background-color:#3CB371;
         font-size: 20px;
         padding: 8px;
         color:black ;
         font-weight: bold;

      }
      td{
         text-align: center;
         color: black;
         font-size: 20px;
         font-weight: bolder;
      }
      

   </style>

</head>
<body id="page-top">
   <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
      &nbsp;&nbsp;
      <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
      </button> &nbsp;&nbsp;
      <a class="navbar-brand mr-1" href="../Home/Home-User.html">
         <div class="logo">
            <img src="../img/logo.png" style="height: 50px;width: 50px;margin-left: 30px">
         </div>
      </a>
      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
         <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <div class="input-group-append">
               <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i>
               </button>
            </div>
         </div>
      </form>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
         <!--<li class="nav-item mx-1">
            <a class="nav-link" href="upload.html">
               <i class="fas fa-plus-circle fa-fw"></i>
               Upload Video
            </a>
         </li> -->
         <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
         </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
         <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-envelope fa-fw"></i>
         <span class="badge badge-success">7</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
         <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
         <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
      </div>
   </li>
   <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
      <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img alt="Avatar" src="../img/icon2.png">
      Admin
   </a>
   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="../DLL/account.html"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My
      Account</a>
      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-video"></i> &nbsp;
      Subscriptions</a>
      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="../RegLog/sessionLogout.php" data-toggle="modal" data-target="#logoutModal"><i
         class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
      </div>
   </li>
</ul>
</nav>
<div id="wrapper">
   <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
      <li class="nav-item">
         <a class="nav-link" href="../Home/Home.html">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
         </a>
      </li>


      <li class="nav-item">
         <a class="nav-link" href="../film-page/video-page.html">
            <i class="fas fa-fw fa-video"></i>
            <span>Upcoming Movie Trailer</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cloud-upload-alt"></i>
            <span>Download Video</span>
         </a>
      </li>
      <li class="nav-item dropdown active">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
         aria-expanded="false">
         <i class="fas fa-fw fa-folder"></i>
         <span>Pages</span>
      </a>
      <div class="dropdown-menu">
         <h6 class="dropdown-header">Login Screens:</h6>
         <a class="dropdown-item" href="../RegLog/login.html">Login</a>
         <a class="dropdown-item" href="../RegLog/register.html">Register</a>
         <a class="dropdown-item" href="#">Forgot Password</a>
         <div class="dropdown-divider"></div>
         <h6 class="dropdown-header">Other Pages:</h6>
         <a class="dropdown-item" href="../jadwal/jadwal.php">Cooming Soon Movie</a>
         <a class="dropdown-item" href="../DLL/404.html">404 Page</a>
         <a class="dropdown-item" href="../DLL/blank.html">Blank Page</a>
         <a class="dropdown-item" href="#">View User Register</a>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="about.html">
         <i class="fas fa-fw fa-history"></i>
         <span> About Us</span>
      </a>
   </li>
</ul>

<div id="content-wrapper">
   <div class="container-fluid pb-0">
      <script type="text/javascript">

         alert("\u2665 \u2665 WELCOME ADMIN LETS SEE USER DATA \u2665 \u2665 ");
      </script>
      <div class="container" >  
         <i class="fas fa-list fa-4x" style="color:#C70039;"> Data Tabel User</i>

      </div>
      <br><br><br>
      <div id="carouselslide" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="../img/jadwal2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="../img/jadwal1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="../img/jadwal3.jpg" alt="Third slide">
            </div>
         </div>
      </div>

      <br>
      <br><br>
      <div class="table-responsive">
         <table class="table table-bordered">
            <tr>
               <th>ID</th>
               <th>Username</th>
               <th>Email</th>
               <th>Password</th>
               <th>Level</th>
               <th colspan="2">Action</th>
            </tr>


            <?php
   // Load file koneksi.php
            include "koneksi.php";

   $query = "SELECT * FROM reguser"; // Query untuk menampilkan semua data siswa
   $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
   
   while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      echo "<tr>";
      echo "<td>".$data['id']."</td>";
      echo "<td>".$data['username']."</td>";
      echo "<td>".$data['email']."</td>";
      echo "<td>".$data['password']."</td>";
      echo "<td>".$data['level']."</td>";
      echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
      echo "<td><a href='formUbah.php?id=".$data['id']."'>Edit</a></td>";
      echo "</tr>";
   }
   ?>
</table>
<br><br><br>

</div>
</div>
</div>
</div>
</div>



<!-- /.container-fluid -->
<!-- Sticky Footer -->
<footer class="sticky-footer" >
   <div class="container" >
      <div class="row no-gutters" >
         <div class="col-lg-6 col-sm-6" >
            <p class="mt-1 mb-0"><strong class="text-dark">Copyright By ArJ Movie 2020</strong>.
               <br>
               <small class="mt-0 mb-0"><a class="text-primary" target="_blank"
                  href="https://www.polinema.ac.id/">By Politeknik Negeri Malang</a>
               </small>
            </p>
         </div>
         <div class="col-lg-6 col-sm-6 text-right">
            <div class="app">
               <a href="#"><img alt="" src="../img/googleplay.png"></a>
               <a href="#"><img alt="" src="../img/apps.png"></a>
            </div>
         </div>
      </div>
   </div>
</footer>
</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
         </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
         <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
         <a class="btn btn-primary" href="../RegLog/sessionLogout.php">Logout</a>
      </div>
   </div>
</div>
</div>
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
