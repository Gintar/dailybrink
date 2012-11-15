<br>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e(''); ?></label>
	<input id="searchInput" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<br>
	<input type="submit" id="searchsubmit" value="Search" />
</form>
