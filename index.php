<?php get_header(); ?>
           
        <!--main content start -->
        <div class = "showcase-wrapper">
            <!--about OBF -->
            <!-- Search for post tagged accordingly -->
            <?php $query0 = new WP_Query( array( 'tag' => 'index-about' ) ); ?>
            <!-- if exists -->
            <?php if($query0->have_posts()) : ?>
                <?php while($query0->have_posts()) : $query0->the_post(); ?>
            <section class = "about-section">
               
                
                    <div class = "row">
                        <div class="col-sm-5">
                            <!--wrapper for text -->
                            <div class="about-text-wrapper"> 
                                <div class="about-content">
                                    <h1><?php the_title(); ?></h1>
                                    <!--content wrapper-->
                                    <div class="about-content-wrapper">
                                        <!--actual content div-->
                                        <div class="about-content-info"> 
                                           
                                            <?php the_content(); ?>
                                            <!-- button class -->
                                            <div class="about-content-button">
                                                <a href="about" class="button">
                                                <span>
                                                   Learn More </span>
                                                </a>
                                            </div> <!--button class end -->
                                        </div> <!-- actual content info end -->
                                    </div> <!--content wrapper end -->
                                </div>
                            </div> <!-- text wrapper end -->
                        </div>
                        <div class="col-sm-7">
                             <div class = "about-background-image"> <!--Photo by Egor Kamelev from Pexels-->
                                 <img src="<?php echo get_bloginfo('template_url') ?>/img/abstract-animal-aquarium-753266.jpg">
                </div>
                        </div>
                    </div>                                     
            </section> 
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php __('No post found'); ?></p>  
            <?php endif; ?>
            <!-- about OBF end -->
                
            <!-- news/blog section -->
            <!-- Search for post tagged index-news -->
            <?php $query1 = new WP_Query( array( 'tag' => 'index-news' ) ); ?>
            <?php if($query1->have_posts()) : ?>
                <?php while($query1->have_posts()) : $query1->the_post(); ?>
                <section class = "news-section">
                <div class = "news-image" style = "background-image: url(<?php echo get_bloginfo('template_url') ?>/img/aquatic-plants-background-beautiful-424763.jpg);"> <!--Photo by Fancycrave.com from Pexels-->
                </div>
                <div class="container">
                    <div class="row">
                        <!--move content by 5 columns -->
                        <div class="col-md-7 col-md-offset-5">
                        <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <div class="news-button">
                            <a href="/news" class = "button">
                                <span>Read More</span>
                                </a>
                            </div> <!-- news button end -->
                        </div>
                    </div>
                </div>
            </section> <!-- news section end -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php __('No post found'); ?></p>
            <?php endif; ?>
            
            <!--fellowships section -->
            <!-- Search for post tagged accordingly -->
            <?php $query2 = new WP_Query( array( 'tag' => 'index-fellowships' ) ); ?>
            <?php if($query2->have_posts()) : ?>
                <?php while($query2->have_posts()) : $query2->the_post(); ?>         
                <section class = "fellowships-section">
                                
                    <div class = "row">
                        <div class="col-sm-6">
                            <!-- wrapper for text -->
                            <div class="fellowships-text-wrapper">
                                <div class="fellowships-content">
                                    <h1><?php the_title(); ?></h1>
                                    <!-- content wrapper div -->
                                    <div class="fellowships-content-wrapper">
                                        <!-- actual text content div -->
                                        
                                        <div class="fellowships-content-info">
                                            <?php the_content(); ?>
                                            <!--The OBF Travel Fellowship program aims at increasing diverse participation at events promoting open source bioinformatics software development and open science in the biological research community.
                                            
                                            <ul class="fellowship-info-list">
                                <li class="list-question">
                                    <a href="index.html">What are the selection criteria?</a>
                                </li>
                                <li class="list-question">
                                    <a href="index.html">What does the fellowship cover?</a>
                                </li>
                                                <li class="list-question">
                                    <a href="index.html">What do you require of applicants?</a>
                                </li>
                                                <li class="list-question">
                                    <a href="index.html">Who will review the applicants?</a>
                                </li>
                            </ul> -->
                                            <!-- questions list end -->
                                            <!-- apply button -->
                                            <div class="fellowships-apply-button">
                                                <a href="/apply" class="button">
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
                            <div class = "fellowships-background-image"> <!--Photo by Hiếu Hoàng from Pexels-->        
                                <img src="<?php echo get_bloginfo('template_url') ?>/img/biology-blur-close-up-760184.jpg">
                </div>
                        </div>
                    </div>                     
            </section>  <!-- fellowships section end -->  
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php __('No post found'); ?></p>
            <?php endif; ?>
            
            
            <!-- Projects Section -->
            <?php $project_query = new WP_Query( array( 'tag' => 'index-projects' ) ); ?>
            <?php while($project_query -> have_posts()) : $project_query -> the_post(); ?>      
                <section class="projects-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                                    <!-- heading wrapper -->
                                    <div class="projects-text-wrapper">
                                        
                                    <h1><?php the_title(); ?></h1>
                                        </div>
                                
                            <!-- list of linked projects -->
                            <ul class="list-inline row projects-list">
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href = "#">
                                             <?php $image = wp_get_attachment_image_src(get_field('project_logo_1'), 'full'); ?>
                                            <img src="<?php echo $image[0]; ?>" />
                                            
                                            <div class="project-title">
                                                <?php the_field('project_name_1'); ?>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                             <?php $image = wp_get_attachment_image_src(get_field('project_logo_2'), 'full'); ?>
                                            <img src="<?php echo $image[0]; ?>" />
                                            
                                            <div class="project-title">
                                                <?php the_field('project_name_2'); ?>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                         <?php $image = wp_get_attachment_image_src(get_field('project_logo_3'), 'full'); ?>
                                            <img src="<?php echo $image[0]; ?>" />
                                            
                                            <div class="project-title">
                                                <?php the_field('project_name_3'); ?>
                                            </div>
                                            </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                         <?php $image = wp_get_attachment_image_src(get_field('project_logo_4'), 'full'); ?>
                                            <img src="<?php echo $image[0]; ?>" />
                                            
                                            <div class="project-title">
                                                <?php the_field('project_name_4'); ?>
                                            </div>
                                            </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                         <?php $image = wp_get_attachment_image_src(get_field('project_logo_5'), 'full'); ?>
                                            <img src="<?php echo $image[0]; ?>" />
                                            
                                            <div class="project-title">
                                                <?php the_field('project_name_5'); ?>
                                            </div>
                                            </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                         <?php $image = wp_get_attachment_image_src(get_field('project_logo_6'), 'full'); ?>
                                            <img src="<?php echo $image[0]; ?>" />
                                            
                                            <div class="project-title">
                                                <?php the_field('project_name_6'); ?>
                                            </div>
                                            </a>
                                    </li>
                                </div>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 projects-button">
                            <a href="/projects" class="button">
                                <span> See more projects</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>  <!-- projects section end -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            
            
            <!--EVENTS SECTION -->
            <section class="events-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                                    <div class="events-head-wrapper">
                                        <h1>Upcoming events</h1>                                    
                            </div>
                            
                            <?php $event_query = new WP_Query( array( 
                            'tag' => 'index-events',
                            'posts_per_page' => 3) ); ?>
                            <ul class="list-inline row events-list">
                                <?php while($event_query -> have_posts()) : $event_query -> the_post(); ?>
                                <div class="col-sm-4 col-xs-4">
                                    <li class="event-details">
                                        <a href="#">
                                            <?php the_post_thumbnail(); ?>
                                            <div class="event-name">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="event-date">
                                                <?php
                                                //check if value in field is for event Date
                                                $event_date = get_post_meta($post->ID, 'Date', true ); ?>
                                                <?php if ( $event_date )  : echo $event_date; ?>
                                                <?php else : ?>
                                                <p><?php __('TBA'); ?></p>
                                                <?php endif; ?>
                                                <?php wp_reset_postdata(); ?>
                                                
                                                
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                                <!--<div class="col-sm-4 col-xs-4">
                                    <li class="event-details">
                                        <a href="#">
                                            <img src="/img/Pear.png">
                                            <div class="event-name">
                                                BOSC 2019
                                            </div>
                                            <div class="event-date">
                                                TBA
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <li class="event-details">
                                        <a href="#">
                                            <img src="/img/icons8-calendar-100.png">
                                            <div class="event-name">
                                                Another event
                                            </div>
                                            <div class="event-date">
                                                TBA
                                            </div>
                                        </a>
                                    </li>
                                </div> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Board of Directors -->
            <?php $board_query = new WP_Query( array( 'tag' => 'index-board') ); ?>
            <?php while($board_query -> have_posts()) : $board_query -> the_post(); ?>    
             <section class="board-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                           
                                    <div class="board-head-wrapper">
                                        <h1><?php the_title(); ?></h1>
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
                                                'posts_per_page' => 3,
                                            );
                                $present_member = new WP_Query( $args );
                            ?>
                            <?php if ( $present_member->have_posts() ) : while ( $present_member->have_posts() ) : $present_member->the_post(); ?>
                                <div class="col-sm-4 col-xs-4">
                                    <li class="member-details"> 
                                            <?php the_post_thumbnail(); ?>
                                            <div class="member-name">
                                                <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                                                <a href="<?php echo $member_url; ?>" target="_blank"><?php the_title(); ?></a>
                                            </div>
                                            <div class="member-position">
                                                <?php the_field('member_position'); ?>
                                            </div>       
                                    </li>
                                </div>
                                <?php endwhile; else : ?>
                                <p><?php __('No post found'); ?></p>
                                <?php endif;
                                wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 board-button">
                            <a href="/board" class="button">
                                <span> See all members</span>
                            </a>
                        </div>
                </div>
            </section>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            
            <!-- Join section -->
            <section class="join-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                                    <div class="join-head-wrapper">
                                        <h1>Join Us!</h1>
                                    </div>                           
                            <?php $joining_query = new WP_Query( array( 'tag' => 'index-join',
                                                                      'posts_per_page' => 3 ) ); ?>
                            <ul class="list-inline row join-list">
                                <?php while($joining_query -> have_posts()) : $joining_query -> the_post(); ?>
                                <div class="col-sm-4 col-xs-4">
                                    <li class="join-details">
                                        <a href="#">
                                            <?php the_post_thumbnail(); ?>
                                            <div class="join-title">
                                                <?php the_title(); ?>
                                            </div>
                                            
                                        </a>
                                    </li>
                                </div>
                                
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            
        </div> <!--main content end -->
           
           <!--footer -->
<?php get_footer(); ?>