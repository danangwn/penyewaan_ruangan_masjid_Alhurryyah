<?php

require_once 'config/init.php';

if(logged_in() === TRUE) {
  header('location: views/index.php');
}

    include "config/db_connect.php";

    $ruangan = mysqli_query($connect, "SELECT * FROM ruangans");

if ($_POST) {
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];


    $album = mysqli_query($connect, "SELECT * FROM ruangans WHERE NOT EXISTS (SELECT * FROM penyewaans WHERE penyewaans.id_ruangan = ruangans.id AND tanggal = '$tanggal' AND mulai = '$mulai' AND selesai = '$selesai')");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Peminjaman Ruangan Masjid Al Hurriyyah</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="views/img/logo-Al-Hurriyyah.jpg" rel="icon">
  <link href="views/img/logo-Al-Hurriyyah.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="views/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="views/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="views/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="views/css/style.css" rel="stylesheet">

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
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero">Peminjaman Ruangan Masjid Al Hurriyyah</a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="#portfolio">Ruangan</a>
          </li>
          <li><a href="#call-to-action">Search</a></li>
          <li><a href="views/register.php">Register</a></li>
          <li><a href="views/login.php">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Peminjaman Ruangan Masjid Al Hurriyyah</h1>
      <h2>Institut Pertanian Bogor</h2>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      Ruangan Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Ruangan</h3>
          <p class="section-description">Berikut ruangan yang tersedia di Masjid Al Hurriyyah</p>
        </div>
        <div class="row">

        <div class="row" id="portfolio-wrapper">
          <?php while ($item = mysqli_fetch_array($ruangan)) {
          ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="views/details.php?id_ruangan=<?php echo $item['id']?>">
              <img src="uploads/img/<?php echo $item['foto_ruangan']?>" width="500" alt="">
              <div class="details">
                <h4><?php echo $item['nama_ruangan']; ?></h4>
              </div>
            </a>
          </div>
          <?php  } ?>

        </div>

      </div>
    </section><!-- #portfolio -->


    <!--==========================
    Search Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3 class="cta-title">Pencarian Jadwal Ruangan</h3>
        <div class="row">
          <div class="col-md-3">
              <label>Tanggal</label><br>
              <input class="form-control" id="datepicker1" name="tanggal" type="date" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
          </div>
          <div class="col-md-3">
              <label>Waktu Mulai</label>
              <input class="form-control" type="time" name="mulai">
          </div>
          <div class="col-md-3">
              <label>Waktu Selesai</label>
              <input class="form-control" type="time" name="selesai">
          </div>

          <div>
              <div class="form-group"><button class="btn-get-started">Search</button></div>
          </div>
        </div>
      </form>
      </div>
      <div class="container">
        <h3 class="cta-title">Hasil Pencarian</h3>

            <hr />

            <div style="background-color: #FFFFFF; color:#000000; padding:15px 15px 0 15px;" class="agenda">
                <div class="table-responsive">
                    <table class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Ruangan yang tersedia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Single event in a single day-->
                            <?php
                            if ($album) {

                            while($dat = mysqli_fetch_array($album)){ ?>
                            <tr>

                                <td class="agenda-date" class="active" rowspan="1">
                                    <div class="date">  </div>
                                </td>
                                <td class="agenda-time">

                                </td>
                                <td class="agenda-events">
                                    <div class="agenda-event">
                                        <?php
                                         echo $dat['nama_ruangan'];
                                          ?>
                                        <a href="views/login.php" class="btn btn-primary pull-right">Sewa</a>

                                    </div>
                                </td>

                            </tr>
                          <?php }

                          }

                          else{?>
                            <tr>

                                <td class="agenda-date" class="active" rowspan="1">
                                    <div class="date">  </div>
                                </td>
                                <td class="agenda-time">

                                </td>
                                <td class="agenda-events">
                                </td>

                            </tr>
                          <?php
                          }
                          ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </section><!-- #Search -->


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
