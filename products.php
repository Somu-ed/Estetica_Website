<?php include"config/db_connect.php";?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Products - Estetica Furnishing</title>
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

	<div class="breadcrumb-area breadcrumb-bg-2 pt-50 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Shop</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="index.html">HOME</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">PRODUCTS</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=======  End of breadcrumb area =======-->
    
    <!--=============================================
    =            shop page content         =
	=============================================-->
    <!-- Product Filter -->
	<?php
	
	$max_limit = 10;
	$limit = 10;
	//increase limit
	if(isset($_POST['more'])){
		$new_limit = $_POST['limit'];
		$max_limit = $new_limit + $limit;
	}
	//decrease limit
	elseif(isset($_POST['less'])){
		$dec_limit = $_POST['limit'];
		$max_limit = $dec_limit - $limit;
	}
	else{
		$max_limit = 10;
	}

	// Category wise filter
	if(isset($_POST['cat'])){
		$cur_cat_id = $_POST['cat'];
		if($cur_cat_id == 1){
			$cur_cat_name = "Bed Linen";
		}
		elseif($cur_cat_id == 2){
			$cur_cat_name = "Curtains";
		}
		elseif($cur_cat_id == 3){
			$cur_cat_name = "Wallpapers";
		}
		elseif($cur_cat_id == 4){
			$cur_cat_name = "Blinds";
		}
		elseif($cur_cat_id == 5){
			$cur_cat_name = "Upholstery";
		}
		else{
			$cur_cat_name = "Category";
		}
	}
	else{
		$cur_cat_id = 0;
		$cur_cat_name = "Category";
	}

	//Brand wise filter
	if(isset($_POST['brand'])){
		$cur_brand_id = $_POST['brand'];
		if($cur_brand_id == 1){
			$cur_brand_name = "D'DECOR";
		}
		elseif($cur_brand_id == 2){
			$cur_brand_name = "KALAGYA";
		}
		elseif($cur_brand_id == 3){
			$cur_brand_name = "PORTICO";
		}
		elseif($cur_brand_id == 4){
			$cur_brand_name = "MASPAR";
		}
		elseif($cur_brand_id == 5){
			$cur_brand_name = "SAROM";
		}
		elseif($cur_brand_id == 6){
			$cur_brand_name = "BOMBAY DYEING";
		}
		elseif($cur_brand_id == 7){
			$cur_brand_name = "WALL KING";
		}
		elseif($cur_brand_id == 8){
			$cur_brand_name = "PURE";
		}
		elseif($cur_brand_id == 9){
			$cur_brand_name = "RUMORS";
		}
		else{
			$cur_brand_name = "Brand";
		}
	}
	else{
		$cur_brand_id = 0;
		$cur_brand_name = "Brand";
	}

	//Reset Filter
	if(isset($_POST['reset'])){
		$cur_brand_id = 0;
		$cur_brand_name = "Brand";
		$cur_cat_id = 0;
		$cur_cat_name = "Category";
	}
	?>

	
    <div class="shop-page-wrapper">

        <!--=======  shop page header  =======-->
        
        <div class="shop-page-header">
            <div class="container wide">
                <div class="row align-items-center">
                    
                    <div class="col-12 col-lg-7 col-md-10 d-none d-md-block">
                        <!--=======  fitler titles  =======-->
					
                    <!--=======  End of fitler titles  =======-->
                    </div>
					<script src="assets/js/jquery-3.5.1.min.js"></script>
					<script>
						$(document).ready(function(){
							// category selection
							$("#cat").change(function(){
								// Submitting form
								$("#form").submit();
							});

							// brand selection
							$("#brand").change(function(){
								// Submitting form
								$("#form").submit();
							});
						});
					</script>					
                    <div class="col-12 col-lg-5 col-md-2">
                        <!--=======  filter icons  =======-->
                        <form action="products.php" method='post' id='form'>
                        <div class="filter-icons">
							<!--=======  filter dropdown  =======-->

							<!-- Filters to be added later -->
							<div class="single-icon filter-dropdown">
                                <select id='cat' name='cat' class="nice-select">
									<?php 
									echo"<option value='$cur_cat_id' selected>$cur_cat_name</option>";
						    
									$cat_query = "SELECT * FROM p_cat";
									$cat_fetch = mysqli_query($con,$cat_query);
									while($cat=mysqli_fetch_array($cat_fetch)){
										$cat_id = $cat['cat_id'];
										$cat_name = $cat['cat_name'];
										
										echo"<option value='$cat_id'>$cat_name</option>";
									}
									?>
                                </select>
                            </div>
							<?php
							if($cur_cat_id != 0) {
							echo"
							<div class='single-icon filter-dropdown'>
								<select id='brand' name='brand' class='nice-select'>";
								
									echo"<option value='$cur_brand_id' selected>$cur_brand_name</option>";

									$brand_query = "SELECT * FROM p_brand WHERE cat_id = $cur_cat_id ";
									$brand_fetch = mysqli_query($con,$brand_query);
									while($brand=mysqli_fetch_array($brand_fetch)){
										$brand_id = $brand['brand_id'];
										$brand_name = $brand['brand_name'];
										
										echo"<option value='$brand_id'>$brand_name</option>";
									}
									echo"</select>
							</div>";
								}
							?>
							&nbsp;&nbsp;&nbsp;
							<?php
							if($cur_brand_id > 0 || $cur_cat_id > 0){
								echo"
								   <button type='submit' name='reset' class='lezada-button lezada-button--small lezada-button--icon lezada-button--icon--left'> <i class='fa fa-refresh'></i> Reset Filter</button>
								";
							}
							?>
							
							<!--=======  End of filter dropdown  =======-->

                            <!--=======  grid icons  =======-->
                            
                            <div class="single-icon grid-icons">
							<a data-target="five-column" class="active"  href="javascript:void(0)"><i class="ti-layout-grid4-alt"></i></a>
							<a data-target="four-column" href="javascript:void(0)"><i class="ti-layout-grid3-alt"></i></a>
							<a data-target="three-column" href="javascript:void(0)"><i class="ti-layout-grid2-alt"></i></a>
							<!-- <a data-target="list" href="javascript:void(0)"><i class="ti-view-list"></i></a> -->
                            </div>
                            
                            <!--=======  End of grid icons  =======-->
                        </div>
						</form>
                        <!--=======  End of filter icons  =======-->
                    </div>

                </div>
            </div>
        </div>
        
        <!--=======  End of shop page header  =======-->

        <!--=============================================
        =            shop advance filter area         =
        =============================================-->
        
        
		<!--=====  End of shop advance filter area  ======-->
		
		<!--=============================================
		=            shop page content         =
		=============================================-->
		
		<div class="shop-page-content mt-100 mb-100">
			<div class="container wide">
				<div class="row">
					<div class="col-lg-3 order-2 order-lg-1 d-none">
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
								<h2 class="single-sidebar-widget--title">Filters</h2>
								<div class="sidebar-price">
									<div id="price-range"></div>
									<div class="output-wrapper mt-20">
										<input type="text" id="price-amount" class="price-amount" readonly>
										<a class="price-range-button" href="#"><i class="ion-android-funnel"></i> Filter</a>
									</div>
								</div>
							</div>
							
							<!--=======  End of single sidebar widget  =======-->

							<!--=======  single sidebar widget  =======-->
							
							<div class="single-sidebar-widget mb-40">
								<h2 class="single-sidebar-widget--title">Popular products</h2>

								<!--=======  widget product wrapper  =======-->
								
								<div class="widget-product-wrapper">
									<!--=======  single widget product  =======-->
									<div class="single-widget-product-wrapper">
										<div class="single-widget-product">
										<!--=======  image  =======-->
										
										<div class="single-widget-product__image">
											<a href="shop-product-basic.html">
												<img src="assets/images/products/product-furniture-2-100x100.jpg" class="img-fluid" alt="">
											</a>
										</div>
										
										<!--=======  End of image  =======-->
								
										<!--=======  content  =======-->
										
										<div class="single-widget-product__content">
								
											<div class="single-widget-product__content__top">
												<h3 class="product-title"><a href="shop-product-basic.html">Wooden Table</a></h3>
												<div class="price">
													<span class="main-price discounted">$270.00</span>
													<span class="discounted-price">$220.00</span>
												</div>
												<div class="rating">
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star-outline"></i>
													<i class="ion-android-star-outline"></i>
													<i class="ion-android-star-outline"></i>
												</div>
											</div>
								
										</div>
										
										<!--=======  End of content  =======-->
										</div>
									</div>
		
									<!--=======  End of single widget product  =======-->
		
									<!--=======  single widget product  =======-->
									<div class="single-widget-product-wrapper">
										<div class="single-widget-product">
										<!--=======  image  =======-->
										
										<div class="single-widget-product__image">
											<a href="shop-product-basic.html">
												<img src="assets/images/products/product-furniture-11-100x100.jpg" class="img-fluid" alt="">
											</a>
										</div>
										
										<!--=======  End of image  =======-->
								
										<!--=======  content  =======-->
										
										<div class="single-widget-product__content">
								
											<div class="single-widget-product__content__top">
												<h3 class="product-title"><a href="shop-product-basic.html">Sofa with cushion</a></h3>
												<div class="price">
													<span class="main-price discounted">$660.00</span>
													<span class="discounted-price">$600.00</span>
												</div>
												<div class="rating">
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
												</div>
											</div>
								
										
								
										</div>
										
										<!--=======  End of content  =======-->
										</div>
									</div>
		
									<!--=======  End of single widget product  =======-->
		
									<!--=======  single widget product  =======-->
									<div class="single-widget-product-wrapper">
										<div class="single-widget-product">
										<!--=======  image  =======-->
										
										<div class="single-widget-product__image">
											<a href="shop-product-basic.html">
												<img src="assets/images/products/soccer-4-100x100.jpg" class="img-fluid" alt="">
											</a>
										</div>
										
										<!--=======  End of image  =======-->
								
										<!--=======  content  =======-->
										
										<div class="single-widget-product__content">
								
											<div class="single-widget-product__content__top">
												<h3 class="product-title"><a href="shop-product-basic.html">High waist trousers</a></h3>
												<div class="price">
													<span class="main-price discounted">$36.00</span>
													<span class="discounted-price">$33.00</span>
												</div>
												<div class="rating">
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star-outline"></i>
												</div>
											</div>
							
								
										</div>
										
										<!--=======  End of content  =======-->
										</div>
									</div>
									<!--=======  End of single widget product  =======-->
								</div>
								
								<!--=======  End of widget product wrapper  =======-->
							</div>
							
							<!--=======  End of single sidebar widget  =======-->

							<!--=======  single sidebar widget  =======-->
							
							<div class="single-sidebar-widget">
								<h2 class="single-sidebar-widget--title">Tags</h2>

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
					<div class="col-lg-12 order-1 order-lg-2 mb-md-80 mb-sm-80">

						<div class="row product-isotope shop-product-wrap four-column">
							
							<!--=======  single product  =======-->
							<?php
							$aWhere = array(); 
							$sLimit = " order by 1 DESC LIMIT 0,$max_limit";
							$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
                            if($cur_cat_id == 0 && $cur_brand_id == 0){
								$query = "SELECT * FROM products".$sWhere;
							}
							elseif($cur_cat_id != 0 && $cur_brand_id == 0){
								$query = "SELECT * FROM products WHERE cat_id = $cur_cat_id".$sWhere;
							}
							elseif($cur_cat_id == 0 && $cur_brand_id != 0){
								$query = "SELECT * FROM products WHERE brand_id = $cur_brand_id".$sWhere;
							}
							else{
								$query = "SELECT * FROM products WHERE cat_id = $cur_cat_id AND brand_id = $cur_brand_id".$sWhere;
							}
							$fire = mysqli_query($con, $query) or die("cannot connect to db");
							if($fire){
								if(mysqli_num_rows($fire)>0){
									while($row = mysqli_fetch_array($fire)){
										$id = $row['id'];
										$name = $row['p_name'];
										$img = $row['p_img'];
										$cat = $row['p_cat'];
										$brand = $row['p_brand'];
										$brand = $row['p_brand'];
										$desc = $row['p_desc'];
										echo"
										<div class='col-12 col-lg-is-5 col-md-6 col-sm-6 mb-45 hot sale'>
										<div class='single-product'>
										<!--=======  single product image  =======-->
										
										<div class='single-product__image'>
											<a class='image-wrap'>
												<img src='assets/images/products/$img' class='img-fluid' alt=''>
												<img src='assets/images/products/$img' class='img-fluid' alt=''>
											</a>
											
											<!--<div class='single-product__floating-icons'>
												<span class='quickview'><a class='cd-trigger' href='#qv-1'  data-tippy='Quick View' data-tippy-inertia='true' data-tippy-animation='shift-away' data-tippy-delay='50' data-tippy-arrow='true' data-tippy-theme = 'sharpborder' data-tippy-placement = 'left'  ><i class='ion-ios-search-strong'></i></a></span>
											</div>-->
										</div>
										
										<!--=======  End of single product image  =======-->
					
										<!--=======  single product content  =======-->
								
										<div class='single-product__content'>
												
											<div class='title'>
												<h3> <a style='text-align: justify;' href='shop-product-basic.html'><br></a></h3>
												<a class='lezada-button lezada-button--medium'>$cat</a>
											</div>
											<!--<div class='price'>
												<span class='main-price discounted'>$160.00</span>
												<span class='discounted-price'>$180.00</span>
											</div>-->
										</div>
										
										<!--=======  End of single product content  =======-->
										</div>
										<div class='single-product--list'>
											<!--=======  single product image  =======-->
											
											<div class='single-product__image'>
												<a class='image-wrap'>
													<img src='assets/images/products/$img' class='img-fluid' alt=''>
													<img src='assets/images/products/$img' class='img-fluid' alt=''>
												</a>
												
												<!--<div class='single-product__floating-icons'>
													<span class='quickview'>
														<a class='cd-trigger' href='#qv-1'  data-tippy='Quick View' data-tippy-inertia='true' data-tippy-animation='shift-away' data-tippy-delay='50' data-tippy-arrow='true' data-tippy-theme = 'sharpborder' data-tippy-placement = 'left'  ><i class='ion-ios-search-strong'></i></a>
													</span>
												</div>-->
											</div>
											
											<!--=======  End of single product image  =======-->
						
											<!--=======  single product content  =======-->
									
											<div class='single-product__content'>
													
												<div class='title'>
													<h3> <a href='shop-product-basic.html'>$name</a></h3>
												</div>
												<!--<div class='price'>
													<span class='main-price discounted'>$160.00</span>
													<span class='discounted-price'>$180.00</span>
												</div>-->
												<p class='short-desc'> $desc</p>	
											</div>
											
											<!--=======  End of single product content  =======-->
										</div>
									</div>
									";
									echo"
									<!--=============================================
									=            quick view         =
									=============================================-->
									
									<div id='qv-1' class='cd-quick-view' '>
										<div class='cd-slider-wrapper'>
											<ul class='cd-slider'>
												<li class='selected'><img src='assets/images/products/$img' alt='Product 2'></li>
												<li><img src='assets/images/products/$img' alt='Product 1'></li>
											</ul> <!-- cd-slider -->
										</div> <!-- cd-slider-wrapper -->

										<div class='lezada-item-info cd-item-info ps-scroll'>

											<h3 class='item-subtitle'>$name</h3>
											<!--<p class='price'>
												<span class='main-price discounted'>$360.00</span>
												<span class='discounted-price'>$300.00</span>
											</p>-->
											
											<p class='description'>$desc</p>

											<!--<span class='quickview-title'>Quantity:</span>
											<div class='pro-qty d-inline-block mb-40'>
												<input type='text' value='1'>
											</div>-->

											<!--<div class='add-to-cart-btn mb-25'>

												<button class='lezada-button lezada-button--medium'>add to cart</button>
											</div>-->

											<div class='quick-view-other-info'>
												<table>
													<tr class='single-info'>
														<td class='quickview-title'>Brand: </td>
														<td class='quickview-value'>$brand</td>
													</tr>
													<tr class='single-info'>
														<td class='quickview-title'>Category: </td>
														<td class='quickview-value'>
															<a>$cat</a>  
														</td>
													</tr>
													<tr class='single-info'>
														<td class='quickview-title'>Tags: </td>
														<td class='quickview-value'>
															<a href='#'>$cat</a>, 
															<a href='#'>$brand</a>
														</td>
													</tr>
													<tr class='single-info'>
														<td class='quickview-title'>Share on: </td>
														<td class='quickview-value'>
															<ul class='quickview-social-icons'>
																<li><a href='#'><i class='fa fa-facebook'></i></a></li>
																<li><a href='#'><i class='fa fa-twitter'></i></a></li>
																<li><a href='#'><i class='fa fa-google-plus'></i></a></li>
																<li><a href='#'><i class='fa fa-pinterest'></i></a></li>
															</ul>
														</td>
													</tr>
												</table>
											</div>

											
										</div> <!-- cd-item-info -->
										<a href='#0' class='cd-close'>Close</a>
									</div>

									<!--=====  End of quick view  ======-->";
									}
								}
								else{
									echo"No Products Found";
								}
							}
                            ?>
							<!--=======  End of single product  =======-->

						</div>

						<div class="row ">
							<div class="col-lg-12 text-center mt-30">
							<?php
							echo"
							<form action='products.php' method='post'>
								<input type='hidden' name='limit' value='$max_limit'>";
								if($max_limit > 10){
									echo"
									<button type='submit' name='less' class='lezada-button lezada-button--medium lezada-button--icon--left'><i class='ion-android-remove'></i> LESS</button>
									";
								}
								if($max_limit<31){
									echo"<button type='submit' name='more' class='lezada-button lezada-button--medium lezada-button--icon--left'><i class='ion-android-add'></i> MORE</button>";
								}
							echo"</form>";
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--=====  End of shop page content  ======-->
    </div>
    
    <!--=====  End of shop page content  ======-->

	

	<!--=============================================
	=            footer area         =
	=============================================-->
	
	<?php include("includes/footer.php"); ?>
	
	<!--=====  End of footer area  ======-->

	<!--=============================================
	=            overlay items         =
	=============================================-->
	
	<?php include("includes/overlay.php"); ?>
	
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