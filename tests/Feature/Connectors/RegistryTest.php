<?php

namespace Tests\Feature\Connectors;

use App\Connectors\Registry;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class RegistryTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_calls_registry_handle_event_with_model()
    {
        $testData = json_encode([
            'key' => 'value',
            'ooga' => 'booga',
            'hotel' => 'trivago,'
        ]);

        $this->mock(Registry::class)
            ->shouldReceive('handleEvent')
            ->once()
            ->withArgs(function ($actual) use ($testData) {
                $expected = json_decode($testData);
                $actual = json_decode($actual->data);
                $this->assertEquals($expected, $actual);

                return true;
            });

        $sampleData = [
            'type' => 'example_type',
            'data' => $testData,
            'request' => json_encode(['request_key' => 'request_value']),
        ];

        $this->postJson('/api/events', $sampleData)->assertStatus(201);
    }
}
