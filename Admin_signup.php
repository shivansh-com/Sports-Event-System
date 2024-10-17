<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Admin Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 20%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form method="post">
		<h2> Admin Register</h2>
		
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="Fname" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="Lname" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="Eid" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="Password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="Cpassword" placeholder="Confirm Password" required="required">
        </div>        
        
		<div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" name="insert1" value="Register Now">
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login">Sign in</a></div>
</div>
 <?php
 
if(isset($_POST['insert1']))
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
    $Lname = strval($_POST['Lname']);
    $Eid = strval($_POST['Eid']);
    $Password = strval($_POST['Password']);
    $Cpassword = strval($_POST['Cpassword']);

    $insert = "INSERT INTO `admin`(`Fname`, `Lname`, `Eid`, `Password`, `Cpassword`) values('$Fname','$Lname','$Eid','$Password','$Cpassword')";
    
    if ($conn->query($insert) === TRUE) {
 
} else {
  echo "Error: " . $insert . "<br>" . $conn->error;
}
    mysqli_close($conn);

  }
}
?>
</body>
</html>