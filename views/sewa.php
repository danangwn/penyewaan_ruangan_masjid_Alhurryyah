<?php
    include "../config/db_connect.php";
    require_once '../config/init.php';

    $id = $_GET['id_ruangan'];
    $tanggal = $_GET['tanggal'];
    $mulai = $_GET['mulai'];
    $selesai = $_GET['selesai'];

    $userdata = getUserDataByUserId($_SESSION['id']);
    $id_user = $userdata['id'];

    $album = mysqli_query($connect, "SELECT * FROM ruangans WHERE id = '$id'");
    $dat = mysqli_fetch_array($album);


    if($_POST){
      $nama_acara = $_POST['nama_acara'];
      $detail_acara = $_POST['detail_acara'];
      $biaya = $dat['biaya']*abs($selesai - $mulai);

      $sewa = "INSERT INTO penyewaans (id_user, id_ruangan, tanggal, mulai, selesai, nama_acara, detail_acara, biaya) VALUES ('$id_user', '$id', '$tanggal', '$mulai', '$selesai', '$nama_acara', '$detail_acara', '$biaya')";
      if($connect->query($sewa) === TRUE) {?>

                  <script language="javascript">alert("Permintaan Berhasil Tersimpan!");</script>
                  <script>document.location.href='../index.php';</script>;<?php
      } else {
          ?>

                  <script language="javascript">alert("Error");</script>
                  <script>document.location.href='sewa.php';</script>;<?php
      }

      $connect->close();
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Keterangan Penyewaan</title>
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
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#portfolio">Ruangan</a>
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
          <li><a href="">Search</a></li>
          <li class="menu-has-children"><a href="">My Profile</a>
          <ul>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#">Logout</a></li>
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

      <div class="row">
        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
          <h3>Keterangan Penyewaan</h3>
          <form class="form-horizontal" role="form" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="form-group">
              <label class="col-lg-3 control-label">Ruangan:</label>
              <div class="col-lg-8">
                <input readonly class="form-control" value="<?php echo $dat['nama_ruangan']?>" name="tanggal">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Tanggal:</label>
              <div class="col-lg-8">
                <input readonly class="form-control" value="<?php echo $tanggal?>" name="tanggal">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Waktu Mulai:</label>
              <div class="col-lg-8">
                <input readonly class="form-control" value="<?php echo $mulai?>" name="mulai">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Waktu Selesai:</label>
              <div class="col-lg-8">
                <input readonly class="form-control" value="<?php echo $selesai?>" name="selesai">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Acara:</label>
              <div class="col-md-8">
                <input class="form-control" value="" type="text" name="nama_acara">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Detail Acara:</label>
              <div class="col-md-9">
                <textarea rows="6" class="form-control" name="detail_acara"> </textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <div class="form-group"><button class="btn-get-started">Sewa</button></div>
              </div>
            </div>
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
