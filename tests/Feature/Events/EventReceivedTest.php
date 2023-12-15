<?php

namespace Tests\Feature\Events;

use App\Events\EventReceived;
use App\Models\IncomingEvent;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class EventReceivedTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_dispatches_event_received_event_on_incoming_event_creation(): void
    {
        Event::fake([
            EventReceived::class
        ]);

        $sampleData = [
            'type' => 'example_type',
            'data' => json_encode(['key' => 'value']),
            'request' => json_encode(['request_key' => 'request_value']),
        ];

        $this->postJson('/api/events', $sampleData)->assertStatus(201);
        $this->assertCount(1, IncomingEvent::all());

        Event::assertDispatched(EventReceived::class);
    }
}
