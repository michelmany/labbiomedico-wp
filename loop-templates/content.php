<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">

		<div class="col-md-3">
	   		<?php echo get_the_post_thumbnail( $post->ID, 'large img-fluid' ); ?> 
		</div>

		<div class="col-md-9">

		<?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

			<div class="entry-content">

	            <?php the_excerpt(); ?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					) );
				?>
		        
			</div><!-- .entry-content -->
		</div>

	</div>

     
</article><!-- #post-## -->

<hr class="m-b-3">