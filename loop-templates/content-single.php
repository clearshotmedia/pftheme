<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header " style="background:url('<?php echo $url; ?>');background-position:center;background-size: cover;">
	<div class="container">
		<div class="row align-center">
		<div class="col-12">
		<div class="title-wrapper">
		<?php the_title( '<h1 class="entry-title align-middle">', '</h1>' ); ?>
			</div>
		</div>
		</div>
		</div>
	</header><!-- .entry-header -->



	<div class="container">
		<div class="row">
			<div class="col-12">
			<div class="content-wrapper">
		<?php the_content(); ?>
				</div>
			</div>
		</div>
		</div>
		<div class="wrapper gallery" id="page-wrapper">
		

<div class="container">

            <?php 
			 if( have_rows('post_gallery') ): ?> 
            
                <div class="row">
                    <div class="col-12">
                    <div class="grid">
            <?php while ( have_rows('post_gallery') ) : the_row(); ?>
            
                <div class="gallery-item "> <div class="button-inner">
              
                <div class="content-overlay"></div>
                     <img src="<?php echo the_sub_field('image'); ?>"> 
                 
               </div>
            </div>
            <?php
                endwhile;
                else :
                  // no rows found
                endif;
                ?>
            </div>
        </div>
    </div>
		
            </div>
			





</div><!-- #page-wrapper -->


</article><!-- #post-## -->
