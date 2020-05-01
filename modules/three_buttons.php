<?php

$button1 = get_sub_field('button_1');
$button2 = get_sub_field('button_2');
$button3 = get_sub_field('button_3');
?>

<section id="three_buttons">
    <div class="container">
        <div class="row align-center">

            	<div class="col-md-4 big-button">
				<div class="button-inner">
				<a href="<?php echo $button1['button_link']; ?>">
					
					<img src="<?php echo $button1['button_image'];?>" alt="" class="img-responsive">
					<div class="button-bottom <?php echo $button1['button_colour'];?>">
					
					<img src="<?php echo $button1['button_logo']; ?>">
						<h4><?php echo $button1['button_text']; ?></h4>
					</div>
					</a></div>
           		</div>
				   <div class="col-md-4 big-button">
				   <div class="button-inner">
				<a href="<?php echo $button2['button_link']; ?>">
					
					<img src="<?php echo $button2['button_image'];?>" alt="" class="img-responsive">
					<div class="button-bottom <?php echo $button2['button_colour'];?>">
					<img src="<?php echo $button1['button_logo']; ?>">
						<h4><?php echo $button2['button_text']; ?></h4>
					</div>
					</a></div>
           		</div>
				   <div class="col-md-4 big-button">
				   <div class="button-inner">
				<a href="<?php echo $button3['button_link']; ?>">
				
					<img src="<?php echo $button3['button_image'];?>" alt="" class="img-responsive">
					<div class="button-bottom <?php echo $button3['button_colour'];?>" >
					<img src="<?php echo $button1['button_logo']; ?>">
						<h4><?php echo $button3['button_text']; ?></h4>
					</div>
					</a></div>
           		</div>
            </div>

    </div>

</section>
