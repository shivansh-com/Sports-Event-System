<?php
include("config.php");
error_reporting();
 
    $sql = "DELETE FROM `basketball` WHERE B_id ='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
 
        echo "Record deleted successfully";
    header("location: Manage_basketball.php");
        exit();
    } else {
     
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($con);
?>