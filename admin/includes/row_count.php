<?php

//products count
$prod_query = "SELECT * FROM products";
$prod_fire = mysqli_query($con, $prod_query);
$prod = mysqli_num_rows($prod_fire);

//projects count
$proj_query = "SELECT * FROM projects";
$proj_fire = mysqli_query($con, $proj_query);
$proj = mysqli_num_rows($proj_fire);

//newsletter count
$news_query = "SELECT * FROM newsletter";
$news_fire = mysqli_query($con, $news_query);
$news = mysqli_num_rows($news_fire);

//contact count
$cont_query = "SELECT * FROM contact";
$cont_fire = mysqli_query($con, $cont_query);
$cont = mysqli_num_rows($cont_fire);

?>