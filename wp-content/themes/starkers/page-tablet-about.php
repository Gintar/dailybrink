<?php
/*
Template Name: Tablet - About
*/
?>

<?php if(!$_GET["adobeviewer"] == true) : ?>

<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<meta name="robots" content="nofollow" />
	
		<title>
			<?php wp_title('|', true, 'right');
			bloginfo('name');
			?>
		</title>
		<meta name="description" content="<?php bloginfo('description');?>">
		<meta name="author" content="The Brothers Mueller @ Studio Mercury [ny] / http://www.smny.us">
	
		<?php // <meta name="viewport" content="width=device-width, initial-scale=1.0"> ?>
		
		<meta name="viewport" content="width=768, user-scalable=no" />
			
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/tablet/tablet.css">
	
		<!-- Uncomment if you are specifically targeting less enabled mobile browsers
		<link rel="stylesheet" media="handheld" href="<?php bloginfo( 'stylesheet_directory' ); ?>">  -->
	
		<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects 
		<script src="<?php bloginfo('stylesheet_directory');?>/js/modernizr-1.6.min.js"></script>
		-->
	
		<?php wp_head();?>
	</head>

	<body <?php body_class();?>>
	
<?php endif; ?>


		<div id="container">
		
		
			<header>
			</header>

			<div id="main">

			<?php if (have_posts()) : ?>
				<div id="about">
				<?php while (have_posts()) : the_post(); ?>  
				
					<div class="about-text"><?php the_content(); ?></div>
					
				<?php endwhile; ?>
				</div>				
			<?php endif; ?>					

				

			</div> <!--! end of #main -->
    
			<footer>
			</footer>

		</div> <!--! end of #container -->



<!-- Javascript at the bottom for fast page loading -->

	<?php /* enable right before migration
	<script type="text/javascript">
	
	 var _gaq = _gaq || [];
	 _gaq.push(['_setAccount', 'UA-385556-16']);
	 _gaq.push(['_setDomainName', 'none']);
	 _gaq.push(['_setAllowLinker', true]);
	 _gaq.push(['_trackPageview']);
	
	 (function() {
	   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	 })();
	
	</script>
	*/?>

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php bloginfo( 'stylesheet_directory' ); ?>/tablet/js/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
  
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/tablet/js/jquery.tools.min.js"></script> 
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/tablet/js/script.js"></script>
  <!-- end concatenated and minified scripts-->

  
  <!--[if lt IE 7 ]>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->
  
	<?php wp_footer(); ?>

<?php if(!$_GET["adobeviewer"] == true) : ?>

	</body>

</html>

<?php endif; ?>
