<?php namespace Rtablada\CommentAllThings;

use Illuminate\Support\ServiceProvider;

class CommentAllThingsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	public function boot()
	{
		$this->package('rtablada/comment-all-things', 'comment-all-things');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('commenter', function($app) {
			$presenter = new Environment($app['view']);
			$presenter->setViewName($app['config']['comment-all-things::view']);

			return $presenter;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array(
			'commenter'
		);
	}

}
