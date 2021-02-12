<?php

require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/func.php';

/////////// AJAX //////////////
function ajax_assets()
{
    // Charger notre script

    // Envoyer une variable de PHP à JS proprement
    wp_localize_script('ajax', 'ajaxurl', array('ajax_url' => get_admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'ajax_assets');


add_action('wp_ajax_candidate_info', 'candidate_info');
add_action('wp_ajax_nopriv_candidate_info', 'candidate_info');
function candidate_info()
{
    $errors = array();
    $success = false;

    $nom = cleanXss($_POST['info']['nom']);
    $prenom = cleanXss($_POST['info']['prenom']);
    $naissance = cleanXss($_POST['info']['naissance']);
    $adresse = cleanXss($_POST['info']['adresse']);
    $telephone = cleanXss($_POST['info']['telephone']);
    $permis = cleanXss($_POST['info']['permis']);

    $errors = ValidationText($errors,$nom,'nom',2,10);
    $errors = ValidationText($errors,$prenom,'prenom',2,10);
    $errors = ValidationText($errors,$naissance,'naissance',2,20);
    $errors = ValidationText($errors,$adresse,'adresse',2,100);
    $errors = ValidationText($errors,$telephone,'telephone',2,20);
    $errors = ValidationText($errors,$permis,'permis',2,10);
    
    if (count($errors) == 0) {
        $success = true;
        // global $wpdb;
        // $wpdb->insert('cv', array(
        //     'id_user' => '1',
        // ));
        // $wpdb->insert('cv_info_perso', array(
        //     'nom' => $nom,
        //     'prenom' => $prenom,
        //     'naissance' => $naissance,
        //     'adresse' => $adresse,
        //     'telephone' => $telephone,
        //     'permis' => $permis
        // ));
    }

    $data = array(
        'success' => $success,
    );
    showJson($data);

}

/////// FIN AJAX ///////


// Custom 
require get_template_directory() . '/inc/customs/custom-logo.php';


// admin 




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';

add_filter('show_admin_bar', '__return_false');
