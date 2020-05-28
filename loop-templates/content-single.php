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

		<div class="post-nav">
			<div class="prev">
			<?php $next_post = get_previous_post();
if ( is_a( $next_post , 'WP_Post' ) ) : ?>
   <a href="<?php echo get_permalink( $next_post->ID ); ?>"><i class="fa fa-angle-left"></i> <?php echo get_the_title( $next_post->ID ); ?></a>
<?php endif; ?>
			</div>
			<div class="next">
			<?php $next_post = get_next_post();
if ( is_a( $next_post , 'WP_Post' ) ) : ?>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?> <i class="fa fa-angle-right"></i></a>
<?php endif; ?>
			</div>
			</div>
		</div>
		</div>
	</header><!-- .entry-header -->



	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<div class="content-wrapper">
		<?php the_content(); ?>
				</div>
			</div>

			<div class="col-md-4 my-4">
			<div class="form-inner">
			 <?php echo the_field('post_contact_form');?>
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
					<div class="grid-sizer"></div>
            <?php while ( have_rows('post_gallery') ) : the_row(); ?>
            
                <div class="gallery-item "> 
              
					<a href="<?php echo the_sub_field('image'); ?>" data-gallery="post-gallery"
 data-toggle="lightbox">
					<img src="<?php echo the_sub_field('image'); ?>"> 
					</a>
                    
                 
              
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
