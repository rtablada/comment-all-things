<?php namespace Rtablada\CommentAllThings;

use Illuminate\Support\ServiceProvider;

class CommentAllThingsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->share('commenter', function($app) {
			$presenter = new CommentPresenter($app['view']);
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
