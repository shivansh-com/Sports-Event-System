<?php
include("config.php");
error_reporting();
 
    $sql = "DELETE FROM `teacher` WHERE User_Id ='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
 
        echo "Teacher deleted successfully";
        header("location: Manage_teacher.php");
        exit();
    } else {
     
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($con);
?>