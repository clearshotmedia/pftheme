<?php
$heading = get_sub_field('section_heading');
$text = get_sub_field('section_content');

$colour = get_sub_field('background_colour');
$button_text = get_sub_field('button_text');
?>

<section id="basic_text_section">
    <div class="container align-center">
    <div class="row">
            <div class="col-12 ">
            <h2><?php echo $heading; ?></h2>
            <hr>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12">
            <?php echo $text; ?>
            </div>
            
        </div>
    </div>
</section>