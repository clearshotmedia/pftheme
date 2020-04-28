<?php
/**
 * The template for displaying all single posts.
 *
 * @package projectfloors
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
 get_header('front');

?>


	<?php

while(have_rows('module')) {
	the_row();

	pf_theme_partial('/modules/'.get_row_layout().'.php');
}

?>

<?php get_footer(); ?>
