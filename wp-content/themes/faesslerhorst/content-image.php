<?php
// this template part is used to display all the images
global $faesslerUndHorstIndex;
?>
<li class="sliderItem">
<?php the_post_thumbnail(); ?>
<div class="imageDescription">
<h3><?php the_title(); ?></h3>
<?php the_content();?>
</div>
</li>