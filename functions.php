<?php
/**
 * jtnn functions and definitions
 *
 * @package jtnn
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 960; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'jtnn_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function jtnn_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on jtnn, use a find and replace
	 * to change 'jtnn' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'jtnn', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	
	// Register Image Sizes
	add_image_size( 'JTNN Hero', 620, 310, true );
	add_image_size( 'JTNN Large', 450, 338, true );
	add_image_size( 'JTNN Medium', 311, 233, true );
	add_image_size( 'JTNN Small', 251, 188, true );
	
	function jtnn_display_image_size_names_muploader( $sizes ) {
	
	    $new_sizes = array();
	
	    $added_sizes = get_intermediate_image_sizes();
	
	    foreach( $added_sizes as $key => $value) {
	        $new_sizes[$value] = $value;
	    }
	
	    // This preserves the labels in $sizes, and merges the two arrays
	    $new_sizes = array_merge( $new_sizes, $sizes );
	
	    return $new_sizes;
	}
	add_filter('image_size_names_choose', 'jtnn_display_image_size_names_muploader', 11, 1);

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jtnn' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // jtnn_setup
add_action( 'after_setup_theme', 'jtnn_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function jtnn_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Global Sidebar', 'jtnn' ),
		'id'            => 'sidebar-global',
		'before_widget' => '<aside id="%1$s" class="widget col4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'jtnn' ),
		'id'            => 'sidebar-blog',
		'before_widget' => '<aside id="%1$s" class="widget col4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Homepage Sidebar', 'jtnn' ),
		'id'            => 'sidebar-homepage',
		'before_widget' => '<aside id="%1$s" class="widget col4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Homepage User Buckets', 'jtnn' ),
		'id'            => 'sidebar-horizontal',
		'before_widget' => '<aside id="%1$s" class="widget col4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'jtnn' ),
		'id'            => 'sidebar-footer-one',
		'before_widget' => '<aside id="%1$s" class="widget col4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'jtnn' ),
		'id'            => 'sidebar-footer-two',
		'before_widget' => '<aside id="%1$s" class="widget col4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'jtnn' ),
		'id'            => 'sidebar-footer-three',
		'before_widget' => '<aside id="%1$s" class="widget col4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'jtnn_widgets_init' );

/**
 * Let's make some widgets
 */

// USER BUCKETS
class jtnn_user_buckets extends WP_Widget
{
  function jtnn_user_buckets()
  {
    $widget_ops = array('classname' => 'jtnn_userbuckets', 'description' => 'Create a new user bucket for display on the home page or sidebar' );
    $this->WP_Widget('jtnn_user_buckets', 'JTNN User Bucket', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'image' => '', 'link' => '' ) );
    $title = $instance['title'];
    $image = $instance['image'];
    $link = $instance['link'];
?>
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">Title: 
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
		</label>
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id('image'); ?>">Image Source URL: 
		<input class="widefat" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" type="text" value="<?php echo attribute_escape($image); ?>" />
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id('link'); ?>">Destination URL: 
		<input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo attribute_escape($link); ?>" />
	</p>
	
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    $instance['image'] = $new_instance['image'];
    $instance['link'] = $new_instance['link'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    // WIDGET CODE GOES HERE
    ob_start(); 
    ?>
    
    <a class="userbucket" href="<?php echo $instance['link']; ?>" title="<?php echo $instance['title']; ?>" style="background-image: url('<?php echo $instance['image']; ?>');">
		<span><?php echo $instance['title']; ?></span>
	</a>
 
	<?php 
	$layout = ob_get_contents();
	ob_end_clean();
	echo $layout;
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("jtnn_user_buckets");') );


// NEWSLETTER SIGN UP
class jtnn_newsletter extends WP_Widget
{
  function jtnn_newsletter()
  {
    $widget_ops = array('classname' => 'newsletter', 'description' => 'A newsletter subscription form for the sidebar.' );
    $this->WP_Widget('jtnn_newsletter', 'JTNN Newsletter', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => 'Join our mailing list.' ) );
    $title = $instance['title'];
?>
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">Title: 
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
		</label>
	</p>
	
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    // WIDGET CODE GOES HERE
    ob_start(); 
    ?>    
    
    <label for="subscribe"><?php echo $instance['title']; ?></label>

    <?php echo do_shortcode('[contact-form-7 id="501" title="Newsletter Signup"]'); ?>
 
	<?php 
	$layout = ob_get_contents();
	ob_end_clean();
	echo $layout;
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("jtnn_newsletter");') );


// FACEBOOK LIKE BOX
class jtnn_facebook_likebox extends WP_Widget
{
  function jtnn_facebook_likebox()
  {
    $widget_ops = array('classname' => 'likebox', 'description' => 'Displays the Facebook Like Box in the sidebar' );
    $this->WP_Widget('jtnn_facebook_likebox', 'JTNN Facebook Like Box', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'fbpageurl' => '' ) );
    $fbpageurl = $instance['fbpageurl'];
?>
	<p>
		<label for="<?php echo $this->get_field_id('fbpageurl'); ?>">Facebook Page URL: 
		<input class="widefat" id="<?php echo $this->get_field_id('fbpageurl'); ?>" name="<?php echo $this->get_field_name('fbpageurl'); ?>" type="text" value="<?php echo attribute_escape($fbpageurl); ?>" />
		</label>
	</p>
	
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['fbpageurl'] = $new_instance['fbpageurl'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['fbpageurl']) ? ' ' : apply_filters('widget_title', $instance['fbpageurl']);
 
    // WIDGET CODE GOES HERE
    ob_start(); 
    ?>   
    
    <iframe src="//www.facebook.com/plugins/likebox.php?href=<?php echo $instance['fbpageurl']; ?>&amp;width=300&amp;height=300&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false&amp;appId=367986913312076" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:300px;" allowTransparency="true"></iframe>
     
	<?php 
	$layout = ob_get_contents();
	ob_end_clean();
	echo $layout;
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("jtnn_facebook_likebox");') );


/**
 * Enqueue scripts and styles
 */
function jtnn_scripts() {
	wp_enqueue_style( 'jtnn-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jtnn-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'jtnn_scripts' );

// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/img/logo-jtnn-loginpage.png) !important; background-size: 326px 67px !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');