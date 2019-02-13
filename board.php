<?php
/*
Template Name:board
*/
?>

<?php get_header(); ?>

<div class="showcase-wrapper">
    <section class="current-members">
        <div class="container-fluid">
            <h1>Board of Directors</h1>
            <div class="members-contact">
                <p>The board can be contacted via email at <a href="mailto:board@open-bio.org">board@open-bio.org</a> (or in case of mailing list problems, try <a href="mailto:obf-board@googlegroups.com">obf-board@googlegroups.com</a> as a fall back), and can be reached via Twitter @<a href="https://twitter.com/OBF_news">OBF_News</a>. The minutes of the previous meetings can be found <a href="http://localhost/obf-new/board/meeting-minutes/">here</a>.</p>
            </div>

            <ul class="list-inline members-list">
                <div class="current-members-grid">

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
                        <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                        <a href="<?php echo $member_url; ?>" target="_blank">
                            <?php the_post_thumbnail(); ?></a>
                        <div class="member-name">
                            <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                            <a href="<?php echo $member_url; ?>" target="_blank">
                                <?php the_title(); ?></a>
                        </div>
                        <div class="member-position">
                            <?php the_field('member_position'); ?>
                        </div>
                        <div class="member-info">
                            <?php the_content(); ?>
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
    </section>

    <section class="past-members">
        <div class="container-fluid">
            <h1>Past board members</h1>
            <ul class="list-inline members-list">
                <div class="past-members-grid">
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
                    <li class="member-details">
                        <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                        <a href="<?php echo $member_url; ?>" target="_blank">
                            <?php the_post_thumbnail(); ?></a>
                        <div class="member-name">
                            <?php $member_url = get_post_meta( get_the_ID(), 'external_url', true ); ?>
                            <a href="<?php echo $member_url; ?>" target="_blank">
                                <?php the_title(); ?></a>
                        </div>
                        <div class="member-position">
                            <?php the_field('member_position'); ?>
                        </div>
                        <div class="member-info">
                            <?php the_content(); ?>
                        </div>
                    </li>
                    <?php endwhile; else : ?>
                    <p>
                        <?php __('No post found'); ?>
                    </p>
                    <?php endif;    wp_reset_postdata(); ?>
                </div>
            </ul>
        </div>
    </section>

    <section class="join-board">
        <div class="container-fluid">
            <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <div class="joining-text">
                    <div class="col-md-12">
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile; else : ?>
            <p>
                <?php __('No post found'); ?>
            </p>
            <?php endif;    wp_reset_postdata(); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
