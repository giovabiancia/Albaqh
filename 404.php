<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<style media="screen">

</style>

<main class="" role="main" itemscope itemtype="http://schema.org/LocalBusiness">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="errore404">
               <div class="testo">
                  <h2>OOPS!</h2>
                  <!-- < ?php if(ICL_LANGUAGE_CODE=='it'): ?> -->
                  <h3>Pagina<br>non trovata</h3>
                  <!-- < ?php elseif(ICL_LANGUAGE_CODE=='en'): ?><h3>Page<br>not found</h3> -->
                  <!-- < ?php endif ?> -->
                  <!-- < ?php get_search_form(); ?> -->
                  <div class="riga-bottone">
      					<!-- < ?php if(ICL_LANGUAGE_CODE=='it'): ?> -->
                        <a href="<?php echo get_option('home');?>" class="bottone" title="<?php echo get_the_title(); ?>">torna alla home</a>
      					<!-- < ?php elseif(ICL_LANGUAGE_CODE=='en'): ?><a href="< ?php echo get_option('home');?>" class="bottone" title="< ?php echo get_the_title(); ?>">Go back to home</a> -->
      					<!-- < ?php endif; ?> -->
      				</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<?php get_footer(); ?>
