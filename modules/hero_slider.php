<?php

$slides = get_sub_field('slides');

?>

<section id ="hero_slider">
    <div id="fw_image_slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        
        <?php 
    $z = 0;
    while ( have_rows('slides') ) : the_row();?>
    <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>">
   
        <img class="d-block w-100" src="<?php the_sub_field('background_image');?>">

       
        </div>
    <?php 
    $z++;
    endwhile; ?>

<div class="abs-overlay">
                <div class="container">
                    <div class="row">
                    <div class="col-md-7">
                    <?php echo the_sub_field('left_side');?>
                    </div>
                    <div class="col-md-5">
                    <?php echo the_sub_field('right_side');?>
                    </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section>