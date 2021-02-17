<?php
/*
Template Name: Register
*/


$errors = false;
if (!empty($_POST['submitinscription'])) {
    // FAILLE XSS
    $user_login   = cleanXss($_POST['user_login']);
    $user_email     = cleanXss($_POST['user_email']);
    $user_pass = cleanXss($_POST['user_pass']);
    $user_pass2 = cleanXss($_POST['user_pass2']);

    $errors = ValidationText($errors, $user_login, 'user_login', 4, 50);
    $errors = emailValidation($errors, $user_email, 'user_email');
    if (email_exists($user_email)) {
        $errors['user_email'] = 'Cet email est deja utilisé';
    }
    $errors = validPass($errors, $user_pass, 'user_pass', $user_pass2, 2, 100);

    //
    $user = wp_insert_user(array(
        'user_login' => $_POST['user_login'],
        'user_pass' => $_POST['user_pass'],
        'user_email' => $_POST['user_email'],
        'user_registered' => current_time('mysql'),
    ));

    wp_redirect(site_url('login'));
    exit();
}

?>
<?php get_header(); ?>

<img src="<?php echo get_template_directory_uri() . '/asset/img/blobs1.svg'; ?>" alt="" class="blobs1">
<img src="<?php echo get_template_directory_uri() . '/asset/img/blobs2.svg'; ?>" alt="" class="blobs2">
<div class="register">
    <form method="POST" id="forminscription" novalidate>
        <h2>Inscription</h2>
        <!-- Identifiant -->
        <div class="form-group1">
            <label for="user_login">Identifiant</label>
            <span class="error"><?php if (!empty($errors['user_login'])) {
                                    echo $errors['user_login'];
                                } ?></span>
            <input type="text" name="user_login" id="user_login" class="form-control" value="<?php if (!empty($_POST['user_login'])) {
                                                                                                    echo $_POST['user_login'];
                                                                                                } ?>">
        </div>
        <!-- EMAIL -->
        <div class="form-group1">
            <label for="user_email">E-mail</label>
            <span class="error"><?php if (!empty($errors['user_email'])) {
                                    echo $errors['user_email'];
                                } ?></span>
            <input type="email" name="user_email" id="user_email" class="form-control" value="<?php if (!empty($_POST['user_email'])) {
                                                                                                    echo $_POST['user_email'];
                                                                                                } ?>" />
        </div>
        <!-- PASSWORD1 -->
        <div class="form-group2">
            <label for="user_pass">Mot de passe</label>
            <span class="error"><?php if (!empty($errors['user_pass'])) {
                                    echo $errors['user_pass'];
                                } ?></span>
            <input type="password" name="user_pass" id="user_pass" class="form-control" value="" autocomplete="off" />
        </div>
        <!-- PASSWORD2 -->
        <div class="form-group2">
            <label for="user_pass2">Confirmation du mot de passe</label>
            <input type="password" name="user_pass2" id="user_pass2" class="form-control" value="" autocomplete="off" />
        </div>
        <!-- CHECKBOX RECRUTEUR -->
        <div class="form-group3">
        <label for="into">S'inscrire en tant que:</label>
            <label id="recruit" for="recruit">Recruteur</label>
            <input type="checkbox" name="recruit" id="recruit" class="form-control" value="" />
        <!-- CHECKBOX CANDIDAT -->
            <label for="candidat">Candidat</label>
            <input type="checkbox" name="candidat" id="candidat" class="form-control" value="" />
        </div>
        <input type="submit" name="submitinscription" value="Je m'inscris" />
    </form>
</div>
<?php
get_footer(); ?>