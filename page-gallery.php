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


	
<div class="wrapper gallery" id="page-wrapper">
<?php
// Get the current queried object
$term    = get_queried_object();
$term_id = ( isset( $term->term_id ) ) ? (int) $term->term_id : 0;

$categories = get_categories( array(
    'taxonomy'   => 'category', // Taxonomy to retrieve terms for. We want 'category'. Note that this parameter is default to 'category', so you can omit it
    'orderby'    => 'name',
    'parent'     => 0,
    'hide_empty' => 0, // change to 1 to hide categores not having a single post
) );
?>


<div class="container">
    <div class="row">
    <div class="col-12">
    <div id="filters" class="filter-group"> <div class="filterby">Filter By</div> <button class="filter is-checked" data-filter="*">All Projects</button>
           

    
    <?php
    foreach ( $categories as $category ) 
    {
        $cat_ID        = (int) $category->term_id;
        $category_name = $category->name;

        // When viewing a particular category, give it an [active] class
        $cat_class = ( $cat_ID == $term_id ) ? 'active' : 'not-active';

        // I don't like showing the [uncategoirzed] category
        if ( strtolower( $category_name ) != 'uncategorised' )
        {
           


            ?> 
               <button class="filter" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
            
            <?php
        }
    }
    ?>
            </div>
        </div>
    </div>
    <div class="row my-3">
    <div class="col-md-12 ">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php echo the_content(); ?>
            <?php endwhile; // end of the loop. ?>
    </div>
    </div>
</div>

<div class="container-fluid">

         


            <?php 
			 if( have_rows('gallery_item', 'option') ): ?> 
                <div class="row">
                    <div class="col-12">
                    <div class="grid">
                    <div class="grid-sizer"></div>
            <?php while ( have_rows('gallery_item', 'option') ) : the_row(); ?>
            <?php $post_object = get_sub_field('post_link'); 
                    if( $post_object ):
                        // override $post
                        $post = $post_object;
                        setup_postdata( $post ); 

                        $cats = get_the_category( $post->ID );
            ?>
                <div class="gallery-item <?php foreach($cats as $cd){ echo $cd->slug; }?>"> <div class="button-inner">
                <a href="<?php the_permalink(); ?>">
                <div class="content-overlay"></div>
                     <img src="<?php echo the_sub_field('image'); ?>"> 
                     <div class="content-details fadeIn-top">

        <h5><?php echo $post->post_title;?></h5>
       
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
			

            <?php

while(have_rows('module')) {
	the_row();

	pf_theme_partial('/modules/'.get_row_layout().'.php');
}

?>



</div><!-- #page-wrapper -->

<?php get_footer();
