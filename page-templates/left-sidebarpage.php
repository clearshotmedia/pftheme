<?php
/**
 * Template Name: Regular Page 
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="page-wrapper">

	<div id="content">

		

		
			<div class=" content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
