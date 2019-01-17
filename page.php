<?php get_header(); ?>

<!--main content start -->
<div class="showcase-wrapper">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <h1>
        <?php the_title(); ?>
    </h1>


    <?php the_content(); ?>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p>
        <?php __('No post found'); ?>
    </p>
    <?php endif; ?>


</div>
<!--main content end -->
<?php get_footer(); ?>
