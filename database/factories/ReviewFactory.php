<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_game' => Str::random(64),
            'id_user' => User::factory(),
            'published_at' => now(),
            'review_text' => fake()->text(),
            'rating' => fake()->numberBetween(1,10)
        ];
    }
}
