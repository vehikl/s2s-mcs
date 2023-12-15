<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class BurnerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_calls_registry_handle_event_with_model()
    {
        $testData = json_encode([
            'utms' => ['utm_medium' => 'kendago'],
        ]);

        $sampleData = [
            'type' => 'Purchase',
            'data' => $testData,
            'request' => json_encode(['request_key' => 'request_value']),
        ];

        $this->postJson('/api/events', $sampleData)->assertStatus(201);
    }
}
