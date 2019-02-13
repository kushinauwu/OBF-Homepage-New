<?php get_header(); ?>

<!--main content start -->
<div class="showcase-wrapper">
    <!--about OBF -->
    <!-- Search for post tagged accordingly -->
    <?php $query0 = new WP_Query( array( 'tag' => 'index-about' ) ); ?>
    <!-- if exists -->
    <?php if($query0->have_posts()) : ?>
    <?php while($query0->have_posts()) : $query0->the_post(); ?>
    <section class="about-section">


        <div class="row">
            <div class="col-sm-5">
                <div class="about-text-wrapper">
                    <div class="about-content">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        <div class="about-content-wrapper">
                            <div class="about-content-info">

                                <?php the_content(); ?>
                                <div class="about-content-button">
                                    <a href="about" class="button">
                                        <span>
                                            Learn More </span>
                                    </a>
                                </div>
                                <!--button class end -->
                            </div> <!-- actual content info end -->
                        </div>
                        <!--content wrapper end -->
                    </div>
                </div> <!-- text wrapper end -->
            </div>
            <div class="col-sm-7">
                <div class="about-background-image">
                    <!--Photo by Egor Kamelev from Pexels-->
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/page-photos/nomi_harris_talk.jpg">
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p>
        <?php __('No post found'); ?>
    </p>
    <?php endif; ?>
    <!-- about OBF end -->

    <!-- news/blog section -->
    <!--?php $query1 = new WP_Query( array( 'tag' => 'index-news' ) ); ?>-->

    <section class="news-section">
        <div class="news-image" style="background-image: url(<?php echo get_bloginfo('template_url') ?>/img/page-photos/aquatic-plants-background-beautiful-424763.jpg);">
            <!--Photo by Fancycrave.com from Pexels-->
        </div>
        <div class="container">
            <div class="row">
                <!--move content by 5 columns -->
                <div class="col-md-7 col-md-offset-5">
                    <h1>
                        Latest News
                    </h1>


                    <ul class="blog-list">
                        <?php 
        $obf_exclude = get_cat_ID('home');
        $q = '-'.$obf_exclude;
        $query = new WP_query ( array(
            'cat' => $q,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 5,
        ) );
        
        if ( $query->have_posts() ) { ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <li class="list-post">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a></li>
                        <?php endwhile;
                wp_reset_postdata(); 
                                    } ?>
                    </ul>

                    <!--blog post links end -->
                    <div class="news-button">
                        <a href="blog" class="button">
                            <span>Read More</span>
                        </a>
                    </div> <!-- news button end -->
                </div>
            </div>
        </div>
    </section> <!-- news section end -->


    <!--fellowships section -->

    <section class="fellowships-section">

        <div class="row">
            <div class="col-sm-6">
                <div class="fellowships-text-wrapper">
                    <div class="fellowships-content">
                        <h1>
                            Travel Fellowships
                        </h1>
                        <div class="fellowships-content-wrapper">
                            <div class="fellowships-content-info">
                                The OBF Travel Fellowship program aims at increasing diverse participation at events promoting open source bioinformatics software development and open science in the biological research community.
                                <!-- questions list -->

                                <ul class="fellowship-info-list list-unstyled">
                                    <li class="list-question"><a href="http://localhost/obf-new/fellowships#fellowships-selection-criteria" data-wplink-url-error="true">What are the selection criteria?</a></li>
                                    <li class="list-question"><a href="http://localhost/obf-new/fellowships#fellowships-coverage" data-wplink-url-error="true">What does the fellowship cover?</a></li>
                                    <li class="list-question"><a href="http://localhost/obf-new/fellowships#fellowships-requirements" data-wplink-url-error="true">What do you require of applicants?</a></li>
                                    <li class="list-question"><a href="http://localhost/obf-new/fellowships#fellowships-applications" data-wplink-url-error="true">Who will review the applicants?</a></li>
                                </ul>
                                <div class="fellowships-apply-button">
                                    <a href="fellowships#fellowships-applications" class="button">
                                        <span>
                                            Apply </span>
                                    </a>
                                </div> <!-- apply button end -->
                            </div> <!-- text content ends -->
                        </div> <!-- content wrapper end -->
                    </div>
                </div> <!-- text wrappper end -->
            </div>
            <div class="col-sm-6">
                <div class="fellowships-background-image">
                    <!--Photo by Hiếu Hoàng from Pexels-->
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/page-photos/biology-blur-close-up-760184.jpg">
                </div>
            </div>
        </div>
    </section> <!-- fellowships section end -->



    <!-- Projects Section -->

    <section class="projects-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="projects-text-wrapper">
                        <h1>
                            Associated Projects
                        </h1>
                    </div>

                    <!-- list of linked projects -->
                    <ul class="list-inline row projects-list">
                        <?php
                                $args = array(
                                                'post_type' => 'obf-projects',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'project-type',
                                                                'field' => 'slug',
                                                                'terms' => 'main-projects',
                                                            )
                                                        ),
                                            );
                                $main_projects = new WP_Query( $args );
                            ?>
                        <?php if ( $main_projects->have_posts() ) : while ( $main_projects->have_posts() ) : $main_projects->the_post(); ?>
                        <div class="col-sm-3 col-xs-6">
                            <li class="project-name">
                                <?php $project_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>
                                <a href="<?php echo $project_url; ?>">
                                    <?php the_post_thumbnail(); ?>

                                    <div class="project-title">

                                        <a href="<?php echo $project_url; ?>" target="_blank">
                                            <?php the_title(); ?></a>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <?php endwhile; else : ?>
                        <p>
                            <?php __('No post found'); ?>
                        </p>
                        <?php endif;
                                wp_reset_postdata(); ?>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 projects-button">
                    <a href="projects" class="button">
                        <span> See more projects</span>
                    </a>
                </div>
            </div>
        </div>
    </section> <!-- projects section end -->


    <!--EVENTS SECTION -->
    <section class="events-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="events-head-wrapper">
                        <h1>Upcoming events</h1>
                    </div>


                    <ul class="list-inline row events-list">
                        <?php
                                $args = array(
                                                'post_type' => 'obf-events',
                                                
                                                            'meta_key' => 'start_date',
                                                            'orderby' => 'meta_value_num',
                                                            'order' => 'DESC',
                                                        
                                    'posts_per_page' => 3,
                                            );
                                $present_member = new WP_Query( $args );
                            ?>
                        <?php if ( $present_member->have_posts() ) : while ( $present_member->have_posts() ) : $present_member->the_post(); ?>
                        <div class="col-sm-4 col-xs-4">
                            <li class="event-details">
                                <a href="#">
                                    <?php if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                    else : ?>
                                    <img src="" />
                                    <?php endif; ?>
                                    <div class="event-name">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?></a>
                                    </div>
                                    <div class="event-date">
                                        <?php the_field('start_date'); ?> to
                                        <?php the_field('end_date'); ?>
                                    </div>
                                    <div class="event-location">
                                        <?php the_field('location'); ?>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <?php endwhile; else : ?>
                        <p>
                            <?php __('No post found'); ?>
                        </p>
                        <?php endif;
                                wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Board of Directors -->

    <section class="board-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <div class="board-head-wrapper">
                        <h1>Board of directors</h1>
                    </div>
                </div>
                <ul class="list-inline row member-list">
                    <?php
                                $args = array(
                                                'post_type' => 'obf-board',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'member-type',
                                                                'field' => 'slug',
                                                                'terms' => 'current-member',
                                                            )
                                                        ),
                                            );
                                $present_member = new WP_Query( $args );
                            ?>
                    <?php if ( $present_member->have_posts() ) : while ( $present_member->have_posts() ) : $present_member->the_post(); ?>
                    <div class="col-sm-4 col-xs-4">
                        <li class="member-details">
                            <?php the_post_thumbnail(); ?>
                            <div class="member-name">
                                <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                                <a href="<?php echo $member_url; ?>" target="_blank">
                                    <?php the_title(); ?></a>
                            </div>
                            <div class="member-position">
                                <?php the_field('member_position'); ?>
                            </div>
                        </li>
                    </div>
                    <?php endwhile; else : ?>
                    <p>
                        <?php __('No post found'); ?>
                    </p>
                    <?php endif;
                                wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 board-button">
                <a href="board" class="button">
                    <span> See all members</span>
                </a>
            </div>
        </div>
    </section>


    <!-- Join section -->
    <section class="join-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="join-head-wrapper">
                        <h1>Join Us!</h1>
                    </div>
                    <ul class="list-inline row join-list">

                        <div class="col-sm-4 col-xs-4">
                            <li class="join-details">
                                <a href="donate">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/heart.png">
                                    <div class="join-title">
                                        Support / Donate!
                                    </div>

                                </a>
                            </li>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <li class="join-details">
                                <a href="">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/logos/Pear.png">
                                    <div class="join-title">
                                        Volunteer for BOSC!
                                    </div>

                                </a>
                            </li>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <li class="join-details">
                                <a href="membership">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/logos/obf_logo_icon-circle-tr.png">
                                    <div class="join-title">
                                        Join the OBF!
                                    </div>

                                </a>
                            </li>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </section>


</div>
<!--main content end -->

<!--footer -->
<?php get_footer(); ?>