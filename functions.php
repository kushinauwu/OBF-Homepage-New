<?php

// Enqueue scripts and stylesheet for pages
function obf_scripts_styles() {
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.3.7', true );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7' );
    if ( is_page( 'about' ) ) {
        wp_enqueue_style('style-about.css', get_template_directory_uri().'/css/style-about.css',false,'1.0','all');
    }
    else if ( is_page( 'fellowships' ) ) {
        wp_enqueue_style('style-fellowships.css', get_template_directory_uri().'/css/style-fellowships.css',false,'5.0.1','all');
    }
    else if ( is_page( 'board' ) ) {
        wp_enqueue_style('style-board.css', get_template_directory_uri().'/css/style-board.css',false,'5.0.7','all');
    }
    else if ( is_page( 'projects' ) ) {
        wp_enqueue_style('style-projects.css', get_template_directory_uri().'/css/style-projects.css', false, '1.0','all');
    }
    else if ( is_page( 'events' ) ) {
        wp_enqueue_style('style-events.css', get_template_directory_uri().'/css/style-events.css',false,'1.0','all');
    }
    else if ( is_page( 'gsoc' ) ) {
        wp_enqueue_style('style-gsoc.css', get_stylesheet_directory_uri().'/css/style-gsoc.css',false,'1.0','all');
    }
    else if ( is_page( 'meeting-minutes' ) ) {
        wp_enqueue_style('style-meeting-minutes.css', get_template_directory_uri().'/css/style-meeting-minutes.css',false,'1.0','all');
    }
    
    else if ( is_single() ) {
        wp_enqueue_style('style-single.css', get_template_directory_uri().'/css/style-single.css',false,'1.1','all');
    }
    
    else if ( is_home() ) {
        wp_enqueue_style('style-home.css', get_template_directory_uri().'/css/style-home.css',false,'1.1','all');
    }
    wp_enqueue_style( 'style', get_stylesheet_uri() );    
}
add_action( 'wp_enqueue_scripts','obf_scripts_styles' );

// Enqueue styles for page templates, with styles applicable for child pages
function obf_enqueue_page_template_styles() {
    if ( is_page_template( 'gsoc.php' ) ) {
        wp_enqueue_style( 'style-gsoc.css', get_template_directory_uri() . '/css/style-gsoc.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'obf_enqueue_page_template_styles' );

// Require nav walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme setup support
function obf_theme_setup() {
    //nav menu support
    register_nav_menus(array(
        'primary' => __('Primary Menu','obf-new'),
    ));
    
}

add_action('after_setup_theme','obf_theme_setup');
add_theme_support( 'post-thumbnails' );

// OBF Custom Post Types
function obf_post_type() {
   
   // Labels
	$obf_board_labels = array(
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
    
    $obf_projects_labels = array(
		'name' => _x("Projects", "post type general name"),
		'singular_name' => _x("Project", "post type singular name"),
		'menu_name' => 'Projects',
		'add_new' => _x("Add New", "project item"),
		'add_new_item' => __("Add New Project"),
		'edit_item' => __("Edit Project"),
		'new_item' => __("New Project"),
		'view_item' => __("View Project"),
		'search_items' => __("Search Projects"),
		'not_found' =>  __("No Projects Found"),
		'not_found_in_trash' => __("No Projects Found in Trash"),
		'parent_item_colon' => ''
	);
    
    $obf_events_labels = array(
		'name' => _x("Events", "post type general name"),
		'singular_name' => _x("Event", "post type singular name"),
		'menu_name' => 'Events',
		'add_new' => _x("Add New", "event item"),
		'add_new_item' => __("Add New Event"),
		'edit_item' => __("Edit Event"),
		'new_item' => __("New Event"),
		'view_item' => __("View Event"),
		'search_items' => __("Search Events"),
		'not_found' =>  __("No Events Found"),
		'not_found_in_trash' => __("No Events Found in Trash"),
		'parent_item_colon' => ''
	);
	
	// Register post type
	register_post_type('obf-board' , array(
		'labels' => $obf_board_labels,
		'public' => true,
		'has_archive' => false,
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	) );
    
    register_post_type('obf-projects' , array(
		'labels' => $obf_projects_labels,
		'public' => true,
		'has_archive' => false,
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	) );
    
    register_post_type('obf-events' , array(
		'labels' => $obf_events_labels,
		'public' => true,
		'has_archive' => false,
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields','excerpt')
	) );
}
add_action( 'init', 'obf_post_type', 0 );

// Register taxonomy
function obf_post_taxonomy() {
	
	// Labels
	$obf_board_singular = 'Member-Type';
	$obf_board_plural = 'Member-Types';
	$obf_board_labels = array(
		'name' => _x( $obf_board_plural, "taxonomy general name"),
		'singular_name' => _x( $obf_board_singular, "taxonomy singular name"),
		'search_items' =>  __("Search $obf_board_singular"),
		'all_items' => __("All $obf_board_singular"),
		'parent_item' => __("Parent $obf_board_singular"),
		'parent_item_colon' => __("Parent $obf_board_singular:"),
		'edit_item' => __("Edit $obf_board_obf_board_singular"),
		'update_item' => __("Update $obf_board_singular"),
		'add_new_item' => __("Add New $obf_board_singular"),
		'new_item_name' => __("New $obf_board_singular Name"),
	);
    
    $obf_projects_singular = 'Project-Type';
	$obf_projects_plural = 'Project-Types';
	$obf_projects_labels = array(
		'name' => _x( $obf_projects_plural, "taxonomy general name"),
		'singular_name' => _x( $obf_projects_singular, "taxonomy singular name"),
		'search_items' =>  __("Search $obf_projects_singular"),
		'all_items' => __("All $obf_projects_singular"),
		'parent_item' => __("Parent $obf_projects_singular"),
		'parent_item_colon' => __("Parent $obf_projects_singular:"),
		'edit_item' => __("Edit $obf_projects_singular"),
		'update_item' => __("Update $obf_projects_singular"),
		'add_new_item' => __("Add New $obf_projects_singular"),
		'new_item_name' => __("New $obf_projects_singular Name"),
	);

	// Register and attach to respective post type
	register_taxonomy( strtolower($obf_board_singular), 'obf-board', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => false,
		'labels' => $obf_board_labels,
        'show_admin_column' => true
	) );
    
    register_taxonomy( strtolower($obf_projects_singular), 'obf-projects', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => false,
		'labels' => $obf_projects_labels,
        'show_admin_column' => true
	) );
}
add_action( 'init', 'obf_post_taxonomy', 0 );


// Offset the main query on the home page 
function obf_offset_main_query ( $query ) {
     if ( $query->is_home() && $query->is_main_query() && !$query->is_paged() ) {
         $query->set( 'offset', '2' );
    }
 }
add_action( 'pre_get_posts', 'obf_offset_main_query' );

// Move comment field from default top position to bottom
function obf_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
  
add_filter( 'comment_form_fields', 'obf_move_comment_field_to_bottom' );

// Change excerpt length to 20 words
function obf_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'obf_custom_excerpt_length', 10 );
