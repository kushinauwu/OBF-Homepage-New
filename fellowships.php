<?php
/*
Template Name:fellowships
*/
?>

<?php get_header(); ?>
<!--main content-->
<div class="showcase-wrapper">
    <?php $arg1 = array( 'name' => 'travel-fellowships-introduction' );
            $introduction = new WP_Query( $arg1 ); ?>
        <?php if ( $introduction->have_posts() ) : while ( $introduction->have_posts() ) : $introduction->the_post(); ?>
            <section class="introduction">
                <div class="container-fluid">
                    <h1><?php the_title(); ?></h1>
                    <div class="row">
                        
                         <div class="col-xs-9">
                            <div class="introduction-text-wrapper">
                                <div class="introduction-text">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="introduction-icon">
                                <img src="<?php echo get_bloginfo('template_url') ?>/img/diversity.png" />
                                <img src="<?php echo get_bloginfo('template_url') ?>/img/opensource.png" />
                            </div>
                        </div>                      
                    </div>
                </div>   
            </section>
     <?php endwhile; else : ?>
            <p><?php __('No post found'); ?></p>
        <?php endif;
        wp_reset_postdata(); ?>      
            
        <!--selection criteria-->
    <?php $arg2 = array( 'name' => 'selection-criteria' );
            $selection_criteria = new WP_Query( $arg2 ); ?>
        <?php if ( $selection_criteria->have_posts() ) : while ( $selection_criteria->have_posts() ) : $selection_criteria->the_post(); ?>
            <section class="selection-criteria" id="fellowships-selection-criteria">
                    <div class="container-fluid">
                        
                                <h1><?php the_title(); ?></h1>
                         
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="criterion-number">
                                    <h2>1</h2></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="criterion-heading">
                                <h2><?php the_field('criterion_heading_1'); ?></h2>
                                    </div>
                            </div>
                            <div class="criterion-text">
                            <p><?php the_field('criterion_text_1'); ?></p>
                                </div>
                            <!--<span class="note">--><!--</span>-->
                            <div class="row">
                                <div class="criterion-req">
                               <div class="col-xs-2">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/deadline.png"/>
                                </div>
                                <div class="col-xs-10">
                                    <p><?php the_field('note_1'); ?>
                                    </p>
                                </div>
                                     
                                    </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-xs-2">
                                <div class="criterion-number">
                                    <h2>2</h2></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="criterion-heading">
                                <h2><?php the_field('criterion_heading_2'); ?>
</h2>
                                    </div>
                            </div>
                            <div class="criterion-text">
                            <p><?php the_field('criterion_text_2'); ?>
 </p>
                                </div>
                            <!--<span class="note">--><!--</span>-->
                            <div class="row">
                                <div class="criterion-req">
                               <div class="col-xs-2">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/filter.png"/>
                                </div>
                                <div class="col-xs-10">
                                    <p><?php the_field('note_2'); ?>
                                    </p>
                                </div>
                                     
                                    </div>
                            </div>
                        </div>
                                          <div class="row">
                            <div class="col-xs-2">
                                <div class="criterion-number">
                                    <h2>3</h2></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="criterion-heading">
                                <h2><?php the_field('criterion_heading_3'); ?>
</h2>
                                    </div>
                            </div>
                            <div class="criterion-text">
                            <p><?php the_field('criterion_text_3'); ?>

 </p>
                                </div>
                            <!--<span class="note">--><!--</span>-->
                            <div class="row">
                                <div class="criterion-req">
                               <div class="col-xs-2">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/select-diversity.png"/>
                                </div>
                                <div class="col-xs-10">
                                    <p><?php the_field('note_3'); ?>
                                    </p>
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
    
               <!--coverage-->
    <?php $arg2 = array( 'name' => 'coverage' );
            $coverage = new WP_Query( $arg2 ); ?>
        <?php if ( $coverage->have_posts() ) : while ( $coverage->have_posts() ) : $coverage->the_post(); ?>
               <section class="coverage" id="fellowships-coverage">
                <div class="container-fluid">
                    <h1><?php the_title(); ?></h1> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="coverage-text">
                                <ul class="coverage-points list-unstyled">
                                    <li>
                                        <p><?php the_field('fellowship_note_1'); ?></p>
                                    </li>
                                    <li>
                                        <p><?php the_field('fellowship_note_2'); ?></p>
                                    </li>
                                    <li>
                                        <p><?php the_field('fellowship_note_3'); ?></p>
                                    </li>
                                    <li>
                                        <p><?php the_field('fellowship_note_3'); ?></p>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    </div>
                </div>   
            </section>
    <?php endwhile; else : ?>
            <p><?php __('No post found'); ?></p>
        <?php endif;
        wp_reset_postdata(); ?>
    
    
               <!--applicant requirements -->
    <?php $arg2 = array( 'name' => 'requirements' );
            $requirements = new WP_Query( $arg2 ); ?>
        <?php if ( $requirements->have_posts() ) : while ( $requirements->have_posts() ) : $requirements->the_post(); ?>
               <section class="applicant-requirements" id="fellowships-requirements">
                    <div class="container-fluid">
                        <h1><?php the_title(); ?></h1>
                         
                        <div class="row">
                            <div class="applicant-req-text">
                                <div class="col-md-12">
                                    <?php the_content(); ?>
                                    </div>
                            </div>
                        </div>
                   </div>
                </section>
    <?php endwhile; else : ?>
            <p><?php __('No post found'); ?></p>
        <?php endif;
        wp_reset_postdata(); ?>
    
               <!--applications -->
    <?php $arg2 = array( 'name' => 'applications' );
            $applications = new WP_Query( $arg2 ); ?>
        <?php if ( $applications->have_posts() ) : while ( $applications->have_posts() ) : $applications->the_post(); ?>
               <section class="applications" id="fellowships-applications">
                   <div class="container-fluid">
                        <h1><?php the_title(); ?></h1>
                       <div class="row">
                            <div class="col-md-12">
                                <div class="applications-heading">
                                    <h2>Who will review the applications?</h2>
                                    </div>
                                    <div class="applications-text">
                                        <?php the_field('applications_reviewers'); ?>
                                    </div>
                                
                                <div class="applications-heading">
                                    <h2>How to apply?</h2>
                                    </div>
                                    <div class="applications-text">
                                        <div class="applications-blurb">
                                            <p><?php the_field('applicationinfo_and_link'); ?></p>
                                        </div>
                                        <p><?php the_field('application_deadline'); ?></p>
                                    </div>
                                
                           </div>
                       </div>
                   </div>
               </section>
     <?php endwhile; else : ?>
            <p><?php __('No post found'); ?></p>
        <?php endif;
        wp_reset_postdata(); ?>
           </div>
           
<!--footer -->
<?php get_footer(); ?>