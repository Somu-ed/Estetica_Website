<?php include 'include.php'; ?>

<?php
if(isset($_POST['num_rows'])){
	$per_page = $_POST['num_rows'];
}
else{
	$per_page = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Posted Blogs | Estetica</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="assets/css/themes/layout/header/base/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/favicon.svg" />
	</head>
    <!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.php">
				<img style="height: 28px;" alt="Logo" src="assets/media/navbar.png" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="index.php" class="brand-logo">
							<img style="height: 32px; margin-left: auto; margin-right: auto; margin-top: 10px;" alt="Logo" src="assets/media/navbar.svg" />
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item " aria-haspopup="true">
									<a href="index.php" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Dashboard</span>
									</a>
								</li>
								<li class="menu-item menu-item-submenu menu-item-open menu-item-here" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/src/media/svg/icons/Communication/Write.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
													<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Blog</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Blog</span>
												</span>
											</li>
											<li class="menu-item menu-item-active" aria-haspopup="true">
												<a href="posted.php?page=1" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Posted Blogs</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="compose.php" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Compose</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item " aria-haspopup="true">
									<a href="contact.php" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Active-call.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
													<path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Contact Us</span>
									</a>
								</li>
								<li class="menu-item " aria-haspopup="true">
									<a href="newsletter.php" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"/>
													<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
													<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Newsletter</span>
									</a>
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<?php include 'includes/header.php'; ?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Posted Blogs</h5>
									<!--end::Page Title-->
									<!--begin::Actions-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
									<span class="text-muted font-weight-bold mr-4">#XRS-45670</span>
									<!-- <a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a> -->
									<!--end::Actions-->
								</div>
								<!--end::Info-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Row-->
								<div class="row">
									<!--begin::Col-->
									<?php 
									global $con;
									$aWhere = array(); 
			
									if(isset($_GET['page'])){
										$page = $_GET['page'];
			
									}
									else{
										$page=1;
									}
									
									$start_from = ($page-1) * $per_page;
									$sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
									$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
									$fetch = "SELECT * FROM blog".$sWhere;
									$fetch_fire = mysqli_query($con,$fetch);
									while ($row = mysqli_fetch_array($fetch_fire)) {
										$blog_id = $row['id'];
										$blog_head = $row['heading'];
										$blog_date = $row['date'];
										$blog_cat = $row['category'];
										$blog_auth = $row['author'];
										$blog_desc = $row['short'];

										$length = 100;

										if(strlen($blog_desc)<=$length)
										  {
											$desc = $blog_desc;
										  }
										  else
										  {
											$desc=substr($blog_desc,0,$length) . '...';
										  }

										echo("<div class='col-xl-4 col-lg-6 col-md-6 col-sm-6'>
										<!--begin::Card-->
										<div class='card card-custom gutter-b card-stretch'>
											<!--begin::Body-->
											<div class='card-body pt-4'>
												<!--begin::Toolbar-->
												<div class='d-flex justify-content-end'>
													<div class='dropdown dropdown-inline' data-toggle='tooltip' title='Quick actions' data-placement='left'>
														<a href='#' class='btn btn-clean btn-hover-light-primary btn-sm btn-icon' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
															<i class='ki ki-bold-more-hor'></i>
														</a>
														<div class='dropdown-menu dropdown-menu-md dropdown-menu-right'>
															<!--begin::Navigation-->
															<ul class='navi navi-hover'>
																<li class='navi-header pb-1'>
																	<span class='text-primary text-uppercase font-weight-bold font-size-sm'>Actions:</span>
																</li>
																<li class='navi-item'>
																	<a href='#' class='navi-link'>
																		<span class='navi-icon'>
																			<i class='flaticon2-file-1'></i>
																		</span>
																		<span class='navi-text'>View</span>
																	</a>
																</li>
																<li class='navi-item'>
																	<a href='#' class='navi-link'>
																		<span class='navi-icon'>
																			<i class='flaticon2-edit'></i>
																		</span>
																		<span class='navi-text'>Edit</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class='d-flex align-items-center mb-7'>
													<!--begin::Pic-->
													<!--<div class='flex-shrink-0 mr-4'>
														<div class='symbol symbol-circle symbol-lg-75'>
															<img src='assets/media/project-logos/2.png' alt='image' />
														</div>
													</div>-->
													<!--end::Pic-->
													<!--begin::Title-->
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<a href='#' class='text-dark font-weight-bold text-hover-primary font-size-h4 mb-0'>$blog_head</a><br><br>
												<p class='mb-7'>$desc
												<!--<a href='#' class='text-primary pr-1'>#xrs-54pq</a></p>-->
												<!--end::Desc-->
												<!--begin::Info-->
												<div class='mb-7'>
													<div class='d-flex justify-content-between align-items-center'>
														<span class='text-dark-75 font-weight-bolder mr-2'>Author:</span>
														<a href='#' class='text-muted text-hover-primary'>$blog_auth</a>
													</div>
													<div class='d-flex justify-content-between align-items-cente my-1'>
														<span class='text-dark-75 font-weight-bolder mr-2'>Category:</span>
														<a href='#' class='text-muted text-hover-primary'>$blog_cat</a>
													</div>
													<div class='d-flex justify-content-between align-items-center'>
														<span class='text-dark-75 font-weight-bolder mr-2'>Date:</span>
														<span class='text-muted font-weight-bold'>$blog_date</span>
													</div>
												</div>
												<!--end::Info-->
												<a href='view_post.php?blog_id=$blog_id' class='btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4'>View Post</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end:: Card-->
									</div>"); 
									} ?>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Pagination-->
								<script src="assets/js/jquery-3.5.1.min.js"></script>
								<script>
									$(document).ready(function(){
										// Number of rows selection
                                        $("#num_rows").change(function(){
											// Submitting form
											$("#form").submit();
										});
									});
								</script>

								<div class="card card-custom">
									<div class="card-body py-7">
										<!--begin::Pagination-->
										<?php
										global $con;
										if(isset($_GET['page'])){

											$page = $_GET['page'];
									
										}else{
											$page=1;
										}
									
										//$per_page=1;
										$aWhere = array();
										$aPath = '';
															
										$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');
										$query = "SELECT * FROM blog".$sWhere;
										$result = mysqli_query($con,$query);
										$total_records = mysqli_num_rows($result);
										$total_pages = ceil($total_records / $per_page);
										$prev = $page -1;

										echo"<div class='d-flex justify-content-between align-items-center flex-wrap'>
										<div class='d-flex flex-wrap mr-3'>";
										if($page>1){
											echo"
											<a href='posted.php?page=1' class='btn btn-icon btn-sm btn-light-danger mr-2 my-1'>
												<i class='ki ki-bold-double-arrow-back icon-xs'></i>
											</a>
											<a href='posted.php?page=".$prev.(!empty($aPath)?'&'.$aPath:'')."' class='btn btn-icon btn-sm btn-light-danger mr-2 my-1'>
												<i class='ki ki-bold-arrow-back icon-xs'></i>
											</a>";
										}
										else{
											echo"
											<a style='pointer-events: none;' class='btn btn-icon btn-sm btn-light-light mr-2 my-1'>
												<i style='color:grey;' class='ki ki-bold-double-arrow-back icon-xs'></i>
											</a>
											<a style='pointer-events: none;' class='btn btn-icon btn-sm btn-light-light mr-2 my-1'>
												<i style='color:grey;' class='ki ki-bold-arrow-back icon-xs'></i>
											</a>";
										}
										for($i=1; $i<=$total_pages; $i++){
											if($i == $page){
												echo"
												  <a href='posted.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' class='btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1'>".$i."</a>
												";
											}
											else{
												echo"
												  <a href='posted.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' class='btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1'>".$i."</a>
												";
											}
										}
										if($page == $total_pages){
											echo"
											<a style='pointer-events: none;' class='btn btn-icon btn-sm btn-light-light mr-2 my-1'>
												<i style='color: grey;' class='ki ki-bold-arrow-next icon-xs'></i>
											</a>
											<a style='pointer-events: none;' class='btn btn-icon btn-sm btn-light-light mr-2 my-1'>
												<i style='color: grey;' class='ki ki-bold-double-arrow-next icon-xs'></i>
											</a>";
										}
										else{
											$next = $page+1;
											echo"
											<a href='posted.php?page=".$next.(!empty($aPath)?'&'.$aPath:'')."' class='btn btn-icon btn-sm btn-light-danger mr-2 my-1'>
												<i class='ki ki-bold-arrow-next icon-xs'></i>
											</a>
											<a href='posted.php?page=$total_pages' class='btn btn-icon btn-sm btn-light-danger mr-2 my-1'>
												<i class='ki ki-bold-double-arrow-next icon-xs'></i>
											</a>";
										}

										echo"
										</div>
										<div class='d-flex align-items-center'>
										<form action='posted.php' method='post' id='form'>
											<select id='num_rows' name='num_rows' class='form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-danger' style='width: 60px;'>";
											$numrows_arr = array("1","2");
											foreach($numrows_arr as $nrow){
												if(isset($_POST['num_rows']) && $_POST['num_rows'] == $nrow){
													echo '<option value="'.$nrow.'" selected="selected">'.$nrow.'</option>';
												}
												else{
													echo '<option value="'.$nrow.'">'.$nrow.'</option>';
												}
											}
											echo"</select>
										</form>
											<span class='text-muted'>Displaying $per_page of $total_records records</span>
										</div>
									</div>";
										?>
										
										<!--end:: Pagination-->
									</div>
								</div>
								<!--end::Pagination-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<?php include 'includes/footer.php'; ?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<?php include 'usr_p.php'; ?>
		<!-- end::User Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!-- <script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script> -->
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js?v=7.0.5"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5"></script>
		<script src="assets/js/scripts.bundle.js?v=7.0.5"></script>
		<script src="assets/js/pages/features/miscellaneous/sweetalert2.js?v=7.0.5"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>