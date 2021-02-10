<?php

require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/func.php';

/////////// AJAX //////////////
function ajax_assets()
{
    // Charger notre script
    wp_enqueue_script('candidat_ajax_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);

    // Envoyer une variable de PHP à JS proprement
    wp_localize_script('candidat_ajax_php', 'ajaxurl', array('ajax_url' => get_admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'ajax_assets');


add_action('wp_ajax_candidate_info', 'candidate_info');
add_action('wp_ajax_nopriv_candidate_info', 'candidate_info');
function candidate_info()
{
    $errors = array();
    $success = false;

    $nom = $_POST['candidate_info']['nom'];

    $errors = ValidationText($errors,$nom,'nom',2,10);
    
    if (count($errors) == 0) {
        $success = true;
    }
    
    $data = array(
        'errors' => $errors,
        'success' => $success
    );

    showJson($data);
}

/////// FIN AJAX ///////


// Custom 



// admin 




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';

add_filter('show_admin_bar', '__return_false');
