 <footer id="contact_us">
        <div id="footer-2">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="about-us-box mobile-collapse">
                  <div class="title-type-1 mobile-collapse-header"> About Us </div>
                  <div class="mobile-collapse-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="contact-info-box mobile-collapse">
                  <div class="title-type-1 mobile-collapse-header"> Contact Info </div>
                  <ul class="list-unstyled mobile-collapse-body">
                    <li><span><i class="icon-pointer"></i></span><span>Damascus, Mashrou Dummar</span></li>
                    <li><span><i class="icon-screen-smartphone"></i></span><span> +123-456-789</span></li>
                    <li><a href="mailto:your@email.com"><span><i class="icon-envelope "></i></span><span>info@alaghabaniamal.com</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="product-tags-box mobile-collapse">
                  <div class="title-type-2 mobile-collapse-header"> Product Tags </div>
                  <?php

$taxonomy = 'products_categories';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy


?>
                  <div class="tags mobile-collapse-body"> <?php foreach ( $terms as $term ) { ?><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a><?php } ?>
                 
                  
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- footer-2 end --> 
        <!-- footer-3 begin --> 
        
        <!-- footer-5 begin -->
        <div id="footer-5">
          <div class="container">
            <p class="copyright"> © 2017. All right reseved. Made with <i class="icon_heart"></i> by <a href="http://jemnou.com">Jemnou</a> </p>
          </div>
        </div>
        <!-- footer-5 end --> 
        
      </footer>
    </div>
  </div>
</div>
<!-- boxed-layout --> 

<!-- common modals begin --> 

<!-- JS Libs -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr-2.6.2.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.11.0.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-ui-1.10.4.custom.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-accessibleMegaMenu.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.validationEngine.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.validationEngine-en.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/plugins/responsiveslides/responsiveslides.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/plugins.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>

</body>
</html>