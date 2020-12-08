<?php include("config/db_connect.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Projects | Estética Furnishing</title>
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

    <style>
		.about__video {
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 30px;
		}
		.mb-35 {
		text-align: justify;
		text-justify: inter-word;
		}
		.img-center {
		align-items: center;
		}

		.partner_logos {
			height: 65px;
		}
		.about-page-2-image > img {
			border-radius: 8px;
		}

		@media screen and (min-width: 990px) {
			.about-page-2-image {
				margin-left: 150px;
				margin-right: 20px;
			}
			.about__video {
			margin-bottom: 50px;
			}
		}
		@media screen and (max-width: 990px) {
			.about-page-2-image {
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.about-page-2-image > img {
				width: 100% !important;
			}
			.about__video {
				padding: 20px;
				margin-bottom: -100px;
			}
		}
    </style>

</head>

<body>

	
	<!--=============================================
	=            Header offcanvas about         =
	=============================================-->
	
	<?php include "includes/header.php";?>
	
	<!--===== End of Header offcanvas about ======-->

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-2 pt-50 pb-70 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Projects</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="index.php">HOME</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Projects</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=======  End of breadcrumb area =======-->
    

    <!--=============================================
	=            section title  container      =
	=============================================-->
	
	<div class="section-title-container mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!--=======  section title  =======-->
                    
                    <div class="section-title section-title--one text-center">
                        <h1 style="font-size: 35px;color: #444444;">Our Projects</h1>
                        <!-- <p class="subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam quis enim doloribus minus nostrum omnis unde! Fugit, corrupti rerum, placeat ullam totam ducimus minima quo id atque provident veniam voluptas.</p> -->
                    </div>
                    
                    <!--=======  End of section title  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of section title container ======-->
    <br><br>

	<?php
		$proj_query = "SELECT * FROM projects ORDER BY 1";

		$proj_fire = mysqli_query($con,$proj_query);
		$proj_id = 1;
		while($proj = mysqli_fetch_array($proj_fire)){
			$proj_name = $proj['name'];
			$proj_desc = $proj['description'];
			$proj_img = $proj['img'];
			
			if($proj_id % 2 != 0){
				echo"
					<!--====  Odd   ======-->
					<div class='about-page-content mb-100 mb-sm-45'>
						<div class='container wide'>
							
							<div class='row img-center'>
				
								<div class='col-lg-6 mb-md-50 mb-sm-50'>
									<!--=======  about page 2 image  =======-->
									
									<div class='about-page-2-image'>
										<img style='width: 100%;' src='assets/images/projects/$proj_img' class='img-fluid' alt=''>
									</div>
									
									<!--=======  End of about page 2 image  =======-->
								</div>
				
								<div class='offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50'>
				
									<div class='about-page-text'>
										<h1 style='font-size: 30px;color: #444444;'>$proj_name</h1>
										<p class=' mb-35'>$proj_desc</p>
									</div>
				
								</div>
							</div>
						</div>
					</div>
				";
		    } else {
				echo"
				<!--====  Even   ======-->
				<div class='about-page-content mb-100 mb-sm-45'>
					<div class='container wide'>
				
						<div class='row img-center'>
			
							<div class='offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50'>
			
								<div class='about-page-text'>
									<h1 style='font-size: 30px;color: #444444;'>$proj_name</h1>
									<p class=' mb-35'>$proj_desc</p>
								</div>
			
							</div>
			
							<div class='col-lg-6 mb-md-50 mb-sm-50'>
								<!--=======  about page 2 image  =======-->
								
								<div class='about-page-2-image'>
									<img style='width: 100%;' src='assets/images/projects/$proj_img' class='img-fluid' alt=''>
								</div>
								
								<!--=======  End of about page 2 image  =======-->
							</div>
						</div>
					</div>
				</div>
				";
			}

			$proj_id = $proj_id + 1;	
		}
	?>

    
    
    

        <!--=============================================
    =            multi item testimonial area        =
    =============================================-->
    
    <div class="lezada-testimonial multi-item-testimonial-area testimonial-bg mb-100 pt-135 pb-135">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-60">
					<!--=======  section title  =======-->
					
					<div class="section-title section-title--one text-center">
						<h1 style="font-size: 35px;color: #444444;">Associates</h1>
                        <!-- <p>estética thrives and grows through the word of mouth recommendations of its revered clients and indulgent well-wishers.</p> -->
					</div>
					
					<!--=======  End of section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  testmonial slider container  =======-->
					
					<div class="lezada-slick-slider multi-testimonial-slider-container"
					data-slick-setting='{
						"slidesToShow": 3,
						"arrows": true,
						"dots": false,
						"autoplay": true,
						"autoplaySpeed": 5000,
						"speed": 1000,
						"prevArrow": {"buttonClass": "slick-prev", "iconClass": "ti-angle-left" },
						"nextArrow": {"buttonClass": "slick-next", "iconClass": "ti-angle-right" }
					}'
					data-slick-responsive='[
						{"breakpoint":1501, "settings": {"slidesToShow": 3} },
						{"breakpoint":1199, "settings": {"slidesToShow": 3} },
						{"breakpoint":991, "settings": {"slidesToShow": 2, "arrows": false} },
						{"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
						{"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
						{"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
					]'
					>
						
						<!--=======  single testimonial  =======-->
						<?php
							$assc_query = "SELECT * FROM associates ORDER BY 1";

							$assc_fire = mysqli_query($con,$assc_query);
							$assc_id = 1;
							while($assc = mysqli_fetch_array($assc_fire)){
								$assc_name = $assc['name'];
								$assc_desg = $assc['designation'];
								$assc_rev = $assc['review'];
								echo"
								<div class='col'>
									<div class='testimonial-item multi-testimonial-single-item'>
									<div class='multi-testimonial-single-item__author-info'>
											<!-- <div class='image'>
												<img src='assets/images/testimonial/t1.jpg' style='width: 80px' class='img-fluid' alt=''>
											</div> -->
								
											<div class='content'>
												<p class='name'>$assc_name</p>
												<span class='designation'>$assc_desg</span>
											</div>
										</div>
									</div><br>
									<div class='multi-testimonial-single-item__text'>
										$assc_rev
									</div>
								</div>
								";
							
							} 
						?>
						
						

						<!--=======  End of single testimonial  =======-->

					</div>
					
					<!--=======  End of testmonial slider container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of multi item testimonial area ======-->

    


	<!--=============================================
	=            clients logo area         =
	=============================================-->
	
	<?php include("includes/clients.php"); ?>
	
	<!--=====  End of brand logo area  ======-->

	<!--=============================================
	=            footer area         =
	=============================================-->
	
	<?php include("includes/footer.php"); ?>
	
	<!--=====  End of footer area  ======-->

	<!--=============================================
	=            overlay items         =
	=============================================-->
	
	<!--=======  about overlay  =======-->
	
	<?php include "includes/overlay.php";?>
	
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