<?php include("config.php");
if(!isset($_SESSION['Admin_Id'])){
      header("location:login.php");
      die();
   }?>
<?php
 if(isset($_GET['id']))
 {
 $C_id = $_GET['id'];
 $sql = "SELECT * FROM cricket WHERE C_id ='" . $_GET["id"] . "'";
$result = $con->query($sql);
// LOOP TILL END OF DATA 

                $rows=$result->fetch_assoc();
                $Tname = $rows['Tname'];
                $P1_id = $rows['P1_id'];
                $P2_id = $rows['P2_id'];
                $P3_id = $rows['P3_id'];
                $P4_id = $rows['P4_id'];
                $P5_id = $rows['P5_id'];
                $P6_id = $rows['P6_id'];
                $P7_id = $rows['P7_id'];
                $P8_id = $rows['P8_id'];
                $P9_id = $rows['P9_id'];
                $P10_id = $rows['P10_id'];
                $P11_id = $rows['P11_id'];
                $P12_id = $rows['P12_id'];
                $P13_id = $rows['P13_id'];
                $P14_id = $rows['P14_id'];
                $P15_id = $rows['P15_id'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Cricket</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Teacher/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="Teacher/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Teacher/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="Teacher/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Teacher/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Teacher/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Teacher/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="Teacher/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                
                
              </div>
            </div>
            <!-- Message End -->
          </a>
          
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
    
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <span class="brand-text font-weight-light">Sports EYE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Player
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_player.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Player</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Player.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Player</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Teacher
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_teacher.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Teacher.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Cricket
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_cricket.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Cricket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Cricket.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Cricket</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Basketball
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_basketball.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Basketball</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Basketball.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Basketball</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Football
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_football.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Football</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Football.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Football</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Volleyball
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_volleyball.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Volleyball</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Volleyball.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Volleyball</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Kabaddi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_kabaddi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Kabaddi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Kabaddi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Kabaddi</p>
                </a>
              </li>
            </ul>
          </li>
  </aside>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Cricket Players</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cricket</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="<?php $_PHP_SELF ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputTname">Team Name</label>
                    <input type="text" class="form-control" name="Tname" id="Tname" value="<?php echo $Tname;?>"placeholder="<?php echo $Tname;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP1name">Player 1 ID</label>
                    <input type="text" class="form-control" name="P1_id" id="P1_id" value="<?php echo $P1_id;?>"placeholder="<?php echo $P1_id;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP2_id">Player 2 ID</label>
                    <input type="text" class="form-control" name="P2_id" id="P2_id" value="<?php echo $P2_id;?>"placeholder="<?php echo $P2_id;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP3_id">Player 3 ID</label>
                    <input type="text" class="form-control" name="P3_id" id="P3_id" value="<?php echo $P3_id;?>"placeholder="<?php echo $P3_id;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP4_id">Player 4 ID</label>
                    <input type="text" class="form-control" name="P4_id" id="P4_id" value="<?php echo $P4_id;?>"placeholder="<?php echo $P4_id;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP5name">Player 5 ID</label>
                    <input type="text" class="form-control" name="P5_id" id="P5_id" value="<?php echo $P5_id;?>"placeholder="<?php echo $P5_id;?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputP6_id">Player 6 ID</label>
                    <input type="text" class="form-control" name="P6_id" id="P6_id" value="<?php echo $P6_id;?>"placeholder="<?php echo $P6_id;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP7name">Player 7 ID</label>
                    <input type="text" class="form-control" name="P7_id" id="P7_id" value="<?php echo $P7_id;?>"placeholder="<?php echo $P7_id;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP8name">Player 8 ID</label>
                    <input type="text" class="form-control" name="P8_id" id="P8_id" value="<?php echo $P8_id;?>"placeholder="<?php echo $P8_id;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP9name">Player 9 ID</label>
                    <input type="text" class="form-control" name="P9_id" id="P9_id"value="<?php echo $P9_id;?>"placeholder="<?php echo $P9_id;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP10name">Player 10 ID</label>
                    <input type="text" class="form-control" name="P10_id" id="P10_id" value="<?php echo $P10_id;?>"placeholder="<?php echo $P10_id;?>" required>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputP11name">Player 11 ID</label>
                    <input type="text" class="form-control" name="P11_id" id="P11_id" value="<?php echo $P11_id;?>"placeholder="<?php echo $P11_id;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputP12name">Player 12 ID</label>
                    <input type="text" class="form-control" name="P12_id" id="P12_id" value="<?php echo $P12_id;?>"placeholder="<?php echo $P12_id;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputP13name">Player 13 ID</label>
                    <input type="text" class="form-control" name="P13_id" id="P13_id" value="<?php echo $P13_id;?>"placeholder="<?php echo $P13_id;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputP14name">Player 14 ID</label>
                    <input type="text" class="form-control" name="P14_id" id="P14_id" value="<?php echo $P14_id;?>"placeholder="<?php echo $P14_id;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputP15name">Player 15 ID</label>
                    <input type="text" class="form-control" name="P15_id" id="P15_id" value="<?php echo $P15_id;?>"placeholder="<?php echo $P15_id;?>" required>
                  </div>
                  <!-- /.button -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="insert1">Submit</button>
                </div>
              </form>
            </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="Teacher/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Teacher/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="Teacher/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="Teacher/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="Teacher/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="Teacher/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="Teacher/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="Teacher/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Teacher/plugins/moment/moment.min.js"></script>
<script src="Teacher/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="Teacher/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="Teacher/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="Teacher/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Teacher/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Teacher/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Teacher/dist/js/pages/dashboard.js"></script>
<!-- jquery-validation -->
<script src="Teacher/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="Teacher/plugins/jquery-validation/additional-methods.min.js"></script>
 <?php
if(isset($_POST['insert1']))
{
 $Tname = $_POST['Tname'];   
 $P1_id = $_POST['P1_id'];
 $P2_id = $_POST['P2_id'];
  $P3_id = $_POST['P3_id'];
  $P4_id = $_POST['P4_id'];
  $P5_id = $_POST['P5_id'];
  $P6_id = $_POST['P6_id'];
  $P7_id = $_POST['P7_id'];
  $P8_id = $_POST['P8_id'];
  $P9_id = $_POST['P9_id'];
  $P10_id = $_POST['P10_id'];
  $P11_id = $_POST['P11_id'];
  $P12_id = $_POST['P12_id'];
  $P13_id = $_POST['P13_id'];
  $P14_id = $_POST['P14_id'];
  $P15_id = $_POST['P15_id'];


 $insert = "UPDATE `cricket` SET `Tname`='$Tname',`P1_id`='$P1_id',`P2_id`='$P2_id',`P3_id`='$P3_id',`P4_id`='$P4_id',`P5_id`='$P5_id', `P6_id`='$P6_id', `P7_id`='$P7_id', `P8_id`='$P8_id', `P9_id`='$P9_id', `P10_id`='$P10_id', `P11_id`='$P11_id', `P12_id`='$P12_id', `P13_id`='$P13_id', `P14_id`='$P14_id', `P15_id`='$P15_id' WHERE `C_id` ='" . $_GET["id"] . "'";

    if ($con->query($insert) === TRUE) {
  ?> <script type="text/javascript">
        alert("Team Updated!!!");
      </script>        <?php
} else {
  echo "Error: " . $insert . "<br>" . $con->error;
}
    mysqli_close($con);

  }
?>
</body>
</html>
