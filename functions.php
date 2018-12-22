<?php


//enqueue scripts and stylesheet

function obf_scripts_styles() {
    if ( is_page( 'about' ) ) {
        wp_enqueue_style('style-about.css', get_template_directory_uri().'/css/style-about.css',false,'1.0','all');
    }
    else if ( is_page( 'fellowships' ) ) {
        wp_enqueue_style('style-fellowships.css', get_template_directory_uri().'/css/style-fellowships.css',false,'1.0','all');
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

function create_posttype() {

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
add_action( 'init', 'create_posttype' );

 
