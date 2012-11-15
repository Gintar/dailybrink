<?php
/*
Template Name: Submit
*/
?>

<?php get_header(); ?>

<script type='text/javascript'>
$(document).ready(function(){
	$("img.a").hover(
	function() {
	$(this).stop().animate({"opacity": "0"}, "fast");
	},
	function() {
	$(this).stop().animate({"opacity": "1"}, "slow");
	});
	
	$("img.c").hover(
	function() {
	$(this).stop().animate({"opacity": "0"}, "fast");
	},
	function() {
	$(this).stop().animate({"opacity": "1"}, "slow");
	});
 
});
</script>

<style>
 
img.a {
	position: absolute;
	left: 0;
	top: 0;
	z-index: 10;
        }
 
img.b {
	position: absolute;
	left: 0;
	top: 0;
	}
	
img.c {
	position: absolute;
	left: 0;
	top: 0;
	z-index: 10;
        }
 
img.d {
	position: absolute;
	left: 0;
	top: 0;
	}
 
</style>

<div id="submitCenter">

	<div id="submitTop" >
		<div id="submitTopRight">
			<div id="submitTopRightLogo">
			</div>
			<div id="submitTopBottom">
			</div>
		</div>
	</div>
<!-- I AM HERE-->
	<div id="submitHolder">
		<div id="submitHolderLeft" style="margin-left:269px;">
		<a href="/?page_id=31">
			<img src="/wp-content/themes/starkers/images/submitpage/left.jpg" alt="" class="a" />
			<img src="/wp-content/themes/starkers/images/submitpage/left2.jpg" alt="" class="b" />
		</a>
		</div>
		<!--
		<div id="submitHolderMiddle">
		<img src="/wp-content/themes/starkers/images/submitpage/center.jpg" />
		</div>
		
		<div id="submitHolderRight">
			<a href="/?page_id=29">
				<img src="/wp-content/themes/starkers/images/submitpage/right.jpg" alt="" class="c" />
				<img src="/wp-content/themes/starkers/images/submitpage/right2.jpg" alt="" class="d" />
			</a>
		</div>
        -->
	</div>
	<div id="submitBottom">
	</div>
</div>


<?php //get_footer(); ?>