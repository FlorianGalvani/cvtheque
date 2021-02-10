<?php
/**
 * cvtech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cvtech
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
if ( ! function_exists( 'cvtech_setup' ) ) :
	function cvtech_setup() {
		load_theme_textdomain( 'cvtech', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'cvtech' ),
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );	
	}
endif;
add_action( 'after_setup_theme', 'cvtech_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cvtech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cvtech_content_width', 640 );
}
add_action( 'after_setup_theme', 'cvtech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cvtech_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cvtech' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cvtech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cvtech_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function cvtech_scripts() {
	// STYLE
	wp_enqueue_style( 'cvtech-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'cvtech-style', 'rtl', 'replace' );
	wp_enqueue_style('jquerymodal','/wp-content/themes/cvtech/asset/css/jquery.modal.min.css');

    // Jquery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js', array(), null, true);
    // Jquery Modal
    wp_enqueue_script('jquerymodal', '/wp-content/themes/cvtech/asset/js/jquery.modal.min.js', array(), null, true);

	// JS
	wp_enqueue_script( 'script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'), '1.0', true );
    // pass Ajax Url to script.js
    wp_localize_script('script', 'ajaxurl', array( 'ajax_url' => admin_url('admin-ajax.php')));
}
add_action( 'wp_enqueue_scripts', 'cvtech_scripts' );
add_action( 'wp_ajax_load_comments', 'capitaine_load_comments' );
add_action( 'wp_ajax_nopriv_load_comments', 'capitaine_load_comments' );

// function cvtheque_assets()
// {
// 	wp_enqueue_style('jquerymodal','/wp-content/themes/cvtech/asset/css/jquery.modal.min.css');
//     // Jquery
//     wp_deregister_script('jquery');
//     wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js', array(), null, true);
//     // Jquery Modal
//     wp_enqueue_script('jquerymodal', '/wp-content/themes/cvtech/asset/js/jquery.modal.min.js', array(), null, true);
// }
// add_action('wp_enqueue_scripts', 'cvtheque_assets');


// function add_js_scripts() {
//     wp_enqueue_script( 'script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'), '1.0', true );

//     // pass Ajax Url to script.js
//     wp_localize_script('script', 'ajaxurl', array( 'ajax_url' => admin_url('admin-ajax.php')));
// }
// add_action('wp_enqueue_scripts', 'add_js_scripts');

// add_action( 'wp_ajax_load_comments', 'capitaine_load_comments' );
// add_action( 'wp_ajax_nopriv_load_comments', 'capitaine_load_comments' );
function capitaine_load_comments() {
  
  $post_id = $_POST['post_id'];
  
  $comments = get_comments(array(
    'post_id' => $post_id,
    'status' => 'approve'
  ));

  wp_list_comments(array(
    'per_page' => -1,
    'avatar_size' => 76
  ), $comments );

	wp_die();
}