<?php namespace Webcastle\Slug;

use Illuminate\Support\ServiceProvider;

use Symfony\Component\Finder\Finder;

use Illuminate\Filesystem\Filesystem;

class SlugServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->loadAutoloader(base_path('packages'));
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
       echo "Nice!";
	}


}
