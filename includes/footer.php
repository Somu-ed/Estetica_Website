<?php 

?>

<div class="footer-container footer-one pt-100 pb-50">
    <div class="container wide">
        <div class="row">
            <div class="col footer-single-widget">
                <!--=======  copyright text  =======-->
                    <!--=======  logo  =======-->
                    
                    <div class="logo">
                        <img style="height: 35px;" src="assets/images/navbar.png" class="img-fluid" alt="estética logo">
                    </div>
                    
                    <!--=======  End of logo  =======-->

                    <!--=======  copyright text  =======-->
                    
                    <div class="copyright-text">
                        <p> &copy; 2020 estética. </p>
                        <p><span>Designed with <i class="fa fa-heart"></i> <br> by <a href="https://perfectshades.in">Perfect Shades</a></span></p>
                        <p>  <span>All Rights Reserved.</span></p>
                    </div>
                    
                    <!--=======  End of copyright text  =======-->
                
                <!--=======  End of copyright text  =======-->
            </div>
            <div class="col footer-single-widget">
                <!--=======  single widget  =======-->
                    <h5 class="widget-title">ABOUT</h5>

                    <!--=======  footer navigation container  =======-->
                    
                    <div class="footer-nav-container">
                        <nav>
                            <ul>
                                <li><a href="about">About us</a></li>
                                <li><a href="https://www.google.com/search?q=estética+furnishings&oq=estética+furnishings&aqs=chrome..69i57j46j69i60l3.7448j0j7&sourceid=chrome&ie=UTF-8#">Store location</a></li>
                                <li><a href="contact">Contact</a></li>
                                <li><a href="products">Products</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <!--=======  End of footer navigation container  =======-->
                
                <!--=======  single widget  =======-->
            </div>
            <!-- <div class="col footer-single-widget"> -->
                <!--=======  single widget  =======-->
                    <!-- <h5 class="widget-title">USEFUL LINKS</h5> -->

                    <!--=======  footer navigation container  =======-->
                    
                    <!-- <div class="footer-nav-container">
                        <nav>
                            <ul>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Size guide</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </nav>
                    </div> -->
                    
                    <!--=======  End of footer navigation container  =======-->
                
                <!--=======  single widget  =======-->
            <!-- </div> -->

            <div class="col footer-single-widget">
                <!--=======  single widget  =======-->
                    <h5 class="widget-title">FOLLOW US ON</h5>

                    <!--=======  footer navigation container  =======-->
                    
                    <div class="footer-nav-container footer-social-links">
                        <nav>
                            <ul>
                                <!-- <li><a href="//twitter.com"><i class="fa fa-twitter"></i> Twitter</a></li> -->
                                <li><a href="https://www.facebook.com/esteticafurnishings"> <i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href="https://www.instagram.com/esteticafurnishings/"><i class="fa fa-instagram"></i> Instagram</a></li>
                                <!-- <li><a href="//youtube.com"> <i class="fa fa-youtube"></i> Youtube</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    
                    <!--=======  End of footer navigation container  =======-->
                    
                
                <!--=======  single widget  =======-->
            </div>
            <div class="col footer-single-widget">
                <!--=======  single widget  =======-->
                        
                <div class="footer-subscription-widget">
                    <h2 class="footer-subscription-title">Subscribe.</h2>
                    <p class="subscription-subtitle">Subscribe to our newsletter to receive news on update.</p>

                    <!--=======  subscription form  =======-->
                    <script src="assets/js/jquery-3.5.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                    <script src="sweetalert2.all.min.js"></script>
                    <script src="sweetalert2.min.js"></script>

                    <script>
                        $(document).ready(function() {

                            $('#subscribe-btn').click(function() {

                                var subscriber = $("#subscriber").val().trim();
                                if(subscriber != ""){
                                    $.ajax({
                                    url:'subs_process.php',
                                    type:'post',
                                    data:{subscriber:subscriber,},
                                    success:function(response){
                                        if(response == 1){
                                            swal.fire({
                                            text: "Thank you for subscribing to our Newsletter",
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
                                } else {
                                    swal.fire({
                                        text: "Please Enter a valid email !!",
                                        icon: "warning",
                                        buttonsStyling: false,
                                        confirmButtonText: "Okay",
                                        customClass: {
                                            confirmButton: "btn font-weight-bold btn-light-primary"
                                        }
                                    }).then(function() {
                                        KTUtil.scrollTop();
                                    });
                                }
                                
                            });
                        });
                    </script>
                    <div class="subscription-form">
                        <form class="mc-form">
                            <input type="email" id="subscriber" placeholder="Your email address" required>
                            <button type="button" id="subscribe-btn"><i class="ion-ios-arrow-thin-right"></i></button>
                        </form>
                    </div>
                    
                    <!--=======  End of subscription form  =======-->

                    <!-- mailchimp-alerts Start -->

                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->

                </div>
                
                <!--=======  End of single widget  =======-->
            </div>
        </div>
    </div>
</div>

<!--=====  End of footer area  ======-->