<?php

namespace App\Providers;

use Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
		view()->composer('*', function ($view)
		{
			$remote = Request::ajax() ? true : null;
			$layout = $remote ? 'layouts.ajax' : 'layouts.html';
			$view->with(compact('layout','remote'));
		});
	}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
