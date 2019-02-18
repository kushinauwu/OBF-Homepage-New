<?php get_header(); ?>

<div class="showcase-wrapper">
    <?php custom_breadcrumbs(); ?>

    <div class="container-fluid">
        <div class="navigation-wrapper">
            <div class="posts-navigation">
                <?php // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'obf-new' ),
                'next_text'          => __( 'Next page', 'obf-new' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'obf-new' ) . ' </span>',
            ) ); ?>
            </div>
        </div>

        <!--first post-->
        <?php 
        $obf_exclude = get_cat_ID('home');

        $q = '-'.$obf_exclude;
        
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        
        $query = new WP_query ( array(
            
            'posts_per_page' => 1,
            'cat' => $q,
            'post_type' => 'post',
            'post_status' => 'publish',
        ) );
        if ( $query->have_posts() ) { ?>
        <section class="latest-post">
            <?php while ( $query->have_posts() ) : $query->the_post();
                 if ( is_paged() == false ) { ?>
            <article id="post-<?php the_ID(); ?>">
                <div class="post-display">
                    <div class="row">
                        <div class="latest-post-wrapper">
                            <div class="col-sm-12">

                                <div class="latest-post-content">
                                    <h1><a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?></a></h1>
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="latest-post-background">
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <?php } ?>
            <?php endwhile; 
                                     rewind_posts();
                                     ?>
            <?php 
                                     
                wp_reset_postdata(); ?>
        </section>

        <?php } ?>

        <?php 
        $obf_exclude = get_cat_ID('home');
        $q = '-'.$obf_exclude;
        
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        if ( $paged == 1 ){
      $offset=1;
  } else{
      $offset='';
  }
        $query = new WP_query ( array(
            'paged' => $paged,
            'cat' => $q,
            'post_type' => 'post',
            'post_status' => 'publish',
            'offset' => $offset,
            'number_of_posts' => 15,
        ) );
        
        if ( $query->have_posts() ) { ?>
        <section class="recent-posts grid-container">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="post-display">
                <article>

                    <div class="recent-posts-wrapper">
                        <div class="recent-posts-content">

                            <a href="<?php the_permalink(); ?>">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                            <?php the_excerpt(); ?>

                        </div>
                        <div class="recent-posts-background">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                        </div>
                    </div>
                </article>
            </div>

            <?php endwhile;
                    rewind_posts(); ?>

            <?php 
                                     
                wp_reset_postdata(); ?>
        </section>

        <?php } ?>
        <div class="navigation-wrapper">
            <div class="posts-navigation">
                <?php // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'obf-new' ),
                'next_text'          => __( 'Next page', 'obf-new' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'obf-new' ) . ' </span>',
            ) ); ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
