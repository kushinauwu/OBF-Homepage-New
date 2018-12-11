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