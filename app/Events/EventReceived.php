<?php

namespace App\Events;

use App\Models\IncomingEvent;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventReceived
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(private readonly IncomingEvent $event)
    {
    }

    public function getEvent(): IncomingEvent
    {
        return $this->event;
    }
}
