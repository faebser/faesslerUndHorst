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
	    <ul id=menu>
			<li class="item-105 active deeper parent"><a href="/">Photo</a><ul><li class="item-118 current active"><a href="/">Artists</a></li><li class=item-119><a href="/index.php/photo/advertising">Advertising</a></li><li class=item-120><a href="/index.php/photo/reportage">Reportage</a></li><li class=item-122><a href="/index.php/photo/events">Events</a></li><li class=item-123><a href="/index.php/photo/artsy">Artsy</a></li><li class=item-121><a href="/index.php/photo/portrait">Portrait</a></li><li class=item-128><a href="/index.php/photo/fashion">Fashion</a></li></ul></li><li class="item-106 parent"><a href="/index.php/video/going-on-like-this">Video</a></li><li class="item-107 parent"><a href="/index.php/live/tongedron">Live</a></li><li class="item-108 parent"><a href="/index.php/about">About</a></li>
		</ul>
		<?php wp_nav_menu(); ?>
		<div id=controls>
			<a href="#" id=previous></a>
			<a href="#" id=next></a>
		</div>
	</div>
		<ul id=slider>
		<?php if ( have_posts() ) : ?>
          		<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>
		<?php endif; ?>
		</ul>
    </div>

<?php get_footer(); ?>