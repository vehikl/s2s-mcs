<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('incoming_events', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable(false);
            $table->json('data')->nullable(false);
            $table->json('request')->nullable(false);

            // potential stuff?
            $table->enum('status', [
                'pending',
                'failed',
                'succeeded',
            ])->nullable('false');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('incoming_events');
    }
};
