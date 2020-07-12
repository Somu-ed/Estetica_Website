<?php
    include("db_connect.php");

    $subscriber = $_POST['subscriber'];

    $query = "INSERT INTO newsletter(email) VALUES('$subscriber')";
    $fire = mysqli_query($con,$query) or die('Cannot connect to db');

    if($fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>