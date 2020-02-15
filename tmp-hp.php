<?php
/*
Template Name: Homepage
*/
get_header();
?>

	  <!-- Start main-content -->
	  <div class="main-content">
	<!-- Section: home -->
	
	<?php if( have_rows('sezione1') ): ?>
    <?php while( have_rows('sezione1') ): the_row(); 

        // Get sub field values.
        $titolo = get_sub_field('titolo');
        $sottotitolo = get_sub_field('sottotitolo');
        $video = get_sub_field('video');

		?>
	<section id="home" class="divider no-bg layer-overlay overlay-dark-light" data-bg-img="images/bg/bg16.jpg">
	
	<div class="bg-video">
	  <div id="home-video" class="video">
		<div class="player video-container" data-property="{videoURL:'https://www.youtube.com/watch?v=lhlF3Bl0iho&t=2707s',containment:'#home-video',autoPlay:true, showControls:false, mute:false, startAt:0, opacity:1}"></div>
	  </div>
	</div>
	
	<div class="display-table">
	  <div class="display-table-cell">
		<div class="container pt-200 pb-200">
		  <div class="row">
			<div class="col-md-12 text-center">
			  <h1 class="text-white text-uppercase font-60 font-weight-600 mb-0">Horse <span class="text-theme-colored"> <?php echo $titolo ?></span></h1>
			  <h4 class="text-white font-weight-400 mt-0"><?php echo $sottotitolo ?></h4>
			  <a class="btn btn-colored btn-theme-colored btn-flat smooth-scroll-to-target mt-20" href="#donate-now">Scopri di più</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
    <?php endwhile; ?>
<?php endif; ?>
	<!--  -->
    


	<!-- Section: blog -->
    <section id="blog">
      <div class="container pb-30">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30">Le ultime <span class="text-theme-colored">novità</span></h3>
              <div class="owl-carousel-3col">
			  <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
					<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'date', 'order'=> 'desc', 'paged' => $paged ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php
					static $count = 0;
					$count++;
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$url = $thumb['0'];
					?>
				
					<div class="item">
                  <article class="post text-center mb-30 bg-lighter">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
						  <a href="<?php echo get_the_permalink(); ?>">
						  <img src="<?php echo $url ?>" alt="" class="img-responsive img-fullwidth">
						</a>
                        
                      </div>
                    </div>
                    <div class="entry-content p-20">
                      <div class="entry-meta">
                        <ul class="list-inline font-11 mb-10">
                          <li><em><i class="fa fa-user text-gray mr-5"></i>By: <?php the_author(); ?> / </em></li>
                          <li><em><i class="fa fa-calendar mr-5"></i> <?php echo get_the_date(); ?> / </em></li>
                          <li><em><i class="fa fa-comment-o mr-5"></i>Comments: 45 </em></li>
                        </ul>
                      </div>
                      <h4 class="entry-title line-bottom-center text-uppercase font-raleway font-18 font-weight-600 mb-10"><a href="blog-single-left-sidebar.html"><?php the_title(); ?></a></h4>
                      <p class="mt-5"><?php echo the_excerpt(); ?></p>
                      <a class="btn btn-theme-colored btn-xs" href="<?php echo get_the_permalink(); ?>">Scopri</a>
                    </div>
                  </article>
                </div>
				<?php endwhile; wp_reset_query(); ?>
                
               
              </div>
            </div>
          </div>
        </div>
      </div>
	</section>
	<!-- Section: Horse Gallery -->
  

  <!-- end main-content -->
  </div>










<?php get_footer(); ?>
<!-- footer -->