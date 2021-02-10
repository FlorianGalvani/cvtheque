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
if (!empty($_POST['submitinscription'])) {
  // FAILLE XSS
  $identifiant   = cleanXss($_POST['identifiant']);
  $email     = cleanXss($_POST['email']);
  $password1 = cleanXss($_POST['password1']);
  $password2 = cleanXss($_POST['password2']);

  $errors = ValidationText($errors, $identifiant, 'identifiant', 4, 50);
  $errors = emailValidation($errors, $email, 'email');
  $errors = validPass($errors, $password1, 'password1', $password2, 2, 100);

  // VERIFICATION EMAIL

  //
  if (count($errors) == 0) {
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
if (!empty($_POST['submitconnexion'])) {
  // Faille XSS
  $login    = cleanXss($_POST['login']);
  $password1 = cleanXss($_POST['password']);

  // request  users si il ya un user qui a soit email ou pseudo
  global $wpdb;
  $wp_cvtechusers = $wpdb->prefix . 'wp_cvtechusers';
  $requete = "SELECT ID, user_login, user_email FROM  $wp_cvtechusers ORDER BY ID";
  $resultat = $wpdb->get_results($requete);
}

// FORMULAIRE D'INSCRIPTION
?>
<?php if ($success) { ?>
  <p class="success">Votre inscription a été effectuée avec succès !</p>
<?php } else { ?>
  <div id="ex1" class="modal">
    <form method="POST" action="" id="forminscription" novalidate>
      <h2>Inscription</h2>
      <!-- Identifiant -->
      <div class="form-group1">
        <label for="identifiant">Identifiant</label>
        <span class="error"><?php if (!empty($errors['identifiant'])) {
                              echo $errors['identifiant'];
                            } ?></span>
        <input type="text" name="identifiant" id="identifiant" class="form-control" value="<?php if (!empty($_POST['pseudo'])) {
                                                                                              echo $_POST['pseudo'];
                                                                                            } ?>" />
      </div>
      <!-- EMAIL -->
      <div class="form-group1">
        <label for="email">E-mail</label>
        <span class="error"><?php if (!empty($errors['email'])) {
                              echo $errors['email'];
                            } ?></span>
        <input type="email" name="email" id="email" class="form-control" value="<?php if (!empty($_POST['email'])) {
                                                                                  echo $_POST['email'];
                                                                                } ?>" />
      </div>
      <!-- PASSWORD1 -->
      <div class="form-group2">
        <label for="password1">Mot de passe</label>
        <span class="error"><?php if (!empty($errors['password1'])) {
                              echo $errors['password1'];
                            } ?></span>
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
        <span class="error"><?php if (!empty($errors['login'])) {
                              echo $errors['login'];
                            } ?></span>
        <input type="text" id="login" name="login" value="<?php if (!empty($_POST['login'])) {
                                                            echo $_POST['login'];
                                                          } ?>">
      </div>
      <!-- PASSWORD -->
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" value="" autocomplete="off" />
      </div>
      <input type="submit" name="submitconnexion" value="Connexion" />
    </form>
  </div>

  <!-- BLOBS START -->
  <img src="wp-content/themes/cvtech/asset/img/blobs1.svg" alt="" class="blobs1">
  <img src="wp-content/themes/cvtech/asset/img/blobs2.svg" alt="" class="blobs2">
  <!-- BLOBS END -->

  <!-- BANNER START -->
  <section class="banner">
    <div class="info-banner">
      <img src="wp-content/themes/cvtech/asset/img/img-banner-1.svg" alt="" class="vector first">
      <img src="wp-content/themes/cvtech/asset/img/img-banner-2.svg" alt="" class="vector second">
      <img src="wp-content/themes/cvtech/asset/img/img-banner-3.svg" alt="" class="vector third">
      <img src="wp-content/themes/cvtech/asset/img/search.svg" alt="" class="search">
      <img src="wp-content/themes/cvtech/asset/img/menu-img-banner.svg" alt="" class="vector fourth">
      <img src="wp-content/themes/cvtech/asset/img/img-banner-5.svg" alt="" class="vector fifth">
      <div class="text-info">

        <h1>Créateur de CV en ligne</h1>
        <p>Choisissez l’un de nos modèles de CV Modifiez votre CV depuis n’importe quel appareil Suivez les exemples et conseils de nos experts Téléchargez-le en PDF ou TXT ou partagez-le en ligne.</p>
        <a href="#" class="btn-banner">explorer nos services</a>
      </div>
      <div class="img-info"><img src="wp-content/themes/cvtech/asset/img/undraw_cv.svg" alt=""></div>
    </div>
  </section>
  <!-- BANNER END -->


  <!-- SECTION 1-->
  <div class="section-white sw1">
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

  <!-- SECTION 2-->
  <div class="section-grey">

    <div class="container-grey">
      <div class="left-container">

        <img src="<?php echo get_template_directory_uri() . '/asset/img/eclipse.png'; ?>" alt="">
        <h2>Télécharger votre CV en ligne en quelques clics</h2>
        <p>Envoyer sa candidature n'a jamaiss été aussi facile grâce à notre créateur de CV en ligne. Suivez ces 3 étapes et augmentez vos chances de trouver un emploi.</p>
        <div class="img-3cv">
          <img src="<?php echo get_template_directory_uri() . '/asset/img/cv-download.png'; ?>" alt="">
          <div class="link-seemore"><a href="">En savoir plus<i class="fas fa-arrow-right"></i></a></div>
        </div>

      </div>

      <div class="right-container">

        <img src="<?php echo get_template_directory_uri() . '/asset/img/media-home.png'; ?>" alt="">

      </div>
    </div>
  </div>

    <!-- SECTION 3-->
    <div class="section-white">

        <div class="container-avantage">
            <div class="left-avantage">

                <img src="<?php echo get_template_directory_uri() . '/asset/img/avantage.png'; ?>" alt="">

            </div>
            <div class="right-avantage">

                <img src="<?php echo get_template_directory_uri() . '/asset/img/eclipse2.png'; ?>" alt="">
                <h2>Les 3 avantages d'utiliser CV&toi pour créer le CV parfait</h2>
                <p>Créez votre CV en quelques minutes sur n’importe quel appareil : ordinateur, portable, tablette. Nous nous adaptons à vos besoins !</p>
                <p>Nos modèles sont approuvés par nos experts pour vous aider à passer la première étape du processus de sélection, même si le logiciel ATS est utilisé.</p>
                <p>Grâce à cet outil interactif, vous pourrez créer un CV efficace facilement et rapidement, sans avoir à vous préoccuper du format ou de la mise en page de votre CV.</p>


                    <div class="link-seemore2"><a href="">En savoir plus<i class="fas fa-arrow-right"></i></a></div>



            </div>
        </div>

    </div>

    <div class="section-grey">
        <div class="container-blob">
            <h3>Nous aidons des milliers de personnes</h3>
            <div class="box-blob">
                <div class="blob blob1"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
                <div class="blob blob2"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
                <div class="blob blob3"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
                <div class="blob blob4"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
                <div class="blob blob5"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
                <div class="blob blob6"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
                <div class="blob blob7"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
                <div class="blob blob8"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
                <div class="blob blob9"><img src="<?php echo get_template_directory_uri() . '/asset/img/human.png'; ?>" alt=""></div>
            </div>
            <div class="container-ent">
                <a href=""><div class="box-ent">
                    <img src="<?php echo get_template_directory_uri() . '/asset/img/digiworks.png'; ?>" alt="">
                </div></a>
                <a href=""><div class="box-ent">
                    <img src="<?php echo get_template_directory_uri() . '/asset/img/siqual.png'; ?>" alt="">
                </div></a>
                <a href=""><div class="box-ent">
                    <img src="<?php echo get_template_directory_uri() . '/asset/img/attineos.png'; ?>" alt="">
                </div></a>
                <a href=""><div class="box-ent">
                    <img src="<?php echo get_template_directory_uri() . '/asset/img/torisystem.png'; ?>" alt="">
                </div></a>
                <a href=""><div class="box-ent">
                    <img src="<?php echo get_template_directory_uri() . '/asset/img/foreachcode.png'; ?>" alt="">
                </div></a>

            </div>
        </div>
    </div>


  <?php get_footer();
