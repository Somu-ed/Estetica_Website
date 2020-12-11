<?php
include("config/db_connect.php");
    $story = str_replace("'", "''", $_POST['story']);
    $approach = str_replace("'", "''", $_POST['approach']);
    $mission = str_replace("'", "''", $_POST['mission']);
    $vision = str_replace("'", "''", $_POST['vision']);

    $insert_query = "UPDATE about SET story='$story', approach='$approach', mission='$mission', vision='$vision' WHERE id=1";;
    $insert_fire = mysqli_query($con, $insert_query) or die('Cannot connect to db');

    if($insert_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>