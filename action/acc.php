<?php
include "../config/db_connect.php";
require_once '../config/init.php';

$id_order = $_GET['id'];
$tanggal = $_GET['id_ruangan'];

$sql = "UPDATE penyewaans SET status = 'Lunas' WHERE id_user = $id_order AND id_ruangan = $tanggal";
if (mysqli_query($connect, $sql)){
?>
    <script language="javascript">alert("Successful");</script>
    <script>document.location.href='../admin/pages/booking.php';</script>

  <?php
}
else{
?>
  <script language="javascript">alert("Failed");</script>
  <script>document.location.href='../admin/pages/booking.php';</script>
  <?php
}

 ?>
