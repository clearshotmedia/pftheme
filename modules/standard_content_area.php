<?php

$content_section = get_sub_field('content_section');
$background = get_sub_field('background_image');
?>

<section id="content-section" style="background-image: url(<?php echo $background; ?>);background-position: 100% 100%;">
    <div class="container">
        <div class="row ">
            <div class="col-12">


            <?php echo $content_section; ?>

            </div>

            </div>

    </div>

</section>
