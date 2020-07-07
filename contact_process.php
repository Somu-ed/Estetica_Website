<?php
    include("db_connect.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $msg = $_POST['msg'];

    $query = "INSERT INTO contact(name, email, contact, address, msg) VALUES('$name','$email','$contact','$address','$msg')";
    $fire = mysqli_query($con,$query) or die('Cannot connect to db');

    if($fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>