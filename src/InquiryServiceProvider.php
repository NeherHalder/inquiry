<?php 

namespace Neher\Inquiry;

use Illuminate\Support\ServiceProvider;


class InquiryServiceProvider extends ServiceProvider{

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__. '/routes.php');
		$this->loadViewsFrom(__DIR__.'/views', 'inquiry');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');

		$this->publishes([
			__DIR__.'/views' => resource_path('views/vendor/inquiry'),
			__DIR__.'/config.php' => config_path('inquiry.php')
		]);
	}

	public function register()
	{
		$this->mergeConfigFrom(__DIR__.'/config.php', 'inquiry');
	}

}