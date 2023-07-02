<!--?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?-->
<!--?php if ( is_front_page() ) { get_includes('middle'); }?-->

<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<title>DXTR SBRD</title>


	<link rel="stylesheet" href="style.min.css">

	<!--<?php wp_head(); ?>-->
</head>
	<body>
		<div class="protect-me">
		<div class="clearfix">

		<!-- Header -->
		<header>
			<div class="wrapper">
				<div class="header_con">
					<div class="main_logo">
						<figure><img src="images/profile-photo.jpg" alt="Dexter Sabordo"></figure>
					</div>

					<div class="head_info">
						<div class="social_media">
							<ul>
								<li><a href="https://www.facebook.com" target="_blank"><figure><img src="images/facebook-icon.png" alt="Facebook"/></figure></a></li>
								<li><a href="https://www.twitter.com" target="_blank"><figure><img src="images/twitter-icon.png" alt="Twitter"/></figure></a></li>
								<li><a href="https://www.linkedin.com" target="_blank"><figure><img src="images/linkedin-icon.png" alt="LinkedIn"/></figure></a></li>
								<li><a href="https://www.upwork.com" target="_blank"><figure><img src="images/upwork-icon.png" alt="Upwork"/></figure></a></li>
								<li><a href="mailto:sabs.dex1@gmail.com" target="_blank"><figure><img src="images/gmail-icon.png" alt="GMail"/></figure></a></li>
							</ul>
						</div>
					</div>
				</div>
			  <div class="clearfix"></div>
			</div>
		</header>
		<!-- End Header -->

		<!-- Navigation -->
		<div id="nav_area">
			<nav class="page_nav">
				<div class="wrapper">
					<!--<?php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>') ); ?>-->
					<ul>
						<li class="list active">
							<a href="javascript:;">
								<small class="icon">
									<ion-icon name="person-outline"></ion-icon>
								</small>
								<small class="text">About Me</small>
							</a>
						</li>
						<li class="list">
							<a href="javascript:;">
								<small class="icon">
									<ion-icon name="document-text-outline"></ion-icon>
								</small>
								<small class="text">Portfolio</small>
							</a>
						</li>
						<li class="list">
							<a href="javascript:;">
								<small class="icon">
									<ion-icon name="newspaper-outline"></ion-icon>
								</small>
								<small class="text">CV</small>
							</a>
						</li>
						<div class="indicator"></div>
					</ul>
				</div>
			  </nav>
		</div>
		<!-- End Navigation -->

		<!-- Main -->
		<div id="main_area">
			<div class="wrapper">
				<div class="main_con">
					<main>
						<h1 class="h1_title">Dexter Sabordo</h1>
					</main>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<!-- End Main -->

		<!-- Bottom -->
		<div class="bottom">
			<div class="wrapper">
				<div class="bottom_con">
					<div class="card"></div>
					<div class="card"></div>
					<div class="card"></div>
					<div class="card"></div>
				</div>
			</div>
		</div>

		<!--Footer -->
		<footer>
			<div class="footer_btm">
				<div class="wrapper">
					<div class="footer_btm_con">

						<div class="copyright">
							&copy; Copyright
							<?php
								$start_year = '2022';
								$current_year = date('Y');
								$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
								echo $copyright;
							?>
							<span class="footer_comp">Dexter Sabordo</span>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<span class="back_top"></span>

		</div> <!-- End Clearfix -->
		</div> <!-- End Protect Me -->

		<!--<?php get_includes('ie');?>-->

		<!--
		Solved HTML5 & CSS IE Issues
		-->
		<script src="js/jquery-2.1.1.min.js"></script>

		<!--
		Solved Psuedo Elements IE Issues
		-->

		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/plugins.js"></script>
		<!--<?php wp_footer(); ?>-->
	</body>
</html>
<!-- End Footer -->
