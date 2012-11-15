<?php get_header(); ?>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<meta property="og:title" content="<?php the_title(); ?>"/>
<meta property="og:type" content="public_figure"/>
<meta property="og:image" content="<?php echo get_post_meta($post->ID, 'frontImage', true); ?>"/>
<meta property="og:url" content="<?php echo curPageURL();?>"/>
<meta property="og:site_name" content="Daily Brink"/>
<meta property="og:admins" content="ryochiba"/>

<script>
$(document).ready(function(){
$(function() {
		$("a[rel]").overlay({mask: {
		color: '#000',
		loadSpeed: 200,
		opacity: 0.6
	}});
});

$(document).ready(function(){        
	var h = $("#singleText").height();
	$("#gigaContainer").css("height",h);
  })

});

//-------- For following sidebars ------//

$(document).ready(function () {  

if($(window).height()>600&&$(window).width()>1023){

  var top = $('#singleCollage').offset().top - parseFloat($('#singleCollage').css('marginTop').replace(/auto/, 0));
  $(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();
    // whether that's below the form
    if (y >= top) {
      // if so, ad the fixed class
      $('#singleCollage').addClass('fixed');
	  
    } else {
      // otherwise remove it
      $('#singleCollage').removeClass('fixed');
    }
  });
  }
});

$(document).ready(function () {  

	if($(window).height()>600&&$(window).width()>1023){

  var top = $('#singleRightCol').offset().top - parseFloat($('#singleRightCol').css('marginTop').replace(/auto/, 0));
  $(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();
    // whether that's below the form
    if (y >= top) {
      // if so, ad the fixed class
      $('#singleRightCol').addClass('fixed');
	  
    } else {
      // otherwise remove it
      $('#singleRightCol').removeClass('fixed');
    }
  });
  }
});

</script>

<script type="text/javascript">
(function() {
var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
s.type = 'text/javascript';
s.async = true;
s.src = 'http://widgets.digg.com/buttons.js';
s1.parentNode.insertBefore(s, s1);
})();
</script>




<?php
	function linkIt($input,$num)
	{
		
		$myPieces=explode(" ", $input);
		
		if ($num==1){
		$final=$myPieces[0];
		}
		else{
			if(strcmp($myPieces[0], "email") == 0){
			$final="<a target='_blank' style='color:#222' href='mailto:".$myPieces[1]."'>".$myPieces[1]."</a>";
			}
			else if(strcmp($myPieces[0], "website") == 0){
			$final="<a target='_blank' style='color:#222' href='http://".$myPieces[1]."'>".$myPieces[1]."</a>";
			}
			else if(strcmp($myPieces[0], "twitter") == 0){
			$final="<a target='_blank' style='color:#222' href='".$myPieces[1]."'>".$myPieces[1]."</a>";
			}
			else if(strcmp($myPieces[0], "facebook") == 0){
			$final="<a target='_blank' style='color:#222' href='".$myPieces[1]."'>".$myPieces[1]."</a>";
			}
		}
		
		return $final;
	}
?>

	
	
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div id="topBar">
		
			<img alt="<?php the_title(); ?>" src="<?php echo get_post_meta($post->ID, 'singleTop', true); ?>"></IMG>
			
			
		</div>
		
		<div id="singleCollageWrapper">
		<div id="singleCollage">
			<a href="<?php the_permalink() ?>" rel="#mies1" title="Photos of <?php the_title_attribute(); ?>" >
					<img src="<?php echo get_post_meta($post->ID, 'collageImage', true); ?>" rel="#mies1"></IMG>
					</a>
		</div>
		</div>
		
		<div id="singleTextHolder">
		<div id="singleText">
		
		
			<div class="overlay" id="mies1">
			<?php echo get_post_meta($post->ID, 'flickrSlideshow', true); ?>
			</div>
			<div class="overlay2" id="mies2">
			<div id="singleShare">
			share!
			</div>
			
			
			<div id="singleShare2">
			<!--FACEBOOK-->
			<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=button_count&amp;show_faces=false&amp;width=50&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:21px;" allowTransparency="true"></iframe>
			
			<br /><br />
			<!--TWITTER-->
			<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
			<br /><br />
			<!--DIGG-->
			<script type="text/javascript">
(function() {
var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
s.type = 'text/javascript';
s.async = true;
s.src = 'http://widgets.digg.com/buttons.js';
s1.parentNode.insertBefore(s, s1);
})();
</script>
<a class="DiggThisButton DiggCompact"></a>
<br /><br />
			<!--REDDIT-->
			<script type="text/javascript" src="http://reddit.com/buttonlite.js?i=1"></script>
			
			<br /><br />
			<!--STUMBLEUPON-->
			<script src="http://www.stumbleupon.com/hostedbadge.php?s=1"></script>
			</div>
			</div>
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
		</div>
		</div>
		
		
		<div id="singleRightCol">
		
			<a href="<?php the_permalink() ?>" rel="#mies2" title="Share!" >
			<div id="singleRightSocial">
				
				
				
				
				
			
			</div>
			</a>
			<!-- Side picture-->
			<div id="singleRightPicture">
				<a href="<?php the_permalink() ?>" rel="#mies1" title="Photos of <?php the_title_attribute(); ?>" >
				<img width="220px"src="<?php echo get_post_meta($post->ID, 'rightImage', true); ?>" rel="#mies1"></IMG>
				</a>
			</div>
			
			<div id="singleRightCaption">
				<div style="margin-top:20px; margin-left:5px;">
				<?php echo get_post_meta($post->ID, 'singleRightCaption', true); ?>
				</div>
				<div style="margin-top:15px;float:right;font-family:Times New Roman;
	font-size:.7em;margin-right:20px;
	color:#8A8484; font-weight:normal; font-style:italic;">
					<?php the_title(); ?>
				</div>
			</div>
			<div id="singleRightConnect" style="color:<?php echo get_post_meta($post->ID, 'accentColor', true); ?>">
			<div style="margin-top:10px;">
				<span style="letter-spacing: -.1em;"><b>connect</b></span><br>
					<div style="font-size:.4em;">
					<?php 
					$title=the_title('','',FALSE);
					$pieces=explode(" ", $title);
					echo $pieces[0] ?> is looking for:<br>
					<b>
					<?php echo get_post_meta($post->ID, 'lookingFor', true); ?></b>
					
					<div id="connectSub">
					
					<div id="connectSub1" style="line-height:20px;">
					<?php echo linkIt(get_post_meta($post->ID, 'connect1', true),1)?>
					<?php echo linkIt($myInput=get_post_meta($post->ID, 'connect2', true),1)?>
					<?php echo linkIt($myInput=get_post_meta($post->ID, 'connect3', true),1)?>
					
					</div>
					
					<div id="connectSub2">
						<div style="margin-left:10px; line-height:20px;">
						<?php echo linkIt(get_post_meta($post->ID, 'connect1', true),2)?><br />
						<?php echo linkIt(get_post_meta($post->ID, 'connect2', true),2)?><br />
						<?php echo linkIt(get_post_meta($post->ID, 'connect3', true),2)?>
						</div>
					</div>
					
					
					</div>
					
					
				</div>
			</div>
			
			

		
		


	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php //get_footer(); ?>
