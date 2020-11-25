<?php include("config/db_connect.php");?>


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
                <!-- Sidebar Deleted -->
                <div class="col-lg-12 order-1">
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
												
								<div class='col-md-4 mb-60'>
									<div class='single-slider-post'>
										<!--=======  image  =======-->
										
										<div class='single-slider-post__image mb-30'>
											<a href='blog_single.php?id=$id'>
												<img style='width: 370px; height: 200px; object-fit: cover;' src='assets/images/blog/$image' class='img-fluid' alt='blog cover'>
											</a>
										</div>
										
										<!--=======  End of image  =======-->

										<!--=======  content  =======-->
										
										<div class='single-slider-post__content'>
											<div class='post-date'>
												<i class='ion-android-calendar'></i>
												<a> $date</a>
											</div>
											<h2 class='post-title'><a href='blog_single.php?id=$id'>$heading</a></h2>
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