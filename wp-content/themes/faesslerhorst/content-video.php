<?php
global $faesslerUndHorstIndex;
// this template part is used to display all the videos, data is coming from post-meta data
//get_post_meta($post->ID, 'video', true)
?>
<li class=sliderItem style="z-index=<?php echo $faesslerUndHorstIndex++ ?>;">
<?php echo get_post_meta($post->ID, 'video', true); ?>
<div class=imageDescription style="z-index=<?php echo $faesslerUndHorstIndex++ ?>;">
<h3><?php the_title();?></h3>
<?php the_content();?>
</div>
</li>