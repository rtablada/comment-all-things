<?php namespace Rtablada\CommentAllThings;

class Comment extends \Illuminate\Database\Eloquent\Model
{
	protected $fillable = array(
		'email',
		'contents',
		'display_name',
	);

	/**
	 * Sets up the commentable relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function commentable()
	{
		return $this->morphTo();
	}

	public function newCollection(array $models = array())
	{
		return new CommentCollection($models);
	}
}
