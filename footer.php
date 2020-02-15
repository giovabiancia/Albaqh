<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<style>
  .immagine {
    margin:auto !important;
    width: 80% !important;
    
}
 
</style>

  <section id="gallery" class="bg-lighter">
      <div class="container-fluid pr-0 pt-30 pb-0 pl-0">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h3 class="line-bottom-center text-uppercase mb-10">I nostri <span class="text-theme-colored">Sponsor</span></h3>
              <p class="mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ipsa sed esse error delectus.</p>
            </div>
          </div>
          <div class="row">          
            <div class="col-md-12">
              <div class="owl-carousel-4col" data-nav="true">
                <div class="item">
                  <div class="gallery-block">
                    <div class="gallery-thumb">
                      <img class="immagine" width="auto" height="200px" alt="" src="<?php echo get_template_directory_uri();?>/assets/images/Logo-Esti.jpg">
                      <div class="gallery-details text-center">
                        <h3 class="line-bottom-center text-white mb-0">Arabian Horse</h3>
                        <h4 class="text-white mt-0">Jumper</h4>
                        <a href="page-horse-details.html" class="btn btn-theme-colored btn-sm mt-5">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="gallery-block">
                    <div class="gallery-thumb">
                      <img class="immagine" width="auto" height="200px" alt="" src="<?php echo get_template_directory_uri();?>/assets/images/Logo-DeNiro.jpg">
                      <div class="gallery-details text-center">
                        <h3 class="line-bottom-center text-white mb-0">Black Jack</h3>
                        <h4 class="text-white mt-0">Dressage</h4>
                        <a href="page-horse-details.html" class="btn btn-theme-colored btn-sm mt-5">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="gallery-block">
                    <div class="gallery-thumb">
                      <img width="auto" height="200px" alt="" src="<?php echo get_template_directory_uri();?>/assets/images/Logo-LaVilla.jpg">
                      <div class="gallery-details text-center">
                        <h3 class="line-bottom-center text-white mb-0">Arabian Horse</h3>
                        <h4 class="text-white mt-0">Jumper</h4>
                        <a href="page-horse-details.html" class="btn btn-theme-colored btn-sm mt-5">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="gallery-block">
                    <div class="gallery-thumb">
                      <img class="immagine" width="auto" height="200px" alt="" src="<?php echo get_template_directory_uri();?>/assets/images/Logo-Suffolk.jpg">
                      <div class="gallery-details text-center">
                        <h3 class="line-bottom-center text-white mb-0">Arabian Horse</h3>
                        <h4 class="text-white mt-0">Hunters</h4>
                        <a href="page-horse-details.html" class="btn btn-theme-colored btn-sm mt-5">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="gallery-block">
                    <div class="gallery-thumb">
                      <img class="immagine" width="auto" height="200px" alt="" src="<?php echo get_template_directory_uri();?>/assets/images/Logo-TRM.jpg">
                      <div class="gallery-details text-center">
                        <h3 class="line-bottom-center text-white mb-0">Arabian Horse</h3>
                        <h4 class="text-white mt-0">Sporthorses</h4>
                        <a href="page-horse-details.html" class="btn btn-theme-colored btn-sm mt-5">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 <!-- Footer -->
 <footer id="footer">
    <section class="divider layer-overlay overlay-dark-8" data-bg-img="">
      <div class="container pt-60 pb-30">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <img class="mt-5 mb-10" alt="" src="images/logo-wide-white.png">
              <p> </p>
              <ul class="list-inline mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              </ul>            
              <h5 class="widget-title mt-10 mb-10">Connect With Us</h5>
              <ul class="styled-icons icon-sm icon-bordered icon-theme-colored">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title line-bottom-theme-colored">Useful Links</h4>
              <ul class="list angle-double-right list-border">
                <li><a href="page-about-style1.html">About</a></li>
                <li><a href="page-membership.html">Membership</a></li>
                <li><a href="page-riding-school.html">Riding School</a></li>
                <li><a href="page-our-horses.html">Our Horses</a></li>
                <li><a href="shop-category-sidebar.html">Shop</a></li>              
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">            
              <h4 class="widget-title line-bottom-no-border">Photos from Flickr</h4>
              <div id="flickr-feed" class="clearfix mt-30">
                <!-- Flickr Link -->
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                </script>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title line-bottom-theme-colored">Opening Hours</h4>
              <div class="opening-hourse">
                <ul class="list list-border text-gray-darkgray">
                  <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Mond -Tuesday :</span>
                    <div class="value pull-right flip"> 9.00 am - 10.00 pm </div>
                  </li>
                  <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Wed - Thurs :  </span>
                    <div class="value pull-right flip"> 10.00 am - 8.00 pm </div>
                  </li>
                  <li class="clearfix"> <span class="text-theme-colored"><i class="fa fa-clock-o mr-5"></i> Friday : </span>
                    <div class="value pull-right flip text-theme-colored"> 10.00 am - 6.00 pm </div>
                  </li>
                  <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Saturday : </span>
                    <div class="value pull-right flip"> 2.00 pm - 8.00 pm </div>
                  </li>
                  <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Sunday :</span>
                    <div class="value pull-right flip"> <span class="text-highlight bg-theme-colored text-white">Colsed</span>  </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>



	

  
<!-- < ?php wp_head(); ?>
< ?php wp_footer(); ?> -->

</body>
</html>
