<?php include("db_connect.php");?>


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
	<?php include("includes/header.php");?>
	
	<!--===== End of Header offcanvas about ======-->

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
						<?php
						$query = "SELECT * FROM blog ORDER BY 1 DESC LIMIT 0,8";

						$fire = mysqli_query($con,$query);

						while($row = mysqli_fetch_array($fire)){
							$id = $row['id'];
							$image = $row['image'];
							$date = $row['date'];
							$heading = $row['heading'];
							$description = $row['short'];
						


							echo "
												
								<div class='col-md-6 mb-60'>
									<div class='single-slider-post'>
										<!--=======  image  =======-->
										
										<div class='single-slider-post__image mb-30'>
											<a href='blog-single-post-left-sidebar.html'>
												<img src='assets/images/blog/$image' class='img-fluid' alt=''>
											</a>
										</div>
										
										<!--=======  End of image  =======-->

										<!--=======  content  =======-->
										
										<div class='single-slider-post__content'>
											<div class='post-date'>
												<i class='ion-android-calendar'></i>
												<a href='blog-standard-left-sidebar.html'> $date</a>
											</div>
											<h2 class='post-title'><a href='blog-single-post-left-sidebar.html'>$heading</a></h2>
											<p class='post-excerpt'>$description</p>
											<a href='blog_single.php?id=$id' class='blog-readmore-btn'>read more</a>
										</div>
										
										<!--=======  End of content  =======-->
									</div>
								</div>
							";
						}
						?>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!--=======  pagination  =======-->
                            
                            <div class="pagination text-center">
                                <ul>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">NEXT</a></li>
                                </ul>
                            </div>
                            
                            <!--=======  End of pagination  =======-->
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