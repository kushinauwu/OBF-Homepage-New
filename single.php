<?php get_header(); ?>
           
        <!--main content start -->
        <div class = "showcase-wrapper">
            <!--about OBF -->
            <!-- Search for post tagged accordingly -->
            <!-- if exists -->
            <div class="container-fluid">
                <div class="single-content">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
            
                                    <h1><?php the_title(); ?></h1>       
                                            <p><?php the_content(); ?></p>
                                          
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php __('No post found'); ?></p>  
            <?php endif; ?>
            <!-- about OBF end -->
                </div>
           </div>
        </div> <!--main content end -->
           
           <!--footer -->
<?php get_footer(); ?>