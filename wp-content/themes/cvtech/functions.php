<?php

require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/func.php';

function add_js_scripts() {
    wp_enqueue_script( 'script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'), '1.0', true );

    // pass Ajax Url to script.js
    wp_localize_script('script', 'ajaxurl', array( 'ajax_url' => 'ajax/ajax_candidate.php'));
}
add_action('wp_enqueue_scripts', 'add_js_scripts');

// TECHNIQUE 2
// add_action( 'wp_ajax_my_action', 'my_action' );
// add_action( 'wp_ajax_nopriv_my_action', 'my_action' );

// function my_action() {
//     $param = $_POST['param'];
//     echo $param;
//     die();
// }



// Custom 

// admin 

/**
 * Custom template tags for this theme.
 */

require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';

add_filter('show_admin_bar', '__return_false');
