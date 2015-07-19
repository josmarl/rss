<?php namespace Cinema\Providers;

use Illuminate\Support\ServiceProvider;

class EloquentRepoProvider extends ServiceProvider{

	public function register()
	{
		$this->app->bind(
			'Cinema\Section\SectionRepoInterface',
			'Cinema\Section\SectionRepo'
			);
	}
}