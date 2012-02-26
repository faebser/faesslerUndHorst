<?php
the_post_thumbnail('full', array('class' => "pagePictrue",));
$pageTitle = get_the_title();

if($pageTitle == 'About' || $pageTitle == 'about') {
	?><div class="pageContent about"><?php 
	the_content();
	?></div><?php 
}
else {
	?><div class="pageContent normal"><?php 
	the_content();
	?></div><?php 
}
?>