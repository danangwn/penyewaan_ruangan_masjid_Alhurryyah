<?php

require_once '../../config/init.php';

    include "../../config/db_connect.php";

    $ruangan = mysqli_query($connect, "SELECT * FROM users");


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AL HURRIYYAH ROOM SERVICE.</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <link href="../vendor/morrisjs/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom Js -->
    <script type="text/JavaScript" src="../js/tambahan.js"></script>

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">AL HURRIYYAH ROOM SERVICE.</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-calendar"></i>
                        <span style= "font-size: 14px; font-family: arial; background:transparent;" id="tanggal"></span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-clock-o"></i>
                        <span style= "font-size: 14px; font-family: arial; background:transparent;" id="clock"></span>
                    </a>
                </li>

                <!-- /.dropdown -->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        <li>
                            <span class="pull-right text-muted normal">Baru!</span>
                            <a href="booking.html"><i class="fa fa-book"></i> Booking</a>
                        </li>
                        <li>
                            <a href="schedule.html"><i class="fa fa-calendar-o"></i> Jadwal</a>
                        </li>
                        <!--<li>
                            <a href="daftarpenyewa.html"><i class="fa fa-list-alt"></i> Daftar penyewaan</a>
                        </li>-->
                        <li>
                            <a href="user.html"><i class="fa fa-users"></i> Daftar user</a>
                        </li>
                        <li>
                            <a href="infak.html"><i class="fa fa-money"></i> Laporan</a>
                        </li>
                        <li>
                            <a href="ruangan.html"><i class="glyphicon glyphicon-home"></i> Ruangan</a>
                        </li>
                        <br>
                        <li>
                            <a href="login.html">Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>

    <div id="page-wrapper">
      <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Daftar User
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Nomot Telepon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php while ($dat = mysqli_fetch_array($ruangan)) {
                                    ?>

                                    <tr>
                                        <td><?php echo $dat['id'] ?></td>
                                        <td><?php echo $dat['nama_user'] ?></td>
                                        <td><?php echo $dat['email'] ?></td>
                                        <td><?php echo $dat['username'] ?></td>
                                        <td><?php echo $dat['no_hp'] ?></td>
                                    </tr>
                                    <?php
                                  }
                                  ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
                    </div>
                </div>
            </div>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
