<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
  class="no-js" itemscope itemtype="http://schema.org/Restaurant">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <meta name="google" content="AlbaQh" />
    <meta name="author" content="Albaqh" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta property="og:url" content="www.Albaqh.com" />
    <meta name="twitter:site" content="www.Albaqh.com" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="msapplication-TileColor" content="#fa7070" />
    <meta name="theme-color" content="#fa7070" />

    <!-- Favicon and Touch Icons -->
    <link
      href="<?php echo get_template_directory_uri();?>/assets/images/favicon.png"
      rel="shortcut icon"
      type="image/png"
    />
    <link
      href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon.png"
      rel="apple-touch-icon"
    />
    <link
      href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-72x72.png"
      rel="apple-touch-icon"
      sizes="72x72"
    />
    <link
      href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-114x114.png"
      rel="apple-touch-icon"
      sizes="114x114"
    />
    <link
      href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-144x144.png"
      rel="apple-touch-icon"
      sizes="144x144"
    />

    <!-- Stylesheet -->
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/jquery-ui.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/animate.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/css-plugin-collections.css"
      rel="stylesheet"
    />
    <!-- CSS | menuzord megamenu skins -->
    <link
      id="menuzord-menu-skins"
      href="<?php echo get_template_directory_uri();?>/assets/css/menuzord-skins/menuzord-rounded-boxed.css"
      rel="stylesheet"
    />
    <!-- CSS | Main style file -->
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/style-main.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- CSS | Preloader Styles -->
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/preloader.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- CSS | Custom Margin Padding Collection -->
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/custom-bootstrap-margin-padding.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- CSS | Responsive media queries -->
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- Latest compiled and minified CSS -->
   
    <style>
  .mt-5{
    margin-top: 5rem
  }
  .mt-4{  
    margin-top: 4rem

  }
  .mt-3{  
    margin-top: 3rem

  }
  .mt-2{  
    margin-top: 2rem

  }
  .mb-5{
    margin-bottom: 5rem
  }
  .mb-4{  
    margin-bottom: 4rem

  }
  .mb-3{  
    margin-bottom: 3rem

  }
  .mb-2{  
    margin-bottom: 2rem

  }
  #menu-item-18{
    display:inline-block !important;
  }
  
@media (max-width: 768px) { 
  .mens{
    display:none;
    
  }
  .header-top{
    display:none;

  }
  .menuzord .showhide{
    padding-top:40px !important;
  }
 }
 @media (min-width: 768px) { 
   .logoR{
     display:none;
   }
  
 }
 .owl-carousel .owl-item img {
   max-height: 350px;
   object-fit:cover;
 }
.cavRow {
  display:flex;
  align-items: center;
}
</style>

    <!-- CSS | Theme Color -->
    <link
      href="<?php echo get_template_directory_uri();?>/assets/css/colors/theme-skin-yellow.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- external javascripts -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-plugin-collection.js"></script>
 
  </head>
  <body class="">
    <div id="wrapper" class="clearfix">
      <!-- preloader -->
     <!--  <div id="preloader">
        <div id="spinner" class="spinner large-icon">
          <img alt="" src="<?php echo get_template_directory_uri();?>/assets/images/preloaders/13.gif" />
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">
          Disable Preloader
        </div>
      </div> -->
      <!-- Header -->
      <header id="header" class="header">
        <div class="header-top bg-theme-colored sm-text-center p-0">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                
              </div>
              <div class="col-md-8">
                <div
                  class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center"
                >
                  <ul
                    class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15"
                  >
                    <li>
                      <a href="https://www.facebook.com/ALBAQH/"><i class="fa fa-facebook text-white"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter text-white"></i></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-google-plus text-white"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram text-white"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin text-white"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-middle p-0 xs-text-center mens">
          <div class="container pt-0 pb-0">
            <div class="row">
              <div class="col-xs-12 col-sm-3 col-md-6 mens">
                <div class="widget no-border m-0">
                  <a
                    href="<?php echo home_url(); ?>"
                    class="menuzord-brand pull-left flip xs-pull-center mt-20 mb-10"
                    ><img
                      alt=""
                      src="<?php echo get_template_directory_uri();?>/assets/images/logoQh.png"
                  /></a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 mens">
                <div class="widget no-border m-0">
                  <div class="mt-15 mb-10 text-right flip sm-text-center">
                    <div class="font-15 text-black-333 mb-5 font-weight-600">
                    <a href="mailto:info@albaqh.com" class="  cursor">
                      <i class="fa fa-envelope text-theme-colored font-18"></i>
                     Contattaci per Email
                    </div>
                   
                     </a
                    >
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 mens">
                <div class="widget no-border m-0">
                  <div class="mt-15 mb-10 text-right flip sm-text-center">
                    <div class="font-15 text-black-333 mb-5 font-weight-600">
                      <i
                        class="fa fa-map-marker text-theme-colored font-18"
                      ></i>
                      Strada Radi-Ville di Corsano 3309/f  
                    </div>
                    <a href="#" class="font-12 text-gray">
                    53014 Monteroni d'Arbia (SI)</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 mens">
                <div class="widget no-border m-0">
                  <div class="mt-15 mb-10 text-right flip sm-text-center">
                    <div class="font-15 text-black-333 mb-5 font-weight-600">
                    <a href="tel:0577 377209" class="">
                      <i
                        class="fa fa-phone-square text-theme-colored font-18"
                      ></i>
                      0577 377209
                    </div>
                    
                     </a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-nav">
          <div class="header-nav-wrapper navbar-scrolltofixed bg-lighter">
            <div class="container">
              <nav
                id="menuzord"
                class="menuzord pull-left flip menuzord-responsive"
              >
              <a
                    href="<?php echo home_url(); ?>"
                    class="menuzord-brand pull-left flip xs-pull-center mt-20 mb-10 logoR"
                    ><img
                      alt=""
                      src="<?php echo get_template_directory_uri();?>/assets/images/logoQh.png"
                  /></a>
                    <?php
                  wp_nav_menu( array(
                    // 'theme_location'  => 'navbar',
                    'menu' 						=> 'primary',
                    'container'       => false,
                    'menu_class'      => 'menu-main',
                    'fallback_cb'     => '__return_false',
                    'items_wrap'      => '<ul id="%1$s" class="menuzord-menu">%3$s</ul>',
                    'depth'           => 2,
                    'walker'          => new wp_bootstrap_navwalker()
                  ) );
                ?>
               
                <ul class="pull-right flip hidden-sm hidden-xs">
                  <li>
                    <!-- Ajax Popup form Starts -->
                    <a
                      class="btn btn-colored btn-flat top-left-triangle bg-theme-colored text-white font-14 ajaxload-popup p-10 mt-15 pr-30 pl-15"
                      href="<?php echo get_template_directory_uri();?>/assets/ajax-load/reservation-form.html"
                      >Contattaci adesso</a
                    >
                    <!-- Ajax Popup form End -->
                  </li>
                </ul>
                <div id="top-search-bar" class="collapse">
                  <div class="container">
                    <form
                      role="search"
                      action="#"
                      class="search_form_top"
                      method="get"
                    >
                      <input
                        type="text"
                        placeholder="Type text and press Enter..."
                        name="s"
                        class="form-control"
                        autocomplete="off"
                      />
                      <span class="search-close"
                        ><i class="fa fa-search"></i
                      ></span>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <!-- Header -->
    </div>
 
