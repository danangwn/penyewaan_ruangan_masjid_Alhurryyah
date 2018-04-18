<?php
    include "../config/db_connect.php";
    require_once '../config/init.php';

    $userdata = getUserDataByUserId($_SESSION['id']);
    $id = $userdata['id'];


    $album = mysqli_query($connect, "SELECT * FROM penyewaans JOIN ruangans WHERE id_user = '$id' AND id_ruangan = ruangans.id AND status != 'Batal'");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Konfirmasi Pembayaran</title>
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

    <section id="confirm">
      <div style="padding:100px 0 40px 0;" class="container">
        <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Konfirmasi Pembayaran</h3>
              </div>
              <ul class="list-group">
                  <li class="list-group-item">
                      <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                          <div class="col-sm-6">
                              Detail Penyewaan:
                          </div>
                          <div class="col-lg-6"><i class="fa fa-chevron-down pull-right"></i></div>
                      </div>
                      <div id="detail-1">
                          <hr></hr>
                          <div class="container">
                            <?php while ($dat = mysqli_fetch_array($album)) {
                              ?>

                              <div class="row">
                                  <div class="col-md-4">
                                      <b><?php echo $dat['nama_ruangan'] ?></b>
                                  </div>
                                  <div class="col-md-4">
                                    Tanggal: <br><?php echo $dat['tanggal'] ?><br>
                                    Waktu: <br><?php echo $dat['mulai'] ?> - <?php echo $dat['selesai'] ?><br>
                                    Nama Acara: <br><?php echo $dat['nama_acara'] ?><br>
                                    Detail Acara: <br><?php echo $dat['detail_acara'] ?><br>
                                    Total Pembayaran: <br><?php echo $dat['biaya'] ?><br>
                                    Status Pembayaran: <br><?php echo $dat['status'] ?><br><br>
                                    Transfer ke: <br> 666101005215535 (BRI) a.n DKM Al-Hurriyyah
                                  </div>
                                  <div class="col-md-4 upload">
                                  <form action="../action/upload.php?id_order=<?php echo $dat['id'] ?>" method="post" enctype="multipart/form-data">
                                    <p>Upload Bukti Pembayaran
                                    <input  type="file" name="konfirmasi">
                                    <button type="submit">Kirim</button></p>
                                  </form>
                                  <form action="../action/cancel.php?id_order=<?php echo $dat['id'] ?>" method="post">
                                    <button type="submit">Batalkan Penyewaan</button>
                                  </form>
                                  </div>
                              </div>
                              <?php } ?>
                          </div>
                      </div>
                  </li>
              </ul>
        </div>
      </div>
    </section><!-- #about -->
    <!--==========================
      About Us Section
    ============================-->


    <!--==========================
      Team Section
    ============================-->
  <!--#team -->

    <!--==========================
      Contact Section
    ============================>
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>



          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>< #contact -->

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
