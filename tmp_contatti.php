<?php
/*
Template Name: Contatti
*/

get_header(); ?>



<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo the_post_thumbnail_url(  );?>">
      <div class="container pt-60 pb-40">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Contatti</h3>
              <ul class="breadcrumb white">
                <li><a href="index-mp-layout1.html">Home</a></li>
                <li class="active">Contatti</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-0">
        <div class="row mb-60 bg-deep">
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center pt-60 pb-60 border-right">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
			  <h4>Chiamaci</h4>
			<ul>
				<li>
					<a href="tel:+393356549873">Filippo: 335-6549873</a>
				

				</li>
				<li>
				<a href="tel:+393385704415">Paola: 338-5704415</a>
				</li>
				<li>
				<a href="tel:+393347529938">Giovanni: 334-7529938</a>	

				</li>
				<li>
				<a href="tel:+393333585798">Michele: 333-3585798</a>	
				
				

				</li>
			</ul>
        
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center  pt-60 pb-60 border-right">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
			  <h4>Indirizzo</h4>
			  
              <h6 class="text-gray">Strada Radi-Ville di Corsano 3309/f
53014 Monteroni d'Arbia</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center  pt-60 pb-60">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
              <h4>Email</h4>
              <a class="text-gray" href="mailto:info@albaqh.com">info@albaqh.com</a>
            </div>
          </div>
        </div>
        <div class="row pt-10">
          <div class="col-md-5">
          <h4 class="mt-0 mb-30 line-bottom">Dove siamo</h4>
          <!-- Google Map HTML Codes -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13831.779934587112!2d11.33612144709048!3d43.21423896878255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1329801cdf6dc99b%3A0x2309388f0c6c2a99!2sStr.%20Radi%20Ville%20di%20Corsano%2C%203309E%2C%2053014%20Monteroni%20D&#39;arbia%20SI!5e0!3m2!1sit!2sit!4v1588170073663!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <div class="map-popupstring hidden" id="popupstring1">
            <div class="text-center">
              <h3>Strada Radi-Ville di Corsano 3309/f
53014 Monteroni d'Arbia</h3>
              
            </div>
          </div>
          <!-- Google Map Javascript Codes -->
          <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
          <script src="<?php echo get_template_directory_uri();?>/assets/js/google-map-init.js"></script>
          </div>
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom">Interested in discussing?</h4>
			<!-- Contact Form -->
		<!-- 	 < ?php echo do_shortcode( '[contact-form-7 id="82" title="Contact form 1"]' ); ?>	  -->
            <form id="contact_form" name="contact_form" class="" action="<?php echo get_template_directory_uri();?>/assets/includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form> 

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
      </div>
    </section>
    </section>

<?php get_footer(); ?>

 <script defer src="http://maps.google.it/maps/api/js?key=AIzaSyCHpG8Bb08YrHItVBd_OY7HlVXhe2WD0E0&language=it&libraries=places" type="text/javascript"></script>
<script defer src="<?php echo get_template_directory_uri();?>/assets/js/CustomGoogleMapMarker.js" type="text/javascript"></script>
