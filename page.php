<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$headertype = get_field('header_type');
if($headertype == 'green'){
    get_header('green');
} elseif($headertype == 'red'){
    get_header('red');
} elseif($headertype == 'grey'){
    get_header('grey');
}else get_header();


?>

<div class="wrapper" id="page-wrapper">


	

			

			<main class="site-main" id="main">

			<?php

while(have_rows('module')) {
	the_row();

	pf_theme_partial('/modules/'.get_row_layout().'.php');
}

?>

			</main><!-- #main -->

			





</div><!-- #page-wrapper -->

<?php get_footer();
