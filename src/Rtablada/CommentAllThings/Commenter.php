<?php namespace Rtablada\CommentAllThings;

use Illuminate\Support\Facades\Facade;

class Commenter extends Facade
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
