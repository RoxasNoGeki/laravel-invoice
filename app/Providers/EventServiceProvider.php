<?php

namespace App\Providers;


use Illuminate\Support\Facades\Event;
use App\Events\User\Registering;
use App\Events\User\Saving;
use App\Events\User\Authenticating;

use App\Listeners\SetUUID;
use App\Listeners\CheckIfUserIDExists;
use App\Listeners\DenyIfNotVerified;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;



class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registering::class => [
            SetUUID::class,
        ],
        Authenticating::class => [
            DenyIfNotVerified::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
