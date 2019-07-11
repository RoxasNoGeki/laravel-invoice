<?php

namespace App\Listeners;

///////////////
// Exception //
///////////////
use Illuminate\Validation\ValidationException;

class DenyIfNotVerified
{
	/**
	 * Create the event listener.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle event
	 * @param  UserCreated $event [description]
	 * @return [type]             [description]
	 */
	public function handle($event)
	{
		$user 	= $event->data;
		if(is_null($user->username_verified_at)){
			throw ValidationException::withMessages(['user_id' => [config()->get('errors.unverified')]]);
		}
	}
}
