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

            
<div id="filters" class="filter-group">  <button class="filter is-checked" data-filter="*">All Projects</button>
  <button class="filter" data-filter=".residential">Residential</button>
  <button class="filter" data-filter=".commerical">Commercial</button>
  <button class="filter" data-filter=".alkali, .alkaline-earth">add more</button>
  
</div>


            <?php

$gall = get_field('gallery_item', 'option');

// do something with $variable

?>
			<?php

if( have_rows('gallery_item', 'option') ):
?> 
<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="grid">
<?php
    // loop through the rows of data
   while ( have_rows('gallery_item', 'option') ) : the_row();

       // display a sub field value
       ?>
      <div class="gallery-item <?php echo the_sub_field('image_tag'); ?>"> <img src="<?php echo the_sub_field('image'); ?>"> </div>
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







			</main><!-- #main -->

			





</div><!-- #page-wrapper -->

<?php get_footer();
