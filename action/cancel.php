<?php
include "../config/db_connect.php";
require_once '../config/init.php';

$userdata = getUserDataByUserId($_SESSION['id']);
$user = $userdata['id'];
$id_order = $_GET['id_order'];

$sql = "UPDATE penyewaans SET status = 'Batal' WHERE id_user = $user AND id_ruangan = $id_order";
if (mysqli_query($connect, $sql)){
?>
    <script language="javascript">alert("Successful");</script>
    <script>document.location.href='../views/order.php';</script>

  <?php
}
else{
?>
  <script language="javascript">alert("Failed");</script>
  <script>document.location.href='../views/order.php';</script>
  <?php
}

 ?>
