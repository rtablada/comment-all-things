<?php namespace Rtablada\CommentAllThings;

abstract class Presenter {

	/**
	 * The commenter instance being rendered.
	 *
	 * @var \Illuminate\Commenter\Paginator
	 */
	protected $commenter;


	/**
	 * Create a new Presenter instance.
	 *
	 * @param  \Rtablada\CommentAllThings\Commenter  $commenter
	 * @return void
	 */
	public function __construct(Commenter $commenter)
	{
		$this->commenter = $commenter;
	}

	/**
	 * Render the Commenter contents.
	 *
	 * @return string
	 */
	public abstract function render();

	/**
	 * Get image for Gravatar
	 *
	 * @param  \Rtablada\CommentAllthings\Comment $comment
	 * @return string
	 */
	public function getGravatarImage($comment)
	{
		$hash = md5(strtolower(trim($comment->email)));

		return "<img src=\"http://www.gravatar.com/avatar/{$hash}.jpg\" />";
	}

	public function getContentsOfComment($comment)
	{
		$paragraphs = explode("\n", $comment->contents);
		return '<p>' . implode('</p><p>', $paragraphs) . '</p>';
	}
}
