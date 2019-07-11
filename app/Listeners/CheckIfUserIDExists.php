<?php

namespace App\Listeners;

///////////////
// Exception //
///////////////
use Illuminate\Validation\ValidationException;

use App\Models\User;

class CheckIfUserIDExists
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
		$user_id 	= $event->data->uuid;

		$user 		= User::where('uuid', $user_id)->first();
		if(!$user){
			throw ValidationException::withMessages(['user_id' => [config()->get('errors.invalid')]]);
		}
	}
}
