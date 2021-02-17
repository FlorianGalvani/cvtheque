<?php
/*
Template Name: Forgot
*/

  //Verification que l'email et le token n'ont pas été modifié

  if (!empty($_GET['user_email']) && !empty($_GET['token'])) {
    $email = cleanXss($_GET['user_email']);
    $token = cleanXss($_GET['token']);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      global $wpdb;
      $results = $wpdb->prepare(
        "SELECT * FROM $wpdb->users WHERE email = user_email"
      );

      global $wpdb;
      $results = $wpdb->prepare(
        "SELECT * FROM $wpdb->usermeta WHERE token = token"
      );

      $user = $wpdb->get_row($results);
      if (!empty($user)) {
        $user_pass = cleanXss($_POST['user_pass']);
        $confirmPassword = cleanXss($_POST['user_pass2']);
        if (!empty($user_pass) && !empty($confirmPassword)) {
          if (mb_strlen($user_pass) < 6) {
            $errors['user_pass'] = 'Veuillez renseigner au minimum 6 caractères';
          } elseif ($confirmPassword != $user_pass) {
            $errors['user_pass2'] = 'Les mots de passe ne correspondent pas';
          }
        } else {
          $errors['user_pass'] = 'Veuillez renseigner ce/ces champs';
        }
        if (count($errors) == 0) {
          if ($token == $user['token']) {
            if (isActual($user['token_at'])) {
              global $wpdb;
              $results = $wpdb->prepare(
                "SELECT * FROM $wpdb->users WHERE email = user_email AND SELECT * FROM {wpdb->prefix}usermeta token = token"
              );
              global $wpdb;
              $results = $wpdb->prepare(
                "SELECT * FROM $wpdb->usermeta token = token"
              );
              if (!empty($user)) {
                $user_id = 'ID';
                wp_set_password($user_pass, $user_id);
                wp_redirect('template-login.php?error=yes');
              }
            } else {
              wp_redirect('template-login.php?error=yes');
            }
          } else {
            wp_redirect('template-login.php?error=yes');
          }
        }
      } else {
        wp_redirect('template-login.php?error=yes');
      }
    } else {
      wp_redirect('template-login.php?error=yes');
    }
  } 

?>


<?php if(!empty($_SESSION)) : ?>

<?php wp_redirect('template-home.php'); ?>

<?php endif; ?>
<?php get_header(); ?>
<section id="login">
  <div class="wrap-section-connexion-1">
    <div class="form-login">
      <h2>Nouveau mot de passe</h2>
      <form action="template-reset-password.php?form=yes&user_email=<?php echo $_GET['user_email']; ?>&token=<?php echo $_GET['token'] ?>" method="post">
        <div class="w50">
          <input type="password" name="user_pass" required>
          <span class="error"><?php if(!empty($errors['user_pass'])) { echo $errors['user_pass']; } ?></span>
          <label>Nouveau mot de passe</label>
        </div>
        <div class="w50">
          <input type="password" name="user_pass2" required>
          <label>Confirmation</label>
        </div>
        <div class="w50">
          <input type="submit" name="submitforgot" value="Envoyer">
        </div>
      </form>

<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" id="submitforgot">
    <h2>Mot de passe oublié</h2>
    <div class="form-group">
        <label for="user_email">Email</label>
        <span class="error"><?php if (!empty($errors['user_email'])) {
                                echo $errors['user_email'];
                            } ?></span>
        <input type="email" id="user_email" name="user_email" value="<?php if (!empty($_POST['user_email'])) {
                                                                        echo $_POST['user_email'];
                                                                    } ?>">
    </div>
    <!-- PASSWORD -->
    <div class="form-group">
        <label for="user_new_pass">Nouveau mot de passe</label>
        <input type="password" name="user_new_pass" id="user_new_pass" class="form-control" value="" autocomplete="off" />
    </div>
    <div class="form-group2">
        <label for="user_new_pass2">Confirmation du nouveau mot de passe</label>
        <input type="password" name="user_new_pass2" id="user_new_pass2" class="form-control" value="" autocomplete="off" />

    </div>
  </div>
</section>


<?php
get_footer(); ?>