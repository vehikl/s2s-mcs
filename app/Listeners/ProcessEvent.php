<?php

namespace App\Listeners;

use App\Events\EventReceived;

class ProcessEvent
{
    public function handle(EventReceived $event): void
    {
        // handle event in here
    }
}
