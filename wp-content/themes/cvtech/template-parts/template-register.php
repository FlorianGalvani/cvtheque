<?php
/*
Template Name: Register
*/
$error = false;
if(!empty($_POST)){
    $p = $_POST;
    if($p['user_pass'] != $p['user_pass2']){
        $error = 'Les deux mots de passe ne correspondent pas';
    }else{
        if(!is_email($p['user_email'])){
            $error = 'Veuillez entre un email valide';
        }else{
            $user = wp_insert_user(array(
                'user_login' => $p['user_login'],
                'user_pass' => $p['user_pass'],
                'user_email' => $p['user_email'],
                'user_registered' => current_time('mysql'),
            ));
            if(is_wp_error($user)) {
                $error = $user->get_error_message();
            }else{
                $msg ='Vous êtes maintenant inscrit';
                $headers = 'From: '.get_option('admin_email')."\r\n";
                wp_mail($p['user_email'], 'Inscription réussie', $msg, $headers);
                $p = array();
            }
        }
    }
}

$errors = array();
$success = false;
if (!empty($_POST['submitinscription'])) {
  // FAILLE XSS
  $user_login   = cleanXss($_POST['user_login']);
  $user_email     = cleanXss($_POST['user_email']);
  $user_pass = cleanXss($_POST['user_pass']);
  $user_pass2 = cleanXss($_POST['user_pass2']);

  $errors = ValidationText($errors, $user_login, 'user_login', 4, 50);
  $errors = emailValidation($errors, $user_email, 'user_email');
  $errors = validPass($errors, $user_pass, 'user_pass', $user_pass2, 2, 100);

  // VERIFICATION EMAIL

  //
  if (count($errors) == 0) {
    // HASH PASSWORD
    $user_pass = 'user_pass';
    $hash_password = wp_hash_password($user_pass);
    // INSERT EN BDD
    global $wpdb;
    $wpdb->insert('wp_cvtechusers', array(
      'user_login' => $user_login,
      'user_email' => $user_email,
      'user_pass' => $hash_password,
      'user_nicename' => $user_login,
      'user_registered' => current_time('mysql'),
      'display_name' => $user_login,
    ));
    $success = true;
  }
}

?>
<?php get_header(); ?>
<?php if ($success) { ?>
  <p class="success">Votre inscription a été effectuée avec succès !</p>
<?php } else { ?>
<div class="register">
    <form  method="POST" id="forminscription" novalidate>
        <h2>Inscription</h2>
        <!-- Identifiant -->
        <div class="form-group1">
            <label for="user_login">Identifiant</label>
            <span class="error"><?php if (!empty($errors['user_login'])) {
                              echo $errors['user_login'];
                            } ?></span>
            <input type="text" name="user_login" id="user_login" class="form-control" value="<?php if(!empty($_POST['user_login'])) {
                                                                                                    echo $_POST['user_login'];
                                                                                                } ?>">
        </div>
        <!-- EMAIL -->
        <div class="form-group1">
            <label for="user_email">E-mail</label>
            <span class="error"><?php if (!empty($errors['user_email'])) {
                              echo $errors['user_email'];
                            } ?></span>
            <input type="email" name="user_email" id="user_email" class="form-control" value="<?php if(!empty($_POST['user_email'])) {
                                                                                                    echo $_POST['user_email'];
                                                                                                } ?>" />
        </div>
        <!-- PASSWORD1 -->
        <div class="form-group2">
            <label for="user_pass">Mot de passe</label>
            <input type="password" name="user_pass" id="user_pass" class="form-control" value="" autocomplete="off" />
        </div>
        <!-- PASSWORD2 -->
        <div class="form-group2">
            <label for="user_pass2">Confirmation du mot de passe</label>
            <input type="password" name="user_pass2" id="user_pass2" class="form-control" value="" autocomplete="off" />
        </div>
        <input type="submit" name="submitinscription" value="Je m'inscris" />
    </form>
    <?php } ?>
</div>
<?php
get_footer(); ?>