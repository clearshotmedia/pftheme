<?php


$heading = get_sub_field('section_heading');
$first = get_sub_field('first');
$second = get_sub_field('second');
$third = get_sub_field('third');
$fourth = get_sub_field('fourth');
?>

<section id="3x4_section" class="section-layout">
    <div class="container">

    <?php if ( $heading ) {?>
    <div class="row">
    <div class="col-12">
    <h1><?php echo $heading; ?></h1>

    </div>
    </div>
    <?php } ?>
        <div class="row ">

            	<div class="col-md-3">
                    <div class="section-inner">
                        <?php echo $first; ?>
                    </div>    
           		</div>
                   <div class="col-md-3">
                    <div class="section-inner">
                        <?php echo $second; ?>
                    </div>    
           		</div>
                   <div class="col-md-3">
                    <div class="section-inner">
                        <?php echo $third; ?>
                    </div>    
           		</div>
                   <div class="col-md-3">
                    <div class="section-inner">
                        <?php echo $fourth; ?>
                    </div>    
           		</div>
				   
				  
            </div>

    </div>

</section>
