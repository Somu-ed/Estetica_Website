<?php
include("config/db_connect.php");
    $name = $_POST['name'];
    $category = $_POST['category'];
    $sub_category = 0;
    
    //document entry

    /* Getting file name */
	$filename = $_FILES['file']['name'];

	/* Location */
	$location = "../assets/images/products/".$filename;
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

    $insert_query = "INSERT INTO products(cat_id, subcat_id, p_img, p_cat) VALUES('$category','$sub_category','$filename','$name')";
    $insert_fire = mysqli_query($con, $insert_query) or die('Cannot connect to db');

    if($insert_fire == true){
        echo 1;
    }
    else{
        echo 0;
    }
?>