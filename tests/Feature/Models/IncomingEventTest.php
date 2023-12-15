<?php

namespace Tests\Feature\Models;

use App\Models\IncomingEvent;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class IncomingEventTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_populates_status_with_pending_on_creation(): void
    {
        $event = IncomingEvent::factory()->create();

        $this->assertEquals('pending', $event->status);
    }
}
