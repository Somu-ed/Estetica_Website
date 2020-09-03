<script src="assets/js/jquery-3.5.1.min.js"></script>

<script>
	function validateForm() {
		swal.fire({
			text: "All fields are required!",
			icon: "error",
			buttonsStyling: false,
			confirmButtonText: "Ok, got it!",
			customClass: {
				confirmButton: "btn font-weight-bold btn-light-primary"
			}
		}).then(function() {
			KTUtil.scrollTop();
		});
	}
</script>

<script>
	$(document).ready(function() {

		$('#submit').click(function() {

			var name = $("#name").val().trim();
			var email = $("#email").val().trim();
            var contact = $("#contact").val().trim();
            var address = $("#address").val().trim();
            var msg = $("#msg").val().trim();

			if(name!= "" && email != "" && contact != "" && address != "" && msg != ""){
				$.ajax({
					url:'contact_process.php',
					type:'post',
					data:{
                        name: name,
                        email: email,
                        contact: contact,
                        address: address,
                        msg: msg},
					success:function(response){
						if(response == 1){
							swal.fire({
							text: "Form submitted successfully!!",
							icon: "success",
							buttonsStyling: false,
							confirmButtonText: "Okay!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light-success"
							}
						}).then(function() {
							window.location = "index.php";
						});
							
						}else{
							swal.fire({
								text: "Error!!",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Try again!",
								customClass: {
									confirmButton: "btn font-weight-bold btn-light-primary"
								}
							}).then(function() {
								KTUtil.scrollTop();
							});
						}
					}
				});
			}
			else{
				validateForm();
			}
		});
	});
</script>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact us | Estetica Furnishing</title>
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
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="sweetalert2.min.css">

	<!-- Modernizer JS -->
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

	<style>
		.google-maps {
			position: relative; padding-bottom: 40%; padding-left: 56.25%; height: 0; overflow: hidden; max-width: 100%;
		}
		.google-maps iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			padding-left: 20px;
			padding-right: 20px;
		}
  	</style>

</head>

<body>

	<!--==== Start of Header offcanvas about ====-->
    
    <?php
    include("includes/header.php");
    ?>

    <!--===== End of Header offcanvas about ======-->

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Contact Us</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="index.html">HOME</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">contact us</li>
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
	
	<div class="section-title-container mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->
					
					<div class="section-title section-title--one text-center">
						<p class="subtitle subtitle--deep">COME HAVE A LOOK</p>
						<h1>Contact detail</h1>
					</div>
					
					<!--=======  End of section title  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of section title container ======-->
	

	<!--=============================================
	=            icon box area         =
	=============================================-->
	
	<div class="icon-box-area mb-100 mb-md-30 mb-sm-30">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-md-70 mb-sm-70">
					<!--=======  single icon box  =======-->
					
					<div class="single-icon-box">
						<div class="icon-box-icon">
							<i class="ion-location"></i>
						</div>
						<div class="icon-box-content">
							<h3 class="title">ADDRESS</h3>
							<p class="content">1800 Abbot Kinney Blvd. Unit D & E Venice</p>
						</div>
					</div>
					
					<!--=======  End of single icon box  =======-->
				</div>
				<div class="col-md-4 mb-md-70 mb-sm-70">
					<!--=======  single icon box  =======-->
					
					<div class="single-icon-box mb-10">
						<div class="icon-box-icon">
							<i class="ion-ios-telephone"></i>
						</div>
						<div class="icon-box-content">
							<h3 class="title">CONTACT</h3>
							<p class="content">Mobile: (+88) – 1990 – 6886 <span>Hotline: 1800 – 1102</span></p>
						</div>
					</div>
					
					<div class="single-icon-box">
						<div class="icon-box-icon">
							<i class="ion-ios-email"></i>
						</div>
						<div class="icon-box-content">
							<p class="content">	Mail: contact@lezadastore.com </p>
						</div>
					</div>
					
					<!--=======  End of single icon box  =======-->
				</div>
				<div class="col-md-4 mb-md-70 mb-sm-70">
					<!--=======  single icon box  =======-->
					
					<div class="single-icon-box">
						<div class="icon-box-icon">
							<i class="ion-ios-clock-outline"></i>
						</div>
						<div class="icon-box-content">
							<h3 class="title">HOUR OF OPERATION</h3>
							<p class="content">Monday – Friday : 09:00 – 20:00<span>Sunday & Saturday: 10:30 – 22:00</span></p>
						</div>
					</div>
					
					<!--=======  End of single icon box  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of icon box area  ======-->

	<!--=============================================
	=            box layout map         =
	=============================================-->
	
	<div class="box-layout-map-area mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  box layout map container  =======-->
					
					<div class="box-layout-map-container google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14963.677629431844!2d85.8240402!3d20.3449478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90848377c4e04171!2sEstetica%20Furnishings!5e0!3m2!1sen!2sin!4v1594119094435!5m2!1sen!2sin" width="700" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					
					<!--=======  End of box layout map container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of box layout map  ======-->

	<!--=============================================
	=            section title  container      =
	=============================================-->
	
	<div class="section-title-container mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->
					
					<div class="section-title section-title--one text-center">
						<h1>Get in touch</h1>
					</div>
					
					<!--=======  End of section title  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of section title container ======-->


	<!--=============================================
	=            contact form area         =
	=============================================-->
	
	<div class="contact-form-area mb-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="lezada-form contact-form">
						<form>
							<div class="row">
								<div class="col-md-6 mb-40">
									<input type="text" placeholder="Name *"  id="name"  required>
								</div>
								<div class="col-md-6 mb-40">
									<input type="email" placeholder="Email *"  id="email"  required>
								</div>
								<div class="col-md-6 mb-40">
									<input type="text" placeholder="Contact *"  id="contact" >
								</div>
                                <div class="col-md-6 mb-40">
									<input type="text" placeholder="Address *"  id="address" >
								</div>
								<div class="col-lg-12 mb-40">
									<textarea  cols="25" rows="10" placeholder="Msg *" id="msg" ></textarea>
								</div>
								<div class="col-lg-12 text-center">
									<button id="submit" type="button" class="lezada-button lezada-button--medium">submit</button>
								</div>
							</div>
						</form>
					</div>
					<p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of contact form area  ======-->


	<!--=============================================
	=            footer area         =
	=============================================-->
	
    <?php include("includes/footer.php"); ?>
	
	<!--=====  End of footer area  ======-->

	<!--=============================================
	=            overlay items         =
	=============================================-->
	
	<?php include("includes/overlay.php"); ?>

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

	<!-- AJAX mail JS -->
    <!-- <script src="assets/js/ajax-mail.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>

</body>

</html>