<?php get_header(); ?>

<?php 
    session_start();
    
    $post_id=get_the_ID();
    $post=get_post($post_id);
    $im1=types_render_field( 'first_image', array('url'=>true));
    $_SESSION['first_image']=$im1;
     $im2=types_render_field( 'second_image', array('url'=>true));
    $_SESSION['second_image']=$im2;
     $im3=types_render_field( 'third_image', array('url'=>true));
    $_SESSION['third_image']=$im3;
     $im4=types_render_field( 'fourth_image', array('url'=>true));
    $_SESSION['fourth_image']=$im4;
     $im5=types_render_field( 'white_color_image', array('url'=>true));
    $_SESSION['white_color_image']=$im5;
     $im6=types_render_field( 'black_color_image', array('url'=>true));
    $_SESSION['black_color_image']=$im6;
     $im7=types_render_field( 'red_color_image', array('url'=>true));
    $_SESSION['red_color_image']=$im7;
     $im8=types_render_field( 'blue_color_image', array('url'=>true));
    $_SESSION['blue_color_image']=$im8;
     $im9=types_render_field( 'green_color_image', array('url'=>true));
    $_SESSION['green_color_image']=$im9;
     $im10=types_render_field( 'xl_size_image', array('url'=>true));
    $_SESSION['xl_size_image']=$im10;
    $im11=types_render_field( 'large_size_image', array('url'=>true));
    $_SESSION['large_size_image']=$im11;
    $im12=types_render_field( 'medium_size_image', array('url'=>true));
    $_SESSION['medium_size_image']=$im12;
    $im13=types_render_field( 'small_size_image', array('url'=>true));
    $_SESSION['small_size_image']=$im13;
    $im14=types_render_field( 'xs_size_image', array('url'=>true));
    $_SESSION['xs_size_image']=$im14;
    
    
?>


<!-- page body content begin -->
  <div class="pg-body clearfix" ng-controller="single_product">
    <div class="container clearfix">
      <div class="row">
        <div class="container">
          <div class="col-xs-12 product-top-line"> <a href="category.html" class="btn btn-yet-col col-xs-2 back-catalog pull-left">BACK IN CATALOG</a>
            <div class="pull-right">
              <div class="previous-product"><?php next_post_link( '%link','next product' ) ?><span class="arrow_carrot-left"></span></div>
              <div class="next-product"><?php previous_post_link( '%link','Previous product' ) ?><span class="arrow_carrot-right"></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-7 col-xs-12 product-images">
          <div class="clearfix zoom-content"> <a href="#" class="btn btn-yet-col" id="product-pupGallery-button" data-target="#product-pupGallery-box" data-toggle="modal"><span class="icon-magnifier-add"></span></a>
            <div aria-hidden="true" aria-labelledby="product-added" role="dialog" tabindex="-1" id="product-pupGallery-box" class="modal fade" style="display: none;">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header"> <a aria-hidden="true" data-dismiss="modal" class="modal-close" href="#"><i class="icon_close"></i></a>
                    <h4 class="modal-title">Information</h4>
                  </div>
                  <div class="modal-body modal-body-info">
                    <div class="clearfix zoom-content-2">
                      <div class="clearfix big-image"> <img id="zoom_04" ng-src="{{main_image}}" data-zoom-image="<?php echo(types_render_field( 'first_image', array('url'=>true))); ?>" alt=""/> </div>
                      <div class="clearfix thumbnails">
                        <ul id="thumblist2" class="clearfix" >
                          <li> <a ng-click="get_main_img('first_image')" class="elevatezoom-gallery zoomThumbActive" data-update="" 
                                       data-image="<?php echo(types_render_field( 'second_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'second_image', array('url'=>true))); ?>"> <img id="ss" src="<?php echo(types_render_field( 'first_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a ng-click="get_main_img('second_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'second_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'second_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'second_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('third_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'third_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'third_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'third_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a ng-click="get_main_img('fourth_image')"  class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'fourth_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'fourth_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'fourth_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('white_color_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'white_color_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'white_color_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'white_color_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a ng-click="get_main_img('black_color_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'black_color_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'black_color_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'black_color_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('red_color_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'red_color_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'red_color_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'red_color_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('blue_color_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'blue_color_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'blue_color_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'blue_color_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('green_color_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'green_color_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'green_color_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'green_color_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('xl_size_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'xl_size_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'xl_size_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'xl_size_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('large_size_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'large_size_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'large_size_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'large_size_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('medium_size_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'medium_size_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'medium_size_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'medium_size_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          <li> <a ng-click="get_main_img('small_size_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'small_size_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'small_size_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'small_size_image', array('url'=>true))); ?>" width="100" alt="" /> </a> </li>
                          <li> <a  ng-click="get_main_img('xs_size_image')" class="elevatezoom-gallery" data-update="" 
                                       data-image="<?php echo(types_render_field( 'xs_size_image', array('url'=>true))); ?>" 
                                       data-zoom-image="<?php echo(types_render_field( 'xs_size_image', array('url'=>true))); ?>"> <img src="<?php echo(types_render_field( 'xs_size_image', array('url'=>true))); ?>" width="100"  alt="" /> </a> </li>
                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div ng-click="bring_img()" class="clearfix big-image product-page"> <img id="zoom_03" ng-src="{{main_image}}" data-zoom-image="<?php echo(types_render_field( 'first_image', array('url'=>true))); ?>" alt=""/> </div>
            <br/>
            <div style="max-width: 529px !important">
              <ul id="thumblist">
                <li> <a ng-click="get_main_img('first_image')"  class="elevatezoom-gallery zoomThumbActive"> <img src="<?php echo(types_render_field( 'first_image', array('url'=>true))); ?>" width="100" alt="" /> </a> </li>
                <li> <a ng-click="get_main_img('second_image')"  class="elevatezoom-gallery zoomThumbActive"> <img src="<?php echo(types_render_field( 'second_image', array('url'=>true))); ?>" width="100" alt="" /> </a> </li>
                <li> <a ng-click="get_main_img('third_image')" class="elevatezoom-gallery zoomThumbActive"> <img src="<?php echo(types_render_field( 'third_image', array('url'=>true))); ?>" width="100" alt="" /> </a> </li>
                <li> <a ng-click="get_main_img('fourth_image')" class="elevatezoom-gallery zoomThumbActive"> <img src="<?php echo(types_render_field( 'fourth_image', array('url'=>true))); ?>" width="100" alt="" /> </a> </li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 col-xs-12 product-info">
          <div id="zoom-window-container" style="position: relative;"></div>
          <div class="product-reviews">
            <h3><?php single_post_title(); ?></h3>
          </div>
          <div class="hr"></div>
          <p class="data-info">Product Code: <span><?php the_ID(); ?></span></p>
          <p class="data-info">Product Tags: 
            <span>
              <?php
               $tags = get_the_terms( $post_id , 'caps_tags' );
                     foreach ($tags as $tag) {
                         echo ($tag->name);
                         echo (", ");
                     }
              ?>
            </span></p>
          <p class="data-info">Category: 
          <span>
              <?php
               $tags = get_the_terms( $post_id , 'caps_categories' );
                     foreach ($tags as $tag) {
                         echo ($tag->name);
                         echo (", ");
                     }
              ?>
          </span></p>
         
          <!--<div class="hr"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <div class="col-xs-12 tech-info">
            <div class="col-sm-4 col-xs-12"> <span>100% Cotton</span> <span>50% Elastomultiester</span> </div>
            <div class="col-sm-4 col-xs-12"> <span>Sit just below waist</span> <span>Slim fit  throught</span> </div>
            <div class="col-sm-4 col-xs-12"> <span>Dry Clean</span> <span>Machine Wash Warm</span> </div>
          </div>
          <div class="hr"></div>-->
          <span class="data-info secondary-font-family">COLORS :</span><br>

          <div class="color-blocks">
            <div class="radio-inline color" ng-click="get_main_img('white_color_image')">
              <input type="radio" name="color" value="1" id="radio-color-1">
              <label for="radio-color-1" style="background:white;"></label>
            </div>
            <div class="radio-inline color" ng-click="get_main_img('black_color_image')">
              <input type="radio" name="color" value="2" id="radio-color-2">
              <label for="radio-color-2" style="background:black;"></label>
            </div>
            <div class="radio-inline color" ng-click="get_main_img('red_color_image')">
              <input type="radio" name="color" value="3" id="radio-color-3">
              <label for="radio-color-3" style="background:#f34545;"></label>
            </div>
            <div class="radio-inline color" ng-click="get_main_img('blue_color_image')">
              <input type="radio" name="color" value="4" id="radio-color-4">
              <label for="radio-color-4" style="background:#5d5dd4;"></label>
            </div>
            <div class="radio-inline color" ng-click="get_main_img('green_color_image')">
              <input type="radio" name="color" value="5" id="radio-color-5">
              <label for="radio-color-5" style="background:#74d674;"></label>
            </div>
          </div>
          <div class="hr"></div>
          <span class="data-info secondary-font-family">SELECT SIZE</span>
          <div class="size-blocks">
            <div class="radio-inline size" ng-click="get_main_img('xl_size_image')">
              <input type="radio" name="size" value="1" id="radio-size-1">
              <label for="radio-size-1">XL</label>
            </div>
            <div class="radio-inline size" ng-click="get_main_img('large_size_image')">
              <input type="radio" name="size" value="2" id="radio-size-2">
              <label for="radio-size-2">L</label>
            </div>
            <div class="radio-inline size" ng-click="get_main_img('medium_size_image')">
              <input type="radio" name="size" value="3" id="radio-size-3">
              <label for="radio-size-3">M</label>
            </div>
            <div class="radio-inline size" ng-click="get_main_img('small_size_image')">
              <input type="radio" name="size" value="4" id="radio-size-4">
              <label for="radio-size-4">S</label>
            </div>
            <div class="radio-inline size" ng-click="get_main_img('xs_size_image')">
              <input type="radio" name="size" value="5" id="radio-size-5">
              <label for="radio-size-5">XS</label>
            </div>
          </div>

          <div class="hr"></div>
          <div class="product-tabs"> 
            <!-- Nav tabs -->
            <ul role="tablist" class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" role="tab" href="#tab-description">DESCRIPTION</a></li>
              <!--<li><a data-toggle="tab" role="tab" href="#tab-additional-info">ADDITIONAL INFO</a></li>-->
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div id="tab-description" class="tab-pane active">
                <p><?php echo($post->post_content); ?></p>
              </div>
              <!--<div id="tab-additional-info" class="tab-pane">
                <p>Placerat sollicitudin. sit amet magna quam praesent in libero vel turpis pellentesque egestas sit amet vel nunc. Accumsan dolor ullamcorper est vitae sem ornare interdum. Cum sociis natoque penatibus et magnis Hendrerit ut faucibus sit amet, praesent in libero vel turpis Lorem ipsum dolor sit amet, consectetur adipiscing elit sapien ornare tempus venenatis ipsum nec ligula placerat sollicitudin. </p>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="container best-product">
        <div class="col-xs-12">
          <h6>RELATED PRODUCTS</h6>
        </div>
        <div class="gap-70"></div>
        <div class="products-list pl-carousel">
          <ul class="pl-pages">
            <li class="active">
              <div class="row">
                  <?php
        

$related = new WP_Query( ( array( 'category__in' => wp_get_post_categories($post_id), 'posts_per_page' => 2, 'post__not_in' => array($post_id), 'post_type'=>'caps' ) ));
if( $related->have_posts() ) { 
  while( $related->have_posts() ) { $related->the_post(); 
?>

                 <div class="col-md-3 col-sm-6 pl-item">
                  <figure> <a href="<?php the_permalink() ?>"> <img src="<?php echo(types_render_field( 'first_image', array('url'=>true))); ?>" alt=""> </a>
                    <figcaption> <a href="<?php the_permalink() ?>" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name"><?php echo(the_title()); ?></p>
                  </div></a> </figcaption>
                  </figure>
                 </div>
<?php
  }
}
?>

<?php
        

$related = new WP_Query( ( array( 'category__in' => wp_get_post_categories($post_id), 'posts_per_page' => 2, 'post__not_in' => array($post_id), 'post_type'=>'caps' ) ));
if( $related->have_posts() ) { 
  while( $related->have_posts() ) { $related->the_post(); 
?>

                 <div class="col-md-3 col-sm-6 pl-item">
                  <figure> <a href="<?php the_permalink() ?>"> <img src="<?php echo(types_render_field( 'first_image', array('url'=>true))); ?>" alt=""> </a>
                    <figcaption> <a href="<?php the_permalink() ?>" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name"><?php echo(the_title()); ?></p>
                  </div></a> </figcaption>
                  </figure>
                 </div>
<?php
  }
}
?>
                
                
              </div>
            </li>

          </ul>
          <div class="pl-controls"> <a href="#" class="pl-ctl-left"></a> <a href="#" class="pl-ctl-right"></a> </div>
        </div>
      </div>
    </section>
  </div>
  <!-- pg-body -->
  
  
  <?php get_footer(); ?>