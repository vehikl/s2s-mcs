<?php

namespace App\Listeners;

use App\Connectors\Registry;
use App\Events\EventReceived;

class ProcessEvent
{
    public function handle(EventReceived $event): void
    {
        $incomingEventModel = $event->getIncomingEventModel();

        app(Registry::class)->handleEvent($incomingEventModel);
    }
}
