<?php namespace Rtablada\CommentAllThings;

class DefaultPresenter extends Presenter
{
	public function renderComments()
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

	public function renderCommentForm()
	{
		$url = url(\Input::url());
		$contents = "<form action=\"{$url}\" method=\"POST\">";
		$contents .= '<fieldset><legend>Add A Comment</legend>';
		$contents .= '<label for="email">Email:</label><input type="text" name="email" id="email">';
		$contents .= '<label for="display_name">Display Name:</label><input type="text" name="display_name" id="display_name">';
		$contents .= '<label for="contents">Message:</label><textarea name="contents" id="contents"></textarea>';
		$contents .= '<input type="submit" value="Submit">';

		return $contents;
	}
}
