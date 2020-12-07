<div class="lezada-testimonial multi-item-testimonial-area testimonial-bg mb-100 pt-135 pb-135">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-60">
					<!--=======  section title  =======-->
					
					<div class="section-title section-title--one text-center">
						<h2 style="font-size: 35px;color: #444444;">Testimonials</h2>
                        <p>Estética thrives and grows through the word of mouth recommendations of its revered clients and indulgent well-wishers.</p>
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
						<?php
                            $test_query = "SELECT * FROM testimonials ORDER BY 1";

                            $test_fire = mysqli_query($con,$test_query);

                            while($test = mysqli_fetch_array($test_fire)){
                                $test_name = $test['name'];
                                $test_designation = $test['designation'];
                                $test_review = $test['review'];
                                echo"
                                    <div class='col'>
                                        <div class='testimonial-item multi-testimonial-single-item'>
                                            <div class='multi-testimonial-single-item__text'>
                                            $test_review
                                            </div>
                                            <div class='multi-testimonial-single-item__author-info'>
                                                <!-- <div class='image'>
                                                    <img src='assets/images/testimonial/t1.jpg' style='width: 80px' class='img-fluid' alt=''>
                                                </div> -->
                                    
                                                <div class='content'>
                                                    <p class='name'>$test_name</p>
                                                    <span class='designation'>$test_designation</span>
                                                </div>
                                            </div>
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