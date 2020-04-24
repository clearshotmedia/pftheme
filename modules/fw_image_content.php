<?php

$background = get_sub_field('background_image');
$content = get_sub_field('content_area');

?>

<section id="fw-image" style="background:url('<?php echo $background; ?>'); background-size:cover;">
    <div class="container">
        <div class="row align-center">

            <div class="col-md-6 py-3">

            <p><?php echo $content; ?></p>
            </div>
            </div>

    </div>

</section>
