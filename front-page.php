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

<div class="front-page content">
	<?php

while(have_rows('module')) {
	the_row();

	pf_theme_partial('/modules/'.get_row_layout().'.php');
}

?>
</div>
<?php get_footer(); ?>
