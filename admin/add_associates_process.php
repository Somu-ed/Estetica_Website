<?php
include("config/db_connect.php");

    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $review = $_POST['review'];
    $new_value = str_replace("'", "''", "$review");

    $insert_query = "INSERT INTO associates(name, designation, review) VALUES('$name','$designation','$new_value')";
    $insert_fire = mysqli_query($con, $insert_query) or die('Cannot connect to db');

    if($insert_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>