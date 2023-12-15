<?php

namespace App\Connectors;

use App\Models\IncomingEvent;

class Registry
{
    protected array $registered = [
        Kendago::class,
    ];

    public function handleEvent(IncomingEvent $event): void
    {
        foreach ($this->registered as $affiliate) {
            $tracker = app($affiliate, ['event' => $event]);

            $tracker->handleEvent();
        }
    }
}
