<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lendingTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lendingtheme' ); ?></a>

	<header id="masthead" class="site-header main-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
			<div class="main-header__social social">
            <a href = "#" class = "social__item social__item--vk"></a>
            <a href = "#" class = "social__item social__item--fb"></a>
            <a href = "#" class = "social__item social__item--tw"></a>
			</div>
			<p class="site-branding__site-description site-description">Описание в хэдере Описание в хэдере Описание в хэдере Описание в хэдере</p>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
