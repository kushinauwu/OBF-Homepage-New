<?php
/*
Template Name:projects
*/
?>

<?php get_header(); ?>

<!--main content start -->
<div class="showcase-wrapper">
    <section class="current-members">
        <div class="container-fluid">
            <h1>Main Projects</h1>


            <ul class="list-inline row members-list">
                <?php
                                $args = array(
                                                'post_type' => 'obf-projects',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'project-type',
                                                                'field' => 'slug',
                                                                'terms' => 'main-project',
                                                            )
                                                        ),
                                            );
                                $main_project = new WP_Query( $args );
                            ?>
                <?php if ( $main_project->have_posts() ) : while ( $main_project->have_posts() ) : $main_project->the_post(); ?>

                <div class="col-sm-4 col-xs-4">
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
                </div>
                <?php endwhile; else : ?>
                <p>
                    <?php __('No post found'); ?>
                </p>
                <?php endif;
                                wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>

</div>
<!--main content end -->
<!--footer -->
<?php get_footer(); ?>
