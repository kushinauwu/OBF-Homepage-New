<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Open Bioinformatics Foundation theme ">
    <meta name="keywords" content="Bioinformatics, Technology, OBF, BOSC, Open Bioinformatics Foundation">
    <meta name="author" content="kushinauwu">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>
        <?php bloginfo('name'); ?>
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        <?php wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper" id="main">

        <!--navigation bar start -->
        <div class="navbar navbar-expand-md">
            <div class="container">
                <!--OBF logo -->
                <div class="navbar-header">
                    <a class="navbar-logo" href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/obf-logo-header.png">
                    </a>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation-bar" aria-controls="navigation-bar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'obf-new' ); ?>">
                    <span class="sr-only navbar-toggler-icon"></span>
                    <i class="fas fa-bars fa-4x"></i>

                </button>
                <nav class="collapse navbar-collapse" id="navigation-bar" role="navigation" aria-label="Main Menu">
                    <span class="sr-only">
                        <?php esc_html_e( 'Main Menu', 'obf-new' ); ?></span>
                    <?php 
                            wp_nav_menu( array(
	'theme_location'  => 'primary',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'false',
	'menu_class'      => 'navbar nav navbar-nav mr-auto pull-right',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) );
                            ?>
                </nav>
            </div>
        </div>
        <!--navigation bar end -->
