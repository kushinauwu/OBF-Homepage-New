<?php

//require nav walker

require_once('class-wp-bootstrap-navwalker.php');

// theme setup support

function obf_theme_setup() {
    //nav menu support
    register_nav_menus(array(
        'primary' => __('Primary Menu')
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

 
