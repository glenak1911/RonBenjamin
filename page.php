<?php get_header(); ?>

		<div class="col-sm-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div> <!-- /.col -->

<?php get_footer(); ?>
