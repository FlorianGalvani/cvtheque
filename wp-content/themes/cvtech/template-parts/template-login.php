<?php
/*
Template Name: Login
*/
$error = false;
if (!empty($_POST)) {
  $user = wp_signon($_POST);
  if (is_wp_error($user)) {
    $error = $user->get_error_message();
  } else {
    header('location:profil');
  }
} else {
  $user = wp_get_current_user();
  if ($user->ID != 0) {
    header('location:profil');
  }
}
if (!empty($_POST['submitconnexion'])) {
  // FAILLE XSS
  $user_login   = cleanXss($_POST['user_login']);
  $user_password     = cleanXss($_POST['user_password']);
}
get_header(); ?>


<?php if ($error) : ?>
  <div class="error">
    <?php echo $error; ?>
  </div>
<?php endif ?>
<img src="<?php echo get_template_directory_uri() . '/asset/img/blobs1.svg'; ?>" alt="" class="blobs1">
<img src="<?php echo get_template_directory_uri() . '/asset/img/blobs2.svg'; ?>" alt="" class="blobs2">
<!-- LOGIN -->
<div class="login">
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

  <section id="section2-login">
    <a href="<?php echo home_url('mot-de-passe-oublie'); ?>">
      <div class="box box1">
        <p class="titre">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="8.5" cy="7" r="4"></circle>
            <line x1="18" y1="8" x2="23" y2="13"></line>
            <line x1="23" y1="8" x2="18" y2="13"></line>
          </svg>
          <span>Mot de passe oublié ?</span>
        </p>
        <p class="text">Si vous avez oublier votre mot de passe, pas de panique, vous avez juste à cliquer ici !
        </p>

      </div>
    </a>
    <a href="register.php">
      <div class="box box2">
        <p class="titre">
          <svg xmlns="" width="29" height="29" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="8.5" cy="7" r="4"></circle>
            <line x1="20" y1="8" x2="20" y2="14"></line>
            <line x1="23" y1="11" x2="17" y2="11"></line>
          </svg>
          <span>Pas encore Inscrit ?</span>
        </p>
        <p class="text">Si vous n'êtes pas encore inscrit, cliquez ici !
        </p>
      </div>
    </a>
  </section>
</div>

<?php
get_footer(); ?>