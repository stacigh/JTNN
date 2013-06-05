<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package jtnn
 */
?>

<!-- Homepage Sidebar -->
<aside id="sidebar-home" class="col4">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-homepage' ) ) : ?>
	
		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>
	
	<?php endif; // end sidebar widget area ?>	
</aside>
