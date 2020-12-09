<?php
include("config/db_connect.php");
    $category = $_POST['category'];
    
    //document entry

    /* Getting file name */
	$filename = $_FILES['file']['name'];

    /* Location */
    if($category == "brand") {
        $location = "../assets/images/brands/".$filename;
    } 
    if($category == "client") {
        $location = "../assets/images/clients/".$filename;
    }
	
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
    
    if($category == "brand") {
        $insert_query = "INSERT INTO partner_brands(img) VALUES('$filename')";
    } else {
        $insert_query = "INSERT INTO clients(img) VALUES('$filename')";
    }

    $insert_fire = mysqli_query($con, $insert_query) or die('Cannot connect to db');

    if($insert_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>