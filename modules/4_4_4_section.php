<?php


$heading = get_sub_field('section_heading');
$left = get_sub_field('overlay_button');
$middle = get_sub_field('middle');
$right = get_sub_field('right_overlay_button');
?>

<section id="4_4_4_section" class="section-layout">
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
                <div class="button-inner">
                    <a href="<?php $left['link']; ?>">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="<?php echo $left['image']; ?>">
                    <div class="content-details fadeIn-top">
        <h5><?php echo $left['text']; ?></h5>
       
      </div>
                    </a>
                </div>
           		</div>
                   <div class="col-md-4">
                   <div class="section-inner">
                   <div class="inner vertical-center">
                   <?php echo $middle; ?>
                   </div>
                   </div>
           		</div>
				   <div class="col-md-4">
                   <div class="button-inner">
                    <a href="<?php $right['link']; ?>">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="<?php echo $right['image']; ?>">
                    <div class="content-details fadeIn-top">
        <h5><?php echo $right['text']; ?></h5>
       
      </div>
                    </a>
                </div>
           		</div>
				  
            </div>

    </div>

</section>