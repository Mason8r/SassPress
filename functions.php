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

/***** ACF Functions *****
*
* Included as part of the theme rather than
* as a plugin. The below also specifies 
* what fields appear on what page.
*
********/
add_filter('plugins/acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/assets/acf/';
    
    // return
    return $path;
    
}
 
// 2. customize ACF dir
add_filter('plugins/acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/assets/acf/';
    
    // return
    return $dir;
    
}

// 3. Hide ACF field group menu item
add_filter('plugins/acf/settings/show_admin', '__return_false');

add_filter('plugins/acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/assets/acf/json';
    
    
    // return
    return $path;
    
}

// 4. Include ACF
include_once( get_stylesheet_directory() . '/plugins/acf/acf.php' );

// 5. Include theme specific fields
include_once( get_stylesheet_directory() . '/plugins/acf/custom/theme.php' );

add_action( 'init', 'remove_editor_init' );

function remove_editor_init() {
    // If not in the admin, return.
    if ( ! is_admin() ) {
       return;
    }

    // Get the post ID on edit post with filter_input super global inspection.
    $current_post_id = filter_input( INPUT_GET, 'post', FILTER_SANITIZE_NUMBER_INT );
    // Get the post ID on update post with filter_input super global inspection.
    $update_post_id = filter_input( INPUT_POST, 'post_ID', FILTER_SANITIZE_NUMBER_INT );

    // Check to see if the post ID is set, else return.
    if ( isset( $current_post_id ) ) {
       $post_id = absint( $current_post_id );
    } else if ( isset( $update_post_id ) ) {
       $post_id = absint( $update_post_id );
    } else {
       return;
    }

    // Don't do anything unless there is a post_id.
    if ( isset( $post_id ) ) {
       // Get the template of the current post.
       $template_file = get_post_meta( $post_id, '_wp_page_template', true );

       $templates = array(
       	'custom-home-page.php',
       );

       // Example of removing page editor for page-your-template.php template.
       if ( in_array( $template_file, $templates) ) {
           remove_post_type_support( 'page', 'editor' );
           // Other features can also be removed in addition to the editor. See: https://codex.wordpress.org/Function_Reference/remove_post_type_support.
       }
    }
}

?>