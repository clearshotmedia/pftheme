<?php


$heading = get_sub_field('section_heading');
$left = get_sub_field('left_side');
$right = get_sub_field('right_side_slides');
?>

<section id="4_8_section" class="section-layout" style="padding-top:2rem;">
    <div class="container">

    <?php if ( $heading ) {?>
    <div class="row">
    <div class="col-12">
    <h1><?php echo $heading; ?></h1>

    </div>
    </div>
    <?php } ?>
        <div class="row ">

            	<div class="col-md-4">
				<div class="section-inner">
                <?php echo $left; ?>
				</div>
           		</div>
				   <div class="col-md-8">
                   <div class="section-inner">
                   <div id="inner_image_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        
                        <?php 
                    $z = 0;
                    while ( have_rows('right_side_slides') ) : the_row();?>
                    <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>">
                        <img class="d-block w-100" src="<?php the_sub_field('slider_image');?>">
                        </div>
                    <?php 
                    $z++;
                    endwhile; ?>

                    
                    </div>
                    </div>
        </div>
           		</div>
				  
            </div>

    </div>

</section>
