<?php
/*
Template Name: Forgot
*/
get_header(); ?>
<?php 
$errors = false;
if (!empty($_POST['submitforgot'])) {
    // FAILLE XSS
    $user_email     = cleanXss($_POST['user_email']);
    $user_new_pass = cleanXss($_POST['user_new_pass']);
    $user_new_pass2 = cleanXss($_POST['user_new_pass2']);

    $errors = emailValidation($errors, $user_email, 'user_email');
    $errors = validPass($errors, $user_new_pass, 'user_new_pass', $user_new_pass2, 2, 100);
    /* reset_password($user_email, $user_new_pass); */

/*     $user = wp_update_user(array(
        'user_new_pass' => $_POST['user_new_pass'],
        'user_email' => $_POST['user_email'],
    )); */

    wp_redirect(site_url('login'));
    exit();
} 
?>

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
    <input type="submit" name="submitforgot" value="Valider" />
</form>

<?php
get_footer(); ?>