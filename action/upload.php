<?php

include "../config/db_connect.php";
require_once '../config/init.php';

$userdata = getUserDataByUserId($_SESSION['id']);
$user = $userdata['id'];
$id_order = $_GET['id_order'];

$tmp = $_FILES['konfirmasi']['tmp_name'];
$foto_size = $_FILES["konfirmasi"]["size"];
$info = getimagesize($tmp);
if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)&& ($info[2] !== IMAGETYPE_JPG)) {?>
  <script language="javascript">alert("Not an Image");</script>
  <script>document.location.href='../views/order.php';</script>
  <?php
}
else{
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$newpict = $user.time().'.jpg';
// Set path folder tempat menyimpan fotonya
$path = "../uploads/confirm".$newpict;
// Proses upload
if($foto_size < 1000000){
if(move_uploaded_file($tmp, $path)){
  $sql_buat = "UPDATE penyewaans SET konfirmasi = '$newpict', status = 'Menunggu Konfirmasi' WHERE id_user = $user AND id_ruangan = $id_order";
  if (mysqli_query($connect, $sql_buat)){
?>
      <script language="javascript">alert("Input Successful");</script>
      <script>document.location.href='../views/order.php';</script>

    <?php
  }
  else{
?>
    <script language="javascript">alert("Input Failed");</script>
    <script>document.location.href='../views/order.php';</script>
    <?php
  }
  }
  else{
  echo "Sorry picture cant upload.";
  echo "<br><a href='../views/order.php'>Back to Form</a>";
}
}
else{
  echo "Sorry picture too big.";
  }
}
  mysqli_close($connect);

?>
