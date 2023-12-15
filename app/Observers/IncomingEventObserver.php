<?php

namespace App\Observers;

use App\Events\EventReceived;
use App\Models\IncomingEvent;

class IncomingEventObserver
{
    public function creating(IncomingEvent $incomingEvent): void
    {
        $incomingEvent->status = 'pending';
    }

    public function created(IncomingEvent $incomingEvent): void
    {
        EventReceived::dispatch($incomingEvent);
    }
}
