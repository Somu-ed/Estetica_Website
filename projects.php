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


    <div class="about-page-content mb-100 mb-sm-45">
        <div class="container wide">
            
            <div class="row img-center">

                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!--=======  about page 2 image  =======-->
                    
                    <div class="about-page-2-image">
                        <img style="width: 100%;" src="assets/images/projects/P1.jpg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of about page 2 image  =======-->
                </div>

                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50">

                    <div class="about-page-text">
                        <h1 style="font-size: 30px;color: #444444;">Customised Wall Art </h1>
                        <p class=" mb-35">Customised hand paintings done by our own artists from Odisha as per a client’s special request. They commissioned 2  Pattachitra art pieces in their living room right from the entrance of the house of 22ft length X 1.5ft height. 1st painting indicates “ Boita Bandana” the ceremonial farewell to the merchant ship. 2nd one indicates journey of lord Jagannath & Balabhadra via manikapatna for Kanchi journey.</p>
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
                        <h1 style="font-size: 30px;color: #444444;">Residential Interior Project </h1>
                        <p class=" mb-35">Theme for this project was WHITE. Client needed all wardrobes, book shelf, kitchen and ceiling colours to be white with combination of rubber wood for panelling of kitchen and living area, TV Unit and all walls in light grey colour. One wall in Master bed Room was painted with Stucco finish, while other 3 Bed Rooms, one wall was painted with textured paint. All furnitures were made in teak wood and doors were changed to white colour. Even dish washer, ceiling fans and refrigerator was ordered in white colour. One of the most elegant projects undertaken by us.</p>
                    </div>

                </div>

                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!--=======  about page 2 image  =======-->
                    
                    <div class="about-page-2-image">
                        <img style="width: 100%;" src="assets/images/projects/P8.jpg" class="img-fluid" alt="">
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
                        <img style="width: 100%;" src="assets/images/projects/P3.jpg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of about page 2 image  =======-->
                </div>

                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50">

                    <div class="about-page-text">
                        <h1 style="font-size: 30px;color: #444444;">News 7 Studio Makeover</h1>
                        <p class=" mb-35">We were approached by a famous news channel in Bhubaneswar for a studio makeover,  for one of its morning dailies  called “Breakfast Odisha”. After understanding their requirements, we primarily did some cosmetic changes to give a different and contemporary look. In this project, we changed sticker on back side with some vibrant colours along with put some big and small cushions, and added few artefacts on the table to give  it a fresh look. The new look has been noticed and appreciated by the viewers.</p>
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
                        <h1 style="font-size: 30px;color: #444444;">Customised Fabric Design</h1>
                        <p class=" mb-35">A senior interior designer from Odisha has asked us to develop this fabric for her client. She shared with us an image of the chair, along with only information that fabric should be soft. This particular design was difficult to develop as it is not clearly visible and there are 3 colours involved in it. Out of 3 options submitted to her, she has approved this one enclosed for her client. The fabric comes out to be perfect as we had used chenille fabric as base for softness as well as upholstery application.</p>
                    </div>

                </div>

                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!--=======  about page 2 image  =======-->
                    
                    <div class="about-page-2-image">
                        <img style="width: 100%;" src="assets/images/projects/P4.jpg" class="img-fluid" alt="">
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
                        <img style="width: 100%;" src="assets/images/projects/P5.jpg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of about page 2 image  =======-->
                </div>

                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50">

                    <div class="about-page-text">
                        <h1 style="font-size: 30px;color: #444444;">Lawn Grass Carpet Installation</h1>
                        <p class=" mb-35">A beautiful house with an unkempt garden. This house belongs to an ex member of parliament at Bhubaneswar. We were called to give a solution on how to maintain it neat and clean without any gardener’s help. Area was huge i.e. approx. 120 sq. Ft. We suggested to use a lawn grass carpet. We installed lawn grass carpet of 20mm pile height with tuft density of 21000 d/m2. . The client expressed his delight on the outcome.</p>
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
                        <h1 style="font-size: 30px;color: #444444;">Government Guest House Suites at Puri</h1>
                        <p class=" mb-35">This is a special project as it was our 1st Interior turnkey project.  The biggest Challenge was to complete interior of 2 Suites of approx. 1500 Sq. ft each suite within 11 days. It includes civil, electrical, false ceiling, carpentry includes wardrobe, study table, tv panel etc, painting, furniture includes bed, chair and centre table and soft furnishing includes mattress, top-of-the-bed items, curtains, cushions, pillows etc. 23 people engaged day & night and then only we could able to hand over on 10th day, one day prior to committed date. Always grateful to the GM for his trust and support. Appreciation by chairman of  the concerned department. Was a cherry on the cake! </p>
                    </div>

                </div>

                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!--=======  about page 2 image  =======-->
                    
                    <div class="about-page-2-image">
                        <img style="width: 100%;" src="assets/images/projects/P6.jpg" class="img-fluid" alt="">
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
                        <img style="width: 100%;" src="assets/images/projects/P7.jpg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of about page 2 image  =======-->
                </div>

                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 mb-sm-50">

                    <div class="about-page-text">
                        <h1 style="font-size: 30px;color: #444444;">Panthanivas Refurbishing at BBSR</h1>
                        <p class=" mb-35">We got this project through one of our associate architect and a very good friend, who has a furniture factory in Bhubaneswar. This is a guest house project with more than 45 rooms, which is being done on phase manner. We, from Estética supplied the soft furnishing which included Mattress, Mattress Protector, Bed Sheet, Pillow, Pillow Case, Comforter, Comforter Cover, bed runner, cushions with cushion covers, face towel, bath towel along with roman blind. The minimalistic interiors were suitably supported by our elegant furnishing.</p>
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
                        <h1 style="font-size: 30px;color: #444444;">Customised Re-furbishing Project</h1>
                        <p class=" mb-35">This was a special project and 1st of its kind for us. One of our client wanted her sofa to be re-furbished with Odisha handloom fabric. Initially we were little worried, as normally in Odisha we make light weight handloom fabrics for dress material and sarees,  but took the challenge and we specially developed this ikat fabric with small motif designs for her and were happy to surpass her expectations.</p>
                    </div>

                </div>

                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!--=======  about page 2 image  =======-->
                    
                    <div class="about-page-2-image">
                        <img style="width: 100%;" src="assets/images/projects/P2.jpg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of about page 2 image  =======-->
                </div>
            </div>
        </div>
    </div>

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
						"autoplay": false,
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
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Mr. Chirag Swain is a well known architect and leads the firm in Design and facilities Management. His expertise is in designing of Boutique Hotels, pubs, lounges, discos and restaurants, luxury residential and High-end villas. Estética has collaborated with him for both his residential as well as commercial projects.
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t1.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->

									<div class="content">
										<p class="name">Chirag Swain</p>
										<span class="designation">Principal Architect, Chirag Design Studio</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->

						<!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Mr Chiranjib Patnaik  is an experienced Interior Designer with a demonstrated history of working in the design industry. Skilled in Concept Planning, Furnishings, Planning Consultancy, Kitchen & Bath Design, Window Treatments, and Vendor Management. He has collaborated with Estética for many of his esteemed clients.

								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t2.jpg" style="height: 80px; width: 80px;" class="img-fluid" alt="">
									</div> -->

									<div class="content">
										<p class="name">Chiranjib Patnaik</p>
										<span class="designation">Proprietor, In-Arc</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->
						
						<!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Mr Krishnendu Nandy is one of the most prominent architects of Odisha. His firm provides services in Architecture, Interior design, Master Planning & Facilities programming. He has over sixteen years of experience in handling varied projects ranging from Hospitality, Corporate, Housing, High end Residential and Retail Centres across India and SAARC Countries. I.D.E.A.Z. Estética has partnered with Mr Nandy for some of its interior projects.
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t3.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->
									
									<div class="content">
										<p class="name">Krishnendu Nandy</p>
										<span class="designation">Managing Partner, Ideaz Architectural Consultants</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->

                        <!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Ms Lisa Acharya is a young, bright architect who runs a successful architecture consultancy firm, L.A.vation. In the span of 10 years, it has gained experience in consulting for a wide range of constructions and have valuable insights into the execution of various kind of small, large and complex projects.They consider "deadlines" sacrosanct and value their commitments. Estética has had a wonderful association with Ms Lisa on some of her big institutional projects.
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t3.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->
									
									<div class="content">
										<p class="name">Lisa Acharya</p>
										<span class="designation">Principal Architect, L.A.vation</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->

						<!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
								Ms. Revati Pany is a veteran interior designer who caters to the varying aesthetics of her clientele. Having pursued a short course in Interior Design , she started creating furniture pieces in wood  and wrought iron for discerning clients . Popularity for her work grew , and she started creating and curating full interior spaces . Her love for art and craft helps give a distinct identity to all projects , whether contemporary or classic .
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t3.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->
									
									<div class="content">
										<p class="name">Revaty Pany</p>
										<span class="designation">Managing Director, Ocasa Designs</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->

						<!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Debasish is an innovative manufacturer of contemporary furniture made of wood and wood- based products. Vibe Studio is a state-of-the-art furniture studio where the furniture is manufactured using German technology. Estética has been a furnishing partner for the studio and has also collaborated with Debasish for his interior projects.
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t3.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->
									
									<div class="content">
										<p class="name">Debasish Patnaik</p>
										<span class="designation">Founder, Vibe Furniture Studio</span>
									</div>
								</div>
							</div>
						</div>
						
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