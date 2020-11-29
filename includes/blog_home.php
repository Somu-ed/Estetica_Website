<?php include("config/db_connect.php");?>

<div class="blog-post-area mb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-50 mb-lg-0">
                    <!--=======  blog intro  =======-->
                    
                    <div class="blog-intro">
                        <h3 style="font-size: 35px;color: #444444;">Blog</h3><br>
                        <a href="blog" class="lezada-button lezada-button--medium">view all</a>
                    </div>
                    
                    <!--=======  End of blog intro  =======-->
                </div>
                <div class="col-lg-8">
                    <!--=======  blog post slider container  =======-->
                    
                    <div class="blog-post-slider-container">
                        <div class="lezada-slick-slider blog-post-slider"

                        data-slick-setting='{
                            "slidesToShow": 2,
                            "arrows": true,
                            "speed": 800,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ti-angle-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ti-angle-right" }
                        }'
                        data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 2} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 2} },
                            {"breakpoint":991, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'

                        >
                            <!--=======  single slider post  =======-->
                            <?php
						$query = "SELECT * FROM blog ORDER BY 1 DESC LIMIT 0,8";

						$fire = mysqli_query($con,$query);

						while($row = mysqli_fetch_array($fire)){
							$id = $row['id'];
							$image = $row['image'];
							$date = $row['date'];
							$heading = $row['heading'];
                            $description = $row['short'];

                            echo"
                            <div class='col'>
                                <div class='single-slider-post'>
                                <!--=======  image  =======-->
                                
                                <div class='single-slider-post__image mb-30'>
                                    <a href='blog_single.php?id=$id'>
                                        <img style='width: 370px; height: 200px; object-fit: cover;' src='assets/images/blog/$image' class='img-fluid' alt='blog image'>
                                    </a>
                                </div>
                                
                                <!--=======  End of image  =======-->

                                <!--=======  content  =======-->
                                
                                <div class='single-slider-post__content'>
                                    <div class='post-date'>
                                        <i class='ion-android-calendar'></i>
                                        <a>$date</a>
                                    </div>
                                    <h2 class='post-title'><a href='blog_single.php?id=$id'>$heading</a></h2>
                                    <p style='text-align: justify;' class='post-excerpt'>$description</p>
                                    <a href='blog_single.php?id=$id' class='blog-readmore-btn'>read more</a>
                                </div>
                                
                                <!--=======  End of content  =======-->
                                </div>
                            </div>
                            ";
                        }
                        ?>
                            
                            <!--=======  End of single slider post  =======-->
                        </div>
                    </div>
                    
                    <!--=======  End of blog post slider container  =======-->
                </div>
            </div>
        </div>
    </div>