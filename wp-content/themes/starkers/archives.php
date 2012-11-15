<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>



<script src="/wordpress/wp-content/themes/starkers/color.js"></script>

		
		
<script type='text/javascript'>
$(document).ready(function(){

/*
	$("#facebox").overlay({

	// custom top position
	top: 260,

	// some mask tweaks suitable for facebox-looking dialogs
	mask: {

		// you might also consider a "transparent" color for the mask
		color: '#fff',

		// load mask a little faster
		loadSpeed: 200,

		// very transparent
		opacity: .4
	},

	// disable this for modal dialog-type of overlays
	closeOnClick: true,

	// load it immediately after the construction
	load: true

});*/


	$(".button").hover(
	function() {
			$(this).stop().animate({"background-color": "#C6FDFD"}, "fast");
	},
	function() {
			$(this).stop().animate({"background-color": "#fff"}, "slow");
	});
	
	$(".archivePerson").hover(
	function() {
			$(this).stop().animate({"background-color": "#C6FDFD"}, "fast");
	},
	function() {
			$(this).stop().animate({"background-color": "#fff"}, "slow");
	});
	

	$(".button").click(
	function() {
	$(".button").stop().animate({"width": "197"}, 50);
	$(this).stop().animate({"width": "190"}, 50);
	});
	
	// All - b0
	$(".b0").click(
		function(){
		$('.archivePerson').animate({"opacity": "1","width": "125px"}, 0);
		}
	)
	
	// Arts - b1
	$(".b1").click(
		function(){
		//$('.archivePerson').fadeOut(500);
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.arts').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// Athletics - b2
	$(".b2").click(
		function(){
		//$('.archivePerson').fadeOut(500);
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.athletics').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// Business - b3
	$(".b3").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.business').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// Education - b4
	$(".b4").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.education').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// Fashion - b5
	$(".b5").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.fashion').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// food - b6
	$(".b6").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.food').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// humor - b7
	$(".b7").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.humor').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// law/politics - b8
	$(".b8").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.law').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// social activism - b9
	$(".b9").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.social').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// tech/sciences - b10
	$(".b10").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.tech').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// writing - b11
	$(".b11").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.writing').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
	
	// others - b12
	$(".b12").click(
		function(){
		$('.archivePerson').animate({"opacity": "0", "width":"0px"}, 0);
		$('.others').stop().animate({"opacity": "1","width": "125px"}, 0);
		
		}
	)
 
});
</script>
<div style="min-height: 100%;">
<div style="overflow:auto;
	padding-bottom: 150px;">
	
<div id="facebox" class="simple_overlay">
		<div style="width:450px; height:250px; margin-left:25px; margin-top:25px;">
			<span class="a1">This is the 'archives' page.</span>
			<br /><br />
			<span class="a3">Pretty self explanatory. No one's listed because we've yet to publish our first BR!NKer this upcoming   <b><span style="font-size:20px;"><span class="red">M</span><span class="red">o</span><span class="orange">n</span><span class="blue">d</span><span class="green">a</span><span class="pink">y</span> <span class="red">t</span><span class="orange">h</span><span class="blue">e</span> <span class="red">1</span><span class="orange">3</span><span class="blue">t</span><span class="green">h</span>.</b></span></span>
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
			Click on a </i><span class="cgBold">CATEGORY</span><i> below to stumble upon past </i><span class="cgBold">BR!NKers</span>
			
		</div>
		<div style="width:295px;height:10px;background-color:#8BF9FA;float:left;">
		</div>
		<div id="archiveLeftButtons">
			<div style="width:197px;margin-left:98px;margin-top:20px;background-color:#ace400;">
			<!--Categories to select-->
			<a class="b0" style="cursor:pointer"><div class="button"><span class="linkpink">all</span><hr /></div></a>
			<a class="b1" style="cursor:pointer"><div class="button"><span class="red">arts/humanities</span><hr /></div></a>
			<a class="b2" style="cursor:pointer"><div class="button"><span class="orange">athletics</span><hr /></div></a>
			<a class="b3" style="cursor:pointer"><div class="button"><span class="blue">business</span><hr /></div></a>
			<a class="b4" style="cursor:pointer"><div class="button"><span class="green">education</span><hr /></div></a>
			<a class="b5" style="cursor:pointer"><div class="button"><span class="purple">fashion</span><hr /></div></a>
			<a class="b6" style="cursor:pointer"><div class="button"><span class="lightblue">food</span><hr /></div></a>
			<a class="b7" style="cursor:pointer"><div class="button"><span class="purple">humor</span><hr /></div></a>
			<a class="b8" style="cursor:pointer"><div class="button"><span class="green">law/politics</span><hr /></div></a>
			<a class="b9" style="cursor:pointer"><div class="button"><span class="blue">social activism</span><hr /></div></a>
			<a class="b10" style="cursor:pointer"><div class="button"><span class="orange">tech/sciences</span><hr /></div></a>
			<a class="b11" style="cursor:pointer"><div class="button"><span class="red">writing</span><hr /></div></a>
			<a class="b12" style="cursor:pointer"><div class="button"><span class="orange">others</span><hr /></div></a>
			</div>
		</div>
	</div>
	
	<div id="archiveRight">
		<div id="archiveRightTop">
			<img src="/wp-content/themes/starkers/images/archivepage/logo.jpg"></img>
			<div style="width:729px;height:10px;background-color:#8BF9FA;">
			</div>
		</div>
		
		<!-- People pop up here -->
		<div id="archiveRightMiddle">
		
		
		
		<div id="archiveRightMiddleHolder">
		
		
		
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
					
					<?php global $counter; if($counter%5==0) : ?> <?php endif; ?>
						<?php if(get_post_meta($post->ID, 'available', true)=='true') : ?>
						<div class="archivePerson <?php echo get_post_meta($post->ID, 'ArchiveCategory1', true); ?> <?php echo get_post_meta($post->ID, 'ArchiveCategory2', true); ?> <?php echo get_post_meta($post->ID, 'ArchiveCategory3', true); ?> <?php echo get_post_meta($post->ID, 'ArchiveCategory4', true); ?>">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php if(get_post_meta($post->ID, 'available', true)=='true'){echo get_post_meta($post->ID, 'shortDescription', true);}; ?>">
							<img class="archiveImg" src="<?php echo get_post_meta($post->ID, 'frontImage', true); ?>"></IMG>
							<center>
							<span style="font-family: century gothic,Trebuchet MS; font-size:15px; color:#de1f27;"><b>
							<?php the_title(); ?>
							</b>
							</span>
							<br>
							<span style="font-family: Georgia,Times New Roman;color:#888;font-size:11px;">
							<?php echo get_post_meta($post->ID, 'singleTitle1', true); ?>
							</span></center>
							</a>
						</div>
						<?php endif;?>
					
					<?php $counter+=1;?>
					<?php global $counter; if($counter%5==0) : ?>  <?php endif; ?>
					
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

<?php get_footer(); ?>




