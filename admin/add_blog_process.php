<?php
include("config/db_connect.php");
    $date = $_POST['date'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $head = $_POST['head'];
    $tags = $_POST['tags'];
    $short = str_replace("'", "''", $_POST['short']);
    $desc = str_replace("'", "''", $_POST['desc']);
    
    //document entry

    /* Getting file name */
	$filename = $_FILES['file']['name'];

	/* Location */
	$location = "../assets/images/blog/".$filename;
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

    $insert_query = "INSERT INTO blog(image, date, author, category, heading, short, description, keywords) VALUES('$filename','$date','$author','$category','$head','$short','$desc','$tags')";
    $insert_fire = mysqli_query($con, $insert_query) or die('Cannot connect to db');

    if($insert_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>