<?php get_header(); ?>

<!--main content start -->
<div class="showcase-wrapper">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else : ?>
    <p>
        <?php __('No post found'); ?>
    </p>
    <?php endif;
        wp_reset_postdata(); ?>

    <!-- Projects Section -->
    <section class="projects-section">
        <div class="container-fluid">
            <h1>
                Associated Projects
            </h1>

            <!-- list of linked projects -->
            <ul class="list-inline projects-list">
                <?php
                                $args = array(
                                                'post_type' => 'obf-projects',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'project-type',
                                                                'field' => 'slug',
                                                                'terms' => 'member-projects',
                                                            )
                                                        ),
                                            );
                                $main_projects = new WP_Query( $args );
                            ?>
                <?php if ( $main_projects->have_posts() ) : while ( $main_projects->have_posts() ) : $main_projects->the_post(); ?>
                <li class="project-name">
                    <?php $project_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>
                    <a href="<?php echo $project_url; ?>" target="_blank">
                        <?php the_post_thumbnail(); ?>
                        <div class="project-title">
                            <?php the_title(); ?>
                        </div>
                    </a>
                </li>
                <?php endwhile; else : ?>
                <p>
                    <?php __('No post found'); ?>
                </p>
                <?php endif;
                                wp_reset_postdata(); ?>

            </ul>
            <div class="projects-button">
                <a href="projects" class="button">
                    <span> See more projects</span>
                </a>
            </div>
        </div>
    </section>


    <!--EVENTS SECTION -->
    <section class="events-section">
        <div class="container-fluid">

            <h1>Upcoming events</h1>

            <ul class="list-inline events-list">
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
                <li class="event-details">
                    <?php $event_url = get_post_meta( get_the_ID(), 'event_url', true ); ?>
                    <?php if($event_url) : { ?>
                    <a href="<?php echo $event_url; ?>" target="_blank">

                        <?php if ( has_post_thumbnail() ) : the_post_thumbnail();
                                            else : ?>

                        <img src="">
                        <?php endif; ?>
                    </a>
                    <?php } else : { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : the_post_thumbnail();
                                            else : ?>

                        <img src="">
                        <?php endif; ?>
                    </a>
                    <?php } endif; ?>

                    <div class="event-name">
                        <?php if($event_url) : { ?>
                        <a href="<?php echo $event_url; ?>" target="_blank">
                            <?php the_title(); ?></a>
                        <?php } else : { ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                        <?php } endif; ?>
                    </div>
                    <div class="event-date">
                        <?php $custom_start_date = get_field('start_date', false, false);
                            $custom_start_date = new DateTime($custom_start_date);
                            $custom_end_date = get_field('end_date', false, false);
                            $custom_end_date = new DateTime($custom_end_date);
                            ?>
                        <?php echo $custom_start_date->format('Y-m-d'); ?> to
                        <?php echo $custom_end_date->format('Y-m-d'); ?>
                    </div>
                    <div class="event-location">
                        <?php the_field('location'); ?>
                    </div>

                </li>
                <?php endwhile; else : ?>
                <p>
                    <?php __('No post found'); ?>
                </p>
                <?php endif;
                                wp_reset_postdata(); ?>
            </ul>

        </div>
    </section>

    <!-- Board of Directors -->

    <section class="board-section">
        <div class="container-fluid">
            <h1>Board of directors</h1>

            <ul class="list-inline member-list">
                <div class="members">
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
                    <li class="member-details">
                        <div class="member-photo">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="member-name">
                            <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                            <a href="<?php echo $member_url; ?>" target="_blank">
                                <?php the_title(); ?></a>
                        </div>
                        <div class="member-position">
                            <?php the_field('member_position'); ?>
                        </div>
                    </li>
                    <?php endwhile; else : ?>
                    <p>
                        <?php __('No post found'); ?>
                    </p>
                    <?php endif;
                                wp_reset_postdata(); ?>
                </div>
            </ul>
        </div>
        <div class="board-button">
            <a href="board" class="button">
                <span>More about the OBF board</span>
            </a>
        </div>
    </section>


    <!-- Join section -->
    <section class="join-section">
        <div class="container-fluid">

            <h1>Join Us!</h1>
            <ul class="list-inline join-list">

                <li class="join-details">
                    <a href="donate">
                        <div class="join-image"><img src="<?php echo get_bloginfo('template_url') ?>/img/icons/heart.png"></div>
                        <div class="join-title">
                            Support / Donate!
                        </div>

                    </a>
                </li>
                <li class="join-details">
                    <a href="events/bosc/about#get-involved">
                        <div class="join-image"><img src="<?php echo get_bloginfo('template_url') ?>/img/logos/pear-transparent.png"></div>
                        <div class="join-title">
                            Volunteer for BOSC!
                        </div>

                    </a>
                </li>
                <li class="join-details">
                    <a href="membership">
                        <div class="join-image">
                            <img src="<?php echo get_bloginfo('template_url') ?>/img/logos/obf_logo_icon-circle-tr.png">
                        </div>
                        <div class="join-title">
                            Join the OBF!
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </section>


</div>
<!--main content end -->

<!--footer -->
<?php get_footer(); ?>
