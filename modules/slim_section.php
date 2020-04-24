<?php
$text = get_sub_field('section_text');
$link = get_sub_field('button_link');
$colour = get_sub_field('background_colour');
$button_text = get_sub_field('button_text');
?>

<section id="slim_section" class="<?php echo $colour; ?>">
    <div class="container">
        <div class="row align-center">
           
        
            
            <div class="col-12 ">
            <h3><?php echo $text; ?></h3>
                <a href="<?php echo $link;?>">
                    <button>
                        <?php echo $button_text; ?>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>