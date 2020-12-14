<?php require "config/db_connect.php";?>
<?php
     if(isset($_GET['id'])){
         $id = $_GET['id'];
     }
?>
<?php 
    $fetch_query = "SELECT * FROM blog WHERE id = $id";
    $fire = mysqli_query($con, $fetch_query);
    if($fire){
        $row = mysqli_fetch_array($fire);
        $image = $row['image'];
        $date = $row['date'];
        $author = $row['author'];
        $category = $row['category'];
        $heading = $row['heading'];
        $description = $row['description'];
        $keywords = $row['keywords'];
    }
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog Single | estética Furnishing</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="assets/images/favicon.svg">

	<!-- CSS
	============================================ -->
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Ionicons CSS -->
	<link href="assets/css/ionicons.min.css" rel="stylesheet">

	<!-- Themify CSS -->
	<link href="assets/css/themify-icons.css" rel="stylesheet">

	<!-- Plugins CSS -->
	<link href="assets/css/plugins.css" rel="stylesheet">

	<!-- Helper CSS -->
	<link href="assets/css/helper.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="assets/css/main.css" rel="stylesheet">

	<!-- Modernizer JS -->
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

	
	<!--=============================================
	=            Header offcanvas about         =
	=============================================-->
	
	<?php include("includes/header.php");?>

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Blog</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="index.php">HOME</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Blog</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=======  End of breadcrumb area =======-->
    
    <!--=============================================
    =            blog page wrapper         =
    =============================================-->
    
    <div class="blog-page-wrapper mb-100">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 order-1 mb-md-70 mb-sm-70">
                    <div class="row">
                        
                        <div class="col-md-12 mb-40">
                            <div class="single-slider-post single-slider-post--sticky pb-60">
                                <!--=======  image  =======-->
                                
                                <div class="single-slider-post__image single-slider-post--sticky__image mb-30">
                                    <img style="height: 500px; width: 1170px; object-fit: cover;" src="assets/images/blog/<?php echo "$image";?>" class="img-fluid" alt="">
                                </div>
                                
                                <!--=======  End of image  =======-->

                                <!--=======  content  =======-->
                                
                                <div class="single-slider-post__content single-slider-post--sticky__content">
                                    <!--=======  post category  =======-->
                                    
                                    <div class="post-category mb-10">
                                        <a href="#"><?php echo "$category";?></a>
                                    </div>
                                    
                                    <h2 class="post-title"><a style="text-transform: uppercase !important;" href="blog-single-post-left-sidebar.html"><?php echo "$heading";?></a></h2>

                                    <!--=======  End of post category  =======-->

                                    <!--=======  post info  =======-->
                                    
                                    <div class="post-info d-flex flex-wrap align-items-center mb-50">
                                        <div class="post-user">
                                            <i class="ion-android-person"></i> By
                                            <a href="blog-standard-left-sidebar.html"> <?php echo "$author";?></a>
                                        </div>
                                        <div class="post-date mb-0 pl-30">
                                            <i class="ion-android-calendar"></i>
                                            <a href="blog-standard-left-sidebar.html"> <?php echo "$date";?></a>
                                        </div>
                                        <div class="post-category pl-30">
                                            <a href="#"><?php echo "$category";?></a>
										</div>
										<!-- <div class="post-comment pl-30">
											<i class="ion-ios-chatbubble-outline"></i>
                                            <a href="blog-standard-left-sidebar.html"> 4 Comments</a>
										</div> -->
                                    </div>
                                    
                                    <!--=======  End of post info  =======-->
									
									
									<!--=======  single blog post section  =======-->
									
									<div style="text-align: justify;" class="single-blog-post-section">
										<?php echo "$description";?>
									</div>
									
									<!--=======  End of single blog post section  =======-->


                                    <div class="row mt-30 align-items-center">
                                        <div class="col-md-6 text-center text-md-left mb-sm-15">
                                            <div class="post-tags">
                                                <i class="ion-ios-pricetags"></i>
                                                <ul class="tag-list">
                                                    <li><a href="#"><?php echo "$keywords";?></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-6 text-center text-md-right">
                                            <div class="post-share">
                                                <span>Share this post:</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--=======  End of content  =======-->
                            </div>
						</div>
						
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of blog page wrapper  ======-->


	<!--=============================================
	=            footer area         =
	=============================================-->
	
	<?php include("includes/footer.php");?>

	<!--=====  End of footer area  ======-->

	<!--=============================================
	=            overlay items         =
	=============================================-->
	
    <?php include("includes/overlay.php");?>
	
	<!--=====  End of overlay items  ======-->

	<!-- scroll to top  -->
	<a href="#" class="scroll-top"></a>
	<!-- end of scroll to top -->

	<!-- JS
	============================================ -->
	<!-- jQuery JS -->
	<script src="assets/js/vendor/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="assets/js/popper.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins JS -->
	<script src="assets/js/plugins.js"></script>

	<!-- Main JS -->
	<script src="assets/js/main.js"></script>

</body>

</html>