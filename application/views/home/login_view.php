<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
	<!--Header-->
	<div class="top-bar_sub_w3layouts_agile">
		<h6>MAKE CREATIVITY A HABIT <a href="contact.html">Contact Us </a></h6>
		<div class="search">
			<!-- <h5><a class="sign" href="#" data-toggle="modal" data-target="#myModal2">Student Login</a></h5> -->
		</div>
		<div class="clearfix"> </div>
	</div>
    <!--//Header-->
    <div class="banner_bottom" style="height: 80vh">
		<div class="container" style="padding-right: 70px; padding-left: 70px;">
			<h3 class="headerw3" style="text-align: center;">Log in</h3>
			<div class="inner_sec_w3_agileinfo">
				<div class="signin-form">
					<form action="#" method="post">
						<div class="fields-grid">
							<div class="styled-input">
								<input type="email" placeholder="User name (e-mail)" name="user_name" required="">
							</div>
							<div class="styled-input">
								<input placeholder="Password" name="password" type="password" value="" required="">
							</div>
							<!-- <div class="clearfix"> </div> -->
						</div>
						<input type="submit" value="Submit">
                    </form>
                    <p><a href="#"> Forget account?</a></p>
                    <p><a href="#"> Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<div class="contact-footer-w3layouts-agile">
		<div class="copy-w3-agileits">
			<h2 class="footer-logo"><a href="index.html">Stretch <span>Online Education</span></a></h2>
			<p>© 2018 Stretch . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
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