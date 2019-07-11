<?php

namespace App\Providers;

/*===============================
=            Laravel            =
===============================*/
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Gate;
/*=====  End of Laravel  ======*/

class ReinServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application events.
	 */
	public function boot() {
        ///////////
        // GATES //
        ///////////

        Gate::define('logged',      '\App\Policies\AuthorizationPolicy@logged');
	}
	/**
	 * Register the service provider.
	 */
	public function register() {

	}


}
