<?php
/*
Template Name: Cavallo
Template Post Type: cavalli
*/

get_header(); ?>
<!-- Section: inner-header -->
<div class="main-content">

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo the_field('image') ?>">
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
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
          <a class="image-popup-vertical-fit" title="Title Here 1" href="<?php echo the_field('image') ?>"><img src="<?php echo the_field('image') ?>" alt=""></a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
          <h3><?php echo get_the_title(); ?></h3>
          <ul class="list theme-colored">
            <li>Origin : <?php echo the_field('origine') ?></li>
            <li>Age : <?php echo the_field('anni') ?></li>
            <li>Sex : <?php echo  the_field('sesso') ?></li>
            <li>Color : <?php echo the_field('colore') ?></li>
          </ul>
          <p><?php echo the_field('descrizione') ?></p>
          <a href="page-horse-details.html" class="btn btn-sm btn-theme-colored">Stampa</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3 class="line-bottom">Descrizione</h3>
          <p class="lead"><?php echo the_field('descrizione-lunga') ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <h3 class="line-bottom-no-border">Caratteristiche</h3>
          <ul class="list theme-colored">
          <?php if( have_rows('caratteristiche') ): ?>
            <?php while( have_rows('caratteristiche') ): the_row();
               ?>
            <li> <?php echo the_sub_field('caratteristica') ?> </li>

            <?php endwhile; ?>
          <?php endif; ?>



          </ul>
        </div>
        <div class="col-md-7">
          <h3 class="line-bottom-no-border">Maggiori Informazioni</h3>
          <p><?php echo the_field('maggiori-info') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end main-content -->
</div>

<?php get_footer(); ?>
