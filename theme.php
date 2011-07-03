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
		Format::apply('nice_date', 'post_pubdate_out', 'F d, Y');
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

}

?>

