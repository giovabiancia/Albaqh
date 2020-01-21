<?php
/*
Template Name: Servizi
*/
get_header();
?>

<style media="screen">
  .donazioni{
    margin: 0!important;
  }
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

<main id="main" class="main">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="menu-servizi">
          <?php if( have_rows('servizi') ): ?>
            <?php while( have_rows('servizi') ): the_row();
            $group = get_sub_field('servizi');
            // $bodytag = str_replace("%body%", "black", "<body text='%body%'>");
            $titolo = $group['titolo'];
            $link = str_replace(" ", "-", "$titolo" );
            $link = str_replace("à", "a", "$link" );
            $link = strtolower($link);
            ?>
            <a class="bottone btn-black" href="#<?php echo $link; ?>" title="<?php echo $group['titolo']; ?>"><?php echo $group['titolo']; ?></a>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?php if( have_rows('servizi') ): ?>
      <?php while( have_rows('servizi') ): the_row();
      $group = get_sub_field('servizi');
      // $bodytag = str_replace("%body%", "black", "<body text='%body%'>");
      $titolo = $group['titolo'];
      $link = str_replace(" ", "-", "$titolo" );
      $link = str_replace("à", "a", "$link" );
      $link = strtolower($link);
      ?>
      <div id="<?php echo $link ?>" class="row row-eq-height">
        <div class="checkAnim left-to-right justify-content-center align-items-center d-flex col-lg-6 box-domande">
          <div class="">
            <h2><?php echo $group['titolo']; ?></h2>
            <div><?php echo $group['domande']; ?></div>
          </div>
        </div>
        <div class="checkAnim right-to-left justify-content-center align-items-center d-flex col-lg-6 box-risposte">
          <div class="">
            <p class="titolo-ris">Cultura REPublic risponderà alle tue domande offrendo:</p>
            <div><?php echo $group['risposte']; ?></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div style="background-image:url('<?php echo $group['img']; ?>')" class="parallax col"></div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="row bg-red donazioni">
    <div class="container">
      <div class="col checkAnim from-bottom">
        <h2 class="h2-white">Donazioni</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua PayPall.</p>
        <a class="bottone btn-line-black" href="#">fai una donazione</a>
      </div>
    </div>
  </div>

</main><!-- .site-main -->

<? get_footer(); ?>
<!-- footer -->
