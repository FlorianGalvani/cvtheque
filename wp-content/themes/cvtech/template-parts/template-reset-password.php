<?php
/*
Template Name: Reset Password
*/

/* if(isLoggedAdmin() || isLoggedUser()) {
  header('Location: 403.php');
  exit(); } */

$errors = array();

 if(!empty($_POST['submitted'])) {
   $user_email    = cleanXss($_POST['user_email']);

   if(!empty($user_email)){
     global $wpdb;
     $results = $wpdb->get_results(
       "SELECT * FROM $wpdb->users WHERE user_email = '$user_email'"
     );

     if(!empty($results)){
       $token = generateRandomString(120);
       $user_id = 'user_id';
       global $wpdb;
       $wpdb->update(
           $wpdb->prefix.'usermeta',
           array(
               'token' => '$token',
           ),
           array( 'user_id' => $user_id ) 
       );

       $wpdb->update(
        $wpdb->prefix.'users',
        array(
            'user_email' => '$user_email',
        ),
        array( 'ID' => $user_id )
    );
    $url = home_url('send-mail');
    wp_redirect($url);
    exit();
     }

     else {
       $errors['user_email'] = 'Email introuvable...';
     }
   }

   else {
     $errors['user_email'] = 'Veuillez renseigner votre mail svp';
   }



}

get_header(); ?>
<section id="section1-forgot" class="format">
  <form action="" method="post" class="form">
    <h1>Mot de passe oublié</h1>
        <h2>Si tu as perdues ton mot de passe saisit ton Email et un mail va t'étre envoyer pour pouvoirs réinitialiser ton mot de passe</h2>
    <!-- EMAIL -->
    <div class="">
      <label for="email">Email : </label>
      <input placeholder="Email" type="text" id="user_email" name="user_email" value="<?php if(!empty($_POST['user_email'])) { echo $_POST['user_email']; } ?>"><br>
      <span class="error"><?php if(!empty($errors['user_email'])) { echo $errors['user_email']; } ?></span>
    </div>

    <input class="submit" type="submit" name="submitted" value="Envoyer" />

  </form>

</section>

<?php



?>




<?php
get_footer(); ?>