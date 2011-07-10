<div id="post-<?php echo $content->id; ?>" class="<?php $theme->post_class($content); ?>">

<div class="title">
	<h2>
		<a href="<?php echo $content->permalink; ?>" title="<?php echo $content->title; ?>">
			<?php echo $content->title_out; ?>
		</a>
	</h2>
	<p class="byline"><small>
		Posted by <?php echo $content->author->username ?> on <?php echo $content->pubdate_out; ?>
		<?php if ( count( $content->comments ) > 0 ) : ?>
		<a href="<?php echo $content->permalink; ?>#comments" class="commentlink" title="Comment on <?php echo $content->title_out; ?>"><?php _ne('<strong>1</strong> Comment', '<strong>' . $content->comments->count . '</strong> Comments', $content->comments->count); ?>.</a>
		<?php endif; ?>
	</small></p>
	<?php if ( $post->get_access()->edit ) : ?>
	<a href="<?php URL::out( 'admin', 'page=publish&id=' . $content->id); ?>" title="Edit post"> (edit)</a>
	<?php endif; ?>
</div>

<div class="content">
	<?php echo $content->content_out; ?>
</div>

<div class="metadata">
	<?php if ( count( $content->tags ) > 0 ) : ?>
	<p class="folksonomy"><small>
		Filed under <?php echo Format::tag_and_list($content->tags); ?>
	</small></p>
	<?php endif; ?>
</div>
