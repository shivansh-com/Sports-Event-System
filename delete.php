<?php
include("config.php");
error_reporting();
 
    $sql = "DELETE FROM `player` WHERE P_id ='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
 
        echo "Player deleted successfully";
        header("location: Manage_player.php");
        exit();
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($con);
?>