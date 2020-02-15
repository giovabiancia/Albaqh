<?php
/*
Template Name: Homepage
*/
get_header();
?>
<style>

 .play-btn{
	 margin-top: 2rem;
	background-color: #E39530;
	padding: 7px;
	border-radius: 20px;

}

.play-btn i{
	margin-left:7px;
}
html {
  scroll-behavior: smooth;
}

</style>
	<section class="banner banner-one">
			<div class="circle-shape" data-parallax='{"y" : 230}'><img src="<?php echo get_template_directory_uri();?>/media/banner/circle-shape.png" alt="circle"></div>
			<div class="container">
				<div class="banner-content-wrap">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="banner-content">
								<h1 class="banner-title wow pixFadeUp" data-wow-delay="0.3s">
									Dai  <span>vita </span><br>
									alla tua <span>idea</span><br>
									di <span>business</span>
								</h1>

								<p class="description wow pixFadeUp" data-wow-delay="0.5s">
									Pianificare la tua idea imprenditoriale<br>
									non è mai stato così semplice !
								</p>

								<a href="http://bplanner.herokuapp.com" class="pxs-btn banner-btn wow pixFadeUp" data-wow-delay="0.6s">Inizia Gratis !</a>
							</div><!-- /.banner-content -->
						</div><!-- /.col-lg-6 -->

						<div class="col-lg-6">
							<div class="promo-mockup wow pixFadeLeft">
								<img src="<?php echo get_template_directory_uri();?>/media/banner/macbook1.png" alt="mpckup">
							</div><!-- /.promo-mockup -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div><!-- /.banner-content-wrap -->
			</div><!-- /.container -->

			<div class="bg-shape">
				<img src="<?php echo get_template_directory_uri();?>/media/banner/shape-bg.png" alt="">
			</div>
        </section><!-- /.banner banner-one -->
        	<!--===========================-->
		<!--=         Feature         =-->
		<!--===========================-->
		<section class="featured">
			<div class="container">
				<div class="section-title text-center wow pixFade">
					<!-- <h3 class="sub-title">Inizia a pinificare</h3> -->
					<h2 class="title">Che cosa è Bplanner ?</h2>
					
							<div class="video-thumbnail">
								<a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="play-btn popup-video pix-btn wow pixFadeUp">Guarda il video <i class="ei ei-arrow_triangle-right"></i></a>
							</div>
							
							<!-- /.video-thumbnail -->					
				
				</div><!-- /.section-title -->
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: pixFadeLeft;">
							<div class="saaspik-icon-box-icon">
								<img src="<?php echo get_template_directory_uri();?>/media/feature/document.svg" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#pitch">Crea il tuo Lean Plan</a></h3>
								<p>
								È una metodologia di business planning, che si fonda sulla rielaborazione dinamica delle ipotesi iniziali al fine di soddisfare al meglio le aspettative dei clienti
									
								</p>

								<a href="#pitch" class="more-btn"><i class="ei ei-arrow_right"></i></a>

								<svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
									<path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"></path>
								</svg>
							</div>
						</div><!-- /.pixsass-box style-four -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: pixFadeLeft;">
							<div class="saaspik-icon-box-icon">
								<img src="<?php echo get_template_directory_uri();?>/media/feature/brain.svg" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#canvas">Sviluppa la tua idea</a></h3>

								<p>
									Grazie ai canvas di pianificazione strategica potrai iniziare a strutturare il funzionamento del tuo progetto imprenditoriale!
								</p>

								<a href="#canvas" class="more-btn"><i class="ei ei-arrow_right"></i></a>
							</div>

							<svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
								<path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"></path>
							</svg>
						</div><!-- /.pixsass-box style-four -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: pixFadeLeft;">
							<div class="saaspik-icon-box-icon">
								<img src="<?php echo get_template_directory_uri();?>/media/feature/finance.svg" alt="">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">Cerca Finanziamenti</a></h3>
								<p>
									Ti diamo la possibilità di presentare il tuo progetto imprenditoriale ai nostri partner finanziatori!
								</p>

								<a href="#" class="more-btn"><i class="ei ei-arrow_right"></i></a>
							</div>

							<svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
								<path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"></path>
							</svg>
						</div><!-- /.pixsass-box style-four -->
					</div><!-- /.col-lg-4 col-md-6 -->
				</div>

				
			</div><!-- /.container -->
        </section><!-- /.featured -->
        <!--=================================-->
		<!--=         Editor Design         =-->
		<!--=================================-->
		<section class="editor-design mt-5"  id="pitch">
			<div class="container">
				<div class="row">

					<div class="editure-feature-image wow pixFadeRight">
						<div class="image-one" data-parallax='{"x" : 30}'>
							<img src="<?php echo get_template_directory_uri();?>/media/feature/pitch.png" style="border-radius: 10px" width="720" height="694" class="wow pixFadeRight" data-wow-delay="0.3s" alt="feature-image">
						</div>
						<div class="image-two">
							<div class="image-two-inner" data-parallax='{"x" : -30}'>
								<img src="<?php echo get_template_directory_uri();?>/media/feature/pitch2.png" style="border-radius: 10px" width="270" height="444" class="wow pixFadeLeft" data-wow-delay="0.5s" alt="feature-image">
							</div>
						</div>

					</div>

					<div class="col-lg-6 offset-lg-6  mt-5">
						<div class="editor-content">
							<div class="section-title style-two">
								<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
									Crea il tuo <br>
									lean plan.
								</h2>

								<p class="wow pixFadeUp" data-wow-delay="0.5s">
									La nostra procedura guidata ti aiuta <br>
									passo dopo passo
								</p>
							</div>

							<div class="description wow pixFadeUp" data-wow-delay="0.7s">
								<p>
                                Il Lean Business plan è un template di business plan organizzato su una sola pagina che puoi creare in 20 minuti e aggiornare a piacimento. Può aiutare in maniera grandiosa le startup e i freelance che sono costantemente esposti a grandi rischi e incertezze.								</p>

								<a href="#" class="pix-btn wow pixFadeUp" data-wow-delay="0.9s">Scopri di più</a>
							</div>
						</div><!-- /.editor-content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
			<div class="shape-bg">
				<img src="<?php echo get_template_directory_uri();?>/media/background/shape_bg.png" class="wow fadeInLeft" alt="shape-bg">
			</div>
        </section><!-- /.editor-design -->
    
        	<!--=================================-->
		<!--=         Revolutionize         =-->
		<!--=================================-->
		<section class="revolutionize" id="canvas">
			<div class="bg-angle"></div>
			<div class="container">
				<div class="section-title dark-title text-center">
					<h3 class="sub-title wow pixFadeUp">Novità</h3>
					<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
						Utilizza i canvas <br>
						di pianificazione strategica
					</h2>
				</div><!-- /.section-title dark-title -->

				<div id="pix-tabs" class="wow pixFadeUp" data-wow-delay="0.5s">
					<ul id="pix-tabs-nav">
						<li><a href="#tab1">Business Model Canvas</a></li>
						<li><a href="#tab2">Value Proposition Canvas</a></li>
						<li><a href="#tab3">Analisi Swot</a></li>
						
					</ul> <!-- tabs-nav -->

					<div id="pix-tabs-content">
						<div id="tab1" class="content">
							<img src="<?php echo get_template_directory_uri();?>/media/feature/bmc.png"   width="900" height="1500"alt="feature">

							<div class="shape-shadow"></div>
						</div>
						<div id="tab2" class="content">
							<img src="<?php echo get_template_directory_uri();?>/media/feature/vpc.png"  width="900" height="1500" alt="feature">
							<div class="shape-shadow"></div>
						</div>
						<div id="tab3" class="content">
							<img src="<?php echo get_template_directory_uri();?>/media/feature/swot.png"  width="900" height="1500" alt="feature">
							<div class="shape-shadow"></div>
						</div>

						
					</div> <!-- tabs-content -->
				</div> <!-- Tabs -->
			</div><!-- /.container -->
		</section><!-- /.revolutionize -->

		<!--===========================-->
		<!--=         Service         =-->
		<!--===========================-->
		<section class="featured-two">
			<div class="container">
				<div class="section-title text-center">
					<h3 class="sub-title wow pixFadeUp">Our service</h3>
					<h2 class="title wow pixFadeUp" data-wow-delay="0.2s">Perchè scegliere Bplanner?</h2>
				</div><!-- /.section-title -->

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.4s">
							<div class="saaspik-icon-box-icon">
								<img src="<?php echo get_template_directory_uri();?>/media/feature/easy.svg" alt="feature">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">Semplicità di pianificazione</a></h3>
								<p>
									La nostra procedura guidata <br>
									rende semplice a tutti  <br>
									la pianificazione aziendale
								</p>
							</div>
						</div><!-- /.pixsass-box style-two -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.5s">
							<div class="saaspik-icon-box-icon">
								<img src="<?php echo get_template_directory_uri();?>/media/feature/personalize.svg" alt="feature">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">Personalizzazione</a></h3>

								<p>
									Scegli tra i vari template <br>
                                    e scarica il Pdf del tuo <br>
                                    Lean Plan
								</p>
							</div>
						</div><!-- /.pixsass-box style-two -->
					</div><!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.6s">
							<div class="saaspik-icon-box-icon">
								<img src="<?php echo get_template_directory_uri();?>/media/feature/help.svg" alt="feature">
							</div>
							<div class="pixsass-icon-box-content">
								<h3 class="pixsass-icon-box-title"><a href="#">Supporto</a></h3>
								<p>
									Siamo sempre disponibili. <br>
									Puoi sempre contare sul nostro  <br>
									supporto !
								</p>
							</div>
						</div><!-- /.pixsass-box style-two -->
					</div><!-- /.col-lg-4 col-md-6 -->

					

					

					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.featured -->










<?php get_footer(); ?>
<!-- footer -->