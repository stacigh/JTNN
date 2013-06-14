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
				<p>&copy; <?php echo date("Y"); ?> Join Together Northern Nevada 505 S. Arlington, Suite 110, Reno NV 89509</p>
			</div>
			
			<div class="col2">
				<a href="https://www.facebook.com/pages/Join-Together-Northern-Nevada/171403951769" title="JTNN on Facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-24.png" title="JTNN on Facebook"></a>
				<a href="https://twitter.com/jointogetherNV" title="JTNN on Twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-24.png" title="JTNN on Twitter"></a>
				<a href="http://www.youtube.com/jtnorthernnevada" title="JTNN on YouTube" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube-24.png" title="JTNN on YouTube"></a>
			</div>
		</div>
	</section>

</div><!-- #page -->

<?php wp_footer(); ?>


<!-- Facebook API Stuff -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=367986913312076";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Twitter API Stuff -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41647380-1', 'jtnn.org');
  ga('send', 'pageview');

</script>

</body>
</html>