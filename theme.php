<?php
/**
 * A custom theme for the Dojo theme
 */
class Dojo extends Theme
{
	public function action_init_theme()
	{
		// Apply Format::autop() to post content...
		Format::apply('autop', 'post_content_out');
		// Apply Format::autop() to post excerpt...
		Format::apply('autop', 'post_content_excerpt');
		// Apply Format::autop() to comment content...
		Format::apply('autop', 'comment_content_out');
		// Apply Format::tag_and_list() to post tags...
		Format::apply('tag_and_list', 'post_tags_out');
		// Apply Format::nice_date() to post date...
		Format::apply('nice_date', 'post_pubdate_out', 'l, F j, Y \a\t g:ia');
		// Apply Format::nice_date() to comment date...
		Format::apply('nice_date', 'comment_date_out', 'F d, Y \a\t g:ia');
	}

	/**
	 * Add the stylesheet
	 */
	public function action_template_header($theme)
	{
		Stack::add('template_stylesheet', array($this->get_url().'/style.css', 'screen,projection'), 'theme');
	}

	/**
	 * Work out what the title should be.
	 */
	public function theme_title($theme)
	{
		// if search "Search for $criteria"
		// if 404 "404: Page Not Found"
		// if archive " archive "
		// if not home { echo " at "; }
		$title .= Options::out('title' );
		return $title;
	}

	/**
	 * Work out the post's classes.
	 */
	public function theme_post_class($theme, $post)
	{
		$class = "post-{$post->id} type-{$post->typename} status-{$post->statusname} ";
		foreach ( $post->tags as $tag ) {
			$class .= "tag-{$tag->term_display}";
		}
		return $class;
	}

	/**
	 * Add additional template variables to the template output.
	 *
	 */
	public function add_template_vars()
	{
		$this->entry_count(Posts::get(array('content_type' => 'page', 'status' => Post::status('published'), 'count' => '*')));
		$this->comment_count(Comments::get(array()));
		parent::add_template_vars();
	}

}

?>

