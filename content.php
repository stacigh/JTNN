<?php
/**
 * @package jtnn
 */
?>

		
	<h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<?php jtnn_posted_on(); ?>
	<?php the_excerpt(); ?>
	<div class="button-container">
        <a class="button" href="<?php the_permalink(); ?>" title="Continue reading">Continue Reading</a>
    </div>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'jtnn' ),
			'after'  => '</div>',
		) );
	?>

