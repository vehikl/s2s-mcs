<?php

namespace App\Connectors;

use App\Contracts\S2SConnectorContract;

class ExampleConnector extends S2SConnectorContract
{
    public function shouldTrack(): bool
    {
        return $this->event->status === 'pending';
    }

    public function sendEvent(): bool
    {
        // send an event

        return false;
    }
}
