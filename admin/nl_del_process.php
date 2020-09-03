<?php
include("config/db_connect.php");

    $nl_id = $_POST['nl_id'];
    $delete_query = "DELETE FROM newsletter WHERE id = $nl_id";
    $delete_fire = mysqli_query($con, $delete_query) or die('Cannot connect to db');

    if($delete_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>