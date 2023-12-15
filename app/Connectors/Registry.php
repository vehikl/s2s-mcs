<?php

namespace App\Connectors;

use App\Models\IncomingEvent;

class Registry
{
    protected array $registered = [
        ExampleConnector::class,
    ];

    public function handleEvent(IncomingEvent $event): void
    {
        foreach ($this->registered as $affiliate) {
            $tracker = app($affiliate);

            $tracker->handleEvent($event);
        }
    }
}
