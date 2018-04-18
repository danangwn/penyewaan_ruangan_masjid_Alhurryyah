<?php require_once '../config/init.php';

$userdata = getUserDataByUserId($_SESSION['id']);


if($_POST) {
  $username = $_POST['username'];
	$nama_user = $_POST['nama_user'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];

	if($email == "") {
		echo " * Email is Required <br />";
	}
  if($username == "") {
		echo " * Username is Required <br />";
	}
  if($nama_user == "") {
		echo " * Full Name is Required <br />";
	}
  if($no_hp == "") {
		echo " * Phone Number is Required <br />";
	}

  if(updateInfo($_SESSION['id']) === TRUE) {
				?>
        <script language="javascript">alert("Successfully Updated");</script>
        <script>document.location.href='../views/profile.php';</script>
        <?php
      } else {
        ?>
        <script language="javascript">alert("Error while updating the information");</script>
        <script>document.location.href='edit_profile.php';</script>
        <?php
      }


}


?>
