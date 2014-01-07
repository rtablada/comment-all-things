<?php namespace Rtablada\CommentAllThings;

class Commenter
{
	/**
	 * Create a new Evironment
	 *
	 * @param \Illuminate\View\Environment $view
	 * @return void
	 */
	public function __construct(Environment $env, $commentable)
	{
		$this->env = $env;
		$this->setComments($commentable);
	}

	public function setComments($commentable)
	{
		if ($commentable instanceof Rtablada\CommentAllThings\CommentCollection) {
			$this->comments = $commentable;
		} else {
			$this->comments = $commentable->comments;
		}
	}

	public function render($view = null)
	{
		return $this->env->getCommentsView($this, $view);
	}

	public function getComments()
	{
		return $this->comments;
	}

	public function hasComments()
	{
		return count($this->comments);
	}
}
