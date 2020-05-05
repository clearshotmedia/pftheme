<?php
/**
 * Sidebar setup for footer full
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row align-center">

				<?php dynamic_sidebar( 'footerfull' ); ?>

				<div class="col-12 align-center py-2">
				<a href="<?php echo the_field('facebook', 'option'); ?>"><img src="/wp-content/uploads/2020/05/facebook.png"></a>
<a href="<?php echo the_field('instagram', 'option'); ?>"><img src="/wp-content/uploads/2020/05/instagram.png"></a> </div>
			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

<?php endif;
