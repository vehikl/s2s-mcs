<?php

namespace App\Observers;

use App\Models\IncomingEvent;

class IncomingEventObserver
{
    public function created(IncomingEvent $incomingEvent): void
    {
        $incomingEvent->status = 'pending';
        $incomingEvent->save();

        // dispatch event here
    }
}
