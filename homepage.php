<?php
/* Template Name: Home page */
get_header(); ?>

<section class="hero homepage">
	<div class="container">
	
            <div id="slider" class="nivoSlider">
                <img src="http://placekitten.com/630/354" data-thumb="images/toystory.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="images/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="http://placehold.it/630x354" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="http://placekitten.com/g/630/354" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>		
		
		
	</div>
</section>

<section class="content container">
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
	<article class="col8">
		<hr class="news" />
	</article>
	
	<?php get_sidebar('homepage'); ?>
</section>


<?php get_footer(); ?>