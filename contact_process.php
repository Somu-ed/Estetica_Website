<?php
    include("config/db_connect.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $msg = $_POST['msg'];
    $new_value = str_replace("'", "''", "$msg");

    $query = "INSERT INTO contact(name, email, contact, address, msg, date) VALUES('$name','$email','$contact','$address','$new_value',CURDATE())";
    $fire = mysqli_query($con,$query) or die('Cannot connect to db');

    if($fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>