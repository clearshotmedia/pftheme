<?php 
$height = get_sub_field('slider_height');
$slides = get_sub_field('slides');
$content = get_sub_field('content_area');

?>

<section id="full_width_image_slider">

<div id="fw_image_slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner <?php echo $height; ?>">
    
      <?php 
  $z = 0;
  while ( have_rows('slides') ) : the_row();?>
  <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>">
      <img class="d-block w-100" src="<?php the_sub_field('slider_image');?>">
    </div>
<?php 
$z++;
endwhile; ?>

<div class="container middle">
  <div class="row">
  <div class="col-12">
    <div class="content-area">
      <?php echo $content; ?>
    </div>
  </div>
  </div>
   
   </div>
  </div>
</div>

</section>