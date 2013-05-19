<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package jtnn
 */
?>


	<!-- Article Heading and Search -->
	<section class="hero">
		<div class="container">
			<h1 class="col8"><?php the_title(); ?></h1>
			
			<div class="col4">
				<?php get_search_form(); ?>
			</div>
		</div>
	</section>
	
	<!-- article and sidebar -->
	<section class="content container">
		<article id="post-<?php the_ID(); ?>" class="col8 <?php post_class(); ?> ">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'jtnn' ),
					'after'  => '</div>',
				) );
			?>
		</article>
		
		<aside class="col4">
			<?php get_sidebar('global'); ?>
		</aside>
	</section>
