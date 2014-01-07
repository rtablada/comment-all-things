<?php namespace Rtablada\CommentAllThings;

class Comment extends Illuminate\Database\Eloquent\Model
{
	/**
	 * Sets up the commentable relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function commentable()
	{
		return $this->morphTo();
	}
}
