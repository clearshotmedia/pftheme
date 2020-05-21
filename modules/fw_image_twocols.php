<?php

$background = get_sub_field('background_image');
$content_left = get_sub_field('content_left');
$content_right = get_sub_field('content_right');
?>

<section id="fw-image-twocols" style="background:url('<?php echo $background; ?>'); background-size:cover;background-position:bottom;">
    <div class="container">
        <div class="row ">

            <div class="col-md-7 py-3">

            <p><?php echo $content_left; ?></p>
            </div>
            <div class="col-md-5 py-3">

<p><?php echo $content_right; ?></p>
</div>
            </div>

    </div>

</section>
