<?php

add_theme_support( 'post-thumbnails' );
add_image_size( 'tiny-thumb', 50, 50 );

/* Load Scripts */
function js_and_css()
{
	wp_register_style( 'style' , get_stylesheet_uri() );
	wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'js_and_css' );

if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
   'name' => 'sidebar',
   'id' => 1,
   'before_widget' => '<div id="section" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));
}

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' 			=> __( 'Main Menu' ),
      'header-links' 		=> __( 'Header Links' ),
      'footer-links'		=> __( 'Footer Links' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

function perfect_title() {
	if (function_exists('is_tag') && is_tag()) { 
		echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
	} elseif (is_archive()) { 
		wp_title(''); 
		echo ' Archive - '; 
	} elseif (is_search()) { 
		echo 'Search for &quot;'. wp_specialchars($s) . '&quot; - '; 
	} elseif (!(is_404()) && (is_single()) || (is_page())) { 
		wp_title(''); 
		echo ' - '; 
	} elseif (is_404()) { 
		echo 'Not Found - '; 
	} 

	if (is_home()) { 
		bloginfo('name'); 
		echo ' - '; 
		bloginfo('description'); 
	} else { 
		bloginfo('name'); 
	}
}

/*function create_new_post_type() {

	$labels = array(
		'name' 			 => __('News'),
		'singular_name'  => __('News Item'),
	);
	$args = array(
		'labels'      	 => $labels,
		'public' 	  	 => true,
		'has_archive' 	 => true,
		'menu_position'  => 5,
		'description'    => 'News',
		'taxonomies' 	 => array('category'),
		'rewrite'     	 =>
			array('slug' => 'news-item'),
		'supports'    	 =>
			array( 'title', 
				   'comments', 
				   'editor',
				   'thumbnail'),
	);
	register_post_type('News', $args);
}
add_action('init', 'create_new_post_type');*/

?>