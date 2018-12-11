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
                <div class = "about-background-image" style="background-image: url(<?php echo get_bloginfo('template_url') ?>/img/abstract-animal-aquarium-753266.jpg);"> <!--Photo by Egor Kamelev from Pexels-->               
                </div>
                <div class = "container">
                    <div class = "row">
                        <div class="col-sm-6">
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
                <div class = "fellowships-background-image" style="background-image: url(<?php echo get_bloginfo('template_url') ?>/img/biology-blur-close-up-760184.jpg);"> <!--Photo by Hiếu Hoàng from Pexels-->               
                </div>
                <div class = "container">                
                    <div class = "row">
                        <div class="col-md-6">
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
                    </div>                  
                </div>
                
            </section>  <!-- fellowships section end -->  
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php __('No post found'); ?></p>
            <?php endif; ?>
            
            
            <!-- Projects Section -->
            <section class="projects-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- heading wrapper -->
                                    <div class="projects-text-wrapper">
                                    <h1>OBF Associated projects</h1>
                                        </div>
                                </div>
                            </div>
                            <!-- list of linked projects -->
                            <ul class="list-inline row projects-list">
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href = "#">
                                            <img src="<?php echo get_bloginfo('template_url') ?>/img/das.jpg">
                                            <div class="project-title">
                                                DAS
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                            <img src="<?php echo get_bloginfo('template_url') ?>/img/biopython.jpg">
                                            <div class="project-title">
                                                Biopython
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/img/biosql.jpg">
                                        <div class="project-title">
                                            BioSQL
                                        </div>
                                            </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/img/emboss.jpg" >
                                        <div class="project-title">
                                            EMBOSS
                                        </div>
                                            </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/img/biojava.jpg">
                                        <div class="project-title">
                                           BioJava
                                        </div>
                                            </a>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <li class="project-name">
                                        <a href="#">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/img/moby.jpg">
                                        <div class="project-title">
                                            MOBY
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
            
            <!--EVENTS SECTION -->
            <section class="events-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="events-head-wrapper">
                                        <h1>Upcoming events</h1>
                                    </div>
                                </div>
                            </div>
                            
                            <ul class="list-inline row events-list">
                                <div class="col-sm-4 col-xs-4">
                                    <li class="event-details">
                                        <a href="#">
                                            <img src="<?php echo get_bloginfo('template_url') ?>/img/GSoC-icon-192.png">
                                            <div class="event-name">
                                                Google Summer of Code 2019
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
                                            <img src="<?php echo get_bloginfo('template_url') ?>/img/Pear.png">
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
                                            <img src="<?php echo get_bloginfo('template_url') ?>/img/icons8-calendar-100.png">
                                            <div class="event-name">
                                                Another event
                                            </div>
                                            <div class="event-date">
                                                TBA
                                            </div>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div> <!--main content end -->
           
           <!--footer -->
<?php get_footer(); ?>