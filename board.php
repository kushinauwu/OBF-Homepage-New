<?php
/*
Template Name:board
*/
?>

<?php get_header(); ?>

    <!--main content start -->
           <div class="showcase-wrapper">
               <section class="current-members">
                    <div class="container-fluid">
                    <h1>Board of Directors</h1>
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                        <div class="members-contact">
                            <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        
                        <ul class="list-inline row members-list">
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
                                        <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                                        <a href="<?php echo $member_url; ?>" target="_blank"><?php the_post_thumbnail(); ?></a>
                                            <div class="member-name">
                                                <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                                                <a href="<?php echo $member_url; ?>" target="_blank"><?php the_title(); ?></a>
                                            </div>
                                            <div class="member-position">
                                                <?php the_field('member_position'); ?>
                                            </div>
                                            <div class="member-info">
                                               <?php the_content(); ?>
                                            </div>
                                    </li>
                                </div>
                            <?php endwhile; else : ?>
                            <p><?php __('No post found'); ?></p>
                            <?php endif;
                                wp_reset_postdata(); ?> 
                            </ul>                  
                </div>   
               </section>
                <section class="past-members">
                    <div class="container-fluid">
                    <h1>Past board members</h1>
                        <ul class="list-inline row members-list">
                            <?php
                                $args = array(
                                                'post_type' => 'obf-board',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'member-type',
                                                                'field' => 'slug',
                                                                'terms' => 'past-member',
                                                            )
                                                        ),
                                            );
                                $past_member = new WP_Query( $args );
                            ?>
                            <?php if ( $past_member->have_posts() ) : while ( $past_member->have_posts() ) : $past_member->the_post(); ?>
                                <div class="col-sm-4 col-xs-4">
                                    <li class="member-details">
                                            <!--<img src="member.jpg">-->
                                        <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                                        <a href="<?php echo $member_url; ?>" target="_blank"><?php the_post_thumbnail(); ?></a>
                                            <div class="member-name">
                                                <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                                                <a href="<?php echo $member_url; ?>" target="_blank"><?php the_title(); ?></a>
                                            </div>
                                            <div class="member-position">
                                                <?php the_field('member_position'); ?>
                                            </div>
                                            <div class="member-info">
                                               <?php the_content(); ?>
                                            </div>
                                    </li>
                                </div>
                            <?php endwhile; else : ?>
                            <p><?php __('No post found'); ?></p>
                            <?php endif;
                            wp_reset_postdata(); ?>
                                                        
                            </ul>                
                </div>   
               </section>
               
               <section class="join-board">
                   <div class="container-fluid">
                       <?php $join_args = array(
                                            'name' => 'joining-the-board',
                                            'post-type' => 'post',
                                            'post-status' => 'publish',
                                                ); ?>
                       <?php $join_query = new WP_Query( $join_args ); ?>
                       <?php if ( $join_query->have_posts() ) : while ( $join_query->have_posts() ) : $join_query->the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="row">
                        <div class="joining-text">
                        <div class="col-md-12">
                            <p><?php the_content(); ?></p>
                            </div>
                    </div>
                    </div>
                       <?php endwhile; else : ?>
                            <p><?php __('No post found'); ?></p>
                            <?php endif;
                            wp_reset_postdata(); ?>
                       
                       <div class="row expectations-heading">
                           <?php $expectations_args = array(
                                            'name' => 'board-expectations',
                                            'post-type' => 'post',
                                            'post-status' => 'publish',
                                                ); ?>
                       <?php $expectations_query = new WP_Query( $expectations_args ); ?>
                       <?php if ( $expectations_query->have_posts() ) : while ( $expectations_query->have_posts() ) : $expectations_query->the_post(); ?>
                           <div class="col-xs-12">
                               <h2><?php the_title(); ?></h2>
                           </div>
                        
                        <div class="expectations-text-wrapper">
                            <!--<ul class="expectations-list list-unstyled row">-->
                                <div class="col-xs-12">
                                    
                                    <!--<li class="expectations">-->
                                        <?php the_content(); ?>

                                    <!--</li>-->
                                    
                                </div>
                            <!--</ul>-->
                        </div>
                           <?php endwhile; else : ?>
                            <p><?php __('No post found'); ?></p>
                            <?php endif;
                            wp_reset_postdata(); ?>
                       </div>
                </div>   
               </section>
               
 
                        
               
           </div>

<?php get_footer(); ?>