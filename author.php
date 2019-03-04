<?php get_header(); ?>

<div id="content" class="narrowcolumn">

    <!-- This sets the $curauth variable -->
    <div class="container-fluid">
        <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

        <dl>

            <dd>
                <?php echo $curauth->user_description; ?>
            </dd>
        </dl>

        <h2>Posts by
            <?php echo $curauth->nickname; ?>:</h2>

        <ul>
            <!-- The Loop -->

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                    <?php the_title(); ?></a>,
                <?php the_time('d M Y'); ?> in
                <?php the_category('&');?>
            </li>

            <?php endwhile; else: ?>
            <p>
                <?php _e('No posts by this author.'); ?>
            </p>

            <?php endif; ?>

            <!-- End Loop -->

        </ul>
    </div>
</div>
<?php get_footer(); ?>
