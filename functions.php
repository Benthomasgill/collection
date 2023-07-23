<?php
/**
 * customTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package customTheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function customtheme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on customTheme, use a find and replace
		* to change 'customtheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'customtheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'customtheme' ),
			'primary'   => __( 'Primary navigation', 'customtheme' ),
			'sidebar'   => __( 'Sidebar navigation', 'customtheme' ),
			'secondary' => __( 'Footer navigation', 'customtheme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'customtheme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'customtheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function customtheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'customtheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'customtheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function customtheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'customtheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'customtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'customtheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function customtheme_scripts() {
	wp_enqueue_style( 'customtheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'customtheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'customtheme-navigation', get_template_directory_uri() . '/js/customjs.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'customtheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'customtheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Remove Gutenberg Block Library CSS from loading on the frontend */
function remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );

/* Enqueue Style Sheets */
function mytheme_styles() { 
    wp_enqueue_style('mytheme_main_style', get_stylesheet_uri()); 
} 
add_action('wp_enqueue_scripts', 'mytheme_styles');


/* Work through these to show relevant scripts */
/* Work through these to show relevant scripts */
/* Work through these to show relevant scripts */
/* Work through these to show relevant scripts */
/* Work through these to show relevant scripts */
/* Work through these to show relevant scripts */

 /* Tracking */
function sb_start_head() { ?>
	/* Put GTM, GA4 tracking tags in here */
	/* Anything that requires script in the head */

<?php }
add_action('after_head_start', 'sb_start_head');

function sb_after_body_start() { ?>

	/* Put GTM, GA4 tracking tags in here */
	/* Anything that requires script in the body*/

<?php }
add_action('after_body_start', 'sb_after_body_start');

function sb_before_head() { ?>

	/* Put GTM, GA4 tracking tags in here */
	/* Anything that requires script before the head*/
    
<?php }
add_action('before_closing_head', 'sb_before_head');

/* 
	'Universal' scripts. These output at after_wp_footer().
	Feel free to add to this as desired.
*/
function general_scripts() { ?>
	<script async>
	
	/*
		FOUC: Remove body pseudo element on page load.
		This is part of the method used to avoid the Flash Of Unstyled Content.
	*/
	$(window).load(function () {
		jQuery('body').removeAttr('id');    
	});

	/* 
		Responsive video embeds.
		Only targets iframes that have the 'allow' attribute.
		Youtube video embeds will require the allowfullscreen attribute.

		Note: This is a beta function.

		Works by finding iframes with the allowfullscreen attribute
		and then wrapping it in <div class="video-container"></div>.
		The .video-container class can be found in scss/_common.scss
	*/
	// jQuery(document).ready(function( $ ) {
	// 	var attr = jQuery('iframe').attr('allowfullscreen');
	// 	if (typeof attr !== typeof undefined && attr !== false) {
	// 		jQuery('iframe').wrap('<div class="video-container">');
	// 	}
	// });

	jQuery( document ).ready(function() {

		/* Add overflow scroll div to tables on small screens. */
		jQuery('table').wrapAll('<div class="table-scroll">');

		/* 
			Toggle mobile nav.
			When .toggle-nav is clicked, show the header.
		*/
		jQuery('.toggle-nav').click(function() {
			jQuery('header nav').toggleClass('show');
			jQuery(this).toggleClass('active');
		});

	});
</script>
<?php }
add_action('after_wp_footer', 'general_scripts');

/* 
	Disable the Admin bar on the front-end.
	It's just not that important :-P
*/
show_admin_bar(false);

/* Output stuff before the closing body tag. */
function before_the_body_ends() {

	/* The mobile hamburger */
	?>

        <span class="mobile-nav mobile-display-nav toggle-nav">
			<em class="bar-01"></em>
			<em class="bar-02"></em>
			<em class="bar-03"></em>
		</span>

	<?php 

	/* Quick link to edit the current page/post */
	if ( is_user_logged_in()) { 
		echo '<a href="' . admin_url() . 'post.php?post=' . get_the_ID() . '&action=edit" target="_blank"><img src="' . get_template_directory_uri() . '/images/edit.svg" class="edit" /></a>';
	} ?>

        <link rel='stylesheet' id='event-css'  href='<?php echo get_template_directory_uri();?>/css/event.css' type='text/css' media='all' />
        <?php
    
}
add_action( 'before_body_end', 'before_the_body_ends' );

/* 
	Theme Support for these items added manually, 
	because for some reason Automatic thinks these are 
	not important enough to	enable by default.
*/
add_theme_support( 'title-tag' ); 						/* Title tag support. */
add_theme_support( 'post-thumbnails' );					/* Featured images. */

/* 
	Additional uploaded image sizes.
	You can pull these images into your theme. 
	Example: add_image_size( 'my-custom-image-size', 600, 400, $crop = true );
	Usage: <?php the_post_thumbnail('my-custom-image-size'); ? >
	
*/
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 620, 400, $crop = true );
	add_image_size( 'desktop-hero', 1600, 350, $crop = true );
	add_image_size( 'mobile-hero', 960, 550, $crop = true );
    add_image_size( 'floorplan', 1600, 1600, $crop = false );
}

/* 
	Redirect media attachment pages to the media URL.
	Yoast has an option to do this, but it's functionality
	is replicated here just in case we're not using Yoast.
*/
function wpa_attachment_redirect(){
    if( is_attachment() ){
		/* Find attachment_id. */
		$attachment_url = wp_get_attachment_url($_GET['attachment_id']);
		/* Redirect to attachment. */
		wp_redirect($attachment_url, 301); exit; 
    }
}
add_action( 'template_redirect', 'wpa_attachment_redirect' );

/* Emoji are dumb. Remove emoji styles and scripts. */
function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/* Add Schema to nav links */
/* This isn't working */
/* This isn't working */
/* This isn't working */

// function add_menu_atts( $atts, $item, $args ) {
//   $atts['itemprop'] = 'url';
//   return $atts;
// }
// add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );

// require_once('functions/post-types.php');



/* Primary Contact Details */
function primary_details() {

    /*
    	Centralised location for common details to be used throughout the site. 

		Sample usage:

		echo primary_details()['first_name'];
	*/

    $primary_details = array(
		'business_name'             => 'Test Site',
		'first_name'                => '',
        'last_name'                 => '',
        'email'                     => 'test@test.com.au',
        'phone'                     => '0123456789',
        'facebook'                  => '',
        'youtube'                   => '',
        'street_address'            => '123 Fake st',
        'suburb'                    => 'Test',
        'state'                     => 'WA',
        'postcode'                  => '6000',
        'country'                   => 'AU',
        'map_link'                  => '',
        'map_directions'            => '',
        'map_coords'                => '',
        'opening_hours_weekdays'    => '',
        'opening_hours_saturday'    => '',  
        'opening_hours_sunday'      => '',  
    );
	return $primary_details;

}

