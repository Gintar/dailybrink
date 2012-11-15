<?php
/*
Template Name: newSubmit
*/
?>

<?php get_header(); ?>

<script type='text/javascript'>



$(document).ready(function(){

	(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.curCSS(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);

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
	
	$("div.a").hover(
	function() {
	$(this).stop().animate({"background-color": "#DE1F27"}, 0);
	},
	function() {
	$(this).stop().animate({"background-color": "#e2444d"}, 0);
	});
	
	$("div.b").hover(
	function() {
	$(this).stop().animate({"background-color": "#12c5f6"}, 0);
	},
	function() {
	$(this).stop().animate({"background-color": "#72CAF0"}, 0);
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

<div style="min-height: 100%;">
<div style="overflow:auto;
	padding-bottom: 50px;">

<div id="submitCenter">

	<div id="submitTop" >
		<div id="submitTopRight">
			<div id="submitTopRightLogo">
			</div>
			<div id="submitTopBottom">
			</div>
		</div>
	</div><br />
	<center><span class="red" style="font-family: century gothic,Trebuchet MS;font-size: 40px;font-weight:bold;">As a...</span></center>
	
	<!--Br!nker-->
	<a href="/?page_id=29">
	<div id="submitContainer" class="a" style="margin-left:90px; background-color:#e2444d">
	<div style="width:300px;margin;left:50px; margin-top:10px;">
	<center>
	<span style="font-family:arial;color:#fff; font-size:45px;font-weight:bold;">
	BR!NKER
	</span>
	<hr style="width:70%;border-top:1px dotted #fff;">
	</center><br />
	<span class="white" style="font-family: century gothic,Trebuchet MS;font-size: 20px;font-weight:bold;">Why?</span><br /><br />
	<span style="font-family: arial,century gothic,Trebuchet MS;font-size: 20px;line-height:150%;color:#fff">
	+ Publicity <br />
	+ Interview and Photoshoot<br />
	+ <br />
	</span>
	<br /><br /><br />
	<center><div style="margin-left:auto;margin-right:auto;width:220px; height:50px; background-color:#ff1b1b;color:#fff;font-size:40px;font-family: century gothic,Trebuchet MS;">Click here!</center>
	</div>
	</div>
	
	<!--Writer/Photographer-->
	</a>
	<a href="/?page_id=31">
	<div id="submitContainer" class="b" style="margin-left:20px; background-color:#72CAF0;">
	<div style="width:380px;margin;left:10px; margin-top:10px;">
	WRITER / PHOTOGRAPHER
	</div>
	</div>
	</a>
	
</div>

</div>
</div>

<div style="position: relative;
	margin-top: -50px;
	height: 50px;
	clear:both;">

<?php get_footer(); ?>