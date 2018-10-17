<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>learning portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="<?php echo base_url(); ?>resources/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>resources/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>resources/css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
</head>

<body>
	<div class="header inner_banner title" id="home">
		<!--/top-bar-->
		<div class="top-bar">
			<div class="header-nav-agileits">
			<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<h1><a class="navbar-brand" href="<?php echo base_url(); ?>index.php">Matrix <span>Online Education</span></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								<li><a href="<?php echo base_url(); ?>index.php">Home</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/register">Register</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
		</div>
		<!--//top-bar-->
	</div>
    <div class="banner_bottom">
		<div class="container" style="padding-right: 70px; padding-left: 70px;">
            <div style="text-align: center;">
            <img src="<?php echo base_url(); ?>resources/images/bcs/bcs-logo.png">
            </div>
            <div style="margin-top: 45px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="grid_info">
						<div class="icon_info">
							<span class="fa fa-line-chart" aria-hidden="true"></span>
							<h5>Financial Analyst Course</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
                </div>
                <div class="col-md-4">
                    <div class="grid_info">
						<div class="icon_info">
							<span class="fa fa-line-chart" aria-hidden="true"></span>
							<h5>Financial Analyst Course</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
                </div>
                <div class="col-md-4">
                    <div class="grid_info">
						<div class="icon_info">
							<span class="fa fa-line-chart" aria-hidden="true"></span>
							<h5>Financial Analyst Course</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
                </div>
            </div>
            </div>
		</div>
    </div>
	<!--footer-->
	<div class="contact-footer-w3layouts-agile">
		<div class="copy-w3-agileits">
			<h2 class="footer-logo"><a href="index.html">Matrix <span>Online Education</span></a></h2>
			<p>© 2018 Matrix Online Education . All Rights Reserved | Design by Zinios </p>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--/footer -->


	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="<?php echo base_url(); ?>resources/js/main.js"></script>
	<script src="<?php echo base_url(); ?>resources/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!--//search-bar-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/easy-responsive-tabs.css " />
	<script src="<?php echo base_url(); ?>resources/js/easyResponsiveTabs.js"></script>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
		$(document).ready(function () {

			//Vertical Tab
			$('#parentVerticalTab').easyResponsiveTabs({
				type: 'vertical', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo2');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!--/script-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap-3.1.1.min.js"></script>


</body>

</html>