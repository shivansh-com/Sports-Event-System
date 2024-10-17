<?php
include("config.php");
error_reporting();
 
    $sql = "DELETE FROM `team` WHERE T_id ='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
 
        echo "Team deleted successfully";
        header("location: Manage_team.php");
        exit();
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($con);
?>