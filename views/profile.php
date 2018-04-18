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
  <title>My Profile</title>
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
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $userdata['nama_user'] ?></h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3" style="padding-bottom:40px;" align="center"> <img alt="User Pic" src="img/avatar.png" class="img-circle img-responsive"> </div>

                  <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                    <dl>
                      <dt>DEPARTMENT:</dt>
                      <dd>Administrator</dd>
                      <dt>HIRE DATE</dt>
                      <dd>11/12/2013</dd>
                      <dt>DATE OF BIRTH</dt>
                         <dd>11/12/2013</dd>
                      <dt>GENDER</dt>
                      <dd>Male</dd>
                    </dl>
                  </div>-->
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username</td>
                        <td><?php echo $userdata['username']; ?></td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td><?php echo $userdata['no_hp']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $userdata['email']; ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                    <a href="edit_profile.php" class="btn btn-primary">Edit Profile</a><br><br><br>
                </div>
              </div>
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
