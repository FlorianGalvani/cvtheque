<?php
/*
Template Name: Home
*/

session_start();
get_header(); ?>

<!-- INSCRIPTION -->
<?php
$errors = array();
$success = false;
$flash = array();
if(!empty($_POST['submitinscription'])) {
  // FAILLE XSS
  $identifiant   = cleanXss($_POST['identifiant']);
  $email     = cleanXss($_POST['email']);
  $password1 = cleanXss($_POST['password1']);
  $password2 = cleanXss($_POST['password2']);

  $errors = ValidationText($errors, $identifiant, 'identifiant',4,50);
  $errors = emailValidation($errors, $email, 'email');
  $errors = validPass($errors,$password1,'password1',$password2,2,100);

  // VERIFICATION EMAIL

  //
  if(count($errors) == 0) {
    // HASH PASSWORD
    $password1 = 'password1';
    $hash_password = wp_hash_password($password1);
    // INSERT EN BDD
    global $wpdb;
    $wpdb->insert('wp_cvtechusers', array(
      'user_login' => $identifiant,
      'user_email' => $email,
      'user_pass' => $hash_password,
      'user_nicename' => $identifiant,
      'user_registered' => current_time('mysql'),
      'display_name' => $identifiant,
  ));
      $success = true;
    }
 /*    debug($wpdb); */
} 

  /* CONNEXION */
  if(!empty($_POST['submitconnexion'])) {
    // Faille XSS
    $login    = cleanXss($_POST['login']);
    $password1 = cleanXss($_POST['password']);

      // request  users si il ya un user qui a soit email ou pseudo
      global $wpdb;
      $wp_cvtechusers = $wpdb->prefix . 'wp_cvtechusers';
      $requete = "SELECT ID, user_login, user_email FROM  $wp_cvtechusers ORDER BY ID";
      $resultat = $wpdb->get_results( $requete );
  }





// FORMULAIRE D'INSCRIPTION
?>
<?php if($success) { ?>
    <p class="success">Votre inscription a été effectuée avec succès !</p>
  <?php } else  { ?>
<div id="ex1" class="modal">
<form method="POST" action="" id="forminscription" novalidate>
<h2>Inscription</h2>
    <!-- Identifiant -->
    <div class="form-group1">
      <label for="identifiant">Identifiant</label>
      <span class="error"><?php if(!empty($errors['identifiant'])) { echo $errors['identifiant']; } ?></span>
      <input type="text" name="identifiant" id="identifiant" class="form-control" value="<?php if(!empty($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>" />
    </div>
    <!-- EMAIL -->
    <div class="form-group1">
      <label for="email">E-mail</label>
      <span class="error"><?php if(!empty($errors['email'])) { echo $errors['email']; } ?></span>
      <input type="email" name="email" id="email" class="form-control" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>" />
    </div>
    <!-- PASSWORD1 -->
    <div class="form-group2">
      <label for="password1">Mot de passe</label>
      <span class="error"><?php if(!empty($errors['password1'])) { echo $errors['password1']; } ?></span>
      <input type="password" name="password1" id="password1" class="form-control" value="" autocomplete="off" />
    </div>
    <!-- PASSWORD2 -->
    <div class="form-group2">
      <label for="password2">Confirmation du mot de passe</label>
      <input type="password" name="password2" id="password2" class="form-control" value="" autocomplete="off" />
    </div>
    <input type="submit" name="submitinscription" value="Je m'inscris" />
</form>
<?php } ?>
</div>


<!-- FORMULAIRE DE CONNEXION -->
<div id="ex2" class="modal">
  <form action="" method="post" id="formconnexion">
  <h2>Connexion</h2>
    <!-- LOGIN -->
    <div class="form-group">
      <label for="login">Identifiant ou Email</label>
      <span class="error"><?php if(!empty($errors['login'])) { echo $errors['login']; } ?></span>
      <input type="text" id="login" name="login" value="<?php if(!empty($_POST['login'])) { echo $_POST['login']; } ?>">
    </div>
    <!-- PASSWORD -->
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password" class="form-control" value="" autocomplete="off" />
    </div>
    <input type="submit" name="submitconnexion" value="Connexion" />
  </form>
</div>
<!-- Link to open the modal -->
<p><a href="#ex1" rel="modal:open">Inscription</a></p>
<p><a href="#ex2" rel="modal:open">Connexion</a></p>


<?php get_footer();