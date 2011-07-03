<?php $theme->display('header'); ?>

<!-- entry.single -->
<div id="post-<?php echo $post->id; ?>" class="post post-type-<?php echo $post->content_type; ?>">
	<div class="post-meta">
		<div class="type">
			<a href="#" title="http://demo.tumblr.com/post/236/it-does-not-matter-how-slow-you-go-so-long-as-you"><?php echo $post->content_type; ?></a>
		</div><!-- .type -->
		<div class="date"><?php echo $post->pubdate_out; ?></div><!-- .date -->
		<div class="note-count">
				<a href="#" title="http://demo.tumblr.com/post/236/it-does-not-matter-how-slow-you-go-so-long-as-you#notes">6,534 notes</a>
		</div><!-- .note-count -->

	</div><!-- .post-meta -->
	<div class="post-content">
		<?php $theme->content($post); ?>
	<div class="tags">
		Tags: <?php echo $post->tags_out; ?>
	</div>

	</div><!-- post-content -->
	<?php $theme->comments($post); ?>

</div><!-- .post -->
<!--
		<nav>
						<?php if ( $previous = $post->descend() ): ?>
									<a class="previous" href="<?php echo $previous->permalink ?>" title="<?php echo $previous->slug ?>">&laquo; <?php echo $previous->title ?></a>
												<?php endif; ?>
			<?php if ( $next = $post->ascend() ): ?>
							<a class="next" href="<?php echo $next->permalink ?>" title="<?php echo $next->slug ?>"><?php echo $next->title ?> &raquo;</a>
										<?php endif; ?>
		</nav>
-->


<!-- /entry.single -->

<?php $theme->display('sidebar'); ?>
<?php $theme->display('footer'); ?>
