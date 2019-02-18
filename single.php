<?php get_header(); ?>

<!--main content start -->
<div class="showcase-wrapper">
    <?php custom_breadcrumbs(); ?>

    <div class="container-fluid">
        <div class="navigation-wrapper">
            <div class="posts-navigation">
                <?php the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post: ', 'obf-new' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post: ', 'obf-new' ) . '</span> ' . 
								'<span class="post-title">%title</span>',
						)
					); ?>
            </div>
        </div>
        <div class="single-content">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

            <h1>
                <?php the_title(); ?>
            </h1>
            <span class="author-date">Posted on
                <?php the_date(); ?> by
                <?php the_author(); ?></span>
            <p>
                <?php the_content(); ?>
            </p>
            <div class="navigation-wrapper">
                <div class="posts-navigation">
                    <?php the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post: ', 'obf-new' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post: ', 'obf-new' ) . '</span> ' . 
								'<span class="post-title">%title</span>',
						)
					); ?>
                </div>
            </div>

            <?php if( is_single() ) : comments_template(); ?>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p>
                <?php __('No post found'); ?>
            </p>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--main content end -->

<!--footer -->
<?php get_footer(); ?>
