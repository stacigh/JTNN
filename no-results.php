<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jtnn
 */
?>
	<!-- Heading and Search -->
	<section class="hero">
		<div class="container">
			<h1 class="col8"><?php _e( 'Nothing Found', 'jtnn' ); ?></h1>
			
			<span class="col4">
				<?php get_search_form(); ?>
			</span>
		</div>
	</section>
	
	<!-- article and sidebar -->
	<section class="content container">
		<article id="post-0" class="col8 post no-results not-found">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'jtnn' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	
			<?php elseif ( is_search() ) : ?>
	
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jtnn' ); ?></p>
	
			<?php else : ?>
	
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'jtnn' ); ?></p>
	
			<?php endif; ?>
		</article>
		
		<aside class="col4">
			<?php get_sidebar('global'); ?>
		</aside>
	</section>
