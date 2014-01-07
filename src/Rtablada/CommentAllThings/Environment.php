<?php namespace Rtablada\CommentAllThings;

use Illuminate\View\Environment as ViewEnvironment;

class Environment
{
	/**
	 * Create a new CommentPresenterEvironment
	 *
	 * @param \Illuminate\View\Environment $view
	 * @return void
	 */
	public function __construct(ViewEnvironment $view)
	{
		$this->view = $view;
	}

	public function render($commentable)
	{
		$commenter = new Commenter($this, $commentable);

		return $commenter->render();
	}

	public function getCommentsView(Commenter $commenter, $view = null)
	{
		$data = array('environment' => $this, 'commenter' => $commenter);

		return $this->view->make($this->getViewName($view), $data);
	}

	/**
	 * Get the name of the pagination view.
	 *
	 * @param  string  $view
	 * @return string
	 */
	public function getViewName($view = null)
	{
		if ( ! is_null($view)) return $view;

		return $this->viewName ?: 'comment-all-things::default';
	}

	/**
	 * Set the name of the pagination view.
	 *
	 * @param  string  $viewName
	 * @return void
	 */
	public function setViewName($viewName)
	{
		$this->viewName = $viewName;
	}
}
