<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package jtnn
 */
?>

<!-- Horizontal Sidebar -->
<section class="content container">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) : ?>
	
	
	<?php endif; // end sidebar widget area ?>
</section>
