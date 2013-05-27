<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package jtnn
 */
?>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'jtnn' ),
				'after'  => '</div>',
				'next_or_number' => 'number',
				'nextpagelink' => __('Next page'),
				'previouspagelink' => __('Previous page'),
				'pagelink' => '%'
			) );
		?>
		
		<div class="container-socialmedia">
			<p>If you found this page informative, please consider sharing it with your friends and family.</p>
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="jointogetherNV"  data-count="none" data-hashtags="JoinTogetherNorthernNevada">Tweet</a>
	
			<span class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="620" data-show-faces="false" data-font="arial" data-action="recommend"></span>
		</div>
