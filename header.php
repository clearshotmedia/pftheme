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

<body  <?php body_class(); ?>>	
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<!-- ******************* The Navbar Area ******************* -->
	<div class="navigation-wrap header-front start-header ">
		<div class="container-fluid px-3">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md ">
					
					<a href="<?php echo home_url(); ?>" class="navbar-brand custom-logo-link">
					<img src="<?php the_field('red_header_logo', 'option'); ?>" class="img-fluid"></a>	<div class="tagline"><?php echo the_field('tagline', 'option');  ?></div>
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarSupportedContent',
						'menu_class'      => 'navbar-nav ml-auto py-4 py-md-0',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>


						

						<div class="socials ml-md-4"><a href="tel:<?php echo the_field('header_phone_number', 'option'); ?>"><img src="/wp-content/uploads/2020/05/phone.png"></a><a href="<?php echo the_field('facebook', 'option'); ?>"><img src="/wp-content/uploads/2020/05/facebook.png"></a>
<a href="<?php echo the_field('instagram', 'option'); ?>"><img src="/wp-content/uploads/2020/05/instagram.png"></a> </div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>
	
	
  

</body>