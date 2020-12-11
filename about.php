<?php require "config/db_connect.php";?>


<?php
    $about_query = "SELECT * FROM about";
    $about_fire = mysqli_query($con,$about_query);
    while ($about = mysqli_fetch_array($about_fire)) {
        $about_id = $about['id'];
        $about_story = $about['story'];
        $about_approach = $about['approach'];
        $about_mission = $about['mission'];
        $about_vision = $about['vision'];
    }
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Us | Estética Furnishing</title>
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

     @media screen and (min-width: 990px) {
         .about-page-2-image {
             margin-left: 200px;
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
             height: 250px !important;
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
					<h1 class="breadcrumb-title">About Us</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="index.php">HOME</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">About Us</li>
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
                        <h1 style="font-size: 35px;color: #444444;">Our Story</h1>
                        <p class="subtitle"><?php echo"$about_story"; ?></p>
                    </div>
                    
                    <!--=======  End of section title  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of section title container ======-->

    <!--=============================================
    =            about us video content         =
    =============================================-->
    
    <!--=======  about video area  =======-->
    <div class="about__video" >
        <iframe
            src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Festeticafurnishings%2Fvideos%2F209853666596611%2F&show_text=false&width=734&height=411&appId"
            width="800"
            height="480"
            scrolling="no"
            frameborder="0"
            allowTransparency="true"
            allow="encrypted-media"
            allowFullScreen="true"
        >
        </iframe>
    </div>
    
    <!--=======  End of about video area  =======-->
    
    <!--=====  End of about us video content  ======-->


    <div class="about-page-content mb-100 mb-sm-45">
        <div class="container wide">
            
            <div class="row img-center">

                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!--=======  about page 2 image  =======-->
                    
                    <div class="about-page-2-image">
                        <img style="height: 300px;" src="assets/images/backgrounds/approach.svg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of about page 2 image  =======-->
                </div>

                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50">

                    <div class="about-page-text">
                        <h1 style="font-size: 30px;color: #444444;">Our Approach</h1>
                        <p class=" mb-35"><?php echo"$about_approach"; ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="about-page-content mb-100 mb-sm-45">
        <div class="container wide">
    
            <div class="row img-center">

                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50">

                    <div class="about-page-text">
                        <h1 style="font-size: 30px;color: #444444;">Our Mission</h1>
                        <p class=" mb-35"><?php echo"$about_mission"; ?></p>
                    </div>

                </div>

                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!--=======  about page 2 image  =======-->
                    
                    <div class="about-page-2-image">
                        <img style="height: 300px;" src="assets/images/backgrounds/mission.svg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of about page 2 image  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <div class="about-page-content mb-100 mb-sm-45">
        <div class="container wide">
            
            <div class="row img-center">

                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!--=======  about page 2 image  =======-->
                    
                    <div class="about-page-2-image">
                        <img style="height: 300px;" src="assets/images/backgrounds/vision.svg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of about page 2 image  =======-->
                </div>

                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50">

                    <div class="about-page-text">
                        <h1 style="font-size: 30px;color: #444444;">Our Vision</h1>
                        <p class=" mb-35"><?php echo"$about_vision"; ?></p>

                    </div>

                </div>
            </div>
        </div>
    </div>
	



	<!--=============================================
	=            footer area         =
	=============================================-->
	
	<?php include "includes/footer.php"?>
	
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