<?php
/*
Template Name: Chi siamo
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

<main class="main">
  <div class="container-fluid">
    <div class="row">
      <?php if( have_rows('box') ): ?>
       <?php while( have_rows('box') ): the_row();
         $box = get_sub_field('box');
       ?>
         <div class="checkAnim d-flex box-chi-siamo col-md-6">
           <div class="">
             <?php echo $box ?>
           </div>
         </div>
       <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="bg-gray team">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Team</h2>
        </div>
      </div>
      <div class="row">
        <?php if( have_rows('staff') ): ?>
        	<?php while( have_rows('staff') ): the_row();
        		$group = get_sub_field('staff');
        	?>
           <div style="" class="col-lg-6 col-md-6 col-xl-4 hover-effect checkAnim zoomIn">
             <div style="background-image:url('<?php echo $group['img']; ?>')" class="img-staff" title="<?php echo $group['nome']; ?>">
                 <a href="<?php echo $group['linkedin']; ?>">
                 </a>
                 <div class="bottone-plus">
                   <div class="linkedin-logo">
                     <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      	 viewBox="0 0 430.1 430.1" style="enable-background:new 0 0 430.1 430.1;" xml:space="preserve"
                      	>
                      <style type="text/css">
                      	.st0{fill:#FFFFFF;}
                      </style>
                      <g>
                      	<path id="LinkedIn" class="st0" d="M430.1,261.5v159h-92.2V272.2c0-37.3-13.3-62.7-46.7-62.7c-25.5,0-40.6,17.1-47.3,33.7
                      		c-2.4,5.9-3.1,14.2-3.1,22.5v154.9h-92.2c0,0,1.2-251.3,0-277.3h92.2v39.3c-0.2,0.3-0.4,0.6-0.6,0.9h0.6v-0.9
                      		c12.3-18.9,34.1-45.8,83.1-45.8C384.6,136.7,430.1,176.4,430.1,261.5z M52.2,9.6C20.6,9.6,0,30.3,0,57.5c0,26.6,20,47.9,51,47.9
                      		h0.6c32.2,0,52.2-21.3,52.2-47.9C103.1,30.3,83.7,9.6,52.2,9.6z M5.5,420.6h92.2V143.2H5.5V420.6z"/>
                      </g>
                      </svg>
                   </div>
                   <svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
                   <rect x="13.5" fill="#FFFFFF" width="3" height="30"/>
                   <rect x="13.5" y="0" transform="matrix(-1.836970e-16 1 -1 -1.836970e-16 30 4.583001e-13)" fill="#FFFFFF" width="3" height="30"/>
                   </svg>
                 </div>
             </div>
             <h3><?php echo $group['nome']; ?></h3>
             <p><?php echo $group['ruolo']; ?></p>
             <a class="email-info" href="mailto:<?php echo $group['email']; ?>" title="email"><?php echo $group['email']; ?></a>
           </div>
        	<?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- <div class="sostenitori">
    <h3>i nostri sostenitori</h3>
    <div class="container">
        <div class="row">
          <div class="col">
            < ?php if( have_rows('sostenitori') ): ?>
             < ?php while( have_rows('sostenitori') ): the_row();
               $nome = get_sub_field('nome');
               $link = get_sub_field('link');
             ?>
              <a title="< ?php echo $nome ?>" href="< ?php echo $link ?>">< ?php echo $nome ?></a>
             < ?php endwhile; ?>
            < ?php endif; ?>
          </div>
        </div>
    </div>
  </div> -->

  <div class="row bg-red donazioni">
    <div class="container">
      <div class="col checkAnim from-bottom">
        <h2 class="h2-white">Donazioni</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua PayPall.</p>
        <a class="bottone btn-line-black" href="#">fai una donazione</a>
      </div>
    </div>
  </div>

</main>



<? get_footer(); ?>
<!-- footer -->
