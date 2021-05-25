<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<!-- Section: inner-header -->
<style>
  .rpwwt-post-title {
    margin-left: 20px;
    font-weight:bold;

  }
 .wp-post-image{
   border-radius: 50px;
 }
</style>
<section
  class="inner-header divider parallax layer-overlay overlay-dark-5"
  data-bg-img="<?php echo the_post_thumbnail_url(  );?>"
>
  <div class="container pt-90 pb-50">
    <!-- Section Content -->
    <div class="section-content pt-100">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title text-white"><?php echo get_the_title(); ?></h3>
          <ul class="list-inline text-white">
            <li>Home /</li>
            <li><span class="text-gray">Single Post</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
<?php if (have_posts()) : while (have_posts()) : the_post(); 

$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

?>


  <div class="container mt-30 mb-30 pt-30 pb-30">
    <div class="row">
      <div class="col-md-9 blog-pull-right">
        <div class="blog-posts single-post">
          <article class="post clearfix mb-0">
            <div class="entry-header">
              <div class="post-thumb thumb">
                <img
                  src="<?php the_post_thumbnail_url(); ?>"
                  alt="post image "
                  style="max-height:400px; width:auto"
                  class="img-responsive img-fullwidth"
                />
              </div>
            </div>
            <div class="entry-title pt-10 pl-15">
              <h4>
                <a class="text-uppercase" href="#"
                  ><?php echo get_the_title(); ?>
                </a>
              </h4>
            </div>
            <div class="entry-meta pl-15">
              <ul class="list-inline">
                <li>
                  Posted:
                  <span class="text-theme-colored"
                    ><?php echo get_the_date(); ?></span
                  >
                </li>
                <li>By:
                  
                  <span class="text-theme-colored"
                    >
                    <?php echo the_author(); ?>
                  </span>
                </li>
<!--                 <li><i class="fa fa-comments-o ml-5 mr-5"></i> </li>
 -->              </ul>
            </div>
            <div class="entry-content mt-10">
           

              
              <p class="mb-15"><?php the_content(); ?></p>
              <?php endwhile; ?>
          <?php endif; ?>

          
            </div>
          </article>

          <div class="blog-share mt-3" style="margin-top:2rem">
          <?php
								if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar
								('ShareButton') ) : ?>
              <?php endif;
								?>
          </div>
          <!-- /.blog-share -->
        </div>
        <!-- /.post-wrapper -->
      </div>
      <!-- /.col-md-8 -->

      <div class="col-md-3">
        <div class="sidebar">
         
          <?php
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar
					('PostFilter') ) : ?>
          <?php endif;
					?>

          <?php 
							$tags = get_tags(array(
							'hide_empty' =>
          false )); foreach ($tags as $tag) { echo '<a>' . $tag->name . '</a>';
          } ?>
        </div>
        <!-- /.sidebar -->
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /.blog-single -->

<?php get_footer(); ?>
