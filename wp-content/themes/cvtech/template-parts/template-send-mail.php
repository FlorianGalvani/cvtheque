<?php
/*
Template Name: Send Mail
*/
$url = home_url('404.php');
if (!empty($_GET['user_id'])){
  $token = $_GET['user_id'];
  $token = cleanXss($token);
  global $wpdb;
  $results = $wpdb->prepare(
    "SELECT * FROM $wpdb->usermeta WHERE token = '$token'"
  );

  if(!empty($results)) {

    global $wpdb;
    $wpdb->update(
        $wpdb->prefix.'usermeta',
        array(
            'token' => '$token',
            'token_at'           => current_time('mysql'),
        ),
        array( 'user_id' => $user_id )
    );
    /* Ici un user qui est en train de valider son compte
     pourrait accéder à cette page avec le token de son lien de validation
     inscription mais cela importe peu puisque
     le fait de réinitialiser son mot de passe permet de valider son compte */

     $msg = 'Bonjour';
     $headers = 'From: ' . get_option('admin_email') . "\r\n";
     wp_mail($p['user_email'], 'Inscription réussie', $msg, $headers);
     $p = array();
}

/*   else{
    wp_redirect($url);
    exit();
  }
}
else {
wp_redirect($url);
  exit(); */
}
get_header();
?>
