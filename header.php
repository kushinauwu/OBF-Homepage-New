<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <meta name = "description" content="Open Bioinformatics Foundation theme ">
        <meta name = "keywords" content="Bioinformatics, Technology, OBF, BOSC, Open Bioinformatics Foundation">
        <meta name = "author" content="kushinauwu">
        <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        <title><?php bloginfo('name'); ?> 
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
            <?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    
    <body>     
       <div class="wrapper" id = "main">
       
           <!--navigation bar start -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-12"> 
                            <!--OBF logo -->
                            <div class="navbar-header">
                                <a class="navbar-logo" href="index.html">
                                <img src="<?php echo get_bloginfo('template_url') ?>/img/obf-logo-1.png">
                                </a>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-bar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                           <?php 
                            wp_nav_menu( array(
	'theme_location'  => 'primary',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'bs-example-navbar-collapse-1',
	'menu_class'      => 'navbar nav navbar-nav mr-auto pull-right',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) );
                            ?>
                            <!-- menu bar -->
                           <!-- <div class="collapse navbar-collapse" id="navigation-bar">
                                <ul class="list-inline text-right pull-right">
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li>
                                    <a href="https://www.open-bio.org/wiki/News">News</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="https://github.com/OBF/obf-docs/blob/master/Travel_fellowships.md">
                                        <span>Fellowships<i class="down"></i></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                        <li>
                                            <a href="https://github.com/OBF/obf-docs/blob/master/Travel_fellowships.md">Selection Criteria</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/OBF/obf-docs/blob/master/Travel_fellowships.md">Coverage</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/OBF/obf-docs/blob/master/Travel_fellowships.md">Requirements</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/OBF/obf-docs/blob/master/Travel_fellowships.md">Reviews</a>
                                            </li>
                                            <li>
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScCYMt_Id9FSKzHtOxyBgiOIXa61CLiveqh5JLx5rQsFoW8fA/viewform">Apply</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <span>Events<i class="down"></i></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#">BOSC</a>
                                            </li>
                                            <li>
                                                <a href="#">GSoC</a>
                                            </li>
                                            <li>
                                                <a href="#">Another event</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="https://www.open-bio.org/wiki/Projects">
                                        <span class>Projects<i class="down"></i></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Main Projects</a>
                                            </li>
                                            <li>
                                                <a href="#">Affiliated Projects</a>
                                            </li>
                                            <li>
                                                <a href="#">Other Related projects</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                    <a href="https://www.open-bio.org/wiki/Board">Team</a>
                                    </li>
                                </ul>
                            </div> <!--menu bar end -->
                        </div>
                    </div>
                </div>
            </nav> <!--navigation bar end -->