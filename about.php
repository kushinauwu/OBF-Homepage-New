<?php
/*
Template Name:about
*/
?>

<?php get_header(); ?>
           
    <!--main content start -->
    <div class = "showcase-wrapper">
        <!--history section -->
        <?php
            $arg1 = array(
                'name' => 'history'
                );
            $history = new WP_Query( $arg1 );
        ?>
        <?php if ( $history->have_posts() ) : while ( $history->have_posts() ) : $history->the_post(); ?>
        <section class = "history-section">    
            <div class = "container">
                <div class = "row">
                    <div class="col-md-12">
                        <div class="history-text-wrapper"> 
                            <div class="history-content">
                                <h1><?php the_title(); ?></h1>
                                    <div class="history-content-wrapper">
                                        <div class="container">
                                            <div class="history-timeline">
                                            <div class="logo-group">
                                                <div class="logo-circle" id="logo-one">
                                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/biopython.jpg);">
                                                </div>
                                                <div class="logo-circle" id="logo-two">
                                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/biojava.jpg);">
                                                </div>
                                                <div class="logo-circle" id="logo-three">
                                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/bioperl.jpg);">
                                                </div>
                                            </div>  
                                            <div class="bar"></div>
                                            <div class="timeline">
                                                <div class="entries">
                                                    <div class="entry" id="entry-one">
                                                        <div class="year">
                                                            <h1>2001</h1>
                                                        </div>
                                                        <div class="entry-info" id="info-one">
                                                            <p>OBF grows out of volunteer projects BioPerl, BioJava and BioPython and is formally incorporated.</p>
                                                        </div>
                                                    </div>
                                                    <div class="entry" id="entry-two">
                                                        <div class="year">
                                                            <h1>2005</h1>
                                                        </div>
                                                        <div class="entry-info" id="info-two">
                                                            <p>Bylaws enacted for the first time and formal membership created.</p>
                                                        </div>
                                                    </div>
                                                    <div class="entry" id="entry-three">
                                                       <div class="year">
                                                           <h1>2012</h1>
                                                        </div>
                                                        <div class="entry-info" id="info-three">
                                                            <p>Giving up of own incorporation and association with  Software In The Public Interest, Inc</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div> 
                            </div>
                        </div>
                    </div>
                </div>                                     
            </div>   
        </section>  
            <?php endwhile; else : ?>
            <p><?php __('No post found'); ?></p>
        <?php endif;
        wp_reset_postdata(); ?>
          
        
        <!-- about us section -->
        <?php
            $arg2 = array(
                'name' => 'whoweare'
                );
            $about_us = new WP_Query( $arg2 );
        ?>
        <?php if ( $about_us->have_posts() ) : while ( $about_us->have_posts() ) : $about_us->the_post(); ?>
        <section class = "us-section">
            <div class = "us-image" style = "background-image: url(<?php echo get_bloginfo('template_url') ?>/img/animal-biology-blurred-background-1423590.jpg);"> <!--Photo by Fancycrave.com from Pexels-->
            </div>
            <div class="container">
                <div class="row">
                    <!--move content by 5 columns -->
                    <div class="col-md-7 col-md-offset-5">
                    <h1><?php the_title(); ?></h1>
                        <!-- info -->
                        <?php the_content(); ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; else : ?>
            <p><?php __('No post found'); ?></p>
        <?php endif;
        wp_reset_postdata(); ?>
        
        <!--activities section -->
        <?php
            $arg3 = array(
                'name' => 'activities'
                );
            $activities = new WP_Query( $arg3 );
        ?>
        <?php if ( $activities->have_posts() ) : while ( $activities->have_posts() ) : $activities->the_post(); ?>
         <section class="obf-activity">
                <div class="container">
                    <div class="row">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="act-left-new" id="one">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/1conf2.png">
                                    <div class="small-left">
                                        <p>Running and supporting the BOSC Conferences.</p>
                                    </div>
                                </div>
                                <div class="act-right-new" id="one">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/2hackathon.png">
                                    <div class="small-right">
                                        <p>Organizing and supporting developer-centric "Hackathon" events.</p>
                                    </div>
                                </div>
                            </div>
                
                            <div class="row"> 
                                <div class="act-left-new" id="two">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/googlesummerofcode.png">
                                    <div class="small-left">
                                        <p>Participating in the Google Summer of Code program on behalf of our member projects as an umbrella mentoring organization.</p>
                                    </div>
                                </div>               
                                <div class="act-right-new" id="two">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/travel_fellowship.png">
                                    <div class="small-right">
                                        <p>Running the OBF Travel Fellowship program (launched March 2016).</p>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row">
                                <div class="act-left-new" id="three">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/servers_and_stuff.png">
                                    <div class="small-left">
                                        <p>Managing servers, colocation facilities, bank account, domain names, and other assets for the benefit of our member projects.</p>
                                    </div>                   
                                </div>
                                <div class="act-right-new" id="three">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/public_opinion.png">
                                    <div class="small-right">
                                        <p>Public opinion and policy statements about matters related to Open Source and Open Science in bioinformatics.</p>
                                    </div>
                                </div>
                            </div>              
                        </div>
                    </div>
                </div>
            </section>
            <?php endwhile; else : ?>
            <p><?php __('No post found'); ?></p>
        <?php endif;
        wp_reset_postdata(); ?>
    </div> <!--main content end -->
           
           <!--footer -->
<?php get_footer(); ?>

