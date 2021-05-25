<?php
/*
Template Name: News
*/
get_header(); ?>
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo the_post_thumbnail_url(  );?>">
      <div class="container pt-90 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Blog</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">Blog</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: News & Blog -->
    <section id="news">
      <div class="container pt-70 pb-40">
        <div class="section-content">
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
            <div class="col-sm-6 col-md-4">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="<?php echo $url ?>" alt="" class="img-responsive img-fullwidth"> 
                  </div>                    
                  <div class="entry-date media-left text-center flip bg-theme-colored  pt-5 pr-15 pb-5 pl-15">
                    <ul>
                      <li class="font-16 text-white font-weight-600"><?php echo get_the_date(); ?></li>
                     
                    </ul>
                  </div>
                </div>
                <div class="entry-content p-15 pt-10 pb-10">
                  <div class="entry-meta media no-bg no-border mt-0 mb-10">
                    <div class="media-body pl-0">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
 
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-user mr-5 text-theme-colored"></i><?php the_author(); ?></span>
                      </div>
                    </div>
                  </div>
                  <p class="mt-5"><?php echo get_the_excerpt(); ?><a class="text-theme-colored font-12 ml-5" href="<?php echo get_the_permalink(); ?>"> View Details</a></p>
                </div>
              </article>
			</div>
			<?php endwhile; wp_reset_query(); ?>
          

            
          </div>
        </div>
      </div>
    </section>


		



	
		
		

		


<?php get_footer(); ?>
