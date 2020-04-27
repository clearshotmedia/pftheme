<?php
$heading = get_sub_field('section_heading');
$left = get_sub_field('left_side');
$right = get_sub_field('right_side');
?>

<section id="8_4_section">
    <div class="container">
    <div class="row">
    <div class="col-12">
    <h1><?php echo $heading; ?></h1>

    </div>
    </div>
        <div class="row ">

            	<div class="col-md-8">
				<div class="left-inner">
                <?php echo $left; ?>
				</div>
           		</div>
				   <div class="col-md-4">
				  
                   <?php echo $right; ?>
				
           		</div>
				  
            </div>

    </div>

</section>
