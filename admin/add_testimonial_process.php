<?php
include("config/db_connect.php");

    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $review = $_POST['review'];

    $insert_query = "INSERT INTO testimonials(name, designation, review) VALUES('$name','$designation','$review')";
    $insert_fire = mysqli_query($con, $insert_query) or die('Cannot connect to db');

    if($insert_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>