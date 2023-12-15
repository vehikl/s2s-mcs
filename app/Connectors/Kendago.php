<?php

namespace App\Connectors;

use App\Contracts\S2SConnectorContract;
use Illuminate\Support\Str;

class Kendago extends S2SConnectorContract
{
    public const SERVICE_NAME = 'Kendago';
    public const SUPPORTED_EVENTS = [
        'InitiateCheckout',
        'Purchase',
    ];

    public function shouldTrack(): bool
    {
        if ($this->doesNotSupportEventType()) {
            return false;
        }

        if ($this->isNotKendago()) {
            return false;
        }

        return true;
    }

    public function sendEvent(): bool
    {
        // send an event

        return false;
    }

    private function isNotKendago(): bool
    {
        return !Str::contains($this->event->getUtmMedium(), self::SERVICE_NAME);
    }

    private function doesNotSupportEventType(): bool
    {
        return !in_array($this->event->type, self::SUPPORTED_EVENTS);
    }
}
