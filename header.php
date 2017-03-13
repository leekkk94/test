<?php

 ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title><?php echo 'QUICKTRABAHO'; if($page_title) echo " | " . $page_title; ?></title>
		<meta property="og:title" content="Quick Trabaho">
		<meta property="og:url" content="<?php echo TR_URL; ?>">
		<meta property="og:description" content="내용">
		<meta property="og:image" content="이미지 경로">
		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?php echo TR_URL; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="<?php echo TR_URL; ?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo TR_URL; ?>/assets/css/layout.css" rel="stylesheet" type="text/css" />

		<link href="<?php echo TR_URL; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="<?php echo TR_URL; ?>/assets/css/font-awesome.css">

		<!-- 커스텀 스크롤 -->
		<link rel="stylesheet" href="<?php echo TR_URL; ?>/assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.css" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:

		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background

		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click

		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">
		<!-- 팝업시작 -->
    <div class="modal_wrap">
    	<div class="modal fade" id="popModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display: none;">
    		<div class="modal-dialog" role="document">

    			<div class="modal-content" >
            <div class="white-modal">
      				<div class="modal-header">
      					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      						<span aria-hidden="true">×</span>
      					</button>
      					<h4 class="modal-title" id="modalLabel"></h4>
      				</div>
      				<div class="modal-body pop-content">
      	    		<div class="btn-area"><button type="button" class="btn btn-default" data-dismiss="modal">닫기</button></div>
      				</div>
            </div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- 팝업끝 -->
		<!-- wrapper -->
		<div id="wrapper">

			<!--
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom

				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
<?php
require_once('top_nav.php');
?>
