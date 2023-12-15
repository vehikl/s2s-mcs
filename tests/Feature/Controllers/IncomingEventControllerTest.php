<?php

namespace Tests\Feature\Controllers;

use App\Models\IncomingEvent;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class IncomingEventControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_stores_incoming_event()
    {
        $sampleData = [
            'type' => 'example_type',
            'data' => json_encode(['key' => 'value']),
            'request' => json_encode(['request_key' => 'request_value']),
        ];

        $response = $this->postJson('/api/events', $sampleData);

        $response->assertStatus(201);
        $this->assertCount(1, IncomingEvent::all());

        $event = IncomingEvent::query()->first();
        $this->assertEquals($sampleData['type'], $event->type);
        $this->assertEquals(json_decode($sampleData['data']), json_decode($event->data));
        $this->assertEquals(json_decode($sampleData['request']), json_decode($event->request));
    }
}
