<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" itemscope itemtype="http://schema.org/Restaurant">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="google" content="notranslate" />
	<meta name="author" content="Bplanner">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta property="og:url" content="www.bplanner.it">
	<meta name="twitter:site" content="www.bplanner.it">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/assets/img/fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri();?>/assets/img/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri();?>/assets/img/fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/assets/img/fav/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	
	

	<meta name="msapplication-TileColor" content="#fa7070">
	<meta name="theme-color" content="#fa7070">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/fontawesome/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/swiper/css/swiper.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/app.css" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" href="favicon.ico" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
	.page-banner{
		background-image:linear-gradient(100deg, #e28a17 0%, #e6b474 100%)
	}
	.page-banner-contact{
		background-image:linear-gradient(100deg, #e28a17 0%, #e6b474 100%)
	}
	</style>
</head>

<body id="home-version-1" class="home-version-4" data-style="default" itemscope itemtype="http://schema.org/Organization">

<a href="#main_content" data-type="section-switch" class="return-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<!--  <div class="page-loader">
		<div class="loader">
			
			<div class="blobs">
				<div class="blob-center"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
						<feBlend in="SourceGraphic" in2="goo" />
					</filter>
				</defs>
			</svg>

		</div>
	</div> -->
	
	<div id="main_content">

	<!-- Header -->
	<header class="site-header header_trans-fixed" data-top="992">
			<div class="container">
				<div class="header-inner">
					<div class="toggle-menu">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</div>
					<!-- /.toggle-menu -->

					<div class="site-mobile-logo">
						<a href="<?php site_url(); ?>/"  class="logo">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/logo1.png" alt="site logo" class="main-logo">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/logo2.png" alt="site logo" class="sticky-logo">
						</a>
					</div>

					<nav class="site-nav">
						<div class="close-menu">
							<span>Close</span>
							<i class="ei ei-icon_close"></i>
						</div>

						<div class="site-logo">
							<a href="<?php site_url(); ?>/" class="logo">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/logo1.png" alt="site logo" class="main-logo">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/logo2.png" alt="site logo" class="sticky-logo">
							</a>
						</div>
						<!-- /.site-logo -->

						<div class="menu-wrapper" data-top="992">
							<ul class="site-main-menu">
								<li >
									<a href="<?php site_url(); ?>/">Home</a>
									<!-- <ul class="sub-menu">
										<li><a href="index.html">Home One</a></li>
										<li><a href="index-two.html">Home Two</a></li>
										<li><a href="index-three.html">Home Three</a></li>
										<li><a href="index-four.html">Home Four</a></li>
										<li><a href="index-five.html">Home Five</a></li>
									</ul> -->
								</li>
								
								<li >
									<a href="<?php site_url(); ?>/bplanner/blog/">Blog</a>
									<!-- <ul class="sub-menu">
										<li><a href="blog.html">Blog Standard</a></li>
										<li><a href="blog-grid.html">Blog Grid</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
									</ul> -->
								</li>
								

								<li><a href="<?php site_url(); ?>/bplanner/contatti/">Contatti</a></li>
							</ul>

							<div class="nav-right">
								<a href="http://bplanner.herokuapp.com" class="nav-btn">Log In</a>
							</div>
						</div>
						<!-- /.menu-wrapper -->

					</nav><!-- /.site-nav -->
				</div><!-- /.header-inner -->
			</div><!-- /.container -->
		</header><!-- /.site-header -->
				<!--==========================-->
		<!--=         Banner         =-->
		<!--==========================-->
	

	
	