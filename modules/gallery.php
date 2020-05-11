<?php 
$heading = get_sub_field('gallery_heading');
?>
<section id="gallery" class="gallery">

<div class="container">
    <div class="row align-center">
        <div class="col-12">
                <h1> <?php echo $heading; ?></h1>
                <div class="tagline"><?php echo the_field('tagline', 'option');?></div>
                <hr class="primary">
        </div>
    </div>
    <?php 
			 if( have_rows('links') ): ?> 
<div class="row">
    <div class="col-12">
    <div id="filters" class="filter-group">
<?php while ( have_rows('links') ) : the_row(); 
$link = get_sub_field('link');
$link_url = $link['url'];
    $link_title = $link['title'];
?>
      <a href="<?php echo esc_url( $link_url ); ?>"><button class="filter module"><?php echo esc_html( $link_title ); ?></button></a>
      
    <?php endwhile; ?> 
    </div>
        </div>
    </div>
    <?php  endif;  ?>

</div>
    <div class=""container-fluid">
        <div class="row">
            <div class="col-12">
            
            

            <?php $gall = get_field('gallery_item'); 
			 if( have_rows('gallery_item') ): ?> 
                <div class="row">
                    <div class="col-12">
                    <div class="grid">
            <?php while ( have_rows('gallery_item') ) : the_row(); ?>
            <?php $post_object = get_sub_field('post_link'); 
                    if( $post_object ):
                        // override $post
                        $post = $post_object;
                        setup_postdata( $post ); 
            ?>
                <div class="gallery-item five <?php echo the_sub_field('image_tag'); ?>"> <div class="button-inner">
                <a href="<?php the_permalink($post_object->ID); ?>">
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
        </div>
    </div>
</section>