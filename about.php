<?php
/*
Template Name:about
*/
?>

<?php get_header(); ?>

<div class="showcase-wrapper">
    <div class="container-fluid">
        <?php custom_breadcrumbs(); ?>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else : ?>
    <p>
        <?php __('No post found'); ?>
    </p>
    <?php endif;
        wp_reset_postdata(); ?>


</div>

<?php get_footer(); ?>
