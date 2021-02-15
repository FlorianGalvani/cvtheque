<?php
/*
Template Name: Profil
*/
$user = wp_get_current_user();
if($user->ID == 0){
    header('location:login');
}
get_header(); ?>
<!-- <img src="<?php echo get_template_directory_uri() . '/asset/img/blobs1.svg'; ?>" alt="" class="blobs1"> -->
<!-- <img src="<?php echo get_template_directory_uri() . '/asset/img/blobs2.svg'; ?>" alt="" class="blobs2"> -->

      <h2>Mon espace personnel</h2>





 <?php
  get_footer(); ?>