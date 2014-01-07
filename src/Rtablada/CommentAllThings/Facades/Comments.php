<?php namespace Rtablada\CommentAllThings\Facades;

use Illuminate\Support\Facades\Facade;

class Comments extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'commenter';
	}
}
