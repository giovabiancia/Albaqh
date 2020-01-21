<?php
/*
Template Name: Contatti
*/

get_header(); ?>

<?php
/*
Template Name: Progetti
*/
get_header();
?>

<style media="screen">


.site-header .site-main-menu li > a{
	color: #e28d1e !important;

}
.site-header .site-main-menu li > a{
	color: #2b2350 !important;

}
.page-banner.blog-details-banner .post-meta.color-theme li a{
	color: #2b2350 !important;

}
</style>
	<section class="page-banner-contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="page-title-wrapper">
							<div class="page-title-inner">
								<h1 class="page-title">Contattaci</h1>

								<p>
									Siamo disponibili ad ascoltare le tue proposte.
								</p>
							</div>
							<!-- /.page-title-inner -->
						</div>
						<!-- /.page-title-wrapper -->
					</div>
					<!-- /.col-lg-8 -->

					<div class="col-lg-4">
						<div class="animate-element-contact">
							<!-- <img src="media/animated/001.png" alt="" class="wow pixFadeDown" data-wow-duration="1s">
							<img src="media/animated/002.png" alt="" class="wow pixFadeUp" data-wow-duration="2s">
							<img src="media/animated/003.png" alt="" class="wow pixFadeLeft" data-wow-delay="0.3s" data-wow-duration="2s">
							<img src="media/animated/004.png" alt="man" class="wow pixFadeUp" data-wow-duration="2s"> -->
						</div>
						<!-- /.animate-element-contact -->
					</div>
					<!-- /.col-lg-4 -->
				</div>
				<!-- /.row -->

			</div>
			<!-- /.container -->

			<svg class="circle" data-parallax='{"y" : 250}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
				<path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
			</svg>

			<ul class="animate-ball">
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
			</ul>
		</section>
    	<!--===========================-->
		<!--=         Contact         =-->
		<!--===========================-->
		<section class="contactus">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-infos">
							<div class="contact-info">
								<h3 class="title">Dove Siamo</h3>
								<p class="description">
									Monteroni d'arbia, B.Buozzi 247<br>
									Siena, 53100
								</p>

								<div class="info phone">
									<i class="ei ei-icon_phone"></i>
									<span>+39 3332232648</span>
								</div>
							</div>
							<!-- /.contact-info -->

							
							<!-- /.contact-info -->
						</div>
						<!-- /.contact-infos -->
					</div>
					<!-- /.col-md-4 -->
					<div class="col-md-8">
						<div class="contact-froms">
							<form action="php/mailer.php" class="contact-form" data-pixsaas="contact-froms">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="name" placeholder="Name" required>
									</div>

									<div class="col-md-6">
										<input type="email" name="email" placeholder="Email" required>
									</div>
								</div>

								<input type="text" name="subject" placeholder="Subject">

								<textarea name="content" placeholder="Your Comment" required></textarea>

								<button type="submit" class="pix-btn submit-btn">Invia il tuo messaggio</button>

								<div class="form-result alert">
									<div class="content"></div>
								</div>
							</form>
							<!-- /.contact-froms -->
						</div>
						<!-- /.faq-froms -->
					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.contactus -->

		<!--========================-->
		<!--=         Map         =-->
		<!--========================-->
		<section id="google-maps">
			<div class="google-map">
				<div class="gmap3-area" data-lat="40.712776" data-lng="-74.005974" data-mrkr="assets/img/map-marker.png">

				</div>
			</div><!-- /.google-map -->
		</section><!-- /#google-maps -->


    <!-- Page title -->
  

  </main>
  <script src="dependencies/gmap3/js/gmap3.min.js"></script>
	<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&#038;ver=2.1.6'></script>


<?php get_footer(); ?>

<!-- <script defer src="http://maps.google.it/maps/api/js?key=AIzaSyCHpG8Bb08YrHItVBd_OY7HlVXhe2WD0E0&language=it&libraries=places" type="text/javascript"></script>
<script defer src="< ?php echo get_template_directory_uri();?>/js/CustomGoogleMapMarker.js" type="text/javascript"></script>
