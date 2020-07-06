<?php

$db_host="localhos";
$db_username="root";
$db_password="";
$db_name="perfect_shades";




$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
// Check connection
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
