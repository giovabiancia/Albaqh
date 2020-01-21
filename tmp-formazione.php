<?php
/*
Template Name: Formazione
*/
get_header();
?>

<style media="screen">
</style>


  <div class="slide slide-standard" style="background-image:url(<?php echo the_post_thumbnail_url( full );?>)">
    <div class="h100 container">
      <div class="row h100">
        <div class="align-items-center d-flex col-12 h100">
          <h2 class="h2-red"><?php echo get_the_title();?></h2>
        </div>
      </div>
    </div>
  </div>

<main id="main" class="main tmp-formazione">
  <div class="container">
    <div class="row">
    <?php
      // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array('post_type' => 'formazione', 'posts_per_page' => 6, 'orderby' => 'date', 'order' => 'ASC', 'paged' => 1);
      $my_posts = new WP_Query( $args );
    ?>
    <?php $key = 0; if ( $my_posts->have_posts() ) : while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>

      <div class="contenitore-anteprima-news col-lg-6 col-md-6 col-xl-4 checkAnim zoomIn">
        <div class="img-preview" style="background-image:url(<?php the_post_thumbnail_url( full ); ?>)"></div>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a class="bottone btn-black" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">leggi tutto</a>
      </div>
    <?php endwhile; endif; wp_reset_postdata();?>
    </div>
    <div class="row">
      <div class="col">
        <div class="paginator">
        	<?php wp_pagenavi( array( 'query' => $my_posts ) ); ?>
        </div>
      </div>
    </div>
  </div>

</main><!-- .site-main -->
<div class="row bg-red donazioni">
  <div class="container">
    <div class="col checkAnim from-bottom">
      <h2 class="h2-white">Donazioni</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua PayPall.</p>
      <a class="bottone btn-line-black" href="#">fai una donazione</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
