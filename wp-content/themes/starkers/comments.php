<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->
<div id="commentClick" style="cursor: hand; cursor: pointer;">
<span style="font-family: century gothic,Trebuchet MS;font-weight:bold;font-size:53px;letter-spacing: -.05em;color:<?php echo get_post_meta($post->ID, 'accentColor', true); ?>">comments</span><div style="margin-top:-12px;">
<span style="font-family: century gothic,Trebuchet MS;font-size:28px; margin-left:60px;letter-spacing: -.05em;font-style:italic;color:<?php echo get_post_meta($post->ID, 'accentColor', true); ?>">Say something <b>></b></span>
</div>
<br />
</div>
<div id="commentForms">
<!-- BEGIN code for editing forms-->
<?php if ('open' == $post->comment_status) : ?>

<!--<h3 id="respond">Leave a Reply</h3>-->

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<span style="color:#000; font-size:12px;">
<br />
<label for="author">Name <?php if ($req) echo "*"; ?></label><br />
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<br /><br />
<label for="email"><span style="color:#000;font-size:12px;">Email<?php if ($req) echo "*"; ?></label><br /></span> 
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<br />
</span>
<!--<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url">Website</label>-->

<?php endif; ?>

<!--<p><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->
<br />
<textarea name="comment" id="comment" cols="30" rows="6" tabindex="4"></textarea>

<input name="submit" type="submit" id="submit" tabindex="5" style="font-family: century gothic,Trebuchet MS;font-weight:bold;font-size:25px;letter-spacing: -.05em;color:<?php echo get_post_meta($post->ID, 'accentColor', true); ?>; height:30px; background-image:none;margin-top:8px;" value="Submit" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
<!-- END code for displaying forms-->
</div>

<!-- BEGIN code for displaying comments-->
<span style="font-size:12px; color:#000; text-align:left;">
<?php if ($comments) : ?>
	<!--<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>-->
<br /> <br /> <br /> 
	<ol>

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
			<!-- No avatar<?php echo get_avatar( $comment, 32 ); ?>-->
			By <span style="font-weight:bold;"><?php comment_author_link() ?></span> on <?php comment_date('F jS, Y') ?> at <?php comment_time() ?><br />
			<?php if ($comment->comment_approved == '0') : ?>
			<p><i>Your comment is awaiting moderation.</i></p>
			<?php endif; ?>
			<?php comment_text() ?>
		</li>
		<br />
		<hr style="border:none;border-top:dotted 1px <?php echo get_post_meta($post->ID, 'accentColor', true); ?>;">
		<br />

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>
</span>
