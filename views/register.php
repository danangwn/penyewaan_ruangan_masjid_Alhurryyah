<?php require_once '../config/init.php';

if(logged_in() === TRUE) {
  header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register</title>
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
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero">Peminjaman Ruangan Masjid Al Hurriyyah</a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>
  </header>

  <section id="register">
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <p id="profile-name" class="profile-name-card">Register</p>
            <form action="../action/regist.php" method="post" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="nama_user" type="text" id="inputName" class="form-control" placeholder="Full Name" required autofocus>
                <input name="no_hp" type="number" id="inputPhone" class="form-control" placeholder="Phone Number" required>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <input name="cpassword" type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign Up</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
  </section><!-- #hero -->

  <script src="js/login.js"></script>

</body>
</html>
