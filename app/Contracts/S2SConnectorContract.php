<?php

namespace App\Contracts;

use App\Models\IncomingEvent;

abstract class S2SConnectorContract
{
    protected readonly IncomingEvent $event;

    public function __construct(IncomingEvent $event)
    {
        $this->event = $event;
    }

    abstract public function shouldTrack(): bool;

    abstract public function sendEvent(): bool;
}
