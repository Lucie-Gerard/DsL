<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deck>
 */
class DeckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 36.
        return [
            'name' => fake()->word(),
            'user_id' => fake()->numberBetween(1, 20),
            'category_id' => fake()->numberBetween(1, 8)
        ];
    }
}
