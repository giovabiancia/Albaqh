<!-- classic loop custom post ------------------------------------------------>


<?php
$custom_query_args = array('post_type' => 'destination', 'posts_per_page' => -1, 'orderby' => 'menu_order','order' => 'ASC',);
$custom_query = new WP_Query( $custom_query_args );
?>

<?php $key = 0; if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

<div class="tour_list_wrapper floatleft partner-<?php the_ID(); ?> filter-<?php global $post; echo $post->post_name; ?>">
<div>
  <a class="tour_image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
</div>

<div class="two_third last">
  <a class="tour_link" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
  <div class="tour_list_excerpt"><?php the_excerpt();?></div>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>
</div>


<!-- post-thumbnail ------------------------------------------------>

<div style="background-image:url(<?php the_post_thumbnail_url( full ); ?>)" class="img-chi-siamo">


<!-- CFP ripetitor ------------------------------------------------>

   <?php if( have_rows('slider') ): ?>
   	<?php while( have_rows('slider') ): the_row();
   		$img = get_sub_field('immagine');
   		$titolo = get_sub_field('titolo');
   		$sottotitolo = get_sub_field('sottotitolo');
   	?>
      <div style="background-image:url(<?php echo $img ?>)" class="swiper-slide">
            <div class="col-md-8 testo">
               <h2><?php echo $titolo ?></h2>
               <p style="width:80%"><?php echo $sottotitolo ?></p>
            </div>
      </div>
   	<?php endwhile; ?>
   <?php endif; ?>


<!-- CFP classic ------------------------------------------------>

<div class="lista-informazioni">
	<?php if (get_field('citta')): ?>
		<h4 class="citta"><?php the_field('citta'); ?></h4>
	<?php endif; ?>
		<p>Prezzo:</p>
	<?php if(get_field('prezzo')){ ?>
		<p class="prezzo"><?php the_field('prezzo'); ?> €</p>
	<?php } else { ?>
		<p class="prezzo tr">Trattativa riservata</p>
	<?php } ?>
	<?php if (get_field('codice')): ?>
		<p class="code">ID. <?php the_field('codice'); ?></p>
	<?php endif; ?>
	<?php if (get_field('superficie_abitabile')): ?>
		<div class="icon-surface"></div>
		<p>Surface</p>
		<p class="surface"><strong><?php the_field('superficie_abitabile'); ?></strong> m<sup>2</sup></p>
	<?php endif; ?>
	<?php if (get_field('superficie_terreno')): ?>
		<div class="icon-land"></div>
		<p>Land</p>
		<p class="land"><strong><?php the_field('superficie_terreno'); ?></strong> m<sup>2</sup></p>
	<?php endif; ?>
</div>

<!-- VIEW NAME OF CATEGORY --------------------------------------->
<h3>
  <?php
  $category = get_the_category( $post->ID );
  echo $category[0]->cat_name;?>
</h3>

<!-- CATEGORY ------------>
<!-- img category plugin ------------------------------------------------>
   <?php echo z_taxonomy_image_url($cat->term_id); ?>

<!-- lista di categoria con immagine (con plugin per assegnare immagine alla categoria) -->
<!-- da considerare che $cats serve per sovrascrivere i parametri della categoria  -->
<?php
   $cats = get_categories( array(
       'orderby' => 'ID',
       'parent' => 0
    ));

    foreach ($cats as $cat) : ?>
    <?php $i == 1; ?>
    <div class="col-md-3 contenitore-cat aos-item aos-init aos-animate" data-aos="fade-up" data-aos-offset="50" data-aos-delay="<?php echo $i;?>00" data-aos-duration="500">
       <a href="<?php echo get_category_link($cat->term_id); ?>"></a>
       <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
       <h3><?php echo $cat->cat_name; ?></h3>
    </div>
    <?php $i++; ?>
    <?php endforeach; ?>

<!-- ciclo categorie prime 3 righe sovrascivono categories con con le sottocategorie-->
<?php

	$current_cat = get_queried_object();
	$args = array( 'child_of' => $current_cat->term_id, );
	$categories = get_categories($args);

	foreach ($categories as $category) {
		$namecategory = $category->name;
		$stringaname = str_replace(" ", "-", $namecategory);
		$stringaname = strtolower($stringaname);
		$categoryLink = get_category_link( $category->term_id );
		echo '<div class="swiper-slide">';
		echo '<p><a href="#' . $stringaname . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name .'</a> </p> ';
		echo '</div>';
	}
?>


<!-- stampare nome della categoria e immagine nella pagina del prodotto se si utilizza plugin per img category  -->

<?php	foreach (get_the_category() as $category) : ?>
		 <h2> <?php echo $category->cat_name . ' '; ?> </h2>
		 <img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" />
<?php endforeach; ?>


<!---mobile detect -->
<?php
  $mobile= '';
  $useragent=$_SERVER['HTTP_USER_AGENT'];
  if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
  $mobile= 'mobile';
  ?>

  <?php if ($mobile) :?>
     ...
  <?php else :?>
     ...
  <?php endif; ?>

  <?php if (!($mobile)) :?>
     ...
  <?php else :?>
     ...
  <?php endif; ?>


  <!-- tag video html5 -->

  <video id="video-arkell" autoplay loop muted playsinline>
    <source type="video/mp4" src="<?php echo get_template_directory_uri();?>/img/Popup.mp4" />
    <source type="video/ogg" src="<?php echo get_template_directory_uri();?>/img/Popup.ogv" />
	</video>
