<?php
include("config/db_connect.php");

    $del_id = $_POST['del_id'];
    $delete_query = "DELETE FROM testimonials WHERE id = $del_id";
    $delete_fire = mysqli_query($con, $delete_query) or die('Cannot connect to db');

    if($delete_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>