<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jtnn
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
			
	<!-- Heading and Search -->
	<section class="hero">
		<div class="container">
			<h1 class="col8"><?php the_title(); ?></h1>
			
			<span class="col4">
				<?php get_search_form(); ?>
			</span>
		</div>
	</section>
	
	<!-- article and sidebar -->
	<section class="content container">
		<article id="post-<?php the_ID(); ?>" <?php post_class('col8'); ?>>

			<?php get_template_part( 'content', 'page' ); ?>
			
		</article>

		<?php endwhile; // end of the loop. ?>
		
		<aside class="col4">
			<?php get_sidebar('global'); ?>
		</aside>
	
	</section>
<?php get_footer(); ?>
