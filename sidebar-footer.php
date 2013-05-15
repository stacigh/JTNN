<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package jtnn
 */
?>

<!-- Footer Widget Areas -->
	<section class="hero footer">
		<div class="container">
			<div class="col4">
				<?php do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'sidebar-footer-one' ) ) : ?>
				
				<?php endif; // end sidebar widget area ?>
			</div>
			
			<div class="col4">
				<?php do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'sidebar-footer-two' ) ) : ?>
				
				<?php endif; // end sidebar widget area ?>
			</div>
			
			<div class="col4">
				<?php do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'sidebar-footer-three' ) ) : ?>
				
				<?php endif; // end sidebar widget area ?>
			</div>
		</div>
	</section>
