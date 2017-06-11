<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo('title'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory'); ?>/assets/font-face/helvetica.css">
<!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css">
<!-- <link rel="stylesheet" href="plugins/accessiblemegamenu/megamenu.css"> -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/vendor/validation-engine.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/plugins/responsiveslides/responsiveslides.css">
<!-- CUSTOM & PAGES STYLE -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/custom.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/fonts/simple-line-icons.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/fonts/elegant-icons.css">
<script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr-2.6.2.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/angulars/angular.min.js"></script>
<script src="<?php if (function_exists('bloginfo')){bloginfo('template_directory');}  ?>/assets/js/angulars/app.js"></script>
<?php wp_head(); ?>
<script src="<?php if (function_exists('bloginfo')){bloginfo('template_directory');} ?>/assets/js/jquery-1.11.0.min.js"></script>
<script src="<?php if (function_exists('bloginfo')){bloginfo('template_directory');} ?>/assets/js/angulars/controllers/home.js"></script>
<script src="<?php if (function_exists('bloginfo')){bloginfo('template_directory');} ?>/assets/js/angulars/controllers/single_product.js"></script>
<script src="<?php if (function_exists('bloginfo')){bloginfo('template_directory');} ?>/assets/js/angulars/controllers/caps_category.js"></script>
<script src="<?php if (function_exists('bloginfo')){bloginfo('template_directory');} ?>/assets/js/angulars/controllers/tables_category.js"></script>
<script src="<?php if (function_exists('bloginfo')){bloginfo('template_directory');} ?>/assets/js/angulars/controllers/products_category.js"></script>
<script src="<?php if (function_exists('bloginfo')){bloginfo('template_directory');} ?>/assets/js/angulars/controllers/pillows_category.js"></script>
<script>
$(document).ready(function(){
    $("li#menu-item-93").mouseover(function(){
        $(".sub-nav").addClass('open');
    });
    $("li#menu-item-93").mouseout(function(){
        $(".sub-nav").removeClass('open');
         
        
    });
    $(".sub-nav").mouseover(function(){
        $(".sub-nav").addClass('open');
    });
    $(".sub-nav").mouseout(function(){
        $(".sub-nav").removeClass('open');
    });
});
</script>

</head>
<body style="background-color: #eeeeee; /* Demo, will have to be moved to dynamic settings.css file */" ng-app="aghabani">
<div class="boxed-layout">
  <header> 
    
    <!-- top bar begin -->
    <div id="top-bar">
      <div class="container">
        <div class="pull-left left-top-bar">
          <div id="top-contacts">
            <ul class="list-inline">
              <li class="hidden-xs"> <i class="icon-call-in"></i> <span>+ 1 (233) 456 789 999</span> </li>
              <li class="hidden-xs"> <a href="info@aghabaniamal.com"> <i class="icon-envelope"></i> <span class="hidden-xs">info@alaghabani.com</span> </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- top bar end --> 
    <!-- header bar begin -->
    <div id="header-bar">
      <div class="container">
        <div class="row">
          <div id="header-logo" class="col-md-6 col-sm-12"> <a href="<?php print home_url();?>"> <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" class="logo hidden-xs" alt=""> <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" class="logo center-block visible-xs hidden-sm" alt=""> </a> </div>
          <div class="col-md-5 top-search-box hidden-sm hidden-xs">
            <form action="/" method="post">
              <div class="required form-group">
                <input type="text" name="search_query" placeholder="Search" class="placeholder-fix top-search" autocomplete="off">
                <button><i class="icon_search field-icon"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- header bar end --> 
    <!-- main menu begin -->
    <div class="top-menu">
      <div class="container">
          <nav class="main-menu">
        <!--
          <!--<ul class="nav-menu">
            <li class="nav-item"> <a href="#"><i class="icon-screen-desktop"></i> Home</a> </li>
            <li class="nav-item"> <a href="#"><span><i class="icon-user-female"></i> categories</span></a>
              <div class="sub-nav full padding">
                <div class="row">
                  <div class="col-md-3">
                    <h3 class="sub-nav-title">table runners</h3>
                    <ul class="sub-nav-group sub-nav-grey">
                      <li><a href="#"><span>colored</span></a></li>
                      <li><a href="#"><span>black and white</span></a></li>
                      <li><a href="#"><span>something else</span></a></li>
                      <li><a href="#"><span>dummy text</span></a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h3 class="sub-nav-title">caps</h3>
                    <ul class="sub-nav-group sub-nav-grey">
                      <li><a href="#"><span>colored</span></a></li>
                      <li><a href="#"><span>black and white</span></a></li>
                      <li><a href="#"><span>something else</span></a></li>
                      <li><a href="#"><span>dummy text</span></a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h3 class="sub-nav-title">pillows</h3>
                    <ul class="sub-nav-group sub-nav-grey">
                      <li><a href="#"><span>colored</span></a></li>
                      <li><a href="#"><span>black and white</span></a></li>
                      <li><a href="#"><span>something else</span></a></li>
                      <li><a href="#"><span>dummy text</span></a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <div class="megamenu-popular box-with-pager">
                      <div class="sub-nav-title"> Popular products </div>
                      <div>
                        <ul class="vertical-bx-1">
                          <li> <a href="product-page.html">
                            <figure> <span class="img-cover"><img src="images/pr_1-menu.jpg" alt="image name" class="pic"></span>
                              <figcaption>
                                <p>colored</p>
                              </figcaption>
                            </figure>
                            </a> </li>
                          <li> <a href="product-page.html">
                            <figure> <span class="img-cover"><img src="images/pr_2-menu.jpg" alt="image name" class="pic"></span>
                              <figcaption>
                                <p>description</p>
                              </figcaption>
                            </figure>
                            </a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item"> <a href="#"><span><i class="icon-call-in"></i> Contact Us</span></a> </li>
            <li class="nav-item"> <a href="#"><span><i class="icon-wallet"></i> Sale</span></a> </li>
          </ul>
          -->
          
         <?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container' => false,
    'menu_class' => 'nav-menu'
    )
    ); 
?>
<div class="sub-nav full padding">
                <div class="row">
                    <?php

$taxonomy = 'products_categories';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
 foreach ( $terms as $term ) { ?>
 <?php if($term->parent==0) { ?>
                  <div class="col-md-6">
                      
                      
                    <a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><h3 class="sub-nav-title"><?php echo $term->name; ?></h3></a>
                    <?php

$taxonomy = 'products_categories';
$terms0 = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms0 && !is_wp_error( $terms0 ) ) :
 foreach ( $terms0 as $term0 ) { ?>
 <?php if($term0->parent!=0 AND $term0->parent==$term->term_id) { ?>
                    <ul class="sub-nav-group sub-nav-grey">
                        <li><a href="<?php echo get_term_link($term0->slug, $taxonomy); ?>"><?php echo $term0->name; ?></a></li>
                    </ul>
                    <?php } ?>
                    <?php } ?>
                  <?php endif;?>
                  
                    
                    
                  </div>
                  <?php } ?>
                  <?php } ?>
                  <?php endif;?>
                </div>
              </div>
       </nav> 
      </div>
    </div>
    <!-- main menu end --> 
    <!-- mobile menu begin -->
    <div class="mobile-menu">
      <nav>
        <div class="mobile-menu-button"> MENU <a href="#" class="mobile-menu-toggler"><span></span><span></span><span></span></a> </div>
        <div class="mobile-menu-body">
          <div class="mobile-menu-search clearfix">
            <form action="/">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>
          </div>
          <ul>
            <li><a href="#"><i class="icon-home"></i> Home</a></li>
            <li> <a href="#"><i class="icon-user"></i> caps</a> <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a>
              <ul class="sub-nav-group sub-nav-grey">
                <li><a href="#"><span>colored</span></a></li>
                <li><a href="#"><span>black and white</span></a></li>
                <li><a href="#"><span>something else</span></a></li>
                <li><a href="#"><span>dummy text</span></a></li>
              </ul>
            </li>
            <li> <a href="#"><i class="icon-user-female"></i> table runner</a> <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a>
              <ul class="sub-nav-group sub-nav-grey">
                <li><a href="#"><span>colored</span></a></li>
                <li><a href="#"><span>black and white</span></a></li>
                <li><a href="#"><span>something else</span></a></li>
                <li><a href="#"><span>dummy text</span></a></li>
              </ul>
            </li>
            <li> <a href="#"><i class="icon-screen-desktop"></i> pillows</a> <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a> </li>
          </ul>
          <p><i class="icon-call-in"></i> + 1 (233) 45 666 987</p>
          <p><i class="icon-envelope"></i>info@aghabaniamal.com</p>
        </div>
      </nav>
    </div>
    <!-- mobile menu end --> 
  </header>