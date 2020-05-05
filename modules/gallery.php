<?php 
$heading = get_sub_field('gallery_heading');
?>
<section id="gallery" class="gallery">

<div class="container">
    <div class="row align-center">
        <div class="col-12">
                <h2> <?php echo $heading; ?></h2>
                <hr class="primary">
        </div>
    </div>

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
        </div>
    </div>
</section>