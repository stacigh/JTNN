<?php
/**
 * The Template for displaying all single posts.
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
		<article id="post-<?php the_ID(); ?>" <?php post_class('col8 blog'); ?>>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>
		
		</article>
		
		<aside class="col4">
			<?php get_sidebar(); ?>
		</aside>
	</section>
<?php get_footer(); ?>