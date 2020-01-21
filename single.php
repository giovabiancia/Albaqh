<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<style media="screen">


.site-header .site-main-menu li > a{
	color: #2b2350 !important;

}
.page-banner.blog-details-banner .post-meta.color-theme li a{
	color: #2b2350 !important;

}
</style>
<!--==========================-->
		<!--=         Banner         =-->
		<!--==========================-->
		<section class="page-banner blog-details-banner">
			<div class="container">
				<div class="page-title-wrapper">
					<ul class="post-meta color-theme">
						<li><a href="#">December 10, 2019</a></li>
					</ul>
					<h1 class="page-title"><?php echo get_the_title(); ?></h1>

					<ul class="post-meta">
						<li><span>By <?php echo get_the_author(); ?> </span></li>
						
						<li><span><?php echo get_the_date(); ?></span></li>
					</ul>
				</div>
				<!-- /.page-title-wrapper -->
			</div>
			<!-- /.container -->

			<svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
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
		<section class="blog-single">
			<div class="container pb-120">
				<div class="row">
					<div class="col-md-8">
						<div class="post-wrapper">
						<?php while ( have_posts() ) : the_post(); ?>
						<article class="post post-signle">
								<div class="feature-image">
									<a href="blog-signle.html">
									<?php the_post_thumbnail('full'); ?>
									</a>
								</div>
								<div class="blog-content">

									<p>
									<?php the_content(); ?>
										 
									</p>


									

									<div class="tagcloud">
										<span>Tags:</span>
										<?php 
										$tags = get_tags(array(
										'hide_empty' => false
										));
										
										foreach ($tags as $tag) {
										echo '<a>' . $tag->name . '</a>';
										}
										
										?>
										
									</div>
								</div><!-- /.post-content -->
							</article><!-- /.post -->
		
			<span><?php echo get_the_date(); ?></span>
			
			
				<?php
				// Start the loop.


					the_post_navigation( array(
						'prev_text' => '<span class="post-title">%title</span>'.'<span class="bottone-prev"></span>'.'<a class="bottone t-a-p" href="http://www.popcomm.it/culturarepublic/blog-news"" title="progetti">torna al blog</a>',
						'next_text' => '<span class="post-title">%title</span>'.'<span class="bottone-next"></span>',

					) );

				// End the loop.
				endwhile;
				?>

	
							<div class="blog-share">
								

								<ul class="share-link">
								<?php
								if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar
								('ShareButton') ) : ?>
								<?php endif;
								?>
									<!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> -->
								</ul>
							</div><!-- /.blog-share -->



							


						</div><!-- /.post-wrapper -->
					</div><!-- /.col-md-8 -->

					<div class="col-md-4">
						<div class="sidebar">
							<div id="search" class="widget widget_search">
								<form role="search" class="search-form-widget">
									<label>
										<input type="search" class="search-field" placeholder="Search...">
									</label>
									<button type="submit" class="search-submit">
										<i class="ei ei-icon_search"></i>
									</button>
								</form>
							</div>
							<?php
								if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar
								('PostFilter') ) : ?>
								<?php endif;
								?>

								<?php 
										$tags = get_tags(array(
										'hide_empty' => false
										));
										
										foreach ($tags as $tag) {
										echo '<a>' . $tag->name . '</a>';
										}
										
										?>

							
							
						</div><!-- /.sidebar -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
			
		
		</section><!-- /.blog-single -->



<?php get_footer(); ?>
