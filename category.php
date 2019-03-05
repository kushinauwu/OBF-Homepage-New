<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<div class="showcase-wrapper">

    <div class="container-fluid">
        <?php custom_breadcrumbs(); ?>
        <?php // Check if there are any posts to display ?>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                <?php the_title(); ?></a></h2>
        <small>
            <?php the_time('F jS, Y') ?> by
            <?php the_author_posts_link() ?></small>

        <div class="entry">
            <?php the_excerpt(); ?>
            <p class="postmetadata">
                <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed'); ?>
            </p>
        </div>

        <?php endwhile; ?>
        <?php else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
