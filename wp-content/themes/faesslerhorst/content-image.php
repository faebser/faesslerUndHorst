<?php
// this template part is used to display all the images
global $faesslerUndHorstIndex;
?>
<li class=sliderItem style="z-index=<?php echo $faesslerUndHorstIndex++ ?>;">
<?php the_post_thumbnail(); ?>
<div class=imageDescription style="z-index=<?php echo $faesslerUndHorstIndex++ ?>;">
<h3><?php the_title(); ?></h3>
<?php the_content();?>
</div>
</li>