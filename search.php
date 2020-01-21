<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php // Get number of results
   $results_count = $wp_query->found_posts;
?>

<div class="search-page">

   <div class="jumbotron">
      <div class="container">
         <div class="row">
               <div class="col-md-8 col-md-offset-2">
                 <h3>Risultati per <span class="keyword">&ldquo;<?php the_search_query(); ?>&rdquo;</span></h3>
                 <h4><span class="label label-success"><?php echo $results_count . __(' Prodotti:'); ?></span></h4>
               </div>
         </div>
      </div>
   </div> <!-- .container -->


<div class="container" id="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <?php while (have_posts()) : the_post(); ?>
                  <div class="riga-search">
                   <article <?php post_class(); ?>>
                       <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                       <div class="entry">
                           <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                       </div>
                   </article>
                   <a class="icon-search" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                      <img class="img-icon-search" src="<?php echo get_template_directory_uri();?>/img/icon-search.svg" alt="<?php the_title(); ?>">
                   </a>
                  </div>
                <?php endwhile; ?>
        </div>
      </div>


    <?php
        $search_term = explode( ' ', get_search_query( false ) );
          global $wpdb;
          $select = "
          SELECT DISTINCT t.*, tt.*
          FROM wp_terms AS t
          INNER JOIN wp_term_taxonomy AS tt
          ON t.term_id = tt.term_id
          WHERE tt.taxonomy IN ('category')";
          $first = true;
          foreach ( $search_term as $s ){
              if ( $first ){
                  $select .= " AND (t.name LIKE '%s')";
                  $string_replace[] = '%'.$wpdb->esc_like( $s ).'%';
                  $first = false;
              }else{
                  $select .= " OR (t.name LIKE '%s')";
                  $string_replace[] = '%'. $wpdb->esc_like( $s ).'%';
              }
          }
          $select .= " ORDER BY t.name ASC";
          $terms = $wpdb->get_results( $wpdb->prepare( $select, $string_replace ) );
          $number_of_cat = count($terms);
          echo '<div class="row">';
            echo '<div class="col-md-8 col-md-offset-2">';
                  echo '<h4>'.$number_of_cat.' categorie:</h4>';
                       foreach ( $terms as $term ) {
                           echo '<div class="riga-search">';
                              echo '<h2><a href="'.esc_url( get_term_link( $term ) ).'" title="'.esc_attr( $term->name ).'">' . esc_html( $term->name ) . '</a></h2>';
                              echo '<a class="icon-search" href="'.esc_url( get_term_link( $term ) ).'" title="'.esc_attr( $term->name ).'">';
                                 echo '<img class="img-icon-search" src="'.get_template_directory_uri().'/img/icon-search.svg" alt="'.esc_attr( $term->name ).'">';
                              echo '</a>';
                           echo '</div>';
                       }
            echo '</div>';
         echo '</div>';
     ?>

</div><!-- .container -->
</div>

<?php get_footer(); ?>
