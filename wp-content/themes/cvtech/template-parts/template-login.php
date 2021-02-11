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
                             


  <!-- SECTION 1-->
  <div class="section-white">
    <div class="intro-box-container">

      <div class="box-intro">
        <div class="box-bg box1">
          <div class="box-image1 bi1"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg1.svg'; ?>" alt=""></div>
          <div class="box-image2 bi1"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg2.svg'; ?>" alt=""></div>
          <div class="icon-box"><i class="fas fa-address-card"></i></div>
        </div>
        <div class="box-text">
          <h3>1. Choisissez l'un de nos modèles de CV</h3>
          <p>Approuvés par nos experts en recrutement.</p>
        </div>
      </div>

      <div class="box-intro">
        <div class="box-bg box2">
          <div class="box-image1 bi2"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg1.svg'; ?>" alt=""></div>
          <div class="box-image2 bi2"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg2.svg'; ?>" alt=""></div>
          <div class="icon-box"><i class="fas fa-pencil-alt"></i></i></div>
        </div>
        <div class="box-text">
          <h3>2. Créez et personnalisez votre CV</h3>
          <p>Modifiez votre CV à votre guise: chnagez la couleur, la typographie, l'ordre des rubriques et bien plus !</p>
        </div>
      </div>

      <div class="box-intro">
        <div class="box-bg box3">
          <div class="box-image1 bi3"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg1.svg'; ?>" alt=""></div>
          <div class="box-image2 bi3"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg2.svg'; ?>" alt=""></div>
          <div class="icon-box"><i class="fab fa-telegram-plane"></i></div>
        </div>
        <div class="box-text">
          <h3>3. Téléchargez votre CV et partagez-le</h3>
          <p>Envoyez votre CV aux entreprises au format que vous souhaitez, ou à l'aide d'un lien personnalisé.</p>
        </div>
      </div>

    </div>
  </div>

  <?php 
  get_footer(); ?>