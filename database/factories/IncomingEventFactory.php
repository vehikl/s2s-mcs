<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IncomingEventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type' => $this->faker->word,
            'data' => json_encode($this->faker->words(3)),
            'request' => json_encode(['key' => $this->faker->word]),
        ];
    }
}
