<?php
include("config/db_connect.php");
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $new_value = str_replace("'", "''", "$desc");
    
    //document entry

    /* Getting file name */
	$filename = $_FILES['file']['name'];

	/* Location */
	$location = "../assets/images/projects/".$filename;
	$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
	$imageFileType = strtolower($imageFileType);

	/* Valid extensions */
	$valid_extensions = array("jpg","jpeg","png");

	$response = 0;
	/* Check file extension */
	if(in_array(strtolower($imageFileType), $valid_extensions)) {
	   	/* Upload file */
        move_uploaded_file($_FILES['file']['tmp_name'],$location);
	}

    $insert_query = "INSERT INTO projects(name, description, img) VALUES('$name','$new_value','$filename')";
    $insert_fire = mysqli_query($con, $insert_query) or die('Cannot connect to db');

    if($insert_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>