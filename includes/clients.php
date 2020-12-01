<div class="section-title-container mb-70 mb-md-50 mb-sm-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->
                    
                    <div class="section-title section-title--one text-center">
                        <h2 style="font-size: 35px;color: #444444;">Clients</h2>
                    </div>
                    
                    <!--=======  End of section title  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of section title container ======-->

    <!--=============================================
    =            product carousel container         =
    =============================================-->
    
    <div style="margin-left: 40px; margin-right: 40px;" class="product-carousel-container product-carousel-container--smarthome mb-35 mb-md-0 mb-sm-0">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  product carousel  =======-->
                
                <div class="lezada-slick-slider product-carousel product-carousel--smarthome"
                data-slick-setting='{
                    "slidesToShow": 7,
                    "slidesToScroll": 7,
                    "arrows": false,
                    "dots": true,
                    "autoplay": false,
                    "autoplaySpeed": 1000,
                    "speed": 500,
                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ti-angle-left" },
                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ti-angle-right" }
                }'
                data-slick-responsive='[
                    {"breakpoint":1501, "settings": {"slidesToShow": 5, "arrows": false} },
                    {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                    {"breakpoint":991, "settings": {"slidesToShow": 3,"slidesToScroll": 3, "arrows": false} },
                    {"breakpoint":767, "settings": {"slidesToShow": 2, "slidesToScroll": 2, "arrows": false} },
                    {"breakpoint":575, "settings": {"slidesToShow": 2, "slidesToScroll": 2,  "arrows": false} },
                    {"breakpoint":479, "settings": {"slidesToShow": 2, "slidesToScroll": 2, "arrows": false} }
                ]'
                >
                        
                        <!--=======  single product  =======-->
                        <?php
						$clients_query = "SELECT * FROM clients ORDER BY 1 DESC";

						$clients_fire = mysqli_query($con,$clients_query);

						while($clients = mysqli_fetch_array($clients_fire)){
                            $clients_image = $clients['img'];
                            echo"
                            <div class='col'>
                                <div class='single-product single-product--smarthome'>
                                
                                <div class='single-product__image'>
                                    <a style='max-width: 150px; align-items: center;' class='image-wrap'>
                                        <img src='assets/images/clients/$clients_image' class='img-fluid' alt=''>
                                    </a>
                                </div>
                                
                                </div>
                            </div>
                            ";
                        }
                        ?>
                </div>
                
                <!--=======  End of product carousel  =======-->
            </div>
        </div>
                
    </div>
    
    <!--=====  End of product carousel container  ======-->