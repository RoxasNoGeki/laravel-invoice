<?php

namespace App\Listeners;

//////////////////
// 	EXCEPTION   //
//////////////////
use Illuminate\Validation\ValidationException;

use Carbon\Carbon;

class SetEndedAt {
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
		$hour 	= config()->get('subscription.active_hour');
		$model	= $event->data;

		if(is_null($model->ended_at)){
			$model->ended_at 	= Carbon::parse($event->when)->addMonthsNoOverflow($model->plan->period)->startofday()->addhours($hour);
		}
	}
}
