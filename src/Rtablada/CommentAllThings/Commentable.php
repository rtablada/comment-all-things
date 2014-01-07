<?php namespace Rtablada\CommentAllThings;

trait Commentable
{
	/**
	 * Sets up the comments relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\MorphMany
	 */
	public function comments()
	{
		return $this->morphMany('Rtablada\\CommentAllThings\\Comment', 'commentable');
	}
}
