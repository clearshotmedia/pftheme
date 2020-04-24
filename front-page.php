<?php
/**
 * The template for displaying all single posts.
 *
 * @package projectfloors
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$headertype = get_field('header_type');
if($headertype == 'green'){
    get_header('green');
} elseif($headertype == 'red'){
    get_header('red');
} else get_header();

?>


	<?php

while(have_rows('module')) {
	the_row();

	pf_theme_partial('/modules/'.get_row_layout().'.php');
}

?>

<?php get_footer(); ?>
