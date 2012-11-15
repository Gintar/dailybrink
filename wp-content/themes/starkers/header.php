<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<!-- server: aws -->
	<head profile="http://gmpg.org/xfn/11">
		
		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?>
		</title>

	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="Online publication and networking platform featuring up-and-comers from all ages and industries revolutionizing their respective fields." />
		<?php if(is_search()) { ?>
		<meta name="robots" content="INDEX, FOLLOW" /> 
	    <?php }?>
	
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>

		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery.backgroundPosition.js"></script>
		<script type="text/javascript" src="jquery.cookie.js"></script>
		<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.3/full/jquery.tools.min.js"></script>
	        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />	
		
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-278504-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		
	</head>

	<!--<body style="background-image:url(rainbow2.jpg);background-color:#EEE;">-->
	<body style="background-color:#EEE;">
	
	<script type="text/javascript">

			$(document).ready(function(){
	// This is for the Header hovers
				
				$('#navArchiveHolder').hover(function() {
					$('#archive').fadeOut(150);
				}, function() {
					$('#archive').fadeIn(300);
				});
				
				$('#connectHolder').hover(function() {
					$('#connect').fadeOut(150);
				}, function() {
					$('#connect').fadeIn(300);
				});
				
				$('#navsubmitHolder').hover(function() {
					$('#submit').fadeOut(150);
				}, function() {
					$('#submit').fadeIn(300);
				});
				
				$('#aboutHolder').hover(function() {
					$('#about').fadeOut(150);
				}, function() {
					$('#about').fadeIn(300);
				});
				
				$('#contactHolder').hover(function() {
					$('#contact').fadeOut(150);
				}, function() {
					$('#contact').fadeIn(300);
				});

				// nissan logo change
				if(/4961|4966|4955|4964|4968/.test(window.location.href)){
					$('#logo').css('background-image', 'url(https://s3.amazonaws.com/dailybrink/nissan-small-logo.jpg)');
				}
		})
		</script>
	<div id="gigaContainer">
	<div id="nav">
		<a href="index.php" id="logo">logo</a>
		<a href="/?page_id=35">
		<div id="navArchiveHolder">
		<div id="archive">
		</div>
		</div>
		</a>
		<a href="/?page_id=46 ">
		<div id="connectHolder">
		<div id="connect">
		</div>
		</div>
		</a>
		<a href="/?page_id=27">
		<div id="navsubmitHolder">
		<div id="submit">
		</div>
		</div>
		</a>
		<a href="/?page_id=40">
		<div id="aboutHolder">
		<div id="about">
		</div>
		</div>
		</a>
		<a href="http://www.dailybrink.tumblr.com" target="_blank">
		<div id="contactHolder">
		<div id="contact">
		</div>
		</div>
		</a>
		
		<div id="search"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
	</div>
	
