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
		<!-- menu burger dispo à partir de 640px -->
		<div id="sideNav">
			<nav>
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
					<li><a href="<?php echo esc_url(home_url('candidat')); ?>">Créer Cv</a></li>
					<li><a href="<?php echo esc_url(home_url('a-propos')); ?>">À propos</a></li>
					<li><a href="#footer">Contact</a></li>
					<?php $user = wp_get_current_user(); ?>
					<?php if ($user->ID == 0) : ?>
						<li><a href="<?php echo bloginfo('url'); ?>/login" class="upper">Connexion</a></li>
						<li><a href="<?php echo bloginfo('url'); ?>/register" class="btn upper color-1">S'inscrire</a></li>
					<?php else : ?>
						<li><a href="<?php echo bloginfo('url'); ?>/profil" class="upper">Profil</a></li>
						<li><a href="<?php echo bloginfo('url'); ?>/logout" class="btn upper color-1">Déconnexion</a></li>
					<?php endif; ?>
				</ul>
			</nav>
		</div>
		<div id="menuBtn">
			<img src="<?php echo get_template_directory_uri() . '/asset/img/menu.png'; ?>" id="open" alt="icon-menu" />
			<img src="<?php echo get_template_directory_uri() . '/asset/img/close.png'; ?>" id="close" alt="icon-menu" />
		</div>
		<!-- fin menu burger -->
		<header id="header">
			<div class="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() . '/asset/img/cv-logo.svg'; ?>" alt="logo cv & toi"></a>
			</div>
			<div class="nav">
				<nav>
					<ul>
						<li><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
						<li><a href="<?php echo esc_url(home_url('candidat')); ?>">Créer Cv</a></li>
						<li><a href="<?php echo esc_url(home_url('a-propos')); ?>">À propos</a></li>
						<li><a href="#footer">Contact</a></li>
						|
						<?php $user = wp_get_current_user(); ?>
						<?php if ($user->ID == 0) : ?>
							<li><a href="<?php echo bloginfo('url'); ?>/login" class="upper">Connexion</a></li>
							<li><a href="<?php echo bloginfo('url'); ?>/register" class="btn upper color-1">S'inscrire</a></li>
						<?php else : ?>
							<li><a href="<?php echo bloginfo('url'); ?>/profil" class="upper">Profil</a></li>
							<li><a href="<?php echo bloginfo('url'); ?>/logout" class="btn upper color-1">Déconnexion</a></li>
						<?php endif; ?>
					</ul>
				</nav>
			</div>
		</header>