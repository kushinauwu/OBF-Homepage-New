<?php get_header(); ?>
<h1>DUmmy post to check if news page is working. Please ignore for th time being. :) </h1>

<!--first post-->
<?php $args = array(
	'category_name' => 'fellowships',
    'posts_per_page' => 1,
);
$query = new WP_query ( $args );
if ( $query->have_posts() ) { ?>

	<section class="fellowships list full-width">
	
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'fellowship' ); ?>>
	
	<div class="left one-third">
	
		<?php if ( has_post_thumbnail() ) { ?>
		
			<a href="<?php the_permalink(); ?>">
		
				<?php the_post_thumbnail( 'medium', array(
					'class' => 'left',
					'alt'	=> get_the_title()
					) );
				?>
			
			</a>
		
		<?php }?>
		
	</div>
	
	<div class="right two-thirds fellowship-excerpt">
	
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	
		<?php the_excerpt(); ?>
		
	</div>
	
	<div class="clear">
		<?php the_content(); ?>
	</div>
	
	</article>
  		<?php endwhile; ?>
  
  		<?php wp_reset_postdata(); ?>
 
  	</section>
  
<?php } ?>


<!--other posts-->
<?php $args = array(
	'category_name' => 'fellowships',
);
$query = new WP_query ( $args );
if ( $query->have_posts() ) { ?>

	<section class="fellowships list full-width">
	
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'fellowship', 'left', 'half' ) ); ?>>
  
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						
			<?php if ( has_post_thumbnail() ) { ?>
			
				<a href="<?php the_permalink(); ?>">
			
					<?php the_post_thumbnail( 'medium', array(
						'class' => 'left',
						'alt'	=> get_the_title()
						) );
					?>
				
				</a>
			
			<?php }?>
			
					
			<?php the_excerpt(); ?>
			
			<div class="button"><a href="<?php the_permalink(); ?>">Explore the Book</a></div>
  		
  		</article>
  
  		<?php endwhile; ?>
  
  		<?php wp_reset_postdata(); ?>
 
  	</section>
  
<?php } ?>

<section class="blog-posts">
    <div class="container-fluid">
        <div class="first-post">
            <div class="row">
                <div class="col-sm-4">
                    <div class="post-thumbnail">
                        <img src="<?php echo the_post_thumbnail(); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
