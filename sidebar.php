<hr />
<div id="sidebar">

	<div id="columncap">
		<div id="about" class="widget widget_text">
			<h4>About this site</h4>
			<p>This could be a block, or use the colophon plugin</p>
		</div><!-- end about -->
	</div><!-- end columncap -->
	
	<hr />

	<div id="column1">

			<div id="search" class="widget widget_search">
				<h4>Search</h4>
				<?php Plugins::act( 'theme_searchform_before' ); ?>
				<form id="searchform" method="get" action="<?php URL::out( 'display_search' ); ?>">
					<p><input type="search" name="criteria" id="s" placeholder="Search" size="15"></p>
					<p><input type="submit" name="submit" value="<?php _e('Search'); ?>"></p>
				</form>
				<?php Plugins::act( 'theme_searchform_after' ); ?>

			</div><!-- end search -->

			<div id="pages" class="widget widget_pages">
				<h4>Pages</h4>
				<ul>
					<?php // pages; ?>
				</ul>
			</div><!-- end pages -->

			<div id="meta" class="widget widget_meta">
				<h4><?php _e('Meta'); ?></h4>
				<ul>
					<?php if ( $loggedin ): ?>
						<li><a href="<?php Site::out_url( 'admin' ); ?>" title="Admin area">Site Admin</a></li>
					<?php else: ?>
						<li><a href="<?php URL::out( 'user', array( 'page' => 'login' ) ); ?>" title="login">Log in</a></li>
					<?php endif; ?>
					<li><?php echo $entry_count; ?> entries</li>
					<li><?php echo $comment_count; ?> comments</li>
					<li><a href="http://habariproject.org/" title="<?php _e('Powered by Habari'); ?>">Habari</a></li>
				</ul>
			</div><!-- end meta -->

	</div> <!-- end column1 -->
	
	<hr />
	
	<div id="column2">

		<div id="bryans-latest-comments-dojo-version" class="widget widget_dojo_blc_latest_comments">
			<h4>Recent Comments</h4>
			<ul><?php ?></ul>
		</div><!-- end recentcomments -->

			<div id="subscribe-dojo" class="widget widget_dojo_subscribe">
				<h4>Subscribe</h4>
				<p>Grab an Atom feed:</p>
				<ul class="rss">
					<li><a title="Feed for Posts" href="<?php $theme->feed_alternate() ?>">Full Entries</a></li>
					<li><a title="Feed for Comments" href="<?php URL::out( 'atom_feed_comments'); ?>">Comments Feed</a></li>
					<!-- signle comments feed -->
				</ul>
			</div><!-- end subscribe -->


	</div> <!-- end column2 -->

</div> <!-- end sidebar -->
