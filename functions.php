<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );
include_once( MY_ACF_PATH . 'pro/acf-pro.php' );
add_filter('acf/settings/url', 'my_acf_settings_url');
		function my_acf_settings_url( $url ) {
			return MY_ACF_URL;
		}

if( function_exists('acf_add_options_page') ) {
	$arg = acf_add_options_page(array(
		'page_title' 	=> 'Gallery Settings',
		'menu_title'	=> 'Gallery Settings',
		'menu_slug' 	=> 'theme-general-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
if( function_exists('acf_add_options_page') ) {
	$arg = acf_add_options_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header Settings',
		'menu_slug' 	=> 'header-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function acf_load_color_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();


    // if has rows
    if( have_rows('project_categories', 'option') ) {
        
        // while has rows
        while( have_rows('project_categories', 'option') ) {
            
            // instantiate row
            the_row();
            
            
            // vars
            $value = get_sub_field('category_name');
            $label = get_sub_field('category_label');

            
            // append to choices
            $field['choices'][ $value ] = $label;
            
        }
        
    }


    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=image_tag', 'acf_load_color_field_choices');
