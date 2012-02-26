<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage faesslerUndHorstFotoKanzlei
*/
get_header(); ?>
<body>

  <div id=container>
    <header>

    </header>
    <div id=main role=main>
    <div id=menuContainer>
    	<img alt=logo src="<?php echo get_template_directory_uri(); ?>/images/logo.png" id=logo />
		<?php wp_nav_menu(); ?>
		<?php if(!is_page()) {?>
		<div id=controls>
			<a href="#" id=previous></a>
			<a href="#" id=next></a>
		</div>
		<?php } ?>
	</div>
	<?php if(is_page()) {
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				/* 
				 * Include Page Template
				 */
				get_template_part('pager');
			endwhile;
		endif;		
	}?>
		<ul id=slider>
		<?php global $faesslerUndHorstIndex;
			$faesslerUndHorstIndex = 1;
			 if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
				 endwhile;
			endif; ?>
		</ul>
	</div>

<?php get_footer(); ?>
