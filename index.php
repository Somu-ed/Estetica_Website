<?php include("config/db_connect.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estética - One stop furnishing solution</title>
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

	<!-- Revolution Slider CSS -->
	<link href="assets/revolution/css/settings.css" rel="stylesheet">
	<link href="assets/revolution/css/navigation.css" rel="stylesheet">
	<link href="assets/revolution/custom-setting.css" rel="stylesheet">

	<!-- Modernizer JS -->
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        .partner_logos {
            height: 65px;
        }

        #loading{
            position: fixed;
            width: 100%;
            height: 100%;
            background: #fff
            url('https://i.pinimg.com/originals/78/e8/26/78e826ca1b9351214dfdd5e47f7e2024.gif')
            no-repeat center center;	
            z-index: 99999;
        }

        .services-title {
            font-size: 20px;
            color: #333333;
            background-color: #fff;
            border-radius: 5px;
            padding: 10px;
            font-weight: 500 !important;
        }
        .welcome-desc {
            text-align: justify;
            font-size: 16px;
            line-height: 20px !important;
        }

        .slider-custom {
            font-size: 79px !important;
        }

        @media screen and (max-width: 767px){
            .welcome-desc {
                font-size: 11px !important;
                line-height: 16px !important;
            }
            .slider-custom {
                font-size: 40px !important;
            }
        }
        @media (min-width: 768px) and (max-width: 990px){
            .welcome-desc {
                font-size: 12px !important;
            }
            .slider-custom {
                font-size: 69px !important;
                line-height: 89px !important;
            }
        }
        @media (min-width: 991px) and (max-width: 1024px){
            .welcome-desc {
                font-size: 11px !important;
                line-height: 14px !important;
            }
            .slider-custom {
                font-size: 50px !important;
                line-height: 64px !important;
            }
        }
        @media (min-width: 1024px) and (max-width: 1280px){
            .slider-custom {
                font-size: 52px !important;
                line-height: 64px !important;
            }
        }
        @media (min-width: 1280px) and (max-width: 1366px){
            .slider-custom {
                font-size: 59px !important;
                line-height: 64px !important;
            }
        }
    </style>

</head>

<body onload="myFunction()">
    <div id="loading"></div>
    <script>
		// $(document).ready(function(){
			// 	$('div#loading').removeAttr('id');
		// });
		var preloader = document.getElementById("loading");
		// window.addEventListener('load', function(){
		// 	preloader.style.display = 'none';
		// 	})

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
	
	<!--=============================================
	=            Header without topbar         =
	=============================================-->
	
	<?php include 'includes/header.php'; ?>

	<!--=============================================
	=            slider area         =
	=============================================-->
	
	<div class="slider-area mb-95 mb-md-75 mb-sm-75">
		<div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="homepage-5" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
                <div id="rev_slider_11_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
            <ul>	<!-- SLIDE  -->
                <li data-index="rs-27" data-transition="slotslide-horizontal,slotslide-vertical,fadefromright,fadefromleft,fadefromtop,fadefrombottom,fadetoleftfadefromright" data-slotamount="default,default,default,default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default,default,default,default,default,default,default" data-easeout="default,default,default,default,default,default,default" data-masterspeed="default,default,default,default,default,default,default"  data-thumb=""  data-rotate="0,0,0,0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/revimages/dummy.png" data-bgcolor='#9fdaf2' style='background:#9fdaf2' alt=""  data-lazyload="assets/images/revimages/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
            
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
                         id="slide-27-layer-29" 
                         data-x="['left','left','left','left']" data-hoffset="['55','-259','-179','-243']" 
                         data-y="['top','top','top','top']" data-voffset="['84','37','434','268']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="image" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":690,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 5;">
                    <div class="rs-looped rs-slideloop"  data-easing="" data-speed="2" data-xs="0" data-xe="0" data-ys="-10" data-ye="10"><img src="assets/images/revimages/dummy.png" alt="" data-ww="['1453px','1281px','1149px','933px']" data-hh="['727px','641px','575px','467px']" data-lazyload="assets/images/slider/slider_2.png" data-no-retina> </div></div>
            
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-27-layer-13" 
                         data-x="['left','center','left','left']" data-hoffset="['1175','190','61','50']" 
                         data-y="['top','top','top','top']" data-voffset="['288','237','108','88']" 
                                    data-fontsize="['18','14','18','16']"
                        data-color="['rgb(51,51,51)','rgb(105,105,105)','rgb(105,105,105)','rgb(105,105,105)']"
                        data-letterspacing="['','','0','0']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 6; white-space: nowrap; font-size: 18px; line-height: 36px; font-weight: 400; color: #333333; font-family:Work Sans;"> </div>
            
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme slider-custom" 
                         id="slide-27-layer-3" 
                         data-x="['left','center','center','left']" data-hoffset="['1171','288','-84','47']" 
                         data-y="['top','middle','middle','top']" data-voffset="['338','0','-189','142']" 
                                    data-fontsize="['100','80','100','70']"
                        data-lineheight="['120','100','120','80']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1260,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 7; white-space: nowrap; line-height: 120px; font-weight: 600; color: #444444; letter-spacing: 0px;font-family:Work Sans;">Contemporary <br> designs</div>
            
            
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-27-layer-17" 
                         data-x="['left','center','left','left']" data-hoffset="['1600','-671','-509','-382']" 
                         data-y="['middle','middle','top','top']" data-voffset="['330','280','784','367']" 
                                    data-fontsize="['48','56','72','40']"
                        data-lineheight="['56','64','96','50']"
                        data-fontweight="['400','300','700','700']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1160,"speed":1940,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 9; white-space: nowrap; font-size: 48px; line-height: 56px; font-weight: 400; color: #333333; letter-spacing: 0px;font-family:Work Sans;">1 </div>
            
                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                         id="slide-27-layer-21" 
                         data-x="['left','left','left','left']" data-hoffset="['1646','1646','1646','1646']" 
                         data-y="['top','top','top','top']" data-voffset="['760','760','760','760']" 
                                    data-width="80"
                        data-height="2"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="shape" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1000,"speed":1700,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 10;background-color:rgba(0,0,0,0.5);"> </div>
            
                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-27-layer-18" 
                         data-x="['left','center','left','left']" data-hoffset="['1750','-607','-327','-263']" 
                         data-y="['middle','middle','top','top']" data-voffset="['330','283','795','370']" 
                                    data-fontsize="['48','34','72','40']"
                        data-lineheight="['56','40','96','50']"
                        data-fontweight="['400','300','700','700']"
                        data-color="['rgba(51,51,51,0.3)','rgb(204,204,204)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":840,"speed":1940,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 11; white-space: nowrap; font-size: 48px; line-height: 56px; font-weight: 400; color: rgba(51,51,51,0.3); letter-spacing: 0px;font-family:Work Sans;">3 </div>
            
                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-27-layer-22" 
                         data-x="['left','left','left','left']" data-hoffset="['160','0','-407','-441']" 
                         data-y="['top','top','top','top']" data-voffset="['228','210','104','207']" 
                                    data-fontsize="['14','14','24','24']"
                        data-lineheight="['24','24','36','36']"
                        data-color="['rgb(51,51,51)','rgb(105,105,105)','rgb(105,105,105)','rgb(105,105,105)']"
                        data-letterspacing="['1','','0','0']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;rZ:90;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 12; white-space: nowrap; font-size: 14px; line-height: 24px; font-weight: 400; color: #333333; letter-spacing: 1px;font-family:Work Sans;"> </div>
            
                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                         id="slide-27-layer-24" 
                         data-x="['left','left','left','left']" data-hoffset="['217','49','-260','-260']" 
                         data-y="['top','top','top','top']" data-voffset="['350','296','129','129']" 
                                    data-width="2"
                        data-height="80"
                        data-whitespace="nowrap"
             
                        data-type="shape" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":980,"speed":1490,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 13;background-color:rgb(98,98,98);"> </div>
            
                    <!-- LAYER NR. 10 -->
                    <a class="tp-caption   tp-resizeme" id="slide-27-layer-25" 
                         data-x="['left','left','center','left']" data-hoffset="['215','42','-598','-393']" 
                         data-y="['top','middle','middle','top']" data-voffset="['486','56','119','23']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1260,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 14; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Classy </a>
            
                    <!-- LAYER NR. 11 -->
                    <a class="tp-caption   tp-resizeme" id="slide-27-layer-26" 
                         data-x="['left','center','center','left']" data-hoffset="['215','-435','-661','-292']" 
                         data-y="['top','middle','middle','top']" data-voffset="['561','130','-27','251']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1720,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 15; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Exclusive </a>
            
                    <!-- LAYER NR. 12 -->
                    <a class="tp-caption   tp-resizeme" id="slide-27-layer-27" 
                         data-x="['left','center','center','left']" data-hoffset="['215','-435','-654','-390']" 
                         data-y="['top','middle','middle','top']" data-voffset="['637','205','-174','495']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":2140,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 16; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Elegant </a>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-28" data-transition="fadetoleftfadefromright,parallaxtoright,parallaxtoleft,parallaxtotop,parallaxtobottom,parallaxhorizontal,parallaxvertical" data-slotamount="default,default,default,default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default,default,default,default,default,default,default" data-easeout="default,default,default,default,default,default,default" data-masterspeed="700,default,default,default,default,default,default"  data-thumb=""  data-rotate="0,0,0,0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/revimages/dummy.png" data-bgcolor='#ffefd5' style='background:#ffefd5' alt=""  data-lazyload="assets/images/revimages/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
            
                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
                         id="slide-28-layer-31" 
                         data-x="['left','left','left','left']" data-hoffset="['600','213','352','176']" 
                         data-y="['top','top','top','top']" data-voffset="['124','75','303','261']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="image" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":680,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 5;">
                    <div class="rs-looped rs-slideloop"  data-easing="" data-speed="2" data-xs="0" data-xe="0" data-ys="-10" data-ye="10"><img src="assets/images/revimages/dummy.png" alt="" data-ww="['361auto','361auto','361auto','246px']" data-hh="['671px','671px','671px','452px']" data-lazyload="assets/images/slider/slider_3.png" data-no-retina> </div></div>
            
                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-28-layer-13" 
                         data-x="['left','center','left','left']" data-hoffset="['1171','142','67','48']" 
                         data-y="['top','top','top','top']" data-voffset="['250','216','162','84']" 
                                    data-fontsize="['18','14','18','16']"
                        data-color="['rgb(51,51,51)','rgb(105,105,105)','rgb(105,105,105)','rgb(105,105,105)']"
                        data-letterspacing="['','','0','0']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 6; white-space: nowrap; font-size: 18px; line-height: 36px; font-weight: 400; color: #333333; font-family:Work Sans;"> </div>
            
                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-28-layer-3" 
                         data-x="['left','center','center','left']" data-hoffset="['1171','257','-125','49']" 
                         data-y="['middle','middle','middle','top']" data-voffset="['0','-20','-180','125']" 
                                    data-fontsize="['100','80','80','50']"
                        data-lineheight="['120','90','90','60']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1260,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 7; white-space: nowrap; font-size: 100px; line-height: 120px; font-weight: 600; color: #444444; letter-spacing: 0px;font-family:Work Sans;">Innovative<br> concepts </div>
            
                   
            
                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-28-layer-17" 
                         data-x="['left','center','left','left']" data-hoffset="['1600','-671','-509','-382']" 
                         data-y="['middle','middle','top','top']" data-voffset="['330','280','784','367']" 
                                    data-fontsize="['48','56','72','40']"
                        data-lineheight="['56','64','96','50']"
                        data-fontweight="['400','300','700','700']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1160,"speed":1940,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 9; white-space: nowrap; font-size: 48px; line-height: 56px; font-weight: 400; color: #333333; letter-spacing: 0px;font-family:Work Sans;">2 </div>
            
                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                         id="slide-28-layer-21" 
                         data-x="['left','left','left','left']" data-hoffset="['1646','1646','1646','1646']" 
                         data-y="['top','top','top','top']" data-voffset="['760','760','760','760']" 
                                    data-width="80"
                        data-height="2"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="shape" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1000,"speed":1700,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 10;background-color:rgba(0,0,0,0.5);"> </div>
            
                    <!-- LAYER NR. 19 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-28-layer-18" 
                         data-x="['left','center','left','left']" data-hoffset="['1750','-607','-327','-263']" 
                         data-y="['middle','middle','top','top']" data-voffset="['330','283','795','370']" 
                                    data-fontsize="['48','34','72','40']"
                        data-lineheight="['56','40','96','50']"
                        data-fontweight="['400','300','700','700']"
                        data-color="['rgba(51,51,51,0.3)','rgb(204,204,204)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":840,"speed":1940,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 11; white-space: nowrap; font-size: 48px; line-height: 56px; font-weight: 400; color: rgba(51,51,51,0.3); letter-spacing: 0px;font-family:Work Sans;">3 </div>
            
                    <!-- LAYER NR. 20 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-28-layer-22" 
                         data-x="['left','left','left','left']" data-hoffset="['160','0','-407','-441']" 
                         data-y="['top','top','top','top']" data-voffset="['228','210','104','207']" 
                                    data-fontsize="['14','14','24','24']"
                        data-lineheight="['24','24','36','36']"
                        data-color="['rgb(51,51,51)','rgb(105,105,105)','rgb(105,105,105)','rgb(105,105,105)']"
                        data-letterspacing="['1','','0','0']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;rZ:90;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 12; white-space: nowrap; font-size: 14px; line-height: 24px; font-weight: 400; color: #333333; letter-spacing: 1px;font-family:Work Sans;"> </div>
            
                    <!-- LAYER NR. 21 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                         id="slide-28-layer-24" 
                         data-x="['left','left','left','left']" data-hoffset="['217','49','-260','-260']" 
                         data-y="['top','top','top','top']" data-voffset="['350','296','129','129']" 
                                    data-width="2"
                        data-height="80"
                        data-whitespace="nowrap"
             
                        data-type="shape" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":980,"speed":1490,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 13;background-color:rgb(98,98,98);"> </div>
            
                    <!-- LAYER NR. 22 -->
                    <a class="tp-caption   tp-resizeme" id="slide-28-layer-25" 
                         data-x="['left','left','center','left']" data-hoffset="['215','42','-598','-393']" 
                         data-y="['top','middle','middle','top']" data-voffset="['486','56','119','23']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1260,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 14; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Classy </a>
            
                    <!-- LAYER NR. 23 -->
                    <a class="tp-caption   tp-resizeme" id="slide-28-layer-26" 
                         data-x="['left','center','center','left']" data-hoffset="['215','-435','-661','-292']" 
                         data-y="['top','middle','middle','top']" data-voffset="['561','130','-27','251']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1720,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 15; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Exclusive </a>
            
                    <!-- LAYER NR. 24 -->
                    <a class="tp-caption   tp-resizeme" id="slide-28-layer-27" 
                         data-x="['left','center','center','left']" data-hoffset="['215','-435','-654','-390']" 
                         data-y="['top','middle','middle','top']" data-voffset="['637','205','-174','495']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":2140,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 16; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Elegant </a>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-29" data-transition="slidingoverlayup,slidingoverlaydown,slidingoverlayright,slidingoverlayleft,slidingoverlayhorizontal,slidingoverlayvertical" data-slotamount="default,default,default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default,default,default,default,default,default" data-easeout="default,default,default,default,default,default" data-masterspeed="700,default,default,default,default,default"  data-thumb=""  data-rotate="0,0,0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/revimages/dummy.png" data-bgcolor='#bced5c' style='background:#bced5c' alt=""  data-lazyload="assets/images/revimages/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
            
                    <!-- LAYER NR. 25 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
                         id="slide-29-layer-31" 
                         data-x="['left','left','left','left']" data-hoffset="['55','-259','-179','-243']" 
                         data-y="['top','top','top','top']" data-voffset="['84','37','434','268']"
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="image" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1270,"speed":2710,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 5;">
                    <div class="rs-looped rs-slideloop"  data-easing="" data-speed="2" data-xs="0" data-xe="0" data-ys="-10" data-ye="10"><img src="assets/images/revimages/dummy.png" alt="" data-ww="['1453px','1281px','1149px','933px']" data-hh="['727px','641px','575px','467px']" data-lazyload="assets/images/slider/slider_1.png" data-no-retina> </div></div>
            
                    <!-- LAYER NR. 26 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-29-layer-13" 
                         data-x="['left','center','left','left']" data-hoffset="['1171','142','67','48']" 
                         data-y="['top','top','top','top']" data-voffset="['250','216','162','84']" 
                                    data-fontsize="['18','14','18','16']"
                        data-color="['rgb(51,51,51)','rgb(105,105,105)','rgb(105,105,105)','rgb(105,105,105)']"
                        data-letterspacing="['','','0','0']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 6; white-space: nowrap; font-size: 18px; line-height: 36px; font-weight: 400; color: #333333; font-family:Work Sans;"></div>
            
                    <!-- LAYER NR. 27 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-29-layer-3" 
                         data-x="['left','center','center','left']" data-hoffset="['1174','257','-125','49']" 
                         data-y="['middle','middle','middle','top']" data-voffset="['1','-20','-180','125']" 
                                    data-fontsize="['100','80','80','50']"
                        data-lineheight="['120','90','90','60']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1280,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 7; white-space: nowrap; font-size: 100px; line-height: 120px; font-weight: 600; color: #444444; letter-spacing: 0px;font-family:Work Sans;">Vibrant<br> colours </div>
            
            
                    <!-- LAYER NR. 29 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-29-layer-17" 
                         data-x="['left','center','left','left']" data-hoffset="['1600','-671','-509','-382']" 
                         data-y="['middle','middle','top','top']" data-voffset="['330','280','784','367']" 
                                    data-fontsize="['48','56','72','40']"
                        data-lineheight="['56','64','96','50']"
                        data-fontweight="['400','300','700','700']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1160,"speed":1940,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 9; white-space: nowrap; font-size: 48px; line-height: 56px; font-weight: 400; color: #333333; letter-spacing: 0px;font-family:Work Sans;">3 </div>
            
                    <!-- LAYER NR. 30 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                         id="slide-29-layer-21" 
                         data-x="['left','left','left','left']" data-hoffset="['1646','1646','1646','1646']" 
                         data-y="['top','top','top','top']" data-voffset="['760','760','760','760']" 
                                    data-width="80"
                        data-height="2"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="shape" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1000,"speed":1700,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 10;background-color:rgba(0,0,0,0.5);"> </div>
            
                    <!-- LAYER NR. 31 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-29-layer-18" 
                         data-x="['left','center','left','left']" data-hoffset="['1750','-607','-327','-263']" 
                         data-y="['middle','middle','top','top']" data-voffset="['330','283','795','370']" 
                                    data-fontsize="['48','34','72','40']"
                        data-lineheight="['56','40','96','50']"
                        data-fontweight="['400','300','700','700']"
                        data-color="['rgba(51,51,51,0.3)','rgb(204,204,204)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":840,"speed":1940,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 11; white-space: nowrap; font-size: 48px; line-height: 56px; font-weight: 400; color: rgba(51,51,51,0.3); letter-spacing: 0px;font-family:Work Sans;">3 </div>
            
                    <!-- LAYER NR. 32 -->
                    <div class="tp-caption   tp-resizeme" 
                         id="slide-29-layer-22" 
                         data-x="['left','left','left','left']" data-hoffset="['160','0','-407','-441']" 
                         data-y="['top','top','top','top']" data-voffset="['228','210','104','207']" 
                                    data-fontsize="['14','14','24','24']"
                        data-lineheight="['24','24','36','36']"
                        data-color="['rgb(51,51,51)','rgb(105,105,105)','rgb(105,105,105)','rgb(105,105,105)']"
                        data-letterspacing="['1','','0','0']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;rZ:90;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 12; white-space: nowrap; font-size: 14px; line-height: 24px; font-weight: 400; color: #333333; letter-spacing: 1px;font-family:Work Sans;"> </div>
            
                    <!-- LAYER NR. 33 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                         id="slide-29-layer-24" 
                         data-x="['left','left','left','left']" data-hoffset="['217','49','-260','-260']" 
                         data-y="['top','top','top','top']" data-voffset="['350','296','129','129']" 
                                    data-width="2"
                        data-height="80"
                        data-whitespace="nowrap"
             
                        data-type="shape" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":980,"speed":1490,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 13;background-color:rgb(98,98,98);"> </div>
            
                    <!-- LAYER NR. 34 -->
                    <a class="tp-caption   tp-resizeme" id="slide-29-layer-25" 
                         data-x="['left','left','center','left']" data-hoffset="['215','42','-598','-393']" 
                         data-y="['top','middle','middle','top']" data-voffset="['486','56','119','23']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1260,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 14; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Classy </a>
            
                    <!-- LAYER NR. 35 -->
                    <a class="tp-caption   tp-resizeme" id="slide-29-layer-26" 
                         data-x="['left','center','center','left']" data-hoffset="['215','-435','-661','-292']" 
                         data-y="['top','middle','middle','top']" data-voffset="['561','130','-27','251']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":1720,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 15; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Exclusive </a>
            
                    <!-- LAYER NR. 36 -->
                    <a class="tp-caption   tp-resizeme" id="slide-29-layer-27" 
                         data-x="['left','center','center','left']" data-hoffset="['215','-435','-654','-390']" 
                         data-y="['top','middle','middle','top']" data-voffset="['637','205','-174','495']" 
                                    data-fontsize="['34','34','100','60']"
                        data-lineheight="['72','72','100','90']"
                        data-color="['rgb(98,98,98)','rgb(98,98,98)','rgb(51,51,51)','rgb(51,51,51)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-actions=''
                        data-responsive_offset="on" 
            
                        data-frames='[{"delay":2140,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);br:0px 0px 0px 0px;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 16; white-space: nowrap; font-size: 34px; line-height: 72px; font-weight: 300; color: #9b9b9b; letter-spacing: 0px;font-family:Work Sans;text-decoration: none;">Elegant </a>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
            </div><!-- END REVOLUTION SLIDER -->
	</div>
	
    <!--=====  End of slider area  ======-->

    <!--=============================================
    =            sofa banner rev         =
    =============================================-->
    
    <div class="sofa-banner-rev mb-100 mb-md-80 mb-sm-80">
    <div id="rev_slider_19_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="banner-sofa" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
            <div id="rev_slider_19_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
        <ul>	<!-- SLIDE  -->
            <li data-index="rs-49" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="470"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="assets/images/revimages/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
        
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                        id="slide-49-layer-1" 
                        data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['49','70','70','70']" 
                                data-width="['1250','708','708','379']"
                    data-height="['540','541','541','290']"
                    data-whitespace="nowrap"
            
                    data-type="shape" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":410,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 5;background-color: rgb(248,227,201);"> </div>
        
                <!-- LAYER NR. 2 -->
                <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
                        id="slide-49-layer-4" 
                        data-x="['left','left','left','left']" data-hoffset="['756','190','49','33']" 
                        data-y="['top','top','top','top']" data-voffset="['346','458','463','469']" 
                                data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
            
                    data-type="image" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":610,"speed":2170,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 6;"><img src="assets/images/home/hello.png" alt="" data-ww="['1006px','762px','762px','422px']" data-hh="['429px','325px','325px','180px']" data-no-retina> </div>
        
                <!-- LAYER NR. 3 -->
                <div class="tp-caption   tp-resizeme" 
                        id="slide-49-layer-5" 
                        data-x="['right','right','right','right']" data-hoffset="['0','-12','20','613']" 
                        data-y="['top','top','top','top']" data-voffset="['150','316','331','297']" 
                                data-fontsize="['170','150','130','130']"
                    data-lineheight="['200','150','130','130']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
            
                    data-type="text" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":410,"speed":2020,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 7; white-space: nowrap; font-size: 200px; line-height: 200px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Work Sans;">Our Store  </div>
        
                <!-- LAYER NR. 4 -->
                <!-- <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-1" 
                        id="slide-49-layer-6" 
                        data-x="['left','left','left','left']" data-hoffset="['1583','794','549','330']" 
                        data-y="['top','top','top','top']" data-voffset="['315','406','407','394']" 
                                data-width="100"
                    data-height="100"
                    data-whitespace="nowrap"
            
                    data-type="shape" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":800,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 8;background-color:rgb(51,51,51);border-radius:50px 50px 50px 50px;"> </div> -->
        
                <!-- LAYER NR. 5 -->
                <!-- <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
                        id="slide-49-layer-7" 
                        data-x="['right','right','right','right']" data-hoffset="['263','156','156','76']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-49','41','41','29']" 
                                data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
            
                    data-type="text" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":970,"speed":1400,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 9; white-space: nowrap; font-size: 16px; line-height: 25px; font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Work Sans;">ONLY </div> -->
        
                <!-- LAYER NR. 6 -->
                <!-- <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
                        id="slide-49-layer-8" 
                        data-x="['right','right','right','right']" data-hoffset="['265','158','158','80']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-22','72','72','60']" 
                                data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
            
                    data-type="text" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":970,"speed":1410,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 25px; font-weight: 700; color: #ffffff; letter-spacing: 1px;font-family:Work Sans;">$39 </div> -->
        
                <!-- LAYER NR. 7 -->
                <!-- <div class="tp-caption   tp-resizeme" 
                        id="slide-49-layer-9" 
                        data-x="['left','left','left','left']" data-hoffset="['287','287','103','24']" 
                        data-y="['top','top','top','top']" data-voffset="['170','170','124','126']" 
                                data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
            
                    data-type="text" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":660,"speed":1280,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 22px; font-weight: 500; color: #333333; letter-spacing: 2px;font-family:Work Sans;">FEATURED PRODUCT </div> -->
        
                <!-- LAYER NR. 8 -->
                <div class="tp-caption   tp-resizeme" 
                        id="slide-49-layer-10" 
                        data-x="['left','left','left','left']" data-hoffset="['281','281','98','22']" 
                        data-y="['top','top','top','top']" data-voffset="['208','208','162','166']" 
                                data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
            
                    data-type="text" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":1050,"speed":1230,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 12; white-space: nowrap; font-size: 48px; line-height: 64px; font-weight: 400; color: #333333; letter-spacing: 0px;font-family:Work Sans;">Hello! </div>
        
                <!-- LAYER NR. 9 -->
                <div class="tp-caption   tp-resizeme" 
                        id="slide-49-layer-11" 
                        data-x="['left','left','left','left']" data-hoffset="['282','282','99','23']" 
                        data-y="['top','top','top','top']" data-voffset="['296','296','250','250']" 
                                data-fontsize="['15','15','15','14']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
            
                    data-type="text" 
                    data-responsive_offset="on" 
        
                    data-frames='[{"delay":1300,"speed":1180,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['justify','justify','justify','justify']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 13; line-height: 26px; font-weight: 400; color: #7e7e7e; letter-spacing: 0.5px;font-family:Work Sans;">
                    <p class="welcome-desc">
                        Welcome&nbsp; to&nbsp; the&nbsp; world&nbsp; of&nbsp; Estética&nbsp; where <br> you will consume and experience furnishing <br> like never before!
                    </p> 
                </div>
        
                <!-- LAYER NR. 10 -->
                <div class="tp-caption Slider-button-alt rev-btn " 
                        id="slide-49-layer-12" 
                        data-x="['left','left','left','left']" data-hoffset="['284','284','100','29']" 
                        data-y="['top','top','top','top']" data-voffset="['401','401','370','349']" 
                                data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
            
                    data-type="button" 
                    data-responsive_offset="on" 
                    data-responsive="off"
                    data-frames='[{"delay":1580,"speed":1270,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(51,51,51);bg:transparent;"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[12,12,12,12]"
                    data-paddingright="[35,35,35,35]"
                    data-paddingbottom="[12,12,12,12]"
                    data-paddingleft="[35,35,35,35]"
        
                    style="z-index: 14; white-space: nowrap; letter-spacing: 1px;border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                    <a class="revslider-button" href="about.php"> About us</a>  </div>
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
    
    <!--=====  End of sofa banner rev  ======-->
    

	
    <!--=======  Start of Our Products  =======-->

    <?php include("includes/products_home.php"); ?>

    <!--=======  End of Our Products  =======-->
    
    <!--=============================================
    =          Start of Services area         =
    =============================================-->
    <!--=============================================
	=            section title  container      =
	=============================================-->
	
	<div class="section-title-container mb-50 mb-md-30 mb-sm-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->
                    
                    <div class="section-title section-title--one text-center">
                        <h2 style="font-size: 35px;color: #444444;">Services</h2>
                    </div>
                    
                    <!--=======  End of section title  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of section title container ======-->
 

    <!--=============================================
	=            section title  container      =
	=============================================-->
    
    <div class="banner-category-area mb-70 mb-md-50 mb-sm-50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">

                    <!--=======  hover zoom banner  =======-->
                    
                    <div class="single-banner single-banner--hoverzoom">
                        <a >
                            <img src="assets/images/banners/s1.jpg" class="img-fluid" alt="">
                            <span class="banner-content banner-content--product-type">
                                <span class="name services-title" >Curtain stitching</span>
                                <!-- <span class="price">$19.00</span> -->
                            </span>
                        </a>
                    </div>
                    
                    <!--=======  End of hover zoom banner  =======-->

                </div>
                <div class="col-md-8 mb-30">
                    <!--=======  hover zoom banner  =======-->
                    
                    <div class="single-banner single-banner--hoverzoom">
                        <a >
                            <img src="assets/images/banners/s3.jpg" class="img-fluid" alt="">
                            <span class="banner-content banner-content--product-type">
                                <span class="name services-title" >Sofa Making </span>
                                <!-- <span class="lezada-button-link">SHOP NOW</span> -->
                            </span>
                        </a>
                    </div>
                    
                    <!--=======  End of hover zoom banner  =======-->
                </div>

                <div class="col-md-8 mb-30">
                    <!--=======  hover zoom banner  =======-->
                    
                    <div class="single-banner single-banner--hoverzoom">
                        <a >
                            <img src="assets/images/banners/s4.jpg" class="img-fluid" alt="">
                            <span class="banner-content banner-content--product-type">
                                <span class="name services-title" >Interior <span>solutions</span> </span>
                                <!-- <span class="lezada-button-link">SHOP NOW</span> -->
                            </span>
                        </a>
                    </div>
                    
                    <!--=======  End of hover zoom banner  =======-->
                </div>

                <div class="col-md-4 mb-30">
                    <!--=======  hover zoom banner  =======-->
                    
                    <div class="single-banner single-banner--hoverzoom">
                        <a >
                            <img src="assets/images/banners/s2.jpg" class="img-fluid" alt="">
                            <span class="banner-content banner-content--product-type">
                                <span class="name services-title" >Customized Furniture</span>
                                <!-- <span class="price">$19.00</span> -->
                            </span>
                        </a>
                    </div>
                    
                    <!--=======  End of hover zoom banner  =======-->
                </div>
            </div>
        </div>
        <p style="text-align: center; font-size: 18px" >And even more...</p>
    </div>
    
    <!--=====  End of banner category area  ======-->

    <!--=============================================
    =            End of Services area           =
    =============================================-->
    
    <?php include("includes/blog_home.php"); ?>
    
    <!--=====  End of blog post area  ======-->

    <!--=============================================
    =            multi item testimonial area        =
    =============================================-->
    
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
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                ’Very pleasing ambience. Looks like we have found the right store! Really liked the layout.  As far as furnishing goes, the best I've seen so far. Our experience at Estética has been satisfying indeed. We do recommend them to discerning clients.
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t1.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->

									<div class="content">
										<p class="name">Revati Pany</p>
										<span class="designation">Managing Director, Ocasa Design Studio</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->

						<!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                In one word, Estética is elegant. The ambience, the quality of the products, the variety...I loved the craftsmanship and the details.... It exceeded my expectations. I'd definitely recommend Estética to people who are looking for exceptional quality at a fair price!
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t2.jpg" style="height: 80px; width: 80px;" class="img-fluid" alt="">
									</div> -->

									<div class="content">
										<p class="name">Ar. Prateek Gupta</p>
										<span class="designation">Principal Architect, Prateek Gupta Architects</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->

                        <!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Poetry in fabric, Estética is resplendence at its best. They have something for every corner of your abode. The colourful drapes, with a plethora of designs and variations, vivid patterns and world class material- pave way for a home you can’t take your eyes off.
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t1.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->

									<div class="content">
										<p class="name">Dheeshakti Mishra</p>
										<!-- <span class="designation">Managing Director, Ocasa Design Studio</span> -->
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->

						<!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Absolutely amazing collection, truly classy with excellent staff which is a rareity in Bhubaneshwar. 
                                The showroom is so well laid, you will just fall in love with everything.

								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t2.jpg" style="height: 80px; width: 80px;" class="img-fluid" alt="">
									</div> -->

									<div class="content">
										<p class="name">Paramita Sahu</p>
										<!-- <span class="designation">Principal Architect, Prateek Gupta Architects</span> -->
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->
						
						<!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Loved this place...I purchased curtains from them recently and loved everything about this place starting from behaviour of staff to collections...they have great collections available and a variety of brands starting from pocket friendly to high end brands suiting customer’s needs and taste.
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t3.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->
									
									<div class="content">
										<p class="name">Urmi Amrita</p>
										<!-- <span class="designation">Principal architect, SDS consulting</span> -->
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->

                        <!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Good shop with nice collection with good price, cooperative employees with products knowledge n understanding of customer taste n choice. One should atleast visit before buying from anywhere.
								</div>
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t3.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->
									
									<div class="content">
										<p class="name">Amit Singhania</p>
										<!-- <span class="designation">Principal architect, SDS consulting</span> -->
									</div>
								</div>
							</div>
						</div>
						
						<!--=======  End of single testimonial  =======-->
						
						<!--=======  single testimonial  =======-->
						
						<div class="col">
							<div class="testimonial-item multi-testimonial-single-item">
								<div class="multi-testimonial-single-item__text">
                                Excellent collections! Speciality is the spaciousness of the premise alongwith the décor, product display and well behaved staff. Though never been your customer, will look forward to be one in near future.
                                </div>
                                
								<div class="multi-testimonial-single-item__author-info">
									<!-- <div class="image">
										<img src="assets/images/testimonial/t3.jpg" style="width: 80px" class="img-fluid" alt="">
									</div> -->
									
									<div class="content">
										<p class="name">Sambid Mohapatra</p>
										<span class="designation">Principal architect, SDS consulting</span>
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


    
    <!--=======  Start of Our Partner Brands  =======-->

    <?php include("includes/brands.php"); ?>

    <!--=======   End of Our Partner Brands   =======-->


    <!--=============================================
	=            footer area         =
	=============================================-->
	
    <?php include 'includes/footer.php'; ?>

	<!--=============================================
	=            overlay items         =
	=============================================-->
	
	<?php include 'includes/overlay.php'; ?>
    
    <!--=============================================
	=            quick view         =
	=============================================-->
	
	<div id="qv-1" class="cd-quick-view">
        <div class="cd-slider-wrapper">
            <ul class="cd-slider">
                <li class="selected"><img src="assets/images/products/watch-1-1-600x800.jpg" alt="Product 2"></li>
                <li><img src="assets/images/products/watch-1-2-600x800.jpg" alt="Product 1"></li>
            </ul> <!-- cd-slider -->

            <ul class="cd-slider-pagination">
                <li class="active"><a href="#0">1</a></li>
                <li><a href="#1">2</a></li>
            </ul> <!-- cd-slider-pagination -->

            <ul class="cd-slider-navigation">
                <li><a class="cd-prev" href="#0">Prev</a></li>
                <li><a class="cd-next" href="#0">Next</a></li>
            </ul> <!-- cd-slider-navigation -->
        </div> <!-- cd-slider-wrapper -->

        <div class="lezada-item-info cd-item-info ps-scroll">

            <h2 class="item-title">Light brown watch</h2>
            <p class="price">
                <span class="main-price discounted">$360.00</span>
                <span class="discounted-price">$300.00</span>
            </p>
            
            <p class="description">Hurley Dry-Fit Chino Short. Men's chino short. Outseam Length: 19 Dri-FIT Technology helps keep you dry and comfortable. Made with sweat-wicking fabric. Fitted waist with belt loops. Button waist with zip fly provides a classic look and feel .</p>

            <span class="quickview-title">Quantity:</span>
            <div class="pro-qty d-inline-block mb-40">
                <input type="text" value="1">
            </div>

            <div class="add-to-cart-btn mb-25">

                <button class="lezada-button lezada-button--medium">add to cart</button>
            </div>

            <div class="quick-view-other-info">
                <table>
                    <tr class="single-info">
                        <td class="quickview-title">SKU: </td>
                        <td class="quickview-value">12345</td>
                    </tr>
                    <tr class="single-info">
                        <td class="quickview-title">Categories: </td>
                        <td class="quickview-value">
                            <a href="#">Fashion</a>, 
                            <a href="#">Men</a>, 
                            <a href="#">Sunglasses</a> 
                        </td>
                    </tr>
                    <tr class="single-info">
                        <td class="quickview-title">Tags: </td>
                        <td class="quickview-value">
                            <a href="#">Fashion</a>, 
                            <a href="#">Men</a>
                        </td>
                    </tr>
                    <tr class="single-info">
                        <td class="quickview-title">Share on: </td>
                        <td class="quickview-value">
                            <ul class="quickview-social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>

            
        </div> <!-- cd-item-info -->
        <a href="#0" class="cd-close">Close</a>
    </div>

    <!--=====  End of quick view  ======-->

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

	   
	<!-- Revolution Slider JS -->
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/revolution-active.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>

</html>