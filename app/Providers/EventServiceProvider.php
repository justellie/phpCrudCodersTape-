<?php

namespace App\Providers;

use App\Events\NewCostumerHasRegisteredEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NewCostumerHasRegisteredEvent::class => [
            \App\Listeners\WelcomeNewCostumerListener::class,
            \App\Listeners\RegisterCostumerListener::class,
            \App\Listeners\NotifyAdminViaSlack::class,

        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
