<?php

require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/func.php';

function add_js_scripts() {
    wp_enqueue_script( 'script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'), '1.0', true );

    // pass Ajax Url to script.js
    wp_localize_script('script', 'ajaxurl', array( 'ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'add_js_scripts');

add_action( 'wp_ajax_load_comments', 'capitaine_load_comments' );
add_action( 'wp_ajax_nopriv_load_comments', 'capitaine_load_comments' );
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



// Custom 

// admin 

/**
 * Custom template tags for this theme.
 */

require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';

add_filter('show_admin_bar', '__return_false');
