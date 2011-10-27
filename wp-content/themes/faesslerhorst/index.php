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
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<!--  <base href="http://faesslerundhorst.ch/" />  -->
<title></title>
<meta name="description" content="">
<meta name="author" content="">
  <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

<link rel="stylesheet" href="css/style.css">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

<!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects;
for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

<div id="container">
<header>

</header>
<div id="main" role="main">
    <img alt="logo" src="images/logo.png" id="logo" />
    <ul id="menu">
<li class="item-105 active deeper parent"><a href="/" >Photo</a><ul><li class="item-118 current active"><a href="/" >Artists</a></li><li class="item-119"><a href="/index.php/photo/advertising" >Advertising</a></li><li class="item-120"><a href="/index.php/photo/reportage" >Reportage</a></li><li class="item-122"><a href="/index.php/photo/events" >Events</a></li><li class="item-123"><a href="/index.php/photo/artsy" >Artsy</a></li><li class="item-121"><a href="/index.php/photo/portrait" >Portrait</a></li><li class="item-128"><a href="/index.php/photo/fashion" >Fashion</a></li></ul></li><li class="item-106 parent"><a href="/index.php/video/going-on-like-this" >Video</a></li><li class="item-107 parent"><a href="/index.php/live/tongedron" >Live</a></li><li class="item-108 parent"><a href="/index.php/about" >About</a></li>
	</ul>
<ul id="pictures">
<li>
<img src="images/fotos/artists-1.jpg" alt="p Artists 1" />
</li>
                          			<li>
            										<img src="images/fotos/artists-2.jpg" alt="p Artists 2" />
</li>
                          			<li>
            										<img src="images/fotos/artists-3.jpg" alt="p Artists 3" />
</li>
                          			<li>
<img src="images/fotos/artists-4.jpg" alt="p Artists 4" />
</li>
<li>
<img src="images/fotos/artists-5.jpg" alt="p Artists 5" />
					</li>
<li>
<img src="images/fotos/artists-6.jpg" alt="p Artists 6" />
</li>
<li>
<img src="images/fotos/artists-7.jpg" alt="p Artists 7" />
					</li>
<li>
<img src="images/fotos/artists-9.jpg" alt="p Artists 9" />
</li>
                          			<li>
            										<img src="images/fotos/artists-10.jpg" alt="p Artists 10" />

</li>
                          			<li>
            										<img src="images/fotos/artists-11.jpg" alt="p Artists 11" />

</li>
                          			<li>
            										<img src="images/fotos/artists-12.jpg" alt="p Artists 12" />

</li>
                          			<li>
            										<img src="images/fotos/artists-13.jpg" alt="p Artists 13" />

</li>
<li>
<img src="images/fotos/artists-14.jpg" alt="p Artists 14" />
					</li>
</ul>
</div>
<footer>

</footer>
</div> <!--! end of #container -->


<!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


<!-- scripts concatenated and minified via build script -->
<script defer src="js/plugins.js"></script>
<script defer src="js/script.js"></script>
<!-- end scripts -->




<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){
var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script defer>window.attachEvent('onload',function(){
CFInstall.check({
mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
<?php

?>