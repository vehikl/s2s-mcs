<?php

namespace App\Observers;

use App\Events\EventReceived;
use App\Models\IncomingEvent;

class IncomingEventObserver
{
    public function created(IncomingEvent $incomingEvent): void
    {
        $incomingEvent->status = 'pending';
        $incomingEvent->save();

        EventReceived::dispatch($incomingEvent);
    }
}
