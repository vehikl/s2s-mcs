<?php

namespace App\Listeners;

use App\Events\EventReceived;
use App\Registry;

class ProcessEvent
{
    public function handle(EventReceived $event): void
    {
        $incomingEventModel = $event->getIncomingEventModel();

        app(Registry::class)->handleEvent($incomingEventModel);
    }
}
