<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package jtnn
 */

get_header(); ?>

	<!-- Heading and Search -->
	<?php if ( have_posts() ) : ?>
	<section class="hero">
		<div class="container">
			<h1 class="col8"><?php printf( __( 'Search Results for: %s', 'jtnn' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			
			<span class="col4">
				<?php get_search_form(); ?>
			</div>
		</div>
	</section>
	
	<!-- article and sidebar -->
	<section class="content container">
		<article id="post-0" class="col8">
		
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php jtnn_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</article>
		
		<aside class="col4">
			<?php get_sidebar('global'); ?>
		</aside>
	</section>

<?php get_footer(); ?>