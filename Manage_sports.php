<?php include("config.php");
if(!isset($_SESSION['Admin_Id'])){
      header("location:login.php");
      die();
   }?>
<?php
$user = 'root';
$password = ''; 
$db_name = 'project'; 
  
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $db_name);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM game_type ORDER BY Gtype DESC ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Sports</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Teacher/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="Teacher/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="Teacher/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="Teacher/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Teacher/dist/css/adminlte.min.css">
  <!--Icons-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
                Team
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_team.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Team.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
              
            </ul>
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
                Sports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_sports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Sports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sports</p>
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
                <a href="Manage_football" class="nav-link">
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
                Event
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="Manage_event" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Event.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Event</p>
                </a>
              </li>
  </aside>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Sports</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                                            <th>Game ID</th>
                                            <th>Game Type</th>
                                            <th>Game Name</th>
                                            <th>Action</th>
                                        </tr>
                  </thead>
                  <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['G_Id'];?></td>
                <td><?php echo $rows['Gtype'];?></td>
                <td><?php echo $rows['Gname'];?></td>
                <td><i class="glyphicon glyphicon-file"></i><a href="editsports.php?id=<?php echo $rows['G_Id']; ?>"><ion-icon name="create-sharp"></ion-icon></a>
                <a href="Delete3.php?id=<?php echo $rows['G_Id']; ?>" onclick="return confirm('Want to delete this sports??'); "><ion-icon name="trash-sharp"></ion-icon></a></td>
            </tr>
            <?php
                }
             ?>

                                </table>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<a href="Sports.php"><button type="button" class="btn btn-block btn-primary btn-lg" style="height:40px;width:150px">Add Sports</button></a>
<!-- jQuery -->
<script src="Teacher/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Teacher/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="Teacher/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Teacher/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="Teacher/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="Teacher/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="Teacher/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="Teacher/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="Teacher/plugins/jszip/jszip.min.js"></script>
<script src="Teacher/plugins/pdfmake/pdfmake.min.js"></script>
<script src="Teacher/plugins/pdfmake/vfs_fonts.js"></script>
<script src="Teacher/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="Teacher/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="Teacher/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="Teacher/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Teacher/dist/js/demo.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
