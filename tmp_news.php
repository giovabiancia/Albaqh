<?php
/*
Template Name: News
*/
get_header(); ?>

<style media="screen">


.site-header .site-main-menu li > a{
	color: #2b2350 !important;

}
.post-post-grid:hover{
	transform: translateY(-10px)
	

}

</style>
<!--==========================-->
<!--=         Banner         =-->
		<!--==========================-->
		<section class="page-banner">
			<div class="container">
				<div class="page-title-wrapper">
					<h1 class="page-title"><?php echo get_the_title();?></h1>

					<ul class="bradcurmed">
						<li><a href="#" rel="noopener noreferrer">Home</a></li>
						<li>Blog Standard</li>
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
	
		



	<main id="main" class="main main-blog-news" role="main">
	<div class="blog-post-archive">
			<div class="container">
				<div class="row">
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
					<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 12, 'orderby' => 'date', 'order'=> 'desc', 'paged' => $paged ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php
					static $count = 0;
					$count++;
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$url = $thumb['0'];
					?>
					<div class="col-lg-4 col-md-6">
						<article class="post-post-grid">
							<div class="feature-image">
								<a href="<?php echo get_the_permalink(); ?>">
									<?php echo the_post_thumbnail(); ?>
								</a>
							</div>
							<div class="blog-content">
								<ul class="post-meta">
									<li><a href="href="<?php echo get_the_permalink(); ?>""><?php echo get_the_date(); ?></a></li>
								</ul>

								<h3 class="entry-title"><a href="href="<?php echo get_the_permalink(); ?>""><?php the_title(); ?></a></h3>

								<div class="author">
									<img src="media/blog/auth2.jpg" alt="author">
									<a href="<?php echo get_the_permalink(); ?>" class="author-link"><?php the_author(); ?></a>
								</div>

							</div><!-- /.post-content -->
						</article><!-- /.post -->
					</div>
					<?php endwhile; wp_reset_query(); ?>

					
				</div>
		    </div>
	</div>
		
		

		
	</main><!-- .site-main -->

<?php get_footer(); ?>
