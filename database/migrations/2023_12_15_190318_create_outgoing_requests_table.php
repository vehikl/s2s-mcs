<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('outgoing_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')
                ->constrained('incoming_events')
                ->onDelete('cascade');
            $table->string('platform_name');
            $table->json('payload')->nullable(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('outgoing_requests');
    }
};
