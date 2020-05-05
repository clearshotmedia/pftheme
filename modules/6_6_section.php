<?php


$heading = get_sub_field('section_heading');
$left = get_sub_field('left_side');
$right = get_sub_field('right_side');
?>

<section id="6_6_section" class="section-layout">
    <div class="container">

    <?php if ( $heading ) {?>
    <div class="row">
    <div class="col-12">
    <h1><?php echo $heading; ?></h1>

    </div>
    </div>
    <?php } ?>
        <div class="row ">

            	<div class="col-md-6">
				<div class="section-inner">
                <?php

while(have_rows('left_side')) {
	the_row();

	pf_theme_partial('/modules/'.get_row_layout().'.php');
}

?>

				</div>
           		</div>
				   <div class="col-md-6">
                   <div class="section-inner">
                   <?php echo $right; ?>
        </div>
           		</div>
				  
            </div>

    </div>

</section>
