<?php


//enqueue scripts and stylesheet

function obf_scripts_styles() {
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.3.7', true );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7' );
    if ( is_page( 'about' ) ) {
        wp_enqueue_style('style-about.css', get_template_directory_uri().'/css/style-about.css',false,'1.0','all');
    }
    else if ( is_page( 'fellowships' ) ) {
        wp_enqueue_style('style-fellowships.css', get_template_directory_uri().'/css/style-fellowships.css',false,'1.0','all');
    }
<<<<<<< HEAD
    else if ( is_page( 'board' ) ) {
        wp_enqueue_style('style-board.css', get_template_directory_uri().'/css/style-board.css',false,'5.0.5','all');
    }
    else if ( is_page( 'meeting-minutes' ) ) {
        wp_enqueue_style('style-meeting-minutes.css', get_template_directory_uri().'/css/style-meeting-minutes.css',false,'1.0','all');
    }
=======
>>>>>>> ee4f0450e09b64cdfe8f8e27b780b670ef701cb1
    
    else if ( is_single() ) {
        wp_enqueue_style('style-single.css', get_template_directory_uri().'/css/style-single.css',false,'1.0','all');
    }
    wp_enqueue_style( 'style', get_stylesheet_uri() );


    
}

add_action( 'wp_enqueue_scripts','obf_scripts_styles' );
//wp_enqueue_style( 'style', get_stylesheet_uri() );

//require nav walker

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// theme setup support

function obf_theme_setup() {
    //nav menu support
    register_nav_menus(array(
        'primary' => __('Primary Menu','obf-new'),
    ));
    
}

add_action('after_setup_theme','obf_theme_setup');
add_theme_support( 'post-thumbnails' );

/*function create_posttype() {

  register_post_type( 'obf_event',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Event' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'events'),
        
    )
  );
    
    register_post_type( 'obf_news',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'news'),
        
    )
  );
    
     register_post_type( 'obf_projects',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'obf_projects'),
        
    )
  );
}
add_action( 'init', 'create_posttype' );*/
<<<<<<< HEAD

//basic function to edit
/*function team_post_type() {
   
   // Labels
	$labels = array(
		'name' => _x("Team", "post type general name"),
		'singular_name' => _x("Team", "post type singular name"),
		'menu_name' => 'Team Profiles',
		'add_new' => _x("Add New", "team item"),
		'add_new_item' => __("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item' => __("New Profile"),
		'view_item' => __("View Profile"),
		'search_items' => __("Search Profiles"),
		'not_found' =>  __("No Profiles Found"),
		'not_found_in_trash' => __("No Profiles Found in Trash"),
		'parent_item_colon' => ''
	);
	
	// Register post type
	register_post_type('team' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => get_stylesheet_directory_uri() . '/lib/TeamProfiles/team-icon.png',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'team_post_type', 0 );*/

function obf_board_post_type() {
   
   // Labels
	$labels = array(
		'name' => _x("Board", "post type general name"),
		'singular_name' => _x("Board", "post type singular name"),
		'menu_name' => 'Board Member Profiles',
		'add_new' => _x("Add New", "board item"),
		'add_new_item' => __("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item' => __("New Profile"),
		'view_item' => __("View Profile"),
		'search_items' => __("Search Profiles"),
		'not_found' =>  __("No Profiles Found"),
		'not_found_in_trash' => __("No Profiles Found in Trash"),
		'parent_item_colon' => ''
	);
	
	// Register post type
	register_post_type('obf-board' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		//'menu_icon' => get_stylesheet_directory_uri() . '/lib/TeamProfiles/team-icon.png',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	) );
}
add_action( 'init', 'obf_board_post_type', 0 );

/**
 * Register `department` taxonomy
 */
function obf_member_taxonomy() {
	
	// Labels
	$singular = 'Member-Type';
	$plural = 'Member-Types';
	$labels = array(
		'name' => _x( $plural, "taxonomy general name"),
		'singular_name' => _x( $singular, "taxonomy singular name"),
		'search_items' =>  __("Search $singular"),
		'all_items' => __("All $singular"),
		'parent_item' => __("Parent $singular"),
		'parent_item_colon' => __("Parent $singular:"),
		'edit_item' => __("Edit $singular"),
		'update_item' => __("Update $singular"),
		'add_new_item' => __("Add New $singular"),
		'new_item_name' => __("New $singular Name"),
	);

	// Register and attach to 'team' post type
	register_taxonomy( strtolower($singular), 'obf-board', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => false,
		'labels' => $labels
	) );
}
add_action( 'init', 'obf_member_taxonomy', 0 );

// Add External Links Filter
/*function obf_permalink_links( $link, $post ) {
    $meta = get_post_meta( $post->ID, 'external_url', TRUE );
    $url = esc_url( filter_var( $meta, FILTER_VALIDATE_URL ) );
    return $url ? $url : $link;
}
add_filter( 'post_link', 'obf_permalink_links', 10, 2 );*/




=======
>>>>>>> ee4f0450e09b64cdfe8f8e27b780b670ef701cb1

 
