<?php require_once '../config/init.php';

if(not_logged_in() === TRUE) {
  header('location: login.php');
}

$userdata = getUserDataByUserId($_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edit Profile</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo-Al-Hurriyyah.jpg" rel="icon">
  <link href="img/logo-Al-Hurriyyah.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header-room">
    <div class="container">

      <div id="logo-room" class="pull-left">
        <a href="#hero">Peminjaman Ruangan Masjid Al Hurriyyah</a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../index.php">Home</a></li>

            <!--ul>
              <li><a href="#">Ruang Abu Bakar</a></li>
              <li><a href="#">Ruang Umar</a></li>
              <li><a href="#">Ruang Ustman</a></li>
              <li><a href="#">Ruang Ali</a></li>
              <li><a href="#">Ruang Kelas</a></li>
              <li><a href="#">Ruang Seminar</a></li>
              <li><a href="#">Ruang Aula</a></li>
              <li><a href="#">Ruang Utama</a></li>
            </ul-->
          </li>
          <li class="menu-has-children"><a href="profile.php">My Profile</a>
          <ul>
            <li><a href="edit_profile.php">Edit Profile</a></li>
            <li><a href="../action/logout.php">Logout</a></li>
          </ul>
        </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="edit-profile">
      <div class="container" style="padding-top: 100px;">
      <h1 class="page-header">Edit Profile</h1>
      <div class="row">
        <!-- left column -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="text-center">
            <img src="img/avatar.png" class="avatar img-circle img-thumbnail" alt="avatar">
            <p class="btn btn-primary">Change Profile Picture
            <input type="file" style="padding-bottom:40px;"></p>
          </div>
        </div>
        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
          <h3>Personal info</h3>
          <form class="form-horizontal" role="form" action="../action/edit_profile.php" method="post">
            <div class="form-group">
              <label class="col-lg-3 control-label" for="nama_user">Full name:</label>
              <div class="col-lg-8">
                <input class="form-control" name="nama_user" value="<?php echo $userdata['nama_user']; ?>" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label" for="no_hp">Phone Number:</label>
              <div class="col-lg-8">
                <input class="form-control" value="<?php echo $userdata['no_hp']; ?>" type="text" name="no_hp">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label" for="email">Email:</label>
              <div class="col-lg-8">
                <input class="form-control" value="<?php echo $userdata['email']; ?>" name="email" type="email">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="username">Username:</label>
              <div class="col-md-8">
                <input class="form-control" value="<?php echo $userdata['username']; ?>" name="username" type="text">
              </div>
            </div>
            <div class="form-group"><button class="btn btn-primary">Save</button></div>
          </form>
        </div>
      </div>
    </div>
    </section><!-- #about -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
