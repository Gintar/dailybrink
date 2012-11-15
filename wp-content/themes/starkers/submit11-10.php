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

	<div id="submitHolder">
		<div id="submitHolderLeft">
		We'd <span style="font-family: Times New Roman"><b><i>love</i></b></span> to have you on board, whether as a <span style="font-family: Times New Roman"><b><i>featured</i></b></span>  BRINKer or as a team <span style="font-family: Times New Roman"><b><i>member</i></b></span> . What would <span style="font-family: Times New Roman"><b><i>you</i></b></span>  like to do? Select one of the options at right to <span style="font-family: Times New Roman"><b><i>apply</i></b></span> .
		</div>
		<div id="submitHolderRight">
			<div style="width:1px; height:0px;"></div>
			<div id="submitBrinker">
			<a href="/?page_id=29">
			<img src="/wp-content/themes/starkers/images/submitpage/SubmitBrinker1.jpg" alt="" class="a" />
			<img src="/wp-content/themes/starkers/images/submitpage/SubmitBrinker.jpg" alt="" class="b" />
			</a>
			
			</div>
			<div id="submitTeam">
			<a href="/?page_id=31">
				<img src="/wp-content/themes/starkers/images/submitpage/SubmitTeam1.jpg" alt="" class="c" />
				<img src="/wp-content/themes/starkers/images/submitpage/SubmitTeam.jpg" alt="" class="d" />
			</a>
			</div>
		</div>
	</div>

</div>


<?php //get_footer(); ?>