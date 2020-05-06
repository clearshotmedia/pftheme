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


			<?php

while(have_rows('module')) {
	the_row();

	pf_theme_partial('/modules/'.get_row_layout().'.php');
}

?>
<div class="wrapper gallery" id="page-wrapper">



<div class="container">
    <div class="row">
    <div class="col-12">
    <div id="filters" class="filter-group">  <button class="filter is-checked" data-filter="*">All Projects</button>
            <button class="filter" data-filter=".residential">Residential</button>
            <button class="filter" data-filter=".commerical">Commercial Projects</button>
            <button class="filter" data-filter=".community">Community Living</button>
            <button class="filter" data-filter=".lifestyle">Lifestyle Resort</button>
            <button class="filter" data-filter=".project">Project Builds</button>
            <button class="filter" data-filter=".bespoke">Custom/Bespoke Builds</button>
            </div>
        </div>
    </div>
    <div class="row my-3">
    <div class="col-md-6 offset-md-3">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php echo the_content(); ?>
            <?php endwhile; // end of the loop. ?>
    </div>
    </div>
</div>

<div class="container-fluid">

         


            <?php $gall = get_field('gallery_item', 'option'); 
			 if( have_rows('gallery_item', 'option') ): ?> 
                <div class="row">
                    <div class="col-12">
                    <div class="grid">
            <?php while ( have_rows('gallery_item', 'option') ) : the_row(); ?>
            <?php $post_object = get_sub_field('post_link'); 
                    if( $post_object ):
                        // override $post
                        $post = $post_object;
                        setup_postdata( $post ); 
            ?>
                <div class="gallery-item <?php echo the_sub_field('image_tag'); ?>"> <div class="button-inner">
                <a href="<?php the_permalink(); ?>">
                <div class="content-overlay"></div>
                     <img src="<?php echo the_sub_field('image'); ?>"> 
                     <div class="content-details fadeIn-top">

        <h5><?php echo $post->post_title; ?></h5>
       
      </div> </a>
               </div>
            </div>
            <?php

            wp_reset_postdata(); 
            endif; 
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

<?php get_footer();
