<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>

	<br><br>
	<div class="separator"></div>
	<br><br>

<?php endwhile; endif; ?>


<?php get_footer(); ?>