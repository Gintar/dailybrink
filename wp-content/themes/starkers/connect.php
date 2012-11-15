<?php
/*
Template Name: Connect
*/
?>

<?php get_header(); ?>



<script src="/wordpress/wp-content/themes/starkers/color.js"></script>

		
		
<script type='text/javascript'>
$(document).ready(function(){



	$(".button").hover(
	function() {
			$(this).stop().animate({"background-color": "#C6FDFD"}, "fast");
	},
	function() {
			$(this).stop().animate({"background-color": "#fff"}, "slow");
	});
	
	$(".connectPerson").hover(
	function() {
			$(this).stop().animate({"background-color": "#C6FDFD"}, "fast");
	},
	function() {
			$(this).stop().animate({"background-color": "#fff"}, "slow");
	});
	

	$(".button").click(
	function() {
	$(".button").stop().animate({"width": "215"}, 50);
	$(this).stop().animate({"width": "208"}, 50);
	});
	
	// All - b0
	$(".b0").click(
		function(){
		$('.connectPerson').animate({"opacity": "1", "width":"295px"}, 0);
		}
	);
	
	// Work - b1
	$(".b1").click(
		function(){
		//$('.archivePerson').fadeOut(500);
		$('.connectPerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.work').stop().animate({"opacity": "1", "width":"295px"}, 0);
		
		}
	);
	
	// Publicize - b2
	$(".b2").click(
		function(){
		//$('.archivePerson').fadeOut(500);
		$('.connectPerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.promote').stop().animate({"opacity": "1", "width":"295px"}, 0);
		
		}
	);
	
	// Invest - b3
	$(".b3").click(
		function(){
		$('.connectPerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.invest').stop().animate({"opacity": "1", "width":"295px"}, 0);
		
		}
	);
	
	// Volunteer - b4
	$(".b4").click(
		function(){
		$('.connectPerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.volunteer').stop().animate({"opacity": "1", "width":"295px"}, 0);
		
		}
	);
 
});
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


<div style="min-height: 100%;">
<div style="overflow:auto;
	padding-bottom: 150px;">

	
	<div id="facebox" class="simple_overlay">
		<div style="width:450px; height:250px; margin-left:25px; margin-top:25px;">
			<span class="a1">This is the 'connect' page.</span>
			<br /><br />
			<span class="a3">Here, readers will be able to connect with BR!NKers to partner, promote, or fund them. Think of it as a Craigslist for the best and the brightest. No one's listed because we've yet to publish our first BR!NKer this upcoming   <b><span style="font-size:20px;"><span class="red">M</span><span class="red">o</span><span class="orange">n</span><span class="blue">d</span><span class="green">a</span><span class="pink">y</span> <span class="red">t</span><span class="orange">h</span><span class="blue">e</span> <span class="red">1</span><span class="orange">3</span><span class="blue">t</span><span class="green">h</span>.</b></span>
			<br /><br />
			<span class="a3">Note: As this is the first week the site has gone public, we expect some technical difficulties and browser errors. If there are any strange looking pages, we would <span class="red">r</span><span class="orange">e</span><span class="blue">a</span><span class="green">l</span><span class="pink">l</span><span class="red">y</span> appreciate it if you described your problem and gave us the name of your web browser (internet explorer, firefox, safari, etc.) and its version number. Contact us <a href="http://www.dailybrink.com/?page_id=33" target="_blank"><b> here</b>.</a>
			</span>
		</div>
	</div>
	
<div id="archiveHolder">

	<div id="archiveLeft">
		<div style="width:1px;height:96px;">
		</div>
		<div id="archiveLeftText">
			<i>
			How do </i><span class="cgBold">YOU</span><i> want to get </i><span class="cgBold">INVOLVED</span>?
			
		</div>
		<div style="width:295px;height:10px;background-color:#8BF9FA;float:left;">
		</div>
		<div id="archiveLeftButtons">
			<div style="width:215px;margin-left:80px;margin-top:20px;background-color:#ace400;">
			<!--Categories to select-->
			<a class="b0" style="cursor:pointer"><div class="button"><span class="red">all</span><hr /></div></a>
			<a class="b1" style="cursor:pointer"><div class="button"><span class="orange">work/intern</span><hr /></div></a>
			<a class="b2" style="cursor:pointer"><div class="button"><span class="blue">promote</span><hr /></div></a>
			<a class="b3" style="cursor:pointer"><div class="button"><span class="green">invest</span><hr /></div></a>
			<a class="b4" style="cursor:pointer"><div class="button"><span class="purple">volunteer</span><hr /></div></a>
			</div>
		</div>
	</div>
	
	<div id="archiveRight">
		<div id="archiveRightTop">
			<img style="margin-left:40px;" src="/wp-content/themes/starkers/images/connectpage/logo.jpg"></img>
			<div style="float:left;margin-top:-1px;margin-left:40px; width:689px;height:10px;background-color:#8BF9FA;">
			</div>
		</div>
		
		<!-- People pop up here -->
		<div id="archiveRightMiddle">
		
		
		
		<div id="connectRightMiddleHolder">
		
		
		
		<!-- counter so that it groups them in groups of 5 -->
	<?php $counter=0;?>
		
			
		<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
   'paged' => $paged,
);
query_posts($args);
?>

			<!-- this if populates the scrolling navigation -->
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
					
					<?php global $counter; if($counter%2==0) : ?>  <?php endif; ?>
						<?php if(get_post_meta($post->ID, 'available', true)=='true') : ?>
						<div class="connectPerson <?php echo get_post_meta($post->ID, 'ConnectCategory1', true); ?> <?php echo get_post_meta($post->ID, 'ConnectCategory2', true); ?> <?php echo get_post_meta($post->ID, 'ConnectCategory3', true); ?>">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php if(get_post_meta($post->ID, 'available', true)=='true'){echo get_post_meta($post->ID, 'shortDescription', true);}; ?>">
							<img class="connectImg" src="<?php echo get_post_meta($post->ID, 'frontImage', true); ?>"></IMG>
							<div class="connectPersonText">
							
							<span style="font-family: century gothic,Trebuchet MS; font-size:15px; color:#de1f27;"><b>
							<?php the_title(); ?>
							</b>
							</span>|
							<span style="font-family: Georgia,Times New Roman;color:#888;font-size:13px;">
							<?php echo get_post_meta($post->ID, 'singleTitle1', true); ?>
							</span></a>
							
							<div style="font-family: Georgia,Times New Roman;color:#333;font-size:12px;">
							Needs: <?php echo get_post_meta($post->ID, 'lookingFor', true); ?>
							<br />
							Posted: <?php echo get_post_meta($post->ID, 'dateOfPublish', true); ?>
							<br />
							Contact: <?php echo linkIt(get_post_meta($post->ID, 'connect1', true),2); ?>
							</div>
							</div>
							
						</div>

					<?php endif;?>
					<?php $counter+=1;?>
					<?php global $counter; if($counter%2==0) : ?> <?php endif; ?>
					
				<?php endwhile; ?>
				
				<!-- inserts blanks for people not yet showcased -->
		<?php if($counter%5!=0) :
				while($counter%5!=0) : ?>
				<div class="archivePersonBlank">
					<!--BLANK-->
				</div>
				<?php $counter+=1;?>
		<?php endwhile; endif;?>

			<?php endif; ?>
		</div>
		</div>
		</div>
		</div>
		
		</div>
		</div>
	
	<div style="position: relative;
	margin-top: -150px;
	height: 150px;
	clear:both;">
<br /><br />
<?php get_footer(); ?>




