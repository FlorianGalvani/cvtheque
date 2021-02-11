<?php
/*
Template Name: Login
*/
$error = false;
if(!empty($_POST)){
  $user = wp_signon($_POST);
  if(is_wp_error($user)){
    $error = $user->get_error_message();
  }else{
    header('location:profil');
  }
} else {
    $user = wp_get_current_user();
if($user->ID != 0){
    header('location:profil');
}
}
if (!empty($_POST['submitconnexion'])) {
  // FAILLE XSS
  $user_login   = cleanXss($_POST['user_login']);
  $user_password     = cleanXss($_POST['user_password']);
}
get_header(); ?>


      <?php if($error): ?>
      <div class="error">
        <?php echo $error; ?>
      </div>
      <?php endif ?>
      <!-- LOGIN -->
      <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" id="formconnexion">
      <h2>Connexion</h2>
      <div class="form-group">
        <label for="user_login">Identifiant ou Email</label>
        <span class="error"><?php if (!empty($errors['user_login'])) {
                              echo $errors['user_login'];
                            } ?></span>
        <input type="text" id="user_login" name="user_login" value="<?php if (!empty($_POST['user_login'])) {
                                                            echo $_POST['user_login'];
                                                          } ?>">
      </div>
      <!-- PASSWORD -->
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="user_password" id="user_password" class="form-control" value="" autocomplete="off" />
      </div>
      <input type="checkbox" name="remember" id="remember" value="1">
      <label for="remember"> Se souvenir de moi</label>
      <input type="submit" name="submitconnexion" value="Se connecter" />
    </form>
  </div>
                             
  <?php 
  get_footer(); ?>