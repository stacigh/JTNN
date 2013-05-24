<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package jtnn
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jtnn.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" type="text/css">

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	
	<header>		
		<section class="container">
			<div class="branding col6">
	    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	    			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-jtnn.png" alt="Join Together Northern Nevada" />
	    		</a>
			</div>
			
			<div class="calls-to-action col6 clearfix">
				<a href="http://localhost/about/get-involved/" title="Get involved" class="button flat secondary">Get Involved</a>
	        	<a href="http://localhost/about/donate/" title="Donate" class="button flat">Donate</a>
				<h6>Substance Abuse Help <span>775-825-HELP</span></h6>
			</div>
			
			<div class="col12 navigation">
					<nav id="site-navigation col8" class="navigation-main" role="navigation">	
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'top-level' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</section>
	</header>