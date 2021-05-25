<?php
/*
Template Name: Chi siamo
*/
get_header();
?>

<style>
  .grab{
    cursor:grab;
  }
  .text-gray{
    cursor:pointer;
  }
</style>


    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo the_post_thumbnail_url(  );?>">
      <div class="container pt-90 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">About</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">About</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white-f7">
  <div class="container pb-0">
    <div class="section-title">
      <div class="row">
        <div class="col-md-12">
      
	<?php if( have_rows('introduzione') ): ?>
    <?php while( have_rows('introduzione') ): the_row(); 

        // Get sub field values.
        $titolo = get_sub_field('titolo');
        $sottotitolo = get_sub_field('sottotitolo');
   

		?>

          
          <h2 class="title"><?php echo $titolo ?></h2>
          <p><?php echo $sottotitolo ?></p>
          <?php endwhile; ?>
<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Section: About -->
    <section class="layer-overlay overlay-white-9" data-bg-img="http://placehold.it/1500x996">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase mt-0 text-theme-colored">La famiglia</em></h2>
            </div>
          </div>
          <div class="row mt-40">
          <?php if( have_rows('famiglia') ): ?>
            <?php while( have_rows('famiglia') ): the_row(); 

                // Get sub field values.
                $nome = get_sub_field('nome');
                $cognome = get_sub_field('cognome');
                $ruolo = get_sub_field('ruolo');
                $image = get_sub_field('image');
          

            ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <img src="<?php echo $image ?>" alt="">
              <h3><?php echo $nome ?> <?php echo $cognome ?></h3>
              <p><?php echo $ruolo ?></p>
             
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-dark-4" data-bg-img="http://placehold.it/1500x996" data-parallax-ratio="0.7">
      <div class="container pt-70 pb-70">
        <div class="row">
          
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-drawer mt-5 text-theme-colored"></i>
              <h2 data-animation-duration="2000" data-value="754" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase">Outdor Arenas</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-users mt-5 text-theme-colored"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase">Happy Clients</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-like2 mt-5 text-theme-colored"></i>
              <h2 data-animation-duration="2000" data-value="1248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase">People Likes</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-cup mt-5 text-theme-colored"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase">Awards Won</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
   
     <!-- Section: Trainers -->
     <section class="bg-lighter">
      <div class="container">
        <div class="section-content">
        <div class="row">
            <div class="col-md-12 mb-2">
              <h2 class=" text-center text-uppercase mt-0 text-theme-colored">Il team</h2></h2>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-12 grab">
              <div class="owl-carousel-4col">
              <?php while( have_rows('team') ): the_row(); 

              // Get sub field values.
              $nome = get_sub_field('nome');
              $descrizione = get_sub_field('descrizione');
              $ruolo = get_sub_field('ruolo');
              $image = get_sub_field('image');


              ?>
                <div class="item">
                  <div class="team-block maxwidth500 mb-sm-30">
                    <div class="team-upper-block">
                      <img class="img-fullwidth" src="<?php echo $image ?>" alt="">
                      <ul class="styled-icons icon-bordered icon-circled icon-theme-colored border-top-theme-colored-4px pt-5">
                        <li><h4><?php echo $ruolo ?></h4></li>
                        
                      </ul>
                    </div>
                    
                    <div class="team-lower-block">
                      <h3><a href="#"><?php echo $nome ?></a></h3>
                      <p><?php echo $descrizione ?></p>
                    
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
         
              <!--  -->
    
                
                
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="divider layer-overlay overlay-white-8"  style="background-colo: lightgray;">
      <div class="container">
      
        <?php while( have_rows('servizi') ): the_row(); 

// Get sub field values.
            $titolo = get_sub_field('titolo');
            $sottotitolo = get_sub_field('sottotitolo');

            $image = get_sub_field('image');


            ?>
              <div class="row">
          <div class="col-md-6">
            <h3 class="text-black-333 font-28 mt-0"><?php echo $titolo ?> </h3>
            <p> <?php echo $sottotitolo ?></p>
          <!--   <a class="btn btn-theme-colored btn-circled btn-lg mt-20" href="#">Scopri di più</a> -->
          </div>
          
          <div class="col-md-6">
            <div class="fluid-video-wrapper">
              <div class="fluid-width-video-wrapper" ><img src="<?php echo $image ?>" alt=""></div>
            </div>
          </div>
          </div>
          <?php endwhile; ?>
          <?php while( have_rows('servizi2') ): the_row(); 

// Get sub field values.
            $titolo = get_sub_field('titolo');
            $sottotitolo = get_sub_field('sottotitolo');

            $image = get_sub_field('image');


            ?>
          <div class="row mt-4">
         
          
          <div class="col-md-6">
            <div class="fluid-video-wrapper">
              <div class="fluid-width-video-wrapper" ><img src="<?php echo $image ?>" alt=""></div>
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="text-black-333 font-28 mt-0"><?php echo $titolo ?> </h3>
            <p> <?php echo $sottotitolo ?></p>
          <!--   <a class="btn btn-theme-colored btn-circled btn-lg mt-20" href="#">Scopri di più</a> -->
          </div>
          </div>
          <?php endwhile; ?>
       
      </div>
    </section>
    


    
   


<?php get_footer(); ?>
<!-- footer -->
