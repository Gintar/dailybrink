<?php get_header(); ?>
<script type="text/javascript" src="/wordpress/wp-content/themes/starkers/color.js"></script>
<script type="text/javascript">
// execute your scripts when the DOM is ready. this is mostly a good habit
$(document).ready(function() {


	// select the overlay element - and "make it an overlay"
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
		opacity: 0.5
	},

	// disable this for modal dialog-type of overlays
	closeOnClick: true,

	// load it immediately after the construction
	load: true

});

	// initialize scrollable
	$(".scrollable").scrollable({ 
		circular: true
		
	});
	
	
	
	 // get handle to scrollable api 
    window.api = $("div.scrollable").scrollable(); 

    // remove last item by using jQuery's remove() method 
    window.api.seekTo(weekNumber-1,500);

	// disable keyboard navigation
	window.api.getConf().keyboard = false;

});
</script>
<script type="text/javascript">
	
			var weekNumber=8;
		
			$(document).ready(function(){
			
				
						
				// Initialize weekbar
				
				var div = $('#weekbarDisplay');
				displayWeek();
				
				
				
				
				
				// This is for the left sidebar (infopanel)
				
				$('#lsidebarholder').toggle(function() {
					$('#lsidebar').fadeOut(500);
				}, function() {
					$('#lsidebar').fadeIn(500);
				});
				
				
				// This is for the right sidebar (newsletter signup)
				
				$('#rsidebar1').click(function(event) {
				var $tgt = $(event.target);
					 if ($tgt.is('img.rsidebar1')) {
					 
					$('#rsidebar1').hide().html('<span class="rsidebar1" style="display:none"><img class="rsidebar2" src="/wp-content/themes/starkers/images/frontpage/newsletter.png"><br><form method="post" action="http://scripts.dreamhost.com/add_list.cgi"> <div style="background-image:url(/wp-content/themes/starkers/images/frontpage/newsletter2.png); background-repeat:no-repeat; height:179px"><div style="margin-left:30px; font-family: century gothic,Trebuchet MS; font-size:13px; line-height:110%;"><input type="hidden" name="list" value="friends@dailybrink.com" /> <input type="hidden" name="domain" value="www.dailybrink.com" /> <input type="hidden" name="url" value="http://SubscribedURL" /> <input type="hidden" name="unsuburl" value="http://UnsubscribedURL" /> <input type="hidden" name="alreadyonurl" value="http://AlreadyOnURL" /> <input type="hidden" name="notonurl" value="http://NotOnURL" /> <input type="hidden" name="invalidurl" value="http://InvalidURL" /> <input type="hidden" name="emailconfirmurl" value="http://EmailConfirmURL" /> <input type="hidden" name="emailit" value="1" /> Name: <br /><input class="newsletterform" name="name" /><br /><br /> E-mail: <br /><input  class="newsletterform" name="email" /><br /> <br /><input type="submit" name="submit" value="Join" style="background-color:#B3D670; width:60px;"/> <input type="submit" name="unsub" value="Unsubscribe" style="background-color:#EF7BE0; width:90px;" /> </form></div></div></span>').fadeIn('slow');
					$("span.rsidebar1").fadeIn('slow');
					}
				});
				
				$('#rsidebar1').click(function(event){
					 var $tgt = $(event.target);
					 if ($tgt.is('img.rsidebar2')) {
						$('img.rsidebar1').fadeOut(500);
						$('#rsidebar1').html('<span class="rsidebar1" style="display:none"><img class="rsidebar1"  style="margin-left:-20px;" src="/wp-content/themes/starkers/images/frontpage/rsidebar1.gif"></span>');
						$('#rsidebar1').slideDown('slow');
						$("span.rsidebar1").fadeIn('slow');
					}
				});
				
				
				
				$('#nextWeek').click(function() {
					weekNumber=window.api.getIndex()+2;
					if(window.api.getIndex()==window.api.getSize()-1){
						weekNumber=1;
						
					}
					displayWeek();
				
				});
				
				$('#prevWeek').click(function() {
					weekNumber=window.api.getIndex();
					if(window.api.getIndex()==0){
						weekNumber=window.api.getSize();
					}
					displayWeek();
				
				});
				
				function displayWeek(){
					if (weekNumber==1){
						div.html('<center><span class="foo" style="display: none;"><span style="font-size:29px;">week <b><font class="red">o</font><font class="blue">n</font><font class="orange">e</font></b></span><hr width="50%" />9.13.10-9.17.10</span></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==2){
						div.html('<center><span class="foo" style="display: none"><span style="font-size:29px;">week <b><font class="lightblue">t</font><font class="red">w</font><font class="pink">o</font></b></span><hr width="50%" />9.20.10-9.24.10</span></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==3){
						div.html('<center><span class="foo" style="display: none"><span style="font-size:29px;">week <b><font class="orange">t</font><font class="blue">h</font><font class="purple">r</font><font class="green">e</font><font class="red">e</font></b></span><hr width="50%" />9.27.10-10.1.10</span></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==4){
						div.html('<center><span class="foo" style="display: none"><span style="font-size:29px;">week <b><font class="green">f</font><font class="blue">o</font><font class="orange">u</font><font class="pink">r</font></b></span><hr width="50%" />10.4.10-10.8.10</span></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==5){
						div.html('<center><span class="foo" style="display: none"><span style="font-size:29px;">week <b><font class="pink">f</font><font class="green">i</font><font class="orange">v</font><font class="blue">e</font></b></span><hr width="50%" />10.11.10-10.15.10</span></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==6){
						div.html('<center><span class="foo" style="display: none"><span style="font-size:29px;">week <b><font class="red">s</font><font class="blue">i</font><font class="orange">x</font></b></span><hr width="50%" />10.18.10-10.22.10</span></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==7){
						div.html('<center><span class="foo" style="display: none"><span style="font-size:29px;">week <b><font class="green">s</font><font class="orange">e</font><font class="red">v</font><font class="orange">e</font><font class="blue">n</font></b></span><hr width="50%" />10.25.10-10.29.10</span></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==8){
						div.html('<center><span class="foo" style="display: none"><span style="font-size:29px;">week <b><font class="blue">e</font><font class="green">i</font><font class="orange">g</font><font class="red">h</font><font class="blue">t</font></b></span><hr width="50%" />10.25.10-10.29.10</span></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
				}
			
			
			$(".person").hover(
	function() {
			$(this).animate({"background-color": "#C6FDFD"}, "fast");
	},
	function() {
			$(this).stop().animate({"background-color": "#fff"}, "slow");
	});

			});
		</script>

		<!-- BEGIN Content -->
		
<div id="megaContainer">
<div style="overflow:auto;
	padding-bottom: 50px;">
	
<!--For the First Week -->
<!--
	<div id="facebox" class="simple_overlay">
		<div style="width:350px; height:350px; margin-left:auto; margin-right:auto;border:none;">
			<span class="a1">Welcome to Daily BR!NK!</span>
			<br /><br />
			<span class="a3"><span class="red"></span> Just a heads up:
			<br /><br />
			Our first BR!NKER of the week will be revealed on Tuesday instead of Monday this week. 
			</span>
			<br /><br />
			<span class="a3">In the meantime, please subscribe to our newsletter by clicking on 'Get Daily BR!NK Mail,' and make sure to check out interviews from previous weeks.  </span>
			
			<br /><br />
			Sincerely,
			<br />
			<i>The DailyBR!NK Team</i></span>
		</div>
	</div>
	-->
	
	
<div id="bodybar">
	<div id="lsidebarholder">
		<div id="lsidebar"></div>
	</div>
	<div id="mainbar">
		<div id="logo2"></div>
		<div id="weekbar">
			<a class="prev browse left">
			<div id="prevWeek">
			</div></a>
			
			<div id="weekbarDisplay">
			</div>
			
			<a class="next browse right">
			<div id="nextWeek">
			</div></a>
			
		</div>
	</div>
	
	<div id="rsidebarholder">
	
	<div id="rsidebar1">
	<img style="margin-left:-20px;" class="rsidebar1" src="/wp-content/themes/starkers/images/frontpage/rsidebar1.gif">
	</div>
	
	</div>
	</div>

<!-- Hack for Safari 3 -->
<div style="background-color:#fff; width:1px; height:300px; opacity:0;"></div>

<!-- root element for scrollable -->
<div class="scrollable">   
   
   <!-- root element for the items -->
   <div class="items">
	
	<!-- counter so that it groups them in groups of 5 -->
	<?php $counter=0;?>
	
	<?php $posts = query_posts( $query_string . '&orderby=date&order=asc' ); ?>
	<?php if( $posts ) : ?>

	<!-- this if populates the scrolling navigation -->

		<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			
			<?php global $counter; if($counter%5==0) : ?> <div> <?php endif; ?>
			
				<div class="person">
				
				<?php if(get_post_meta($post->ID, 'available', true)=='true'){echo "<a href='";echo the_permalink()."' rel='bookmark' title='Read more about'".the_title_attribute().">";} ?>
				
					
					<img class="indexImg" title="<?php if(get_post_meta($post->ID, 'available', true)=='true'){echo get_post_meta($post->ID, 'shortDescription', true);}; ?>" src="<?php 
					if(get_post_meta($post->ID, 'available', true)=='true'){
					echo get_post_meta($post->ID, 'frontImage', true); 
					}
					else{
					echo get_post_meta($post->ID, 'frontShadow', true); 
					}
					?>">
					<center>
					<span style="font-family: century gothic,Trebuchet MS; font-size:19px; color:#de1f27;"><b>
					<?php
					if(get_post_meta($post->ID, 'available', true)=='true'){
					echo the_title(); 
					}
					else{
					}
					?>
					
					</b>
					</span>
					<br>
					<span style="font-family: Georgia,Times New Roman;color:#888;font-size:13px;">
					
					<?php
					echo get_post_meta($post->ID, 'singleTitle1', true); 
					?>
					</span></center>
					
					<?php if(get_post_meta($post->ID, 'available', true)=='true'){echo "</a>";}; ?>
				</div>

			
			<?php $counter+=1;?>
			<?php global $counter; if($counter%5==0) : ?> </div> <?php endif; ?>
			
		<?php endforeach; ?>

	<?php endif; ?>
   

   </div>
   

  </div></div>

<div style="position: relative;
	margin-top: -50px;
	height: 50px;
	clear:both;">



<?php get_footer(); ?>