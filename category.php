<?php get_header(); ?>

	<main role="main clear">
		<!-- section -->
		<section class="clear">

			<h1><span><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></span></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
