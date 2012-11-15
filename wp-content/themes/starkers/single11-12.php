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
		opacity: 0.6,
		// disable this for modal dialog-type of overlays
		closeOnClick: true
	}});
});

$(document).ready(function(){        
	var h = $("#singleTextHolder").height();
	//alert("Width:" + w);
	//alert("Height:" + h);
    $('#horizontalSpacer').css('height', h);


  })

});


$(document).ready(function(){     
	var h = $("#singleTextHolder").height();
	$("#megaContainer").css({'height':h+600});
  });

//-------- For following sidebars ------//

$(document).ready(function () {  

if($(window).height()>15&&$(window).width()>1023){

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

	if($(window).height()>15&&$(window).width()>1023){

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
			$final="<a target='_blank' style='color:#222' href='mailto:".$myPieces[2]."'>".$myPieces[1]."</a>";
			}
			else if(strcmp($myPieces[0], "website") == 0){
			$final="<a target='_blank' style='color:#222' href='http://".$myPieces[2]."'>".$myPieces[1]."</a>";
			}
			else if(strcmp($myPieces[0], "twitter") == 0){
			$final="<a target='_blank' style='color:#222' href='".$myPieces[2]."'>".$myPieces[1]."</a>";
			}
			else if(strcmp($myPieces[0], "facebook") == 0){
			$final="<a target='_blank' style='color:#222' href='".$myPieces[2]."'>".$myPieces[1]."</a>";
			}
		}
		
		return $final;
	}
?>
<script type="text/javascript" src="slideshow/swfobject.js"></script> 

	<!--BEGIN PAGE-->

	<div id="megaContainer">
	<div style="
	padding-bottom: 25px;">
	
	<div id="singleHolder">
	
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		
		<div id="topBar">
		
			<img alt="<?php the_title(); ?>" src="<?php echo get_post_meta($post->ID, 'singleTop', true); ?>"></IMG>
			
		</div>
		<a href="<?php the_permalink() ?>" rel="#mies1" title="Photos of <?php the_title_attribute(); ?>" >
		<div id="topPhoto">
			<img  alt="<?php the_title(); ?>" src="<?php echo get_post_meta($post->ID, 'topCollage', true); ?>"></IMG>
		</div>
		</a>
		<!--HERE-->
		<div id="singleTextHolder">
		<div id="singleText">
		
		
			<!-- This is for the slideshow overlay -->
			<div class="overlay" id="mies1">
			
			<div id="mssHolder" style=" border:1px solid #cccccc; width:700px; height:525px;"> 
			</div> 
			<?php //echo get_post_meta($post->ID, 'flickrSlideshow', true); ?>
			<script type="text/javascript"> 
			var so = new SWFObject("slideshow/monoslideshow.swf", "mss", 700, 525, "7", "#ffffff");
			so.addVariable("dataFile", "<?php echo get_post_meta($post->ID, 'flickrSlideshow', true); ?>");
			so.addVariable("showVersionInfo", "false");
			so.addVariable("showLogo", "false");
			so.write("mssHolder");
			</script> 
			
			
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
		
		
		
		
		
		<div id="horizontalSpacer" style="height:1px; width:1px; background-color:#ccc;float:left;margin-top:20px;margin-left:20px;"></div>
		
		
		
		
		
		
		
		
		<div id="singleRightCol">
		
			<div id="singleRightColHolder">
			<div id="singleRightConnect" style="color:<?php echo get_post_meta($post->ID, 'accentColor', true); ?>">
				<div style="margin-top:10px;">
					<span style="letter-spacing: -.05em;"><b>connect</b></span><br>
						<div style="font-size:.4em;">
						<?php 
						$title=the_title('','',FALSE);
						$pieces=explode(" ", $title);
						echo $pieces[0] ?> is looking for:<br>
						<b>
						<?php echo get_post_meta($post->ID, 'lookingFor', true); ?></b>
						
						<div id="connectSub">
						
						<div id="connectSub1">
						<?php echo linkIt(get_post_meta($post->ID, 'connect1', true),1)?><br /><br />
						<?php echo linkIt($myInput=get_post_meta($post->ID, 'connect2', true),1)?><br /><br />
						<?php echo linkIt($myInput=get_post_meta($post->ID, 'connect3', true),1)?>
						
						</div>
						
						<div id="connectSub2">
							<div style="margin-left:10px;">
							<?php echo linkIt(get_post_meta($post->ID, 'connect1', true),2)?><br /><br />
							<?php echo linkIt(get_post_meta($post->ID, 'connect2', true),2)?><br /><br />
							<?php echo linkIt(get_post_meta($post->ID, 'connect3', true),2)?>
							</div>
						</div>
						
						
						</div>
						
						
					</div>
				</div>
			</div>
			<div id="singleSpacer"></div>
			
			<a href="<?php the_permalink() ?>" rel="#mies2" title="Share!" >
			<div id="singleRightSocial">
			</div>
			</a>
			
			
			<?php if (get_post_meta($post->ID, 'radar', true)!=''){
				echo "
				
				<div id='singleSpacer'></div>
			
			<div id='singleRightRadar'style='color:
				
				";
				echo get_post_meta($post->ID, 'accentColor', true);
				 
				echo "
				'>
			
				<div style='margin-top:10px;'>
					<span style='letter-spacing: -.05em;'><b>radar</b></span><br>
						<div style='font-size:.3em; text-align:left; width: 294px;'>
				
				";
				echo get_post_meta($post->ID, 'radar', true);
				echo "
				</div>
				</div>
			
			</div>
				";
				
			}
			?>
			
			<!--
			<div id='singleSpacer'></div>
			
			<div id='singleRightRadar'style='color:<?php echo get_post_meta($post->ID, 'accentColor', true); ?>'>
			
				<div style='margin-top:10px;'>
					<span style='letter-spacing: -.05em;'><b>radar</b></span><br>
						<div style='font-size:.3em; text-align:left; width: 294px;'>
						<?php echo get_post_meta($post->ID, 'radar', true); ?>
					</div>
				</div>
			
			</div> -->
			

					
						
						
						<!--Media Boxes-->
						<?php if (get_post_meta($post->ID, 'MediaNumber', true)!=0){
							
							echo 
							"
							
							<div id='singleSpacer'></div>
			
			<div id='singleRightMedia'style='color:";
			
			echo get_post_meta($post->ID, 'accentColor', true);
			
			echo "
			'>
			
				<div style='margin-top:10px;'>
							
							
							<span style='letter-spacing: -.1em;'><b>media</b></span><br>
						<div style='font-size:.3em; text-align:left; width: 294px;margin-top:10px;'>";
							
							if(get_post_meta($post->ID, 'MediaNumber', true)==1||get_post_meta($post->ID, 'MediaNumber', true)==2||get_post_meta($post->ID, 'MediaNumber', true)==3||get_post_meta($post->ID, 'MediaNumber', true)==4||get_post_meta($post->ID, 'MediaNumber', true)==5){
							echo "
							<div style='width:294px'>
							<div style='width:176px; height:120px;float:left; '>
							";
							echo get_post_meta($post->ID, 'Media1Image', true);
							echo "
							</div>
							<div style='width:118px;height:120px;float:left; color:#333; font-size:11px;'>
							<div style='margin-left:auto;margin-right:auto; width:110px; margin-top:5px;'>
							";
							echo get_post_meta($post->ID, 'Media1Text', true) ;
							echo "
							</div>
							</div>
							</div>
							";
							}
							
							if(get_post_meta($post->ID, 'MediaNumber', true)==2||get_post_meta($post->ID, 'MediaNumber', true)==3||get_post_meta($post->ID, 'MediaNumber', true)==4||get_post_meta($post->ID, 'MediaNumber', true)==5){
							echo "
							<div style='width:294px'>
							<div style='width:176px; height:120px;float:left; '>
							";
							echo get_post_meta($post->ID, 'Media2Image', true);
							echo "
							</div>
							<div style='width:118px;height:120px;float:left; color:#333; font-size:11px;'>
							<div style='margin-left:auto;margin-right:auto; width:110px; margin-top:5px;'>
							";
							echo get_post_meta($post->ID, 'Media2Text', true) ;
							echo "
							</div>
							</div>
							</div>
							";
							}
							
							if(get_post_meta($post->ID, 'MediaNumber', true)==3||get_post_meta($post->ID, 'MediaNumber', true)==4||get_post_meta($post->ID, 'MediaNumber', true)==5){
							echo "
							<div style='width:294px'>
							<div style='width:176px; height:120px;float:left; '>
							";
							echo get_post_meta($post->ID, 'Media3Image', true);
							echo "
							</div>
							<div style='width:118px;height:120px;float:left; color:#333; font-size:11px;'>
							<div style='margin-left:auto;margin-right:auto; width:110px; margin-top:5px;'>
							";
							echo get_post_meta($post->ID, 'Media3Text', true) ;
							echo "
							</div>
							</div>
							</div>
							";
							}
							
							
							if(get_post_meta($post->ID, 'MediaNumber', true)==4||get_post_meta($post->ID, 'MediaNumber', true)==5){
							echo "
							<div style='width:294px'>
							<div style='width:176px; height:120px;float:left; '>
							";
							echo get_post_meta($post->ID, 'Media4Image', true);
							echo "
							</div>
							<div style='width:118px;height:120px;float:left; color:#333; font-size:11px;'>
							<div style='margin-left:auto;margin-right:auto; width:110px; margin-top:5px;'>
							";
							echo get_post_meta($post->ID, 'Media4Text', true) ;
							echo "
							</div>
							</div>
							</div>
							";
							}
							
							if(get_post_meta($post->ID, 'MediaNumber', true)==5){
							echo "
							<div style='width:294px'>
							<div style='width:176px; height:120px;float:left; '>
							";
							echo get_post_meta($post->ID, 'Media5Image', true);
							echo "
							</div>
							<div style='width:118px;height:120px;float:left; color:#333; font-size:11px;'>
							<div style='margin-left:auto;margin-right:auto; width:110px; margin-top:5px;'>
							";
							echo get_post_meta($post->ID, 'Media5Text', true) ;
							echo "
							</div>
							</div>
							</div>
							";
							}
							
							
							echo "
							</div>
							";
						}
						?>
						
				
			
			</div></div></div>
			
			
			
		</div>
	
		</div>
	</div>
</div></div>


	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
