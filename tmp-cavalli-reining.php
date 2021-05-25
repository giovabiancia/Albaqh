<?php
/*
Template Name: Cavalli-Reining
*/
get_header();
?>
<style>
  .text-gray{
    color:white !important;
  }
</style>
<!-- Start main-content -->
<div class="main-content">

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo the_post_thumbnail_url(  );?>">
  <div class="container pt-90 pb-50">
    <!-- Section Content -->
    <div class="section-content pt-100">
      <div class="row"> 
        <div class="col-md-12">
          <h3 class="title text-white"><?php echo get_the_title(); ?></h3>
          <ul class="list-inline text-white">
            <li>Home /</li>
            <li><span class="text-gray"><?php echo get_the_title(); ?></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section: Facilities -->
<section>
  <div class="container">
    <div class="section-content">
      
      <?php
// get the currently queried taxonomy term, for use later in the template file
$term = get_queried_object();
?>
      <?php

$args = array( 'post_type' => 'cavallo', 'category_name' => 'reining-horses-for-sale');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();



   	?>
     <div class="row ">
      <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
          <a class="image-popup-vertical-fit" title="Title Here 1" href="<?php echo the_field('image') ?>"><img src="<?php echo the_field('image') ?>" alt=""></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 mb-40">

          <h3><?php echo get_the_title(); ?></h3>
          <ul class="list theme-colored">
            <li>Origin : <?php echo the_field('origine') ?></li>
            <li>Age : <?php echo the_field('anni') ?></li>
            <li>Sex : <?php echo  the_field('sesso') ?></li>
            <li>Color : <?php echo the_field('colore') ?></li>
          </ul>
          <p><?php echo the_field('descrizione') ?></p>
          <a href="<?php echo get_the_permalink(); ?>" class="btn btn-sm btn-theme-colored">Scopri di più</a>
        </div>
        </div>
 


        
  <?php endwhile; ?>
        
       
     
    </div>
  </div>
</section>
<!-- end main-content -->
</div>


<?php get_footer(); ?>
