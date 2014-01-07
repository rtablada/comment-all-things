<?php namespace Rtablada\CommentAllThings;

class DefaultPresenter extends Presenter
{
	public function render()
	{
		$contents = '';

		foreach ($this->commenter->getComments() as $comment) {
			$contents .= '<li>';
			$contents .= $this->getGravatarImage($comment);
			$contents .= "<h3>{$comment->display_name}</h3>";
			$contents .= $this->getContentsOfComment($comment);
		}

		return $contents;
	}
}
