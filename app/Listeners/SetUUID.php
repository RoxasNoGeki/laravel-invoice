<?php

namespace App\Listeners;

////////////
// Models //
////////////
class SetUUID { 

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
		$model 	= $event->data;
		if ($model->uuid) return;
			
		if (function_exists('com_create_guid') === true) 
		{
			$model->uuid = trim(com_create_guid(), '{}');
		}

		do { 
			$uuid = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
		} while ($model->newQuery()->where('uuid', $uuid)->first());


		$model->uuid = $uuid;
	}
}
