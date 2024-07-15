<?php
/**
 * The template for displaying the header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'raw' ); ?>>
<?php wp_body_open(); ?>

	<header id="header">
		<?php
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}

		// Primary menu.
		print '<div id="raw-primary-menu"><a class="toggle-nav" href="#">Menú <span>&#9776;</span></a>';

		wp_nav_menu(
			array(
				'menu'           => 'primary',
				'theme_location' => 'primary',
			)
		);

		// Llámanos sin compromiso.
		print '</div><div><a role="button" class="raw-phone" href="tel:910916445">Llámanos sin compromiso</a></div><br><br>';

		// Secondary menu.
		print '<div id="raw-secondary-menu"><a class="toggle-nav" href="#">Servicios <span>&#9776;</span></a>';

		wp_nav_menu(
			array(
				'menu'           => 'secondary',
				'menu_class'     => 'container menu',
				'theme_location' => 'secondary',
			)
		);

		print '</div>';
		?>
	</header>

	<section id="primary">
		<main id="main">