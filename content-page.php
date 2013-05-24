<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package jtnn
 */
?>


	<!-- Heading and Search -->
	<section class="hero">
		<div class="container">
			<h1 class="col8"><?php the_title(); ?></h1>
			
			<span class="col4">
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
			
			<div class="container-socialmedia">
				<p>If you found this page informative, please consider sharing it with your friends and family.</p>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="jointogetherNV"  data-count="none" data-hashtags="JoinTogetherNorthernNevada">Tweet</a>
	
				<span class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="620" data-show-faces="false" data-font="arial" data-action="recommend"></span>
			</div>
		</article>
		
		<aside class="col4">
			<?php get_sidebar('global'); ?>
		</aside>
	</section>
