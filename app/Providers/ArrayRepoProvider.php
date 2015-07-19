<?php namespace Cinema\Providers;

use Illuminate\Support\ServiceProvider;

class ArrayRepoProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Cinema\Section\SectionRepoInterface',
			'Cinema\Stubs\Section\ArraySectionRepo'
			);
	} 
}