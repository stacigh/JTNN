<?php
/* Template Name: Home page */
get_header(); ?>

<?php
global $wp_query;
$postid = $wp_query->post->ID;
$youtube = get_post_meta($postid, 'youtube-video-id', true);
wp_reset_query();
?>

<section class="hero homepage">
	<div class="container">
		<div class="hero-slideshow">
		<?php echo do_shortcode('[jtnn_homepage_slideshow]'); ?>
		</div>
		
		<div class="hero-youtube">
			<iframe width="260" height="147" src="http://www.youtube.com/embed/<?php echo $youtube ?>" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="hero-social-banner">
			<img src="<?php echo get_template_directory_uri(); ?>/img/banner-subscribe.png" title="JTNN on YouTube">
		</div>
		
		<div class="hero-social">
			<div class="social-icon-wrap">
				<a href="https://www.facebook.com/pages/Join-Together-Northern-Nevada/171403951769" title="JTNN on Facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-48.png" title="JTNN on Facebook"></a>
			</div>
			
			<div class="social-icon-wrap">
				<a href="https://twitter.com/jointogetherNV" title="JTNN on Twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-48.png" title="JTNN on Twitter"></a>
			</div>
			
			<div class="social-icon-wrap">
				<a href="http://www.youtube.com/jtnorthernnevada" title="JTNN on YouTube" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube-48.png" title="JTNN on YouTube"></a>
			</div>
		</div>
		
	</div>
</section>

<section class="container home-intro">
	<article class="col12">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'homepage' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>
	</article>
</section>

<?php get_sidebar('horizontal'); ?>

<section class="content container">
	<article id="content-home" class="col8">
		<hr class="news" />
		
		<?php // Get RSS Feed(s)
		include_once( ABSPATH . WPINC . '/feed.php' );
		
		// Get a SimplePie feed object from the specified feed source.
		$rss = fetch_feed( 'feed://feeds.feedburner.com/DrugfreeOrgJoinTogether' );
		
		if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly
		
		    // Figure out how many total items there are, but limit it to 5. 
		    $maxitems = $rss->get_item_quantity( 2 ); 
		
		    // Build an array of all the items, starting with element 0 (first element).
		    $rss_items = $rss->get_items( 0, $maxitems );
		
		endif;
		?>
		

	    <?php if ( $maxitems == 0 ) : ?>
	        <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
	    <?php else : ?>
	        <?php // Loop through each feed item and display each item as a hyperlink. ?>
	        <?php foreach ( $rss_items as $item ) : ?>
	        	
	        	
	        	<article class="jtfeed">
	        		<h3>
	        			<a href="<?php echo esc_url( $item->get_permalink() ); ?>" 
	        			title="<?php printf( __( 'Posted %s', 'my-text-domain' ), $item->get_date('j F Y | g:i a') ); ?>">
	                    	<?php echo esc_html( $item->get_title() ); ?>
	                    </a>
	                </h3>
	                
	                <p class="metadata">Posted on <?php echo esc_html( $item->get_date('F j, Y') ); ?> by <?php echo esc_html( $item->get_author()->get_name() ); ?> | More News on <a href="http://www.drugfree.org/join-together" title="Drugfree.org" target="_blank">Drugfree.org</a></p>
	                
	                <p><?php echo strip_tags( $item->get_description() ); ?></p>
	                
	                <div class="button-container">
	                <a class="button" href="<?php echo esc_url( $item->get_permalink() ); ?>" title="Continue reading" target="_blank">Continue Reading</a>
	                </div>
	        	</article>
	        
	      
	        <?php endforeach; ?>
	    <?php endif; ?>
	    
	    <p class="read-more-feed">Read more news at <a href="http://www.drugfree.org/join-together" title="Drugfree.org" target="_blank">Drugfree.org</a>
		
	</article>
	
	<?php get_sidebar('homepage'); ?>
</section>


<?php get_footer(); ?>