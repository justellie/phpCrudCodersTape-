<?php

namespace App\Providers\App\Listeners;

use App\Events\NewCostumerHasRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminViaSlack
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
     * Handle the event.
     *
     * @param  NewCostumerHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewCostumerHasRegisteredEvent $event)
    {
        //
    }
}
