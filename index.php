<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jtnn
 */

get_header(); ?>

	<!-- Heading and Search -->
	<section class="hero">
		<div class="container">
			<h1 class="col8">Blog</h1>
			
			<span class="col4">
				<?php get_search_form(); ?>
			</span>
		</div>
	</section>
	
	<!-- article and sidebar -->
	<section class="content container">
		<article class="col8 blog">
		
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php jtnn_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
		
		</article>
		
		<?php get_sidebar(); ?>
	</section>		

<?php get_footer(); ?>