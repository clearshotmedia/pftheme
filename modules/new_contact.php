<?php
$heading = get_sub_field('section_heading');
$left = get_sub_field('left_side');
$right = get_sub_field('right_side');
$colour = get_sub_field('background_colour');
?>

<section id="new_contact"  style="background:<?php echo $colour;?>">
    <div class="container">
    <div class="row">
    <div class="col-12">
    <h2><?php echo $heading; ?></h2>

    </div>
    </div>
        <div class="row ">

            	<div class="col-md-7">
				<div class="left-inner">
                <?php echo $left; ?>
				</div>
           		</div>
				   <div class="col-md-5">
				   <div class="form-inner">
                   <?php echo $right; ?>
				</div>
           		</div>
				  
            </div>

    </div>

</section>
