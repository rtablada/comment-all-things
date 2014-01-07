<?php namespace Rtablada\CommentAllThings;

use App, Input, Session, Redirect;

abstract class CommentPosterController extends \Illuminate\Routing\Controller
{
	protected $commentable;

	public function __construct(Comment $comment)
	{
		$this->parentModel = App::make($this->commentable);
		$this->comment = $comment;
	}

	public function store()
	{
		$arguments = func_get_args();
		$id = end($arguments);
		$parent = $this->parentModel->findOrFail($id);
		$input = Input::only('email', 'contents', 'display_name');

		$comment = $this->comment->newInstance($input);
		$parent->comments()->save($comment);

		Session::flash('success', 'Comment Posted');
		return Redirect::back();
	}
}
