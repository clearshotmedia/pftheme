<?php
$heading = get_sub_field('section_heading');
$colour = get_sub_field('feature_colour');

$button = get_sub_field('button');

// button_heading button_image button_link
?>

<section id="feature_buttons">
    <div class="container">
    <div class="row">
            <div class="col-12 align-center">
            <h2><?php echo $heading; ?></h2>
            <hr>
            </div>
            
        </div>
        <div class="row no-gutters">
          
            <?php while ( have_rows('button') ) : the_row();?>
            <div class="col-md-4 px-2 mb-3"> 
            <div class="button-inner">
                    <a href="<?php the_sub_field('button_link');?>">
                    <div class="content-overlay <?php echo $colour; ?>"></div>
                    <img class="content-image" src="<?php the_sub_field('button_image');?>">

                    <div class="content-details fadeIn-top <?php echo $colour; ?>">

        <h5><?php echo the_sub_field('button_heading'); ?></h5>
       
      </div>
                    </a>
                </div>
            </div>
<?php endwhile; ?>
            
            
        </div>
    </div>
</section>