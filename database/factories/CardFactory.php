<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'recto_name' => fake()->word(),
            'verso_name' => fake()->word(),
            'image' => fake()->image('storage/app/public/img/', 640, 480, null, false),
            'deck_id' => fake()->numberBetween(1, 6)
        ];
    }
}
