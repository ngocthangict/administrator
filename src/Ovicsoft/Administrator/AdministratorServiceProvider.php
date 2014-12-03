<?php namespace Ovicsoft\Administrator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\ClassLoader;

class AdministratorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ovicsoft/administrator');
        
        // include package routes.php
        include(dirname(__FILE__).'/routes.php');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['cpanel'] = $this->app->share(function($app)
        {
            return new Cpanel;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
