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
                                        <?php the_post_thumbnail(); ?>
                                            <div class="member-name">
                                                <?php the_title(); ?>
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
                    <h1>Joining the board</h1>
                    <div class="row">
                        <div class="joining-text">
                        <div class="col-md-12">
                            <p>Nominations for the Board of Directors may be made by the general membership at any time throughout the year by email to any Board Member</p>
                            <p>The Board tries on an ongoing basis to create opportunities for members of the community to serve, while also ensuring stability of the Board, through expansion of the Board, by replacing a Board member whose term expires,  or by volunteers from the community interested in serving</p>
                            </div>
                    </div>
                    </div>
                       <div class="row expectations-heading">
                           <div class="col-xs-12">
                               <h2>Board Expectations</h2>
                           </div>
                        
                        <div class="expectations-text-wrapper">
                            <ul class="expectations-list list-unstyled row">
                                <div class="col-xs-12">
                                    <li class="expectations">
                                        <p>Participate in the (informal) <strong>regular meetings</strong> of Board members. Meetings are currently about 1 hour, <strong>once a month</strong>, held by Google Hangout. These meetings are for communicating and discussing <strong>current OBF operations and issues</strong>, as well as brainstorming strategic <strong>directions and initiatives</strong>.</p>
                                    </li>
                                    <li class="expectations">
                                        <p>Participate in <strong>public Board meetings</strong>, including <strong>voting in elections</strong> and on matters brought before the OBF Board for approval. Public Board meetings take place <strong>1-2 times a year </strong>via conference call, are about 1 hour in duration, and are usually scheduled in place of a Board hangout.</p>

                                    </li>
                                    <li class="expectations">
                                        <p>Help <strong>promote the causes and objectives</strong> of the OBF, as set and approved by the Board, such as <strong>lobbying funders, employers, and other decision makers</strong> in your network about these objectives and ways to achieve them, as well as promoting the causes of the OBF at community gatherings you attend.</p>
                                    </li>
                                    <li class="expectations">
                                        <p>Contribute to identifying strategies, opportunities, and mechanisms to better <strong>sustain the OBF</strong>, to <strong>grow its member communities</strong>, and to increase its overall <strong>diversity</strong>, including demographic diversity.</p>
                                    </li>
                                </div>
                            </ul>
                        </div>
                       </div>
                </div>   
               </section>             
           </div>

<?php get_footer(); ?>