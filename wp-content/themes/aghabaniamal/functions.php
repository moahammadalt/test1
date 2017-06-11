<?php
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'Aghabani Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function taxes_to_api() {
    $taxonomies = get_taxonomies( '', 'objects' );
     
    foreach( $taxonomies as $taxonomy ) {
        $taxonomy->show_in_rest = true;
    }
}
add_action( 'init', 'taxes_to_api', 30 );

/*if (class_exists('MultiPostThumbnails')) {

    new MultiPostThumbnails(array(
        'label' => 'first Image',
        'id' => 'first-image',
        'post_type' => 'caps'
    ) );

 }
 
 if (class_exists('MultiPostThumbnails')) {

    new MultiPostThumbnails(array(
        'label' => 'Secondary Image',
        'id' => 'secondary-image',
        'post_type' => 'caps'
    ) );

 }*/
 
add_action('rest_api_init', 'register_custom_fields', 1, 1);

function register_custom_fields(){
    
    register_rest_field(
        'caps',
        'first_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'second_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'third_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'fourth_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'first_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'second_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'third_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'fourth_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'first_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'second_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'third_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'fourth_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'xs_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'small_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'medium_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'large_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'xl_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'green_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'blue_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'red_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'white_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'table_runners',
        'black_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    
    
    register_rest_field(
        'caps',
        'xs_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'small_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'medium_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'large_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'xl_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'green_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'blue_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'red_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'white_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'caps',
        'black_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    
    
    
    
    
    register_rest_field(
        'pillows',
        'xs_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'small_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'medium_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'large_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'xl_size_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'green_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'blue_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'red_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'white_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'pillows',
        'black_color_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    
    
    
    
    
    register_rest_field(
        'products',
        'first_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'second_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'third_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'fourth_image',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'xs_size',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'small_size',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'medium_size',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'large_size',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'xl_size',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'green_color',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'blue_color',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'red_color',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'white_color',
        array(
            'get_callback' => 'show_fields'
        )
    );
    
    register_rest_field(
        'products',
        'black_color',
        array(
            'get_callback' => 'show_fields'
        )
    );
    

}

function show_fields($object, $field_name, $request){
    $field_name = 'wpcf-' . $field_name;
    return get_post_meta($object['id'], $field_name, true);
}

function sess_start() {
    if (!session_id())
    session_start();
}
add_action('init','sess_start');

add_filter( 'redirect_canonical', 'custom_disable_redirect_canonical' );
function custom_disable_redirect_canonical( $redirect_url ) {
    if ( is_paged() && is_singular() ) $redirect_url = false; 
    return $redirect_url; 
}



function numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation1 page_nav"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}


?>