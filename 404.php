<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package jtnn
 */

get_header(); ?>

	<!-- Article Heading and Search -->
	<section class="hero">
		<div class="container">
			<h1 class="col8"><?php _e( 'We can&rsquo;t find that page...', 'jtnn' ); ?></h1>
			
			<span class="col4">
				<?php get_search_form(); ?>
			</span>
		</div>
	</section>
	
	<!-- article and sidebar -->
	<section class="content container">
		<article  id="post-0" class="col8 post error404 not-found">
			<p><?php _e( 'We&rsquo;re sorry but the page you&rsquo;re looking for has recently moved. Sometimes that happens with site redesigns and we are truly sorry for the error. Please try searching our site or select another page from the menu.', 'jtnn' ); ?></p>
			
		</article>
		
		<aside class="col4">
			<?php get_sidebar('global'); ?>
		</aside>
	</section>

<?php get_footer(); ?>