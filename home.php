<?php get_header(); ?>
<h3>Dummy post to check if news page is working. Please ignore for the time being. :) </h3>

<!--first post-->
<?php 
$exclude1 = get_cat_ID('fellowships');
$exclude2 = get_cat_ID('about');
$exclude3 = get_cat_ID('events');
$exclude4 = get_cat_ID('home');
$exclude5 = get_cat_ID('meeting minutes');
$q = '-'.$exclude1.',-'.$exclude2.',-'.$exclude3.',-'.$exclude4.',-'.$exclude5;
$args = array(
	'cat' => $q,
    'posts_per_page' => 1,
);
$query = new WP_query ( $args );
if ( $query->have_posts() ) { ?>

	<section class="fellowships list full-width">
	
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

		<article id="post-<?php the_ID(); ?>">
	
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
	
	<div class="right two-thirds news-excerpt">
	
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	   <p>This is the excerpt</p>
		<?php the_excerpt(); ?>
		
	</div>
	
	<div class="clear">
        <p>this is the content</p>
		<?php the_content(); ?>
	</div>
	
	</article>
  		<?php endwhile; ?>
  
  		<?php wp_reset_postdata(); ?>
 
  	</section>
  
<?php } ?>


<!--other posts-->
<?php $exclude11 = get_cat_ID('fellowships');
$exclude22 = get_cat_ID('about');
$exclude33 = get_cat_ID('events');
$exclude44 = get_cat_ID('home');
$exclude55 = get_cat_ID('meeting minutes');
$qq = '-'.$exclude11.',-'.$exclude22.',-'.$exclude33.',-'.$exclude44.',-'.$exclude55;
$args1 = array(
	'cat' => $qq,
    'offset' => 1,
);
$query1 = new WP_query ( $args1 );
if ( $query1->have_posts() ) { ?>

	<section class="fellowships list full-width">
	
		<?php while ( $query1->have_posts() ) : $query1->the_post(); ?>

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
			
			<div class="button"><a href="<?php the_permalink(); ?>">Read more</a></div>
  		
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
