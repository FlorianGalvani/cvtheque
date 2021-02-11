<?php
/*
Template Name: Profil
*/
$user = wp_get_current_user();
if($user->ID == 0){
    header('location:login');
}
get_header(); ?>


      <h2>Mon espace personnel</h2>





 <?php
  get_footer(); ?>