<?php get_header(); ?>
<?php
    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<!-- page body content begin -->
  <div class="pg-body">
    <div class="container">
      <div class="gap-70 hidden-xs"></div>
      <div class="row">
        <div class="col-md-9 col-md-push-3 cat-content"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/category/banner.jpg" alt=""></a>
          <div class="cat-view-options">
            <div class="row">
              
              <div class="col-md-8 text-center">
                <label class="cvo-label">View</label>
                <div class="cvo-view-type" role="tablist">
                  <ul class="list-inline">
                    <li class="active"> <a href="#pl-grid" role="tab" data-toggle="tab" class="cvo-grid">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="14px" height="14px" viewBox="0 0 50 50" xml:space="preserve">
                        <rect x="0" y="0" width="20" height="20"/>
                        <rect x="30" y="0" width="20" height="20"/>
                        <rect x="0" y="30" width="20" height="20"/>
                        <rect x="30" y="30" width="20" height="20"/>
                      </svg>
                      </a> </li>
                    <li> <a href="#pl-list" role="tab" data-toggle="tab" class="cvo-list">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="14px" height="14px" viewBox="0 0 30.263 25.6" xml:space="preserve"
                                       >
                        <rect width="7.732" height="6.398"/>
                        <rect y="9.6" width="7.732" height="6.4"/>
                        <rect y="19.199" width="7.732" height="6.398"/>
                        <rect x="10.933" y="9.602" width="19.33" height="6.4"/>
                        <rect x="10.933" y="19.199" width="19.33" height="6.4"/>
                        <rect x="10.933" width="19.33" height="6.4"/>
                      </svg>
                      </a> </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 text-center">
                  <?php numeric_posts_nav(); ?>
              </div>
            </div>
          </div>
          <!-- cat-view-options -->
          
          
          <div class="tab-content tab-no-style">
            <div class="tab-pane fade in active" id="pl-grid">
              <div class="products-list">
                  
                <div class="row">
                    <?php
                       if ( get_query_var('paged') ) {
    						$paged = get_query_var('paged');
    					} else if ( get_query_var('page') ) {
    						$paged = get_query_var('page');
    					} else {
    						$paged = 1;
    					}
    					$args = array(
    					'post_type' => 'tabel_runners',
    					'post_status'   => 'publish',
    					'posts_per_page' => 6,
    					'paged' => $paged,
    					'tax_query' => array(
    					    array(
    					    'taxonomy' => 'tabel_categories',
    					    'field' => 'id',
    					    'terms' => $term->term_id
    					     )
    					  )
    					);
    					$query = new WP_Query( $args ); 
                             
                        foreach($query->posts as $post) {
                    ?>
                    
                  <div class="col-md-4 col-sm-6 pl-item">
                    <figure> <a href="<?php echo($post->guid); ?>"> <img src="<?php echo(types_render_field( 'first_image', array('url'=>true))); ?>" alt=""> </a>
                      <figcaption> <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top">
                        <div class="pl-caption">
                          <p class="pl-name"><?php echo(get_the_title()); ?></p>
                        </div>
                        </a> </figcaption>
                    </figure>
                  </div>
                  <?php
                    }
		          ?>
                </div>
                
              </div>
            </div>
            <!-- grid list -->
            <div class="tab-pane fade" id="pl-list">
              <div class="products-listview">
                  
                
                    <?php
                       if ( get_query_var('paged') ) {
    						$paged = get_query_var('paged');
    					} else if ( get_query_var('page') ) {
    						$paged = get_query_var('page');
    					} else {
    						$paged = 1;
    					}
    					$args = array(
    					'post_type' => 'tabel_runners',
    					'post_status'   => 'publish',
    					'posts_per_page' => 6,
    					'paged' => $paged,
    					'tax_query' => array(
    					    array(
    					    'taxonomy' => 'tabel_categories',
    					    'field' => 'id',
    					    'terms' => $term->term_id
    					     )
    					  )
    					);
    					$query = new WP_Query( $args ); 
                             
                        foreach($query->posts as $post) {
                    ?>  
                     <div class="plv-item">
                  <div class="row no-gutter">
                    <div class="col-sm-4 plv-image">
                      <figure> <a href="<?php echo($post->guid); ?>" class="plv-w-backside"> <img src="<?php echo(types_render_field( 'first_image', array('url'=>true))); ?>" alt=""> <span class="plv-backside"> <img src="images/products/thumbs/2.jpg" alt=""> </span> </a> </figure>
                    </div>
                    <div class="col-sm-8">
                      <div class="plv-body">
                        <div class="plv-header">
                          <div class="row">
                            <div class="col-xs-6 plv-title"><a href="<?php echo($post->guid); ?>"><?php echo(get_the_title()); ?></a></div>
                          </div>
                        </div>
                         
                        <div class="plv-exerpt"></div>
                        <div class="plv-buttons"> <a href="#" class="btn btn-sec-col"><i class="icon-bag"></i> view</a></div>
                      </div>
                    </div>
                     </div>
                </div>
                    <?php
                    }
		           ?>
                 
                <!-- plv-item -->
                
              </div>
              <!-- products-listview --> 
            </div>
            <!-- tab pl-list --> 
          </div>
          
          
          <div class="cat-view-options">
            <div class="row">
              
              <div class="col-md-8 text-center">
                <label class="cvo-label">View</label>
                <div class="cvo-view-type" role="tablist">
                  <ul class="list-inline">
                    <li class="active"> <a href="#pl-grid" role="tab" data-toggle="tab" class="cvo-grid">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="14px" height="14px" viewBox="0 0 50 50" xml:space="preserve">
                        <rect x="0" y="0" width="20" height="20"/>
                        <rect x="30" y="0" width="20" height="20"/>
                        <rect x="0" y="30" width="20" height="20"/>
                        <rect x="30" y="30" width="20" height="20"/>
                      </svg>
                      </a> </li>
                    <li> <a href="#pl-list" role="tab" data-toggle="tab" class="cvo-list">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="14px" height="14px" viewBox="0 0 30.263 25.6" xml:space="preserve"
                                       >
                        <rect width="7.732" height="6.398"/>
                        <rect y="9.6" width="7.732" height="6.4"/>
                        <rect y="19.199" width="7.732" height="6.398"/>
                        <rect x="10.933" y="9.602" width="19.33" height="6.4"/>
                        <rect x="10.933" y="19.199" width="19.33" height="6.4"/>
                        <rect x="10.933" width="19.33" height="6.4"/>
                      </svg>
                      </a> </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 text-center">
                  <?php numeric_posts_nav(); ?>
              </div>
            </div>
          </div>
          <!-- cat-view-options -->
        </div>
        <!-- cat-content -->
        <div class="col-md-3 col-md-pull-9 cat-sidebar">
          <aside>
            <div class="widget wg-categories">
              <h3 class="wg-title">Categories</h3>
              <div class="wg-body">
                <ul class="wg-categories-list">
                  <li> <a href="">Tabel runners <span class="wgc-count">(<?php echo(wp_count_posts( 'tabel_runners' )->publish); ?>)</span></a>
                  <?php

$taxonomy = 'tabel_categories';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
    <ul>
        <?php foreach ( $terms as $term ) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
<?php endif;?>

                    
                  </li>
                  <li><a href="#">Products <span class="wgc-count">(<?php echo(wp_count_posts( 'products' )->publish); ?>)</span></a>
                    <?php

$taxonomy = 'products_categories';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
    <ul>
        <?php foreach ( $terms as $term ) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
<?php endif;?>
                  </li>
                  <li><a href="">Pillows <span class="wgc-count">(<?php echo(wp_count_posts( 'pillows' )->publish); ?>)</span></a>
                  <?php

$taxonomy = 'pillows_categories';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
    <ul>
        <?php foreach ( $terms as $term ) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
<?php endif;?>
                  </li>
                  <li><a href="">Caps <span class="wgc-count">(<?php echo(wp_count_posts( 'caps' )->publish); ?>)</span></a>
                  <?php

$taxonomy = 'caps_categories';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
    <ul>
        <?php foreach ( $terms as $term ) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
<?php endif;?>
                  </li>
                  
                </ul>
              </div>
            </div>
            
            
            
          </aside>
        </div>
        <!-- sidebar --> 
      </div>
      <div class="gap-70"></div>
    </div>
    <!-- container --> 
  </div>
  <!-- pg-body -->

<?php get_footer(); ?>