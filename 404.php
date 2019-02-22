<?php
/*
Template Name:404
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content container" role="main">
        <div class="errorpage-wrapper">

            <h2>
                <?php _e( 'Error 404: page not found' ); ?>
            </h2>
            <h5>We can't find the page you looked for. Please try going back to the <a href="<?php echo home_url(); ?>">homepage.</a> </h5>

        </div>
    </div>
</div>

<?php get_footer(); ?>
