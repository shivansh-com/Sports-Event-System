<?php
include("config.php");
error_reporting();
 
    $sql = "DELETE FROM `game_type` WHERE G_Id ='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
 
        echo "Record deleted successfully";
         header("location: Manage_sports.php");
        exit();
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($con);
?>