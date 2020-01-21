<?php
/*
Template Name: Progetti
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

<main id="main" class="main">
  <div class="container">
    <div class="row">
      <div class="menu col-12">
        <?php echo do_shortcode( '[searchandfilter id="119"]' ); ?>
      </div>
    </div>
        <?php echo do_shortcode( '[searchandfilter id="119" show="results"]' ); ?>
  </div>

  <div class="lavorato-per">
    <div class="row">
      <div class="col">
        <h3>Abbiamo lavorato per</h3>
      </div>
    </div>
    <div class="row d-flex justify-content-start align-items-center">
      <?php if( have_rows('partner') ): ?>
       <?php while( have_rows('partner') ): the_row();
         $img = get_sub_field('img');
       ?>
       <div class="col checkAnim fade">
         <div style="background-image:url(<?php echo $img ?>)" class="img-partner"></div>
       </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
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

<?php get_footer(); ?>
<!-- footer -->





<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
      // modificare l' url con una variabile a seconda del progetto e della categoria
      // ottenere la variabìle da click event su filtro

      url: "http://localhost:8888/culturarepublic/wp-json/wp/v2/progetti",
      type: 'GET',
      success: function(dati) {

        dati.forEach((element, index, array) => {
            console.log(element.content.rendered); // 100, 200, 300
            console.log(index); // 0, 1, 2
            console.log(array); // same myArray object 3 times
        });

      }




})
})

</script> -->
