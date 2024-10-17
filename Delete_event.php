<?php
include("config.php");
 
    $sql = "DELETE FROM `event` WHERE E_id ='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
 
        echo "Record deleted successfully";
    header("location: Manage_event.php");
        exit();
    } else {
     
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($con);
?>