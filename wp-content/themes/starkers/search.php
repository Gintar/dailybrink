<?php get_header(); ?>

	
	<div id="bodybar">
	
	<div id="searchHolder">
	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>
			
			<?php if(get_post_meta($post->ID, 'available', true)=='true'){?>
			<div class="post"><a href="<?php  if(get_post_meta($post->ID, 'available', true)=='true'){echo the_permalink();}; ?>" rel="bookmark" title="<?php get_post_meta($post->ID, 'shortDescription', true); ?>">
			<img class="archiveImg" src="<?php if(get_post_meta($post->ID, 'available', true)=='true'){ echo get_post_meta($post->ID, 'frontImage', true);}; ?>"></IMG>
				<h3 id="post-<?php the_ID(); ?>"><span style="font-family: century gothic,Trebuchet MS; font-size:19px; color:#de1f27;"><b><?php the_title(); ?></b></span></a></h3>
				<p><?php get_post_meta($post->ID, 'dateOfPublish', true); ?></p>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> 
			</div>
			<br />
			<?php };?>
		<?php endwhile; ?>
<!--
		<ul>
			<li><?php next_post_link('&laquo; Older Entries') ?></li>
			<li><?php previous_post_link('Newer Entries &raquo;') ?></li>
		</ul>-->

	<?php else : ?>

		<h2>No BRINKers found that match your query. Try a different search?</h2>
	

	<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>