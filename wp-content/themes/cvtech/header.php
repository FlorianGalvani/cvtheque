<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cvtech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="header">
			<div class="logo"><img src="wp-content/themes/cvtech/asset/img/cv-logo.svg" alt="logo cv & toi"></div>
			<div class="nav">
				<nav>
					<ul>
						<li><a href="#">Accueil</a></li>
						<li><a href="#">Créer Cv</a></li>
						<li><a href="#">À propos</a></li>
						<li><a href="#">Contact</a></li>
						|
						<li><a href="#ex2" class="upper" rel="modal:open">Login</a></li>
						<li><a href="#ex1" class="btn upper color-1" rel="modal:open">Sign up</a></li>
					</ul>
				</nav>
			</div>
		</header>