<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package projectfloors
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'pf_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="header grey sticky-top " itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'tdcc' ); ?></a>

		<nav class="navbar  navbar-expand-md ">

		
			<div class="container">
	
			<a href="#" class="navbar-brand custom-logo-link">
					<img src="<?php the_field('grey_header_logo', 'option'); ?>" class="img-fluid"></a>
			

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'projectfloors' ); ?>">
				<i class="fa fa-bars"></i>
				</button>

						<div class="ffgg">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'menu-nav navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
</div>
<div class="phone-section">
				<div class="phone-inner">
				<a href="tel:<?php echo the_field('header_phone_number', 'option'); ?>">
				<i class="fa fa-phone"></i></a>
				</div>
</div>

<a href="<?php echo the_field('instagram', 'option'); ?>"><i class="fa fa-instagram"></i></a>	<a href="<?php echo the_field('facebook', 'option'); ?>"><i class="fa fa-facebook-f"></i></a>

			</div><!-- .container -->
			


		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
