<?php
/*
Template Name:events
*/
?>

<?php get_header(); ?>


<div class="showcase-wrapper">
    <?php custom_breadcrumbs(); ?>

    <?php
    /* Check today's date and find events that start on or before today and end on or after today. */
        $today = date('Ymd');
        $args = array(
                    'post_type' => 'obf-events',
                    'meta_query' => array(
                                        array(
                                            'key' => 'start_date',
                                            'compare' => '<=',
                                            'value' => $today,
                                            ),
                                        array(
                                            'key' => 'end_date',
                                            'compare' => '>=',
                                            'value' => $today,
                                            )
                                        ),
                    'meta_key' => 'start_date',
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                    );
        $ongoing_events = new WP_Query( $args );

        /*Show ongoing events section only if there are current events */
        if ( $ongoing_events->have_posts() ) : ?>
    <div class="ongoing-events">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ongoing-events-head">
                        <h1>Ongoing Events</h1>
                    </div>
                </div>
            </div>

            <?php while ( $ongoing_events->have_posts() ) : $ongoing_events->the_post(); ?>
            <div class="card container mb-4">
                <div class="card-data container-grid">
                    <div class="card-img">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                        </h2>

                        <p class="card-text card-date"><i class="fas fa-calendar-day fa-lg"></i>
                            <?php the_field('start_date'); ?> to
                            <?php the_field('end_date'); ?>
                        </p>

                        <?php if( get_field('location') ) : ?>
                        <p class="card-text card-location"><i class="fas fa-map-marked-alt"></i>
                            <?php the_field('location'); ?>
                        </p>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="card-footer card-info">
                    <?php if ( has_excerpt() ) : the_excerpt();
                        else : the_content(); 
                        endif; ?>
                </div>
            </div>
            <?php endwhile; else : ?>
            <p>
                <?php __('Sorry, there are no current events and conferences. '); ?>
            </p>
            <?php endif;    wp_reset_postdata(); ?>
        </div>
    </div>


    <?php
    /* Check today's date and find events that start after today. that is in the future. */
        $today = date('Ymd');
        $args = array(
                    'post_type' => 'obf-events',
                    'meta_query' => array(
                                        'key' => 'start_date',
                                        'compare' => '>',
                                        'value' => $today,
                                        ),
                    'meta_key' => 'start_date',
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                    );
        $upcoming_events = new WP_Query( $args );
    
    /* If there are future events, show the upcoming events section. */
    if ( $upcoming_events->have_posts() ) : ?>
    <div class="upcoming-events">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="upcoming-events-head">
                        <h1>Upcoming Events</h1>
                    </div>
                </div>
            </div>

            <?php while ( $upcoming_events->have_posts() ) : $upcoming_events->the_post(); ?>
            <div class="card container mb-4">
                <div class="card-data container-grid">
                    <div class="card-img">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                        </h2>

                        <p class="card-text card-date"><i class="fas fa-calendar-day fa-lg"></i>
                            <?php the_field('start_date'); ?> to
                            <?php the_field('end_date'); ?>
                        </p>

                        <?php if( get_field('location') ) : ?>
                        <p class="card-text card-location"><i class="fas fa-map-marked-alt"></i>
                            <?php the_field('location'); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-footer card-info">
                    <?php if ( has_excerpt() ) : the_excerpt();
                        else : the_content(); 
                        endif; ?>
                </div>
            </div>
            <?php endwhile; else : ?>
            <p>
                <?php __('Sorry, there are no upcoming events right now. Please check back again later. :)'); ?>
            </p>
            <?php endif;
                    wp_reset_postdata(); ?>
        </div>
    </div>


    <div class="past-events">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="past-events-head">
                        <h1>Past events</h1>
                    </div>
                </div>
            </div>

            <div class="past-events-content-wrapper">
                <div class="past-events-content">
                    <ul class="past-events-list list-unstyled">

                        <?php
                        /* Filter for past events starts after heading display, as the list of past events will never be empty. */
                            $today = date('Ymd');
                            $args = array(
                                        'post_type' => 'obf-events',
                                        'meta_query' => array(
                                                            'key' => 'end_date',
                                                            'compare' => '<',
                                                            'value' => $today,
                                                            ),
                                        'meta_key' => 'end_date',
                                        'orderby' => 'meta_value',
                                        'order' => 'ASC',
                                        );
                            $past_events = new WP_Query( $args );
                        if ( $past_events->have_posts() ) : while ( $past_events->have_posts() ) : $past_events->the_post();
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>

                            <p class="info-past">
                                <?php the_field('start_date'); ?> to
                                <?php the_field('end_date');
                                if( get_field('location') ) : ?>
                                ,
                                <?php the_field('location'); endif; ?>.</p>
                        </li>
                        <?php endwhile; else : ?>
                        <p>
                            <?php __('No past events found!'); ?>
                        </p>
                        <?php endif;
                                wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
