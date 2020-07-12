<?php require "db_connect.php";?>
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
	<title>Blog Single | Estetica Furnishing</title>
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
	
	<?php include("header.php");?>

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
                <div class="col-lg-3 order-2">
                    <!--=======  page sidebar  =======-->
						
                    <div class="page-sidebar">
                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget mb-40">
                                <!--=======  search widget  =======-->
                                
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="search" placeholder="Search products ...">
                                        <button type="button"><i class="ion-android-search"></i></button>
                                    </form>
                                </div>
                                
                                <!--=======  End of search widget  =======-->
                            </div>
                            
                            
                            <!--=======  End of single sidebarwidget  =======-->

                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget mb-40">
                                <h2 class="single-sidebar-widget--title">Categories</h2>
                                <ul class="single-sidebar-widget--list single-sidebar-widget--list--category">
                                    <li class="has-children">
                                        <a href="shop-left-sidebar.html">Cosmetic </a> <span class="quantity">5</span>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">For body</a></li>
                                            <li><a href="shop-left-sidebar.html">Make up</a></li>
                                            <li><a href="shop-left-sidebar.html">New</a></li>
                                            <li><a href="shop-left-sidebar.html">Perfumes</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop-left-sidebar.html">Furniture </a> <span class="quantity">23</span>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Sofas</a></li>
                                            <li><a href="shop-left-sidebar.html">Armchairs</a></li>
                                            <li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
                                            <li><a href="shop-left-sidebar.html">Dining Chairs</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-left-sidebar.html">Watches </a> <span class="quantity">12</span></li> 
                                    <li><a href="shop-left-sidebar.html">Bags </a> <span class="quantity">22</span></li> 
                                    <li><a href="shop-left-sidebar.html">Uncategorized </a> <span class="quantity">14</span></li> 
                                </ul>
                            </div>
    
                            <!--=======  End of single sidebar widget  =======-->

                          

                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget mb-40">
                                

                                <!--=======  widget post wrapper  =======-->
                                
                                <div class="widget-post-wrapper">
                                <!--=======  single widget post  =======-->
                                
                                <div class="single-widget-post">
                                    <div class="image">
                                        <img src="assets/images/blog/post-thumbnail-100x120.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="widget-post-title"><a href="#">Chic Fashion Phenomenon</a></h3>
                                        <p class="widget-post-date">June 5, 2018</p>
                                    </div>
                                </div>
                                
                                <!--=======  End of single widget post  =======-->
                                <!--=======  single widget post  =======-->
                                
                                <div class="single-widget-post">
                                    <div class="image">
                                        <img src="assets/images/blog/post-thumbnail-6-100x120.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="widget-post-title"><a href="#">Go Your Own Way</a></h3>
                                        <p class="widget-post-date">June 5, 2018</p>
                                    </div>
                                </div>
                                
                                <!--=======  End of single widget post  =======-->
                                <!--=======  single widget post  =======-->
                                
                                <div class="single-widget-post">
                                    <div class="image">
                                        <img src="assets/images/blog/post-thumbnail-9-100x120.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="widget-post-title"><a href="#">Home-made Body Lotion</a></h3>
                                        <p class="widget-post-date">June 5, 2018</p>
                                    </div>
                                </div>
                                
                                <!--=======  End of single widget post  =======-->

                                </div>
                                
                                <!--=======  End of widget post wrapper  =======-->
                            </div>
                            
                            <!--=======  End of single sidebar widget  =======-->

                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget mb-40">
                                <!--=======  blog sidebar banner  =======-->
                                
                                <div class="blog-sidebar-banner">
                                    <img src="assets/images/banners/ADS-blog.png" class="img-fluid" alt="">
                                </div>
                                
                                <!--=======  End of blog sidebar banner  =======-->
                            </div>
                            
                            <!--=======  End of single sidebar widget  =======-->

                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget">
                                <h2 class="single-sidebar-widget--title"> Popular Tags</h2>

                                <div class="tag-container">
                                    <a href="#">bags</a>
                                    <a href="#">chair</a>
                                    <a href="#">clock</a>
                                    <a href="#">comestic</a>
                                    <a href="#">fashion</a>
                                    <a href="#">furniture</a>
                                    <a href="#">holder</a>
                                    <a href="#">mask</a>
                                    <a href="#">men</a>
                                    <a href="#">oil</a>
                                </div>
                            </div>
                            
                            <!--=======  End of single sidebar widget  =======-->
                        </div>
                        
                        <!--=======  End of page sidebar  =======-->
                </div>
                <div class="col-lg-9 order-1 mb-md-70 mb-sm-70">
                    <div class="row">
                        
                        <div class="col-md-12 mb-40">
                            <div class="single-slider-post single-slider-post--sticky pb-60">
                                <!--=======  image  =======-->
                                
                                <div class="single-slider-post__image single-slider-post--sticky__image mb-30">
                                    <img src="assets/images/blog/<?php echo "$image";?>" class="img-fluid" alt="">
                                </div>
                                
                                <!--=======  End of image  =======-->

                                <!--=======  content  =======-->
                                
                                <div class="single-slider-post__content single-slider-post--sticky__content">
                                    <!--=======  post category  =======-->
                                    
                                    <div class="post-category mb-10">
                                        <a href="#">fashion</a>
                                    </div>
                                    
                                    <h2 class="post-title"><a href="blog-single-post-left-sidebar.html"><?php echo "$heading";?></a></h2>

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
									
									<div class="single-blog-post-section">
										<?php echo "$description";?>
									</div>
									
									<!--=======  End of single blog post section  =======-->


                                    <div class="row mt-30 align-items-center">
                                        <div class="col-md-6 text-center text-md-left mb-sm-15">
                                            <div class="post-tags">
                                                <i class="ion-ios-pricetags"></i>
                                                <ul class="tag-list">
                                                    <li><a href="#"><?php echo "$keywords";?></a>,</li>
                                                    
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
	
	<?php include("footer.php");?>

	<!--=====  End of footer area  ======-->

	<!--=============================================
	=            overlay items         =
	=============================================-->
	
    <?php include("overlay.php");?>
	
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