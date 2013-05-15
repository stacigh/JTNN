<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package jtnn
 */
?>

	<!-- Article Heading and Search -->
	<?php get_sidebar('footer'); ?>
	
	<section class="copyrights">
		<div class="container">
			<div class="col10">
				<p>&copy; 2013 Join Together Northern Nevada 505 S. Arlington, Suite 110, Reno NV 89509 - Site designed by <a href="http://www.stacigh.com" title="stacigh studios">stacigh studios</a></p>
			</div>
			
			<div class="col2">
				<a href="#" title="JTNN on Facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" title="JTNN on Facebook"></a>
				<a href="#" title="JTNN on Twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" title="JTNN on Twitter"></a>
				<a href="#" title="JTNN on YouTube" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" title="JTNN on YouTube"></a>
			</div>
		</div>
	</section>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>