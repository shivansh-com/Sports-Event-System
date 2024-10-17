-<?php include("config.php");
if(!isset($_SESSION['Admin_Id'])){
      header("location:login.php");
      die();
   }?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Player</title>

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

  <!-- daterange picker -->
  <link rel="stylesheet" href="Teacher/plugins/daterangepicker/daterangepicker.css">
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
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Player</h1>
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
                <h3 class="card-title">Player</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="<?php $_PHP_SELF ?>" method="post">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputFname">First Name</label>
                    <input type="text" class="form-control" name="Fname" id="exampleInputFname" placeholder="FirstName">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMname">Middle Name</label>
                    <input type="text" class="form-control" name="Mname" id="exampleInputMname" placeholder="MiddleName">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputLname">Last Name</label>
                    <input type="text" class="form-control" name="Lname" id="exampleInputLname" placeholder=" LastName">
                  </div>
                  <!-- radio -->
                  <table>
                  <tr>
                    
                     <td> <b>Gender:</b> <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="Gender" value="Male">
                          <label for="customRadio1" class="custom-control-label">Male</label>
                        </div></div>
                       <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="Gender" value="Female">
                          <label for="customRadio2" class="custom-control-label">Female</label>
                        </div></div></td></tr>
                      </table>
                 
                  <div class="form-group">
                    <label for="exampleInputEid">Email address</label>
                    <input type="email" class="form-control" name="Eid" id="exampleInputEid" placeholder="Email" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  name="Password" id="exampleInputPassword1" placeholder="Password" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputBdate">Bdate</label>
                    <input type="text" class="form-control" name="Bdate" id="exampleInputBdate" placeholder="Birth Date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputContact">Contact</label>
                    <input type="text" class="form-control" name="Contact" id="exampleInputContact" placeholder="Contact">
                  </div>
                     
                <!-- /.button -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit" name="insert">
                </div>
                </form>
            </div>
  <!-- jQuery -->
<script src="Teacher/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Teacher/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- jquery-validation -->
<script src="Teacher/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="Teacher/plugins/jquery-validation/additional-methods.min.js"></script>
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
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
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
<!-- daterangepicker -->
<script src="Teacher/plugins/moment/moment.min.js"></script>
<script src="Teacher/plugins/daterangepicker/daterangepicker.js"></script>
<?php
if(isset($_POST['insert']))
{
  $conn = mysqli_connect("localhost","root","");
  if($conn)
  {
    
    $conn = mysqli_connect("localhost","root","");

if (!$conn) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}
$db_select = mysqli_select_db($conn,'project');
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Internal server error');
}
    
    $Fname = strval($_POST['Fname']);
    $Mname = strval($_POST['Mname']);
    $Lname = strval($_POST['Lname']);
    $Gender = strval($_POST['Gender']);
    $Eid = strval($_POST['Eid']);
    $Password = strval($_POST['Password']);
    $Bdate = strval($_POST['Bdate']);
    $Contact = strval($_POST['Contact']);

    $check_duplicate_email = "SELECT Eid from player WHERE Eid = '$Eid' ";
    $result = mysqli_query($conn, $check_duplicate_email);
    $count = mysqli_num_rows($result);
    if ($count > 0)
    {
      ?> <script type="text/javascript">
        alert("Email already exists!!!");
      </script>        <?php   
    }
   
   else
   {
   
    $insert = "INSERT INTO `player` (`Password`, `Fname`, `Mname`, `Lname`, `Gender`, `Eid`, `Bdate`, `Contact`) values('$Password','$Fname','$Mname','$Lname','$Gender','$Eid','$Bdate','$Contact')";
    if ($conn->query($insert) === TRUE) {
  ?> <script type="text/javascript">
        alert("New Player Added!!!");
      </script>        <?php
} else {
  echo "Error: " . $insert . "<br>" . $conn->error;
}
}
    mysqli_close($conn);

  }
}
?>
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      Fname: {
        required: true,
        Fname: true,
      },
      Mname: {
        required: true,
        Mname: true,
      },
      Lname: {
        required: true,
        Lname: true,
      },
      Eid: {
        required: true,
        Eid: true,
      },
      Password: {
        required: true,
        minlength: 6
      },
      
    },
    messages: {
       Fname: {
        required: "Please enter a First Name",
      },
       Mname: {
        required: "Please enter a Middle Name",
      },
       Lname: {
        required: "Please enter a Last Name",
      },
      Eid: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      Password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>