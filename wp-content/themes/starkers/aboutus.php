<?php
/*
Template Name: About Us
*/
?>

<?php get_header(); ?>


<div id="aboutCenter">

	<div id="aboutTop">
	</div>
	
	<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php the_content(); ?>
<?php endwhile; else: ?>

<p><?php  ?></p>
<?php endif; ?>


	
	
	
	<!--<div id="aboutBody">
	<p class="a3" style="text-align:justify;">
	<br>
	Daily BR!NK is an online publication and social networking platform that features individuals with uncommon drive and passion. Some call them trendsetters, visionaries, or tastemakers; we like to refer to these up-and-comers simply as BR!NKers - incredible people whom you haven't heard about yet, but certainly will in the near future. Every working week, you will meet five BR!NKers of all ages and professions who seek innovative ways to become pioneers in their respective industries. Through their own words and stories, these people will make you think, laugh, discover, and delight at the chance to participate in their future successes. Featuring exclusive interviews and original photo shoots, Daily BR!NK is your go-to site to meet tomorrow's leaders, today.
	</p>
	<br>
	<center>
	<a href="http://www.facebook.com/#!/pages/Daily-Brink/139636392744777?ref=ts" target="_blank">
	<img src="http://dailybrink.com/FacebookButtonRevised.jpg">
	</a>
	</center>
	<br>
	<hr>
	
	<center>
	
	<br>
	<div id="aboutLogo"></div>
	<br><br>
	
	<i><font class="a1">Editor-in-Chief </font></i><a target="_blank" href="http://www.dailybrink.com">GARY GOLDMAN</a> | <i><font class="a1">Design & Photo Director </font></i><a target="_blank" href="http://www.dailybrink.com">JEREMY ALLEN</a>
	<br><br>
	<i><font class="a1">Webmaster </font></i><a target="_blank" href="http://www.ryococo.com">RYO CHIBA</a>
	<br><br>
	<i><font class="a1">Head Photographer </font></i><a target="_blank" href="http://www.zackdezonphotography.com">ZACK DeZON</a>
	<br><br>
	<hr width="20%" />
	<br>
	<i><font class="a1">Contributing Writers</font></i>
	<br>
	<a target="_blank" href="http://www.koalani.net">KOA BECK</a>, 
	ANNIE HAMM, DYLAN HARRIS, NICOLE HUMMEL, MANPREET SADHAL, LINH TRAN 
	<br><br>
	<hr width="20%" />
	<br>
	<i><font class="a1">Contributing Photographers</font></i>
	<br>
	
MEREDITH BAYSE, 
<a target="_blank" href="http://www.maggiecepis.com">MAGGIE CEPIS</a>, <a target="_blank" href="http://somedays.thisissomewhere.net/index.html">DAN CHEN</a>, CHELSEA JEHEBER, 
<a target="_blank" href="http://www.schnittker.viewbook.com">SHANNON SCHNITTKER </a>
	<br><br>
	<hr>
	<br><br>
	</center>
	</div>-->

</div>

<?php get_footer(); ?>
