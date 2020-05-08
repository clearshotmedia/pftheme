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
	<div id="wrapper-navbar" class="header-red sticky-top " itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'tdcc' ); ?></a>

		<nav class="navbar frontnav  navbar-expand-sm ">

		
			<div class="container">
	


					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {

						 if ( !is_front_page() ) {
						the_custom_logo();
						 }
					} ?><!-- end custom logo -->
<div class="tagline"><?php echo the_field('tagline', 'option');  ?></div>
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
			
<div class="socials"><a href="<?php echo the_field('facebook', 'option'); ?>"><img src="/wp-content/uploads/2020/05/facebook.png"></a>
<a href="<?php echo the_field('instagram', 'option'); ?>"><img src="/wp-content/uploads/2020/05/instagram.png"></a> </div>
			</div><!-- .container -->
			


		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
