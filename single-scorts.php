<?php get_header('page'); ?>

<div class="color__black">
	<div class="line__oro_2"></div>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="container">
			<div class="marco-single">
				<div class="ten columns offset-by-one content__single">
					<div class="six columns single__thub">
						<?php if (has_post_thumbnail()) {the_post_thumbnail('scorts-thumbnails');} ?>
					</div>
					<div class="six columns">
						<h3><?php the_title(); ?></h3>
						<div class="line__oro_3"></div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>