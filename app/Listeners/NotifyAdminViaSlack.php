<?php

namespace App\Listeners;

use App\Events\NewCostumerHasRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminViaSlack
{
    /**
     * Handle the event.
     *
     * @param  NewCostumerHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewCostumerHasRegisteredEvent $event)
    {
        dump('Slack message here');
    }
}
