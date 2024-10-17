<?php
include("config.php");
error_reporting();
 
    $sql = "DELETE FROM `kabaddi` WHERE K_id ='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
 
        echo "Record deleted successfully";
    header("location: Manage_kabaddi.php");
        exit();
    } else {
     
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($con);
?>