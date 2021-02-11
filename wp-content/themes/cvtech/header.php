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
<?php
$args = array(
	'post_type' => 'logo', // articles 
	'post_status' => 'publish', // publiés 
	'posts_per_page' => '1', //  4 posts 
	'orderby' => 'title',
	'order' => 'ASC',
);
$the_query = new WP_Query($args); ?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="header">
			<?php if ($the_query->have_posts()) {
				while ($the_query->have_posts()) {
					$the_query->the_post();
			?>

					<div class="logo">
						<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="logo cv & toi"></a>
					</div>
				<?php } ?>
			<?php    } ?>
			<div class="nav">
				<nav>
					<ul>
						<li><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
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