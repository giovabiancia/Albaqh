<?php


/**
 * Add scripts and styles
 */


function scriptsSystem() {

	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js', array( 'jquery' ), '3.2.1', true  );
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/js/swiper.min.js' );
	// wp_enqueue_script( 'filter-blog', get_stylesheet_directory_uri() . '/js/filter-blog.js' );
	// wp_enqueue_script( 'lightbox', get_stylesheet_directory_uri() . '/js/ekko-lightbox.min.js' );
	// wp_enqueue_script( 'jquery-lazy', get_stylesheet_directory_uri() . '/js/jquery.lazy.min.js' );
	wp_enqueue_script( 'cookies', get_stylesheet_directory_uri() . '/js/cookies-enabler.js' );
	wp_enqueue_script( 'init', get_stylesheet_directory_uri() . '/js/init.js' );


}

add_action( 'wp_enqueue_scripts', 'scriptsSystem' );
add_action( 'wp_enqueue_scripts', 'my_style' );
function my_style(){
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:900,700,600|Space+Mono:700&display=swap" rel="stylesheet', false );
	wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/css/style.min.css' );
	// wp_enqueue_style( 'lightboxcss', get_stylesheet_directory_uri() . '/css/ekko-lightbox.css' );
	// wp_enqueue_style( 'font-homleg', get_stylesheet_directory_uri() . '/css/font-nomecustom.css' );
}

function add_defer_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_defer = array('bootstrap', 'cookies', 'init', 'swiper');

   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer="defer" src', $tag);
      }
   }
   return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

//Immagine di copertina per templates

add_theme_support( 'post-thumbnails' );

add_theme_support( 'title-tag' );


//sostituisce il logo wp nella login con il mio

function custom_login_logo() {
echo '<style type="text/css">
	h1 a{
		background-image: url(' . get_stylesheet_directory_uri() . '/img/logo.png)!important;
		width: 180px!important;
		height: 120px!important;
		background-size: contain!important;
		background-position:center!important;
		margin:0 auto!important;
	}
</style>';
}
add_action('login_head', 'custom_login_logo');

/** BOOTSTRAP MENU *********************************************************************************/
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

/** NAVWALKER *********************************************************************************/
require_once('wp_bootstrap_navwalker.php');

/** SET EXCERPT WORDS LENGHT *********************************************************************************/

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// CF7 *******************************************************************

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


/*NASCONDERE INFO WORDPRESS IN HEAD---------------*/

add_action('init', 'sam_remove_header_info');
function sam_remove_header_info(){
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'start_post_rel_link');
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head',10,0);
}

/** DISABILITARE XML-RPC------------------*/

add_filter( 'xmlrpc_enabled', '__return_false' );

/*----DISABILITARE L'EDIT DA BACKEND-----------*/

define('DISALLOW_FILE_EDIT', true);

/*----NASCONDERE IL NOME DELL'UTENTE ADMIN------------------*/

add_action('template_redirect', 'bwp_template_redirect');
	function bwp_template_redirect()
	{
	 if (is_author())
	{
	 wp_redirect( home_url() ); exit;
	}
}


//PER TOGLIERE GLI SPAN DELLA PRIVACY ACCEPTANCE DI CONTACTOFORM/

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-list-item(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});


// SEARCH FORM ***************************************

function wpbsearchform( $form ) {

    $form = '<form class="search" role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" ><span></span>
    <div>
	 <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search..."/>
    <button type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'">&#128270</button>

    </div>
    </form>';

    return $form;
}

add_shortcode('wpbsearch', 'wpbsearchform');

// SVG ON MEDIA ************************************************

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// WP-HEAD - - - WP-FOOTER ****************************************************************
function remove_head_scripts() {
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_styles', 8);
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('wp_head', '_wp_render_title_tag', 1 );
	add_action('wp_footer', 'wp_enqueue_scripts', 5);
	add_action('wp_footer', 'wp_print_head_scripts', 5);
}

/** BREADCRUMBS *********************************************************************************/

// function create_breadcrumbs() {
//
//   $delimiter = '>';
//   $home = 'Home';
//   $before = '<span class="current">';
//   $after = '</span>';
//
//   if ( !is_home() && !is_front_page() || is_paged() ) {
//
//     echo '<div id="breadcrumbs">';
//
//     global $post;
//     $homeLink = get_bloginfo('url');
//     echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
//
//     if ( is_category() ) {
//       global $wp_query;
//       $cat_obj = $wp_query->get_queried_object();
//       $thisCat = $cat_obj->term_id;
//       $thisCat = get_category($thisCat);
//       $parentCat = get_category($thisCat->parent);
//       if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
//       echo $before . single_cat_title('', false) . $after;
//
//     } elseif ( is_day() ) {
//       echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
//       echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
//       echo $before . get_the_time('d') . $after;
//
//     } elseif ( is_month() ) {
//       echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
//       echo $before . get_the_time('F') . $after;
//
//     } elseif ( is_year() ) {
//       echo $before . get_the_time('Y') . $after;
//
//     } elseif ( is_single() && !is_attachment() ) {
//       if ( get_post_type() != 'post' ) {
//         $post_type = get_post_type_object(get_post_type());
//         $slug = $post_type->rewrite;
//         echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
//         echo $before . get_the_title() . $after;
//       } else {
//         $cat = get_the_category(); $cat = $cat[0];
//         echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
//         echo $before . get_the_title() . $after;
//
//       }
//
//     } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
//       $post_type = get_post_type_object(get_post_type());
//       echo $before . $post_type->labels->singular_name . $after;
//
//     } elseif ( is_attachment() ) {
//       $parent = get_post($post->post_parent);
//       $cat = get_the_category($parent->ID); $cat = $cat[0];
//       echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
//       echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
//       echo $before . get_the_title() . $after;
//
//     } elseif ( is_page() && !$post->post_parent ) {
//       echo $before . get_the_title() . $after;
//
//     } elseif ( is_page() && $post->post_parent ) {
//       $parent_id  = $post->post_parent;
//       $breadcrumbs = array();
//       while ($parent_id) {
//         $page = get_page($parent_id);
//         $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
//         $parent_id  = $page->post_parent;
//       }
//       $breadcrumbs = array_reverse($breadcrumbs);
//       foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
//       echo $before . get_the_title() . $after;
//
//     } elseif ( is_search() ) {
//       echo $before . get_search_query() . $after;
//
//     } elseif ( is_tag() ) {
//       echo $before . single_tag_title('', false) . $after;
//
//     } elseif ( is_author() ) {
//        global $author;
//       $userdata = get_userdata($author);
//       echo $before . $userdata->display_name . $after;
//
//     } elseif ( is_404() ) {
//       echo $before . 'Error 404' . $after;
//     }
//
//     if ( get_query_var('paged') ) {
//       if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
//       echo __('Page') . ' ' . get_query_var('paged');
//       if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
//     }
//
//     echo '</div>';
//
//   }
// }

/** CF7 INSERISCE RIGA VUOTA MENU A CASCATA *********************************************************************************/

// function my_wpcf7_form_elements($html) {
//     $text = '';
//     $html = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $html);
//     return $html;
// }
// add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');


function wpmu_register_widgets() {
		
}
add_action( 'widgets_init', 'wpmu_register_widgets' );

if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'PostFilter'),
   'id' => 'woocart',
   'description' => __( 'Sidebar filtri ricerca shop' ),
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => "</div>",
   'before_title' => '<h4 class="widget-title">',
   'after_title' => '</h4>',
   ) );

if ( function_exists('register_sidebar') )
   register_sidebar( array(
  'name' => __( 'ShareButton'),
  'id' => 'sharebutton',
  'description' => __( 'Sidebar filtri ricerca shop' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => "</div>",
  'before_title' => '<h4 class="widget-title">',
  'after_title' => '</h4>',
  ) );

